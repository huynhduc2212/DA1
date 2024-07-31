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
    $total = 0;
    if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
        foreach ($_SESSION['giohang'] as $item) {
            $giasp = $item['giasp'];
            $soluong = $item['soluong'];
            $thanhtien = $soluong * $giasp;
            $total += $thanhtien;
        }
    }
    return $total;
}

function insert_order_returnID($iduser, $fullname, $address, $total, $phone, $email, $payment_method)
{
    $sql = "INSERT INTO orders (iduser, fullname, address , total, phone, email, payment_method) values('$iduser','$fullname','$address','$total','$phone','$email', '$payment_method')";
    return pdo_execute_returnID($sql);
}
