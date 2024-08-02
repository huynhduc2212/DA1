<?php
include_once 'model/connect.php';
include_once 'model/cart.php';
include_once 'model/user.php';

if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'logout':
            // đăng xuất
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
            }
            header("Location: ?mod=page&act=home");

            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/template_banner.php';
            break;
        case 'login':
            if (isset($_POST['btn_login'])) {
                $password = $_POST['password'];
                $email = $_POST['email'];
                // kiểm tra username và password
                if (check_login($email, $password)) {
                    $userinfo = check_login($email, $password);
                    $_SESSION['user'] =  $userinfo;
                    header("Location: ?mod=page&act=home");
                } else {
                    echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu');</script>";
                }
            }


            $tendm = "Đăng nhập tài khoản";
            $pathpage = "Trang chủ | " . $tendm;
            $pathpage_a = "<div class='path'><a href='index.php'> Trang chủ </a> > <span>$tendm</span> </div>";

            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/template_banner.php';
            include_once 'view/page_login.php';
            break;
        case 'signup':
            // đăng kí
            if (isset($_POST['btn_signup'])) {
                $username = $_POST['username'];
                $fullname = $_POST['fullname'];
                $password = $_POST['password'];
                $email = $_POST['email'];

                // ghi nhận username
                $_SESSION['username'] = $username;
                insert_user($username, $fullname, $email, $password);
                // auto login
                header("Location: ?mod=user&act=login");
            }

            $tendm = "Đăng ký tài khoản";
            $pathpage = "Trang chủ | " . $tendm;
            $pathpage_a = "<div class='path'><a href='index.php'> Trang chủ </a> > <span>$tendm</span> </div>";

            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/template_banner.php';
            include_once 'view/page_signup.php';
            break;
        case 'userupdate':
            // đăng kí
            if (isset($_POST['btn_update'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $fullname = $_POST['fullname'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];

                update_user($email, $fullname, $address, $phone, $password, $username);
                $_SESSION['user']['username'] = $username;
                $_SESSION['user']['fullname'] = $fullname;
                $_SESSION['user']['email'] = $email;
                $_SESSION['user']['phone'] = $phone;
                $_SESSION['user']['address'] = $address;

                // header("Location: ?mod=user&act=userupdate");
                header("Location: ?mod=page&act=home");
            }

            $tendm = "Cập nhật tài khoản";
            $pathpage = "Trang chủ | " . $tendm;
            $pathpage_a = "<div class='path'><a href='index.php'> Trang chủ </a> > <span>$tendm</span> </div>";

            include_once 'view/template_head.php';
            include_once 'view/template_header.php';
            include_once 'view/template_banner.php';
            include_once 'view/page_userupdate.php';
            break;
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}
include_once 'view/template_near_footer.php';
include_once 'view/template_footer.php';
