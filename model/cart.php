<?php
function addToCart($sp)
{
    array_push($_SESSION['giohang'], $sp);
}

function get_soluong_cart()
{
    if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0))
        return count($_SESSION['giohang']);
    else return 0;
}

function get_total()
{
    if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
        $total = 0;
        foreach ($_SESSION['giohang'] as $item) {
            $thanhtien = $_POST['soluong'] * $_POST['giasp'];
            $total += $thanhtien;
        }
    } else return $total = 0;
    return $total;
}

function insert_order_returnID($iduser, $fullname,$address,$total, $phone)
{
    $sql = "INSERT INTO orders (iduser, fullname, address , total, phone) values('$iduser','$fullname','$address','$total','$phone')";
    return pdo_execute_returnID($sql);
}
