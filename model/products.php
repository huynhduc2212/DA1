<?php

// Hàm lấy sản phẩm theo danh mục
function getProductsByCategory($id)
{
    $sql = "SELECT * FROM products WHERE id_category = ? order by id_product desc";
    return pdo_query($sql, $id);
}

// Hàm lấy tất cả sản phẩm
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

// Hàm lấy tất cả tên danh mục
function getAllCategory()
{
    $sql = "SELECT * FROM categories order by id_category asc ";
}

function getProductByCategory_Home()
{
    $sql = "SELECT * FROM products
    left join categories on products.id_category = categories.id
    WHERE categories.home = 1";
    return pdo_query($sql);
}

