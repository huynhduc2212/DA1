<?php

// Hàm lấy sản phẩm theo danh mục
function getProductsByCategory($id)
{
    $sql = "SELECT * FROM products WHERE id_category = ? order by id desc";
    return pdo_query($sql, $id);
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


function getProductByCategory_Home()
{
    $sql = "SELECT * FROM categories
    left join products on products.id_category = categories.id
    WHERE categories.home = 1";
    return pdo_query($sql);
}
