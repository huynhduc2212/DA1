<?php
//quản lý view và model liên quan: trang chủ,liên hệ, giới thiệu...
//gọi dc: view, model
include_once 'model/connect.php';
include_once 'view/template_head.php';
include_once 'view/template_header.php';

if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'product':
            include_once 'view/template_banner.php';
            include_once "model/products.php";
            include_once "model/view.php";
            if (isset($_GET['category_id']) && (is_numeric($_GET['category_id'])) && ($_GET['category_id']) > 0) {
                $category_id = $_GET['category_id'];
            } else {
                $category_id = 0;
            }
            $products_category = getProductsByCategory($category_id);
            include_once "view/product_categories.php";
            break;
        case 'productDetails':
            include_once 'view/template_banner.php';
            include_once "model/products.php";
            include_once "view/product_details.php";
            break;
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}
include_once 'view/template_near_footer.php';
include_once 'view/template_footer.php';
