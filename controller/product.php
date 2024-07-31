<?php
//quản lý view và model liên quan: trang chủ,liên hệ, giới thiệu...
//gọi dc: view, model
include_once 'model/connect.php';
include_once "model/products.php";
include_once "model/cart.php";
include_once "model/images.php";
include_once "model/categories.php";
include_once "model/view.php";

if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'product':
            if (isset($_GET['category_id']) && (is_numeric($_GET['category_id'])) && ($_GET['category_id']) > 0) {
                $category_id = $_GET['category_id'];

                // hiển thị đường dẫn trong banner và tiêu đề trang
                $tendm = getCategory_Name($category_id);
                $pathpage = "Trang chủ | " . $tendm;
                $pathpage_a = "<div class='path'><a href='index.php'> Trang chủ </a> > <span>$tendm</span> </div>";
            } else {
                $category_id = 0;
                $tendm = "Tất cả sản phẩm";
                $pathpage = "Trang chủ | " . $tendm;
                $pathpage_a = "<div class='path'><a href='index.php'> Trang chủ </a> > <span>$tendm</span> </div>";
            }

            $categories = getCategory_Home_List();
            $products_category = getProductsByCategory($category_id);

            if (isset($_GET['trang']) && $_GET['trang'] > 0) {
                $trang = $_GET['trang'];
            } else $trang = 1;

            $dssp_phantrang = getProductsByCategory($category_id, SO_SP_TRANG, $trang);
            $dssotrang = get_so_trang($dssp_phantrang, $trang);

            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/template_banner.php';
            include_once "view/product_categories.php";
            break;
        case 'productDetails':
            // chi tiết sản phẩm
            if (isset($_GET['idpro']) && (is_numeric($_GET['idpro'])) && ($_GET['idpro']) > 0) {
                $id = $_GET['idpro'];
                $products_category = getProductsByCategory($id);
                $products = getProductByCategory_Home();
                $product_details = getProductDetails($id);

                // lấy hỉnh ảnh từ bảng images
                $product_images = getProductImages($id);

                // lấy sản phẩm cùng danh mục
                $iddm = $product_details['id_category'];
                $product_related = getProductRelated($iddm, $id, '5');

                // hiển thị đường dẫn trong banner và tiêu đề trang
                $tensp = $product_details['name'];
                $tendm = getCategory_Name($product_details['id_category']);
                $pathpage = "Trang chủ | " . $tendm . " |" . $tensp;
                $pathpage_a = "<div class='path'><a href='index.php'> Trang chủ </a> > <a href='?mod=product&act=product&category_id=$iddm'>$tendm</a> > <span>$tensp</span></div>";

                include_once 'view/template_head.php';
                include_once 'view/template_header.php';
                include_once 'view/template_banner.php';
                include_once "view/product_details.php";
            } else {
                $id = 0;
                $pathpage = "";
                $pathpage_a = "";
                header("Location: index.php");
            }
            break;
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}
include_once 'view/template_near_footer.php';
include_once 'view/template_footer.php';
