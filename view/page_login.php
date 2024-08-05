<main>
  <div class="wrapper">
    <div class="container-login">
      <form class="login-form" action="?mod=user&act=login" method="post">
        <h2>ĐĂNG NHẬP</h2>
        <p>
          Nếu bạn chưa có tài khoản,
          <a href="?mod=user&act=signup" class="link-gold">đăng ký tại đây</a>
        </p>
        <?php if (isset($_GET['error'])) { ?>
          <span class="error"><?php echo $_GET['error']; ?></span>
        <?php } ?>
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Mật khẩu" />
        <button type="submit" name="btn_login">Đăng Nhập</button>
        <div class="social-login">
          <a href="#" class="link-gold1">Quên mật khẩu</a>
        </div>
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