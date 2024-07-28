<?php
//quản lý view và model liên quan: trang chủ,liên hệ, giới thiệu...
//gọi dc: view, model
include_once 'model/connect.php';
include_once "model/products.php";
include_once "model/images.php";
include_once "model/categories.php";
include_once "model/view.php";
include_once 'view/template_head.php';
include_once 'view/template_header.php';
include_once 'view/template_banner.php';

if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'product':
            if (isset($_GET['category_id']) && (is_numeric($_GET['category_id'])) && ($_GET['category_id']) > 0) {
                $category_id = $_GET['category_id'];
            } else {
                $category_id = 0;
            }
            $categories = getCategory_Home_List();
            $products_category = getProductsByCategory($category_id);
            if (isset($_GET['trang']) && $_GET['trang'] > 0) {
                $trang = $_GET['trang'];
            } else $trang = 1;

            $dssp_phantrang = getProductsByCategory($category_id, SO_SP_TRANG, $trang);
            $dssotrang = get_so_trang($dssp_phantrang, $trang);
            include_once "view/product_categories.php";
            break;
        case 'productDetails':
            if (isset($_GET['idpro']) && (is_numeric($_GET['idpro'])) && ($_GET['idpro']) > 0) {
                $id = $_GET['idpro'];
                $products_category = getProductsByCategory($id);
                $products = getProductByCategory_Home();
                $product_details = getProductDetails($id);
                $product_images = getProductImages($id);
                $iddm = $product_details['id_category'];
                $product_related = getProductRelated($iddm, $id, '5');
            } else {
                header("Location: index.php");
            }
            include_once "view/product_details.php";
            break;
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}
include_once 'view/template_near_footer.php';
include_once 'view/template_footer.php';
