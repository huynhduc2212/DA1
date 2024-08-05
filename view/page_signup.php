<main>
  <div class="wrapper">
    <div class="container-signup">
      <form class="register-form" action="?mod=user&act=signup" method="post">
        <h2>ĐĂNG KÝ</h2>
        <p>
          Đã có tài khoản, đăng nhập <a href="?mod=user&act=login" class="link-gold">tại đây</a>
        </p>
        <?php if (isset($_GET['error'])) { ?>
          <span class="error"><?php echo $_GET['error']; ?></span>
        <?php } ?>
        <?php if (isset($_GET['success'])) { ?>
          <span class="success"><?php echo $_GET['success']; ?></span>
        <?php } ?>
        <input type="text" name="username" placeholder="Username" />
        <!-- <input type="text" name="fullname" placeholder="Họ và Tên"  /> -->
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Mật khẩu" />
        <input type="password" name="repassword" placeholder="Nhập lại mật khẩu" />
        <button type="submit" name="btn_signup">Đăng ký</button>
      </form>
    </div>
  </div>
</main>

<style>
  .error {
    color: #ff0000;
    font-size: 16px;
  }
</style>