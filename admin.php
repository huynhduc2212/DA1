<?php
    session_start();
//điều hướng các controller
    if (isset($_GET['mod'])) {
        switch ($_GET['mod']) {
            case 'page':
                include_once 'controller/page.php';
                    break;
            case 'user':
                include_once 'controller/user.php';
                    break;
            case 'product':
                include_once 'controller/product.php';
                    break;
            default:
                # code...
                break;
        }
    }else{
        header("Location: admin.php?mod=product&act=admin_product");
    }
   
?> 