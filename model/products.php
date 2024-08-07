<?php
// Hàm lấy sản phẩm theo danh mục
function getProductsByCategory($kyw, $idcategory, $limit = 0, $trang = 0)
{
  $sql = "SELECT * FROM products WHERE 1";
  if ($kyw != "") {
    $sql .= " AND name like '%" . $kyw . "%'";
  }
  if ($idcategory > 0) {
    $sql .= " AND id_category = " . $idcategory;
  }
  $sql .= " order by id desc";


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
  $params = "";

  if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
    $params = "&category_id=" . $_GET['category_id'];
  }

  $currentUrl = "index.php?mod=product&act=product" . $params;
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

//hàm lấy tất cả order no limit
function getAllOrderNoLimit()
{
  $sql = "SELECT * FROM orders ORDER BY id DESC";
  return pdo_query($sql);
}

// hàm edit order
function update_order($id, $phone, $address, $status)
{
  try {
    $sql = "UPDATE orders SET 
                  phone = ?, 
                  address = ?, 
                  status = ?
                  WHERE id = ?";

    $params = [$phone, $address, $status, $id];

    $result = pdo_execute($sql, ...$params);

    if ($result === false) {
      throw new Exception("Không thể cập nhật thông tin đơn hàng vào cơ sở dữ liệu.");
    }
    return true;
  } catch (Exception $e) {
    return false;
  }
}

// Hàm lấy thông tin order theo ID
function get_order_by_id($id)
{
  $sql = "SELECT * FROM orders WHERE id = ?";
  return pdo_query_one($sql, $id);
}

// hàm xóa order
function delete_order($id)
{
  try {
    $sql1 = "DELETE FROM orderdetails WHERE id_order = ?";
    $stmt1 = dbConnection()->prepare($sql1);
    $stmt1->execute([$id]);

    $sql2 = "DELETE FROM orders WHERE id = ?";
    $stmt2 = dbConnection()->prepare($sql2);
    $stmt2->execute([$id]);

    if ($stmt2->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  } catch (PDOException $e) {
    echo "Lỗi khi xóa order: " . $e->getMessage();
    return false;
  }
}

// hàm lấy tổng sản phẩm đã bán
function get_total_orders()
{
  try {
    $sql = "SELECT COUNT(*) as total FROM orders";
    $stmt = dbConnection()->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total'];
  } catch (PDOException $e) {
    echo "Lỗi khi lấy số lượng đơn hàng: " . $e->getMessage();
    return 0;
  }
}
// hàm lấy tổng thu nhập
function get_total_income()
{
  try {
    $sql = "SELECT SUM(total) as total_income FROM orders";
    $stmt = dbConnection()->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total_income'];
  } catch (PDOException $e) {
    echo "Lỗi khi lấy tổng thu nhập: " . $e->getMessage();
    return 0;
  }
}
// hàm lấy thu nhập theo tháng
function get_monthly_totals()
{
  $conn = dbConnection();
  $sql = "SELECT
              DATE_FORMAT(STR_TO_DATE(order_date, '%d/%m/%Y'), '%m') AS month,
              SUM(total) as total
          FROM
              orders
          GROUP BY
              month
          ORDER BY
              month";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $results;
}

$monthly_totals = get_monthly_totals();

$xValues = [];
$yValues = [];

foreach ($monthly_totals as $row) {
  $xValues[] = $row['month'];
  $yValues[] = $row['total'];
}
