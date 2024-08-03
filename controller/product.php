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
            if (isset($_POST['keyword']) && ($_POST['keyword'] != "")) {
                $key = $_POST['keyword'];
            } else {
                $key = "";
            }

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
            $products_category = getProductsByCategory($key, $category_id);

            if (isset($_GET['trang']) && $_GET['trang'] > 0) {
                $trang = $_GET['trang'];
            } else $trang = 1;

            $dssp_phantrang = getProductsByCategory($category_id, SO_SP_TRANG, $trang);
            $dssotrang = get_so_trang($dssp_phantrang, $trang);

            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/template_banner.php';
            include_once "view/product_categories.php";
            include_once 'view/template_near_footer.php';
            include_once 'view/template_footer.php';
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
                include_once 'view/template_near_footer.php';
                include_once 'view/template_footer.php';
            } else {
                $id = 0;
                $pathpage = "";
                $pathpage_a = "";
                header("Location: index.php");
            }
            break;
        case 'admin_product';
            $products = getAllProductsNoLimit();
            include_once "view/admin_product.php";
            break;
        case 'add_product';
            $products = getAllProductsNoLimit();
            if (!(isset($_SESSION['user']) && $_SESSION['user']['role'] == '1')) {
                header('Location: ?mod=page&act=home');
                exit();
            }
            include_once 'model/connect.php';
            include_once 'model/products.php';
            include_once 'model/categories.php';

            if (isset($_POST['submit'])) {
                // Thêm sản phẩm vào cơ sở dữ liệu
                $kq = add_product(
                    $_POST['up_name'],
                    $_POST['up_price'],
                    $_POST['up_discount_percentage'],
                    $_POST['up_Category'],
                    $_FILES['up_img']['name'],
                    $_POST['up_Des']
                );
                // Kiểm tra nếu thêm sản phẩm thành công
                if ($kq) {
                    // Kiểm tra nếu tệp đã được tải lên và không có lỗi
                    if (isset($_FILES['up_img']) && $_FILES['up_img']['error'] == 0) {
                        $upload_result = move_uploaded_file(
                            $_FILES['up_img']['tmp_name'],
                            "assets_user/img/" . $_FILES['up_img']['name']
                        );
                        // Kiểm tra nếu di chuyển tệp thành công
                        if ($upload_result) {
                            header("Location: admin.php?mod=product&act=admin_product");
                            exit();
                        } else {
                            echo "<script>alert('Lỗi khi di chuyển tệp');</script>";
                        }
                    } else {
                        echo "<script>alert('Lỗi khi tải tệp lên');</script>";
                    }
                } else {
                    echo "<script>alert('Lỗi khi thêm sản phẩm vào cơ sở dữ liệu');</script>";
                }
            }
            include_once "view/product_add.php";
            break;
        case 'Delete_product';
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $kq = delete_product($_GET['id']);
                if ($kq) {
                    echo "<script>
                        window.location.href = 'admin.php?mod=product&act=admin_product';
                      </script>";
                    exit();
                } else {
                    echo "<script>
                        alert('Có lỗi xảy ra khi xóa sản phẩm');
                      </script>";
                }
            } else {
                echo "<script>alert('ID sản phẩm không hợp lệ');</script>";
            }
            break;
        case 'edit_product':
            // Kiểm tra quyền người dùng
            if (!(isset($_SESSION['user']) && $_SESSION['user']['role'] == '1')) {
                header('Location: ?mod=page&act=home');
                exit();
            }

            include_once 'model/connect.php';
            include_once 'model/products.php';
            include_once 'model/categories.php';

            if (isset($_POST['submit'])) {
                $product_id = $_POST['product_id'];
                // Kiểm tra nếu có tệp hình ảnh mới
                $image_name = $_FILES['up_img']['name'];
                if ($image_name) {
                    $upload_result = move_uploaded_file(
                        $_FILES['up_img']['tmp_name'],
                        "assets_user/img/" . $image_name
                    );
                    if (!$upload_result) {
                        echo "<script>alert('Lỗi khi di chuyển tệp');</script>";
                        $image_name = null;
                    }
                } else {
                    // Nếu không có tệp mới, giữ nguyên hình ảnh cũ
                    $image_name = $_POST['current_image'];
                }

                // Cập nhật thông tin sản phẩm vào cơ sở dữ liệu
                $kq = update_product(
                    $product_id,
                    $_POST['up_name'],
                    $_POST['up_price'],
                    $_POST['up_discount_percentage'],
                    $_POST['up_Category'],
                    $image_name,
                    $_POST['up_Des']
                );

                // Kiểm tra nếu cập nhật thành công
                if ($kq) {
                    header("Location: admin.php?mod=product&act=admin_product");
                    exit();
                } else {
                    echo "<script>alert('Lỗi khi cập nhật sản phẩm');</script>";
                }
            }

            // Lấy thông tin sản phẩm để hiển thị trong form
            $product_id = $_GET['id'];
            $product = get_product_by_id($product_id);
            include_once "view/product_edit.php";
            break;
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}
