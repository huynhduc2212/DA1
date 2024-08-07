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
                     <li>
                        <a href="?mod=user&act=client">Thông tin tài khoản</a>
                     </li>
                     <li>
                        <a href="?mod=user&act=userupdate">Cập nhật tài khoản</a>
                     </li>
                     <li>
                        <a href="?mod=page&act=mybill">Đơn hàng của tôi</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-9">
               <h1>THÔNG TIN TÀI KHOẢN</h1>
               <?php
               if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
                  echo '<div class="account">
                  <p>
                     <strong>Họ tên: </strong>
                     ' . $_SESSION['user']['fullname'] . '
                  </p>
                  <p>
                     <strong>Email: </strong>
                      ' . $_SESSION['user']['email'] . '
                  </p>
                  <p>
                     <strong>Địa chỉ: </strong>
                      ' . $_SESSION['user']['address'] . '
                  </p>
               </div>';
               } else {
                  echo '';
               }
               ?>
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
   }

   .col-3 p {
      font-weight: 700;
      font-size: 14px;
      line-height: 28px;
      margin-bottom: 15px;
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

   .col-9 {
      width: 100%;
      padding-left: 10px;
      padding-right: 10px;
      flex: 0 0 75%;
      max-width: 75%;
   }

   .col-9 h1 {
      text-transform: uppercase;
      margin-bottom: 25px;
      font-size: 19px;
   }

   .col-9 p {
      font-size: 14px;
   }
</style>