<?php
include_once 'model/connect.php';
include_once 'model/cart.php';
include_once 'model/user.php';
include_once 'view/template_head.php';
include_once 'view/template_header.php';
include_once 'view/template_banner.php';

if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'logout':
            // đăng xuất
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
            }
            header("Location: ?mod=page&act=home");
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

            include_once 'view/page_login.php';
            break;
        case 'signup':
            // đăng kí
            if (isset($_POST['btn_signup'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];

                // ghi nhận username
                $_SESSION['username'] = $username;
                insert_user($username, $password, $email);
                // auto login
                header("Location: ?mod=user&act=login");
            }
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
                header("Location: ?mod=user&act=userupdate");
            }
            include_once 'view/page_userupdate.php';
            break;
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}
include_once 'view/template_near_footer.php';
include_once 'view/template_footer.php';
