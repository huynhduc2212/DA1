- Xác định thông tin sản phẩm để add giỏ hàng (form)
- session (mảng)
- Đọc sp từ session (mảng)
- array_splice(xóa phần tử thứ mấy trong mảng, xóa phần tử)
- xóa tất cả sản phẩm trong mảng
- thay đổi được số lượng sp trong giỏ hàng (ajax)
- check sp trùng => tăng số lượng

----------------------
Tạo đơn hàng
- form thông tin người đặt
- đăng nhập rồi => load thông tin lên trang => iduser lên hidden trên form luôn
- nếu chưa đăng nhập : nhập thông tin thẳng trên form => dk tài khoản mới  => iduser
- tạo đơn hàng (insert into)
- lấy iduser + đọc dữ liệu form (thông tin giao hàng)
=> tạo được đơn hàng =>> idorder

- idorder + cùng với việc for mảng session giỏ hàng
=> insert into đơn hàng chi tiết

- client : quản lí / admin cũng quản lí được / gửi mail đơn hàng

- A Toàn: tìm kiếm sản phẩm, user đăng nhập đăng kí,
 admin thêm sửa xóa trang khách hàng, trang giới thiệu, liên hệ tĩnh, trang blog động, giao diện
- Đức: admin thêm sửa xóa sp, quản lí đơn hàng, thống kê, tìm kiếm sản phẩm, giao diện
- Thân: trang chủ, danh mục sp, chi tiết sp, phân trang, giỏ hàng, thanh toán, hóa đơn, lịch sử mua hàng,
thêm sửa xóa giỏ hàng, thêm xóa sp yêu thích, giao diện