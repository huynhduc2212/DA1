<?php

// Hàm lấy sản phẩm theo danh mục
function getProductsByCategory($id) {
    $sql = "SELECT * FROM products WHERE id_category = ?";
    return pdo_query($sql, $id);
}

// Hàm lấy tất cả sản phẩm
function getAllProducts() {
    $sql = "SELECT * FROM products";
    return pdo_query($sql);
}

// Hàm tính giá sau giảm giá
function calculateDiscountPrice($price, $discount_percentage, $round_to = 50000) {
    $discounted_price = $price - ($price * ($discount_percentage / 100));
    $rounded_price = ceil($discounted_price / $round_to) * $round_to;
    return $rounded_price;
}

// Hàm lấy sản phẩm có mã giảm trên 12%
function getDiscountedProducts()
{
    $sql = "SELECT * FROM products WHERE discount_percentage > 10";
    return pdo_query($sql); 
}
