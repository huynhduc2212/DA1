<?php
//quản lý view và model liên quan: trang chủ,liên hệ, giới thiệu...
//gọi dc: view, model
include_once 'model/connect.php';
include_once 'view/template_head.php';
include_once 'view/template_header.php';

if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'home':
            include_once "model/products.php";
            include_once "model/categories.php";
            include_once "model/view.php";
            $product_sale = getDiscountedProducts();
            $products = getProductByCategory_Home();
            // show theo danh mục
            if (isset($_GET['idcategory']) && (is_numeric($_GET['idcategory'])) && ($_GET['idcategory']) > 0) {
                $idcategory = $_GET['idcategory'];
            } else {
                $idcategory = 0;
            }
            $products_category = getProductsByCategory($idcategory);

            $categories = getCategory_Home_List();

            include_once 'view/page_home.php';
            break;
        case 'cart':
            include_once "view/page_cart.php";
            break;
        case 'contact';
            include_once "view/template_banner.php";
            include_once "view/page_contact.php";
            break;
        case 'blog';
            include_once "view/template_banner.php";

            include_once "view/page_blog.php";
            break;
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}
include_once 'view/template_near_footer.php';
include_once 'view/template_footer.php';
