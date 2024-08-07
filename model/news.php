<?php

function getBlogs()
{
    $sql = "SELECT * FROM news order by id asc";
    return pdo_query($sql);
}

// hàm hiển thị chi tiết bài viết
function getBlogByID($id) {
    $sql = "SELECT * FROM news WHERE id = ?";
    return pdo_query_one($sql, $id);
}
