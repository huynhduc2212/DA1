<?php
//quản lý view và model liên quan: trang chủ,liên hệ, giới thiệu...
//gọi dc: view, model
include_once 'model/connect.php';
include_once 'model/cart.php';
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
            // xóa 1 sản phẩm trong giỏ hàng
            if (isset($_GET['ind']) && ($_GET['ind'] >= 0)) {
                array_splice($_SESSION['giohang'], $_GET['ind'], 1);
                header("Location: ?mod=page&act=cart");
            }

            // xóa tất cả sản phẩm trong giỏ hàng
            if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) {
                // unset($_SESSION['giohang']);
                $_SESSION['giohang'] = [];
                header("Location: ?mod=page&act=cart");
            }

            // action add to cart
            if (isset($_POST['btn_addcart'])) {
                $idpro = $_POST['idpro'];
                $tensp = $_POST['tensp'];
                $hinhsp = $_POST['hinhsp'];
                $soluong = $_POST['soluong'];
                $giasp = $_POST['giasp'];

                $sp = [
                    'idpro' => $idpro,
                    'tensp' => $tensp,
                    'hinhsp' => $hinhsp,
                    'giasp' => $giasp,
                    'soluong' => $soluong
                ];
                array_push($_SESSION['giohang'], $sp);
                header("Location: ?mod=page&act=cart");
            }

            // view cart

            include_once "view/template_banner.php";
            include_once "view/page_cart.php";
            break;
        case 'about':
            include_once "view/template_banner.php";
            include_once "view/page_about.php";
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
