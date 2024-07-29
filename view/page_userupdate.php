<main>
    <div class="wrapper">
        <div class="container-signup">
            <form class="register-form" action="?mod=user&act=userupdate" method="post">
                <h2>Cập nhật thông tin</h2>
                <p>
                    Đã có tài khoản, đăng nhập <a href="?mod=user&act=login" class="link-gold">tại đây</a>
                </p>
                <input type="text" name="username" placeholder="Họ và Tên" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Mật khẩu" required />
                <input type="text" name="phone" placeholder="phone" />
                <input type="text" name="fullname" placeholder="fullname" />
                <input type="text" name="address" placeholder="address" />
                <button type="submit" name="btn_update">Cập nhật</button>
            </form>
        </div>
    </div>
</main>