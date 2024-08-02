<main>
    <div class="wrapper">
        <div class="container-signup">
            <form class="register-form" action="?mod=user&act=userupdate" method="post">
                <h2>Cập nhật thông tin</h2>
                <p>
                    Đã có tài khoản, đăng nhập <a href="?mod=user&act=login" class="link-gold">tại đây</a>
                </p>
                <input type="text" name="username" placeholder="Username" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Mật khẩu" required />
                <input type="text" name="phone" placeholder="Số điện thoại" />
                <input type="text" name="fullname" placeholder="Họ và tên" />
                <input type="text" name="address" placeholder="Địa chỉ" />
                <button type="submit" name="btn_update">Cập nhật</button>
            </form>
        </div>
    </div>
</main>