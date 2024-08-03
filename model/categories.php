<?php
function getCategory_Home()
{
    $sql = "SELECT * FROM categories where home = 1 order by id desc limit 1";
    $dm = pdo_query_one($sql);
    return $dm['name'];
}

function getCategory_Home_List()
{
    $sql = "SELECT * FROM categories order by name desc";
    return pdo_query($sql);
}

function getCategory_Name($id)
{
    if ($id > 0) {
        $sql = "SELECT * FROM categories where id = " . $id;
        $dm = pdo_query_one($sql);
        return $dm['name'];
    } else {
        return "";
    }
}
