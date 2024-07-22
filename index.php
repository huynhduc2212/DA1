 <?php
    session_start();
    //điều hướng các controller
    if (isset($_GET['mod'])) {
        switch ($_GET['mod']) {
            case 'page':
                include_once 'controller/page.php';
                break;
            case 'user':
                include_once 'controller/user.php';
                break;
            case 'cart':
                include_once 'controller/cart.php';
                break;
            case 'product':
                include_once 'controller/product.php';
                break;
            default:
                header("Location: ?mod=page&act=home");
                break;
        }
    } else {
        header("Location: ?mod=page&act=home");
    }
    ?>
