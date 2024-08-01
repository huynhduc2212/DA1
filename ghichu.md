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

- voucher

- client : quản lí / admin cũng quản lí được / gửi mail đơn hàng