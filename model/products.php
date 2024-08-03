<?php
// Hàm lấy sản phẩm theo danh mục
function getProductsByCategory($idcategory, $limit = null, $trang = null)
{
  $sql = "SELECT * FROM products WHERE 1";
  if ($idcategory > 0) {
    $sql .= " AND id_category = ? order by id desc";
    return pdo_query($sql, $idcategory);
  } else {
    $sql .= " order by id desc";
    return pdo_query($sql);
  }

  // phân trang
  if ($trang == 1) {
    $limitfrom = 0;
  } else {
    $limitfrom = (($trang - 1) * $limit) - 1;
  }
  if ($limit > 0) {
    $sql .= " limit " . $limitfrom . "," . $limit;
  }
  return pdo_query($sql);
}

// hàm hiển thị số trang 
function get_so_trang($dssp, $trang)
{
  $sotrang = ceil(count($dssp) / SO_SP_TRANG);
  $dssotrang = "";

  if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
    $iddm = "&category_id=" . $_GET['category_id'];
  } else $iddm = "";

  $currentUrl = "index.php?mod=product&act=product" . $iddm;
  for ($i = 1; $i <= $sotrang; $i++) {
    if ($trang == $i) {
      $dssotrang .= "<a href='" . $currentUrl . "&trang=" . $i . "' style='background-color: #bf9f70; color: white; border: none;'>" . $i . "</a>";
    } else {
      $dssotrang .= "<a href='" . $currentUrl . "&trang=" . $i . "'>" . $i . "</a>";
    }
  }
  return $dssotrang;
}

// Hàm lấy ra những sản phẩm mới nhất
function getAllProductsNewest()
{
  $sql = "SELECT * FROM products order by id asc limit 4";
  return pdo_query($sql);
}

// Hàm tính giá sau giảm giá
function calculateDiscountPrice($price, $discount_percentage, $round_to = 50000)
{
  $discounted_price = $price - ($price * ($discount_percentage / 100));
  $rounded_price = ceil($discounted_price / $round_to) * $round_to;
  return $rounded_price;
}

// Hàm lấy sản phẩm giảm giá sốc
function getDiscountedProducts()
{
  $sql = "SELECT * FROM products WHERE discount_percentage >= 10  order by discount_percentage desc";
  return pdo_query($sql);
}

// Hàm lấy các sản phẩm thuộc danh mục được đánh dấu là home
function getProductByCategory_Home()
{
  $sql = "SELECT * FROM categories
    left join products on products.id_category = categories.id
    WHERE categories.home = 1 limit 4";
  return pdo_query($sql);
}

// hàm hiển thị chi tiết sản phẩm
function getProductDetails($id)
{
  $sql = "SELECT * FROM products where id =?";
  return pdo_query_one($sql, $id);
}

// hàm lấy sản phẩm cùng thể loại
function getProductRelated($iddm, $id, $limit)
{
  $sql = "SELECT * FROM products where id_category = ? and  id<>? order by name desc limit " . $limit;
  return pdo_query($sql, $iddm, $id);
}

// hàm lấy tất cả sp ko limit
function getAllProductsNoLimit()
{
  $sql = "SELECT * FROM products ORDER BY id DESC";
  return pdo_query($sql);
}

// Hàm thêm sản phẩm mới vào cơ sở dữ liệu
function add_product($name, $price, $discount_percentage, $category_id, $image_name, $des)
{
  try {
    $sql = "SELECT MAX(id) as max_id FROM products";
    $max_id_row = pdo_query_one($sql);
    $new_id = ($max_id_row['max_id'] ?? 0) + 1; // Nếu không có sản phẩm, ID mới là 1
    $sql = "INSERT INTO products (id, name, price, discount_percentage, id_category, thumbnail, des) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $result = pdo_execute($sql, $new_id, $name, $price, $discount_percentage, $category_id, $image_name, $des);

    if ($result === false) {
      throw new Exception("Không thể thêm sản phẩm vào cơ sở dữ liệu.");
    }
    return true;
  } catch (Exception $e) {
    return false;
  }
}
// hàm xóa sản phẩm
function delete_product($id)
{
  try {
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = dbConnection()->prepare($sql);
    $stmt->execute([$id]);

    // Check if any row was deleted
    if ($stmt->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  } catch (PDOException $e) {
    echo "Lỗi khi xóa sản phẩm: " . $e->getMessage();
    return false;
  }
}

// hàm edit sản phẩm
function update_product($id, $name, $price, $discount_percentage, $category_id, $image_name, $des)
{
  try {
    // Cập nhật thông tin sản phẩm
    $sql = "UPDATE products SET 
              name = ?, 
              price = ?, 
              discount_percentage = ?, 
              id_category = ?, 
              thumbnail = ?, 
              des = ? 
              WHERE id = ?";

    $result = pdo_execute($sql, $name, $price, $discount_percentage, $category_id, $image_name, $des, $id);

    if ($result === false) {
      throw new Exception("Không thể cập nhật sản phẩm vào cơ sở dữ liệu.");
    }
    return true;
  } catch (Exception $e) {
    return false;
  }
}

// Hàm lấy thông tin sản phẩm theo ID
function get_product_by_id($id)
{
  $sql = "SELECT * FROM products WHERE id = ?";
  return pdo_query_one($sql, $id);
}
