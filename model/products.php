<?php
// Hàm lấy sản phẩm theo danh mục
function getProductsByCategory($idcategory)
{
  $sql = "SELECT * FROM products WHERE 1";
  if ($idcategory > 0) {
    $sql .= " AND id_category = ? order by id desc";
    return pdo_query($sql, $idcategory);
  } else {
    $sql .= " order by id desc";
    return pdo_query($sql);
  }
}

// Hàm lấy ra những sản phẩm mới nhất
function getAllProducts()
{
  $sql = "SELECT * FROM products order by id desc limit 4";
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

// Hàm lấy id danh mục
function getAllCategory()
{
  $sql = "SELECT * FROM categories order by id desc ";
  return pdo_query($sql);
}

// Hàm lấy các sản phẩm thuộc danh mục được đánh dấu là home
function getProductByCategory_Home()
{
  $sql = "SELECT * FROM categories
    left join products on products.id_category = categories.id
    WHERE categories.home = 1";
  return pdo_query($sql);
}

// hàm hiển thị chi tiết sản phẩm
function getProductDetails()
{
  $sql = "SELECT p.*, c.name as category_name, group_concat(i.img order by i.display_order asc seperator ',') as images
            from products p
            left join categories c on p.id_category = c.id
            left join images i on p.id = i.id_product
            where p.id = ?
            group by p.id";
}
