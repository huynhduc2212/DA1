<?php
function getProductsByCategory($id) {
    $sql = "SELECT * FROM products WHERE id_category = ?";
    return pdo_query($sql, $id);
}

function getAllProducts() {
    $sql = "SELECT * FROM products";
    return pdo_query($sql);
}