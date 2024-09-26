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
                $keyw = $_POST['keyword'];
                $_SESSION['keyw'] = $_POST['keyword'];
            } else {
                $keyw = "";
            }

            if (isset($_SESSION['keyw']) && ($_SESSION['keyw'] != "")) {
                $keyw = $_SESSION['keyw'];
            }

            if (isset($_GET['category_id']) && (is_numeric($_GET['category_id'])) && ($_GET['category_id']) > 0) {
                $category_id = $_GET['category_id'];
                $_SESSION['keyw'] = "";
                $keyw = "";

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
            // $products_category = getProductsByCategory($keyw, $category_id, SO_SP_TRANG, 0);

            if (isset($_GET['trang']) && $_GET['trang'] > 0) {
                $trang = $_GET['trang'];
            } else $trang = 1;

            $products_category = getProductsByCategory($keyw, $category_id, SO_SP_TRANG, $trang);

            // show ds số trang ở cuối trang
            $dssp = getProductsByCategory($keyw, $category_id, 0, 0);
            $dssotrang = get_so_trang($dssp, $trang);

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
                $products_category = getProductsByCategory(0, $id, 0, 0);

                $products = getProductByCategory_Home();
                $product_details = getProductDetails($id);

                // lấy hỉnh ảnh từ bảng images
                $product_images = getProductImages($id);

                // lấy sản phẩm cùng danh mục
                $iddm = $product_details['id_category'];
                $product_related = getProductRelated($iddm, $id, 5);

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
            if (!(isset($_SESSION['user']) && $_SESSION['user']['role'] == '1')) {
                header('Location: ?mod=page&act=home');
                exit();
            }
            if (isset($_POST['submit'])) {
                $name = trim($_POST['up_name']);
                $price = trim($_POST['up_price']);
                $discount_percentage = trim($_POST['up_discount_percentage']);
                $category = trim($_POST['up_Category']);
                $description = trim($_POST['up_Des']);

                if (empty($name) || empty($price) || empty($category) || empty($description)) {
                    echo "<script>alert('Vui lòng nhập tất cả thông tin sản phẩm.');</script>";
                } else {
                    if (isset($_FILES['up_img']) && $_FILES['up_img']['error'] == 0) {
                        $img_name = basename($_FILES['up_img']['name']);
                        $target_path = "assets_user/img/" . $img_name;

                        $kq = add_product(
                            $name,
                            $price,
                            $discount_percentage,
                            $category,
                            $img_name,
                            $description
                        );

                        if ($kq) {
                            $upload_result = move_uploaded_file(
                                $_FILES['up_img']['tmp_name'],
                                $target_path
                            );

                            if ($upload_result) {
                                header("Location: admin.php?mod=product&act=admin_product");
                                exit();
                            } else {
                                echo "<script>alert('Lỗi khi di chuyển tệp');</script>";
                            }
                        } else {
                            echo "<script>alert('Lỗi khi thêm sản phẩm vào cơ sở dữ liệu');</script>";
                        }
                    } else {
                        echo "<script>alert('Vui lòng chọn tệp hình ảnh để tải lên.');</script>";
                    }
                }
            }

            include_once "view/product_add.php";
            break;
        case 'delete_product';
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $kq = delete_product($_GET['id']);
                if ($kq) {
                    header("Location: ?mod=product&act=admin_product");
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
            if (!(isset($_SESSION['user']) && $_SESSION['user']['role'] == '1')) {
                header('Location: ?mod=page&act=home');
                exit();
            }

            include_once 'model/connect.php';
            include_once 'model/products.php';
            include_once 'model/categories.php';

            if (isset($_POST['submit'])) {
                $product_id = $_POST['product_id'];
                // Kiểm tra nếu có ảnh mới
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
                    // Nếu không có tệp mới, giữ ảnh cũ
                    $image_name = $_POST['current_image'];
                }

                $kq = update_product(
                    $product_id,
                    $_POST['up_name'],
                    $_POST['up_price'],
                    $_POST['up_discount_percentage'],
                    $_POST['up_Category'],
                    $image_name,
                    $_POST['up_Des']
                );

                if ($kq) {
                    header("Location: ?mod=product&act=admin_product");
                    exit();
                } else {
                    echo "<script>alert('Lỗi khi cập nhật sản phẩm');</script>";
                }
            }

            $product_id = $_GET['id'];
            $product = get_product_by_id($product_id);
            include_once "view/product_edit.php";
            break;
        case 'admin_order';
            $order = getAllOrderNoLimit();
            include_once "view/admin_order.php";
            break;
        case 'edit_order':
            if (!(isset($_SESSION['user']) && $_SESSION['user']['role'] == '1')) {
                header('Location: ?mod=page&act=home');
                exit();
            }
            if (isset($_POST['submit'])) {
                $order_id = $_POST['order_id'];
                $kq = update_order(
                    $order_id,
                    $_POST['up_phone'],
                    $_POST['up_address'],
                    $_POST['up_status']
                );
                if ($kq) {
                    header("Location: admin.php?mod=product&act=admin_order");
                    exit();
                } else {
                    echo "<script>alert('Lỗi khi cập nhật thông tin đơn hàng');</script>";
                }
            }
            $order_id = $_GET['id'];
            $order = get_order_by_id($order_id);
            include_once "view/order_edit.php";
            break;
        case 'delete_order';
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $kq = delete_order($_GET['id']);
                if ($kq) {
                    header("Location: admin.php?mod=product&act=admin_order");
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
        case 'admin_char';
            include_once "view/admin_char.php";
            break;
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}
