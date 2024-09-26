<?php
//quản lý view và model liên quan: trang chủ,liên hệ, giới thiệu...
//gọi dc: view, model
include_once 'model/connect.php';
include_once 'model/cart.php';
include_once 'model/news.php';
include_once "model/products.php";
include_once "model/categories.php";
include_once "model/view.php";
include_once "model/user.php";


if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'home':
            $product_sale = getDiscountedProducts();
            $products = getProductByCategory_Home();
            $products_new = getAllProductsNewest();
            $blogs = getBlogs();
            // show theo danh mục
            if (isset($_GET['idcategory']) && (is_numeric($_GET['idcategory'])) && ($_GET['idcategory']) > 0) {
                $idcategory = $_GET['idcategory'];
            } else {
                $idcategory = 0;
            }
            $products_category = getProductsByCategory("", $idcategory, SO_SP_TRANG_HOME_2, 1);
            $categories = getCategory_Home_List();

            $pathpage = "Trang chủ";

            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/page_home.php';
            include_once 'view/template_near_footer.php';
            include_once 'view/template_footer.php';
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
                $giasp = $_POST['giasp'];
                $soluong = $_POST['soluong'];
                $discount_percentage = $_POST['discount_percentage'];
                $price = calculateDiscountPrice($giasp, $discount_percentage);

                $sp = [
                    'idpro' => $idpro,
                    'tensp' => $tensp,
                    'hinhsp' => $hinhsp,
                    'giasp' => $price,
                    'soluong' => $soluong,
                    // 'soluong' => $_POST['quantity'],
                ];
                array_push($_SESSION['giohang'], $sp);
                header("Location: ?mod=page&act=cart");
            }


            // cập nhật lại tổng tiền khi tăng số lượng sản phẩm
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['increase_quantity'])) {
                    $idpro = $_POST['increase_quantity'];
                    $productKey = array_search($idpro, array_column($_SESSION['giohang'], 'idpro'));
                    if ($productKey !== false) {
                        $_SESSION['giohang'][$productKey]['soluong'] += 1;
                    }
                }

                if (isset($_POST['decrease_quantity'])) {
                    $idpro = $_POST['decrease_quantity'];
                    $productKey = array_search($idpro, array_column($_SESSION['giohang'], 'idpro'));
                    if ($productKey !== false && $_SESSION['giohang'][$productKey]['soluong'] > 1) {
                        $_SESSION['giohang'][$productKey]['soluong'] -= 1;
                    }
                }

                $tong = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    $tong += $item['giasp'] * $item['soluong'];
                }

                header('Location: ?mod=page&act=cart');
                exit();
            }

            $tendm = "Giỏ hàng";
            $pathpage = "Trang chủ | " . $tendm;
            $pathpage_a = "<div class='path'><a href='index.php'> Trang chủ </a> > <span>$tendm</span> </div>";

            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once "view/template_banner.php";
            include_once "view/page_cart.php";
            include_once 'view/template_near_footer.php';
            include_once 'view/template_footer.php';
            break;
        case 'favorite':
            $tendm = "Sản phẩm yêu thích";
            $pathpage = "Trang chủ | " . $tendm;
            $pathpage_a = "<div class='path'><a href='index.php'> Trang chủ </a> > <span>$tendm</span> </div>";

            // xóa sp yêu thích
            if (isset($_GET['ind']) && ($_GET['ind'] >= 0)) {
                array_splice($_SESSION['favorite'], $_GET['ind'], 1);
                header("Location: ?mod=page&act=favorite");
            }

            // thêm sản phẩm yêu thích
            if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
                if (isset($_GET['add_favorite'])) {
                    $idpro = $_GET['add_favorite'];
                    $product = getProductDetails($idpro);

                    if ($product) {
                        if (!isset($_SESSION['favorite'])) {
                            $_SESSION['favorite'] = [];
                        }
                        array_push($_SESSION['favorite'], $product);
                    }
                    header("Location: ?mod=page&act=favorite");
                }
            } else {
                header("Location: ?mod=user&act=login");
            }



            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once "view/template_banner.php";
            include_once "view/page_product_favorite.php";
            include_once 'view/template_near_footer.php';
            include_once 'view/template_footer.php';
            break;
        case 'about':
            $tendm = "Giới thiệu";
            $pathpage = "Trang chủ | " . $tendm;
            $pathpage_a = "<div class='path'><a href='index.php'> Trang chủ </a> > <span>$tendm</span> </div>";

            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once "view/template_banner.php";
            include_once "view/page_about.php";
            include_once 'view/template_near_footer.php';
            include_once 'view/template_footer.php';
            break;
        case 'contact':
            $tendm = "Liên hệ";
            $pathpage = "Trang chủ | " . $tendm;
            $pathpage_a = "<div class='path'><a href='index.php'> Trang chủ </a> > <span>$tendm</span> </div>";

            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once "view/template_banner.php";
            include_once "view/page_contact.php";
            include_once 'view/template_near_footer.php';
            include_once 'view/template_footer.php';
            break;
        case 'blog':
            $blogs = getBlogs();
            $tendm = "Tin tức";
            $pathpage = "Trang chủ | " . $tendm;
            // $pathpage_a = "<a href='index.php'>Trang chủ</a> > Tin tức";
            $pathpage_a = "<div class='path'><a href='index.php'> Trang chủ </a> > <span>$tendm</span> </div>";
            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once "view/template_banner.php";
            include_once "view/page_blog.php";
            include_once 'view/template_near_footer.php';
            include_once 'view/template_footer.php';
            break;
        case 'blogDetails':
            if (isset($_GET['idblog']) && ($_GET['idblog'] > 0)) {
                $id = $_GET['idblog'];

                $blogs_details = getBlogByID($id);

                $tensp = $blogs_details['name'];
                $tendm = "Tin tức";
                $pathpage = "Trang chủ | " . $tendm . " |" . $tensp;
                $pathpage_a = "<div class='path'><a href='index.php'>Trang chủ </a> > <a href='?mod=page&act=cart'>$tendm</a> > <span>$tensp</span> </div>";
                include_once 'view/template_head.php';
                include_once 'view/template_header.php';
                include_once "view/template_banner.php";
                include_once "view/page_blogDetails.php";
                include_once 'view/template_near_footer.php';
                include_once 'view/template_footer.php';
            } else {
                $id = 0;
                $pathpage = "";
                $pathpage_a = "";
            }
            break;
        case 'checkout':
            $iduser = 0;
            // KH k0 là thành viên: người đặt người nhận là 1 - là thông tin trên form
            // KH là thành viên : người đặt là iduser - người nhận là thông tin trên form
            if (!isset($_SESSION['user'])) {
                $iduser = "";
                $fullname = "";
                $phone = "";
                $address = "";
                $email = "";
                // $iduser = insert_user_returnID($fullname, $address, $email, $phone);
            } else {
                $iduser = $_SESSION['user']['id'];
                $fullname = $_SESSION['user']['fullname'];
                $phone = $_SESSION['user']['phone'];
                $address = $_SESSION['user']['address'];
                $email = $_SESSION['user']['email'];
            }

            if (isset($_POST['btn_order'])) {
                // lấy dữ liệu trên form : thông tin người đặt người nhận
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $password = rand(100000, 999999);
                $payment_method = $_POST['payment_method'];
                $orderdate = date('d/m/Y');

                // đăng kí tài khoản => getLastID
                $iduser = insert_user_returnID($fullname, $address, $email, $phone, $password);
                // tạo đơn hàng với iduser vừa tạo
                // iduser / form / tổng tiền hàng 
                // tạo mã đơn hàng
                $total = get_total();

                $today = date("mdY");
                $today_code = $today;
                $stt_code = get_id_order_latest() + 1;
                $code = "LFN" . $today_code . $stt_code;
                // lấy dữ liệu cần thiết cho đơn hàng : tổng đơn hàng

                $idorder = insert_order_returnID($code, $iduser, $orderdate, $fullname, $address, $total, $phone, $email, $payment_method);
                $_SESSION['idorder'] = $idorder;

                // tạo đơn hÀNG chi tiết
                foreach ($_SESSION['giohang'] as $item) {
                    $idpro = $item['idpro'];
                    $quantity = $item['soluong'];
                    $name = $item['tensp'];
                    $price = $item['giasp'];
                    $img = $item['hinhsp'];
                    insert_orderdetails($idpro, $quantity, $name, $price, $idorder, $img);
                }
                unset($_SESSION['giohang']);
                header("Location: ?mod=page&act=bill");
            }

            $tendm = "Thanh toán";
            $pathpage = "Trang chủ | " . $tendm;
            $pathpage_a = "<div class='path'><a href='index.php'>Trang chủ </a> > <a href='?mod=page&act=cart'> Giỏ hàng </a> > <span>$tendm</span> </div>";
            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once "view/template_banner.php";
            include_once "view/page_checkout.php";
            include_once 'view/template_near_footer.php';
            include_once 'view/template_footer.php';
            break;
        case 'bill';
            // $idorder = $_SESSION['idorder'];
            // $iduser = $_SESSION['user']['id'];
            // $user_info = get_user_info($iduser);
            // $bill = loadone_orders($idorder);
            // $billct = loadall_orderdetails($idorder);
            // include_once "view/page_bill.php";
            $idorder = $_SESSION['idorder'];
            if (isset($_SESSION['user'])) {
                $iduser = $_SESSION['user']['id'];
                $user_info = get_user_info($iduser);
            } else {
                $user_info = [
                    'fullname' => '',
                    'email' => '',
                    'phone' => ''
                ];
            }

            $bill = loadone_orders($idorder);
            $billct = loadall_orderdetails($idorder);

            if (!isset($_SESSION['user'])) {
                $user_info['fullname'] = $bill['fullname'];
                $user_info['email'] = $bill['email'];
                $user_info['phone'] = $bill['phone'];
            }

            include_once "view/page_bill.php";
            break;

        case 'mybill';
            $listbill = loadall_orders($_SESSION['user']['id']);
            $tendm = "Đơn hàng";
            $pathpage = "Trang chủ | " . $tendm;
            $pathpage_a = "<div class='path'><a href='index.php'> Trang chủ </a> > <span>$tendm</span> </div>";

            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once "view/template_banner.php";
            include_once "view/page_mybill.php";
            include_once 'view/template_near_footer.php';
            include_once 'view/template_footer.php';
            break;
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}
