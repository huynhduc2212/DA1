<?php

include_once 'view/template_head.php';
include_once 'view/template_header.php';
include_once 'view/template_banner.php';
include_once 'model/user.php';


if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'login':
            include_once 'view/page_login.php';
            break;
        case 'signup':
            if(isset($_POST['signup']) &&( $_POST['signup'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $repassword = $_POST['repassword'];

                check_user($username, $password);
            }
            include_once 'view/page_signup.php';
            break;
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}

include_once 'view/template_near_footer.php';
include_once 'view/template_footer.php';
