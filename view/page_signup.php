<main>
  <div class="wrapper">
    <div class="container-signup">
      <form class="register-form" action="?mod=user&act=signup" method="post">
        <h2>ĐĂNG KÝ</h2>
        <p>
          Đã có tài khoản, đăng nhập <a href="?mod=user&act=login" class="link-gold">tại đây</a>
        </p>
        <input type="text" name="username" placeholder="Username" required />
        <input type="text" name="fullname" placeholder="Họ và Tên" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Mật khẩu" required />
        <input type="password" name="repassword" placeholder="Nhập lại mật khẩu" required />
        <!-- <input type="text" name="phone" placeholder="Số điện thoại" required /> -->
        <!-- <input type="text" name="address" placeholder="Địa chỉ" required /> -->
        <button type="submit" name="btn_signup">Đăng ký</button>
      </form>
    </div>
  </div>
</main>