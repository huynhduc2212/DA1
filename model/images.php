<?php
// hàm hiển thị ảnh sản phẩm ở trang chi tiết
function getProductImages($id)
{
    $sql = "SELECT * FROM Images WHERE id_product = ? ORDER BY display_order ASC";
    return pdo_query($sql, $id);
}
