<?php

include_once 'view/template_head.php';
include_once 'view/template_header.php';

if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'login':
            include_once 'view/page_login.php';
            break;
        case 'signup':
            include_once 'view/page_signup.php';
            break;
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}

include_once 'view/template_footer.php';
