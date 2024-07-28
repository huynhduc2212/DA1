<?php
// hàm hiển thị sản phẩm trang chi tiết
function getProductImages($id)
{
    $sql = "SELECT * FROM Images WHERE id_product = ? ORDER BY display_order ASC";
    return pdo_query($sql, $id);
}
