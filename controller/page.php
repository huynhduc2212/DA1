<?php
//quản lý view và model liên quan: trang chủ,liên hệ, giới thiệu...
//gọi dc: view, model
include_once 'view/template_head.php';
include_once 'view/template_header.php';

if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'home':
            include_once 'view/home.php';
            break;
        default:
            # 404 - trang web không tồn tại!
            break;
    }
}
include_once 'view/template_footer.php';
