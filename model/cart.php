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

function get_pttt($n)
{
    switch ($n) {
        case '0':
            $pttt = "Thanh toán khi giao hàng";
            break;
        case '1':
            $pttt = "Thanh toán online";
            break;
        default:
            $pttt = "Thanh toán khi giao hàng";
            break;
    }
    return $pttt;
}

function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $ttdh = "Đơn hàng mới";
            break;
        case '1':
            $ttdh = "Đang xử lí";
            break;
        case '2':
            $ttdh = "Đang giao hàng";
            break;
        case '3':
            $ttdh = "Đã giao hàng";
            break;
        default:
            $ttdh = "Đang xử lí";
            break;
    }
    return $ttdh;
}

function insert_order_returnID($code, $iduser, $orderdate, $fullname, $address, $total, $phone, $email, $payment_method)
{
    $sql = "INSERT INTO orders (code, iduser, order_date,fullname, address , total, phone, email, payment_method) values('$code','$iduser','$orderdate','$fullname','$address','$total','$phone','$email', '$payment_method')";
    return pdo_execute_returnID($sql);
}

function insert_orderdetails($idpro, $quantity, $name, $price, $idorder, $img)
{
    $sql = "INSERT INTO orderdetails (id_product,quantity,name,price, id_order,img) 
    values('$idpro','$quantity','$name','$price', '$idorder', '$img')";
    return pdo_execute($sql);
}

function loadone_orders($id)
{
    $sql = "SELECT * FROM orders WHERE id =" . $id;
    return pdo_query_one($sql);
}

function loadall_orderdetails($idorder)
{
    $sql = "SELECT * FROM orderdetails WHERE id_order =" . $idorder;
    return pdo_query($sql);
}


function loadall_orderdetails_count($idorder)
{
    $sql = "SELECT * FROM orderdetails WHERE id_order =" . $idorder;
    return count(pdo_query($sql));
}

function loadall_orders($iduser)
{
    $sql = "SELECT * FROM orders WHERE iduser =" . $iduser;
    return pdo_query($sql);
}

function get_id_order_latest()
{
    $sql = "SELECT id from orders order by id desc limit 1";
    $bill = pdo_query_one($sql);
    return $bill['id'];
}
