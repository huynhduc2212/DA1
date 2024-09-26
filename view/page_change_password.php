<section>
    <div class="signup page_customer_account">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="block-account">
                        <h1 class="title-account">Trang tài khoản</h1>
                        <?php
                        if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
                            echo '<p>Xin chào,
                     <span style="color:#ef4339;">' . $_SESSION['user']['username'] . ' !</span>
                  </p>';
                        } else {
                            echo '';
                        }
                        ?>
                        <ul>
                            <li class="<?php echo ($_GET['act'] == 'client') ? 'active' : ''; ?>">
                                <a href="?mod=user&act=client">Thông tin tài khoản</a>
                            </li>
                            <li class="<?php echo ($_GET['act'] == 'userupdate') ? 'active' : ''; ?>">
                                <a href="?mod=user&act=userupdate">Cập nhật tài khoản</a>
                            </li>
                            <li class="<?php echo ($_GET['act'] == 'changePassword') ? 'active' : ''; ?>">
                                <a href="?mod=user&act=userupdate">Đổi mật khẩu</a>
                            </li>
                            <li class="<?php echo ($_GET['act'] == 'mybill') ? 'active' : ''; ?>">
                                <a href="?mod=page&act=mybill">Đơn hàng của tôi</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-9">

                    <form action="?mod=user&act=changePassword" method="post">
                        <h1>Đổi mật khẩu</h1>
                        <?php if (isset($_GET['error'])) { ?>
                            <span class="error"><?php echo $_GET['error']; ?></span>
                        <?php } ?>
                        <input type="password" name="password_old" placeholder="Mật khẩu cũ" />
                        <input type="password" name="password_new" placeholder="Mật khẩu mới" />
                        <input type="password" name="password_confirm" placeholder="Xác nhận mật khẩu" />
                        <button type="submit" name="btn_changePass">Đặt lại mật khẩu</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .page_customer_account {
        margin-bottom: 30px;
        padding: 20px 0;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -10px;
        margin-left: -10px;
    }

    .col-3 {
        width: 100%;
        padding-left: 10px;
        padding-right: 10px;
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-3 h1 {
        text-transform: uppercase;
        font-size: 19px;
        margin-bottom: 0;
    }

    .col-3 p {
        font-weight: 700;
        font-size: 14px;
        line-height: 28px;
        margin-bottom: 20px;
        color: #212B25;
    }

    .col-3 ul {
        list-style: none;
        font-size: 14px;
    }

    .col-3 ul li {
        padding-bottom: 10px;
    }

    .col-3 ul li a:hover {
        color: #bf9f70;
    }

    .col-3 ul li.active a {

        color: #bf9f70;
    }

    .col-9 {
        width: 100%;
        padding-left: 10px;
        padding-right: 10px;
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-9 h1 {
        text-transform: uppercase;
        font-size: 19px;
        padding: 0 110px;
        margin-bottom: 20px;
    }

    .col-9 p {
        padding: 0 45px;
        font-size: 14px;
    }

    .col-9 input {
        width: 360px;
        display: block;
        padding: 12px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #ebebeb;
    }

    .col-9 button {
        padding: 10px;
        width: 360px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #d1a654;
        color: white;
    }

    .col-9 button:hover {
        background-color: #b88945;
    }

    .error {
        color: #ff0000;
        font-size: 16px;
        display: block;
        padding-top: 12px;
        padding-bottom: 6px;
    }
</style>