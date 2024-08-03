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
          <h1>Đơn hàng của bạn</h1>
          <div class="my-bill">
            <div class="recent-orders">
              <div class="table-block">
                <table class="table-orders">
                  <thead class="thead-default">
                    <tr>
                      <th>Mã đơn hàng</th>
                      <th>Ngày đặt</th>
                      <th>Số lượng</th>
                      <th>Địa chỉ</th>
                      <th>Giá trị đơn hàng</th>
                      <th>TT đơn hàng</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (isset($listbill)) {
                      foreach ($listbill as $bill) {
                        extract($bill);
                        $ttdh = get_ttdh($bill['status']);
                        $countsp = loadall_orderdetails_count($bill['id']);
                        echo '<tr class="first-old">
                                                        <td style="color: #2F80ED;">' . $bill['code'] . '</td>
                                                        <td>' . $bill['order_date'] . '</td>
                                                        <td>' . $countsp . '</td>
                                                        <td>' . $bill['address'] . '</td>
                                                        <td>' . number_format($bill['total'], 0, ',', '.') . 'đ</td>
                                                        <td style="color: #E49C06;font-weight: 600;">' . $ttdh . '</td>
                                        </tr>';
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
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
    font-size: 19px;
    text-transform: uppercase;
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

  .col-9 {
    width: 100%;
    padding-left: 10px;
    padding-right: 10px;
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-9 h1 {
    font-size: 19px;
    text-transform: uppercase;
    margin-bottom: 30px;
  }

  .table-block table {
    border-collapse: collapse;
  }

  .table-block table th {
    border-bottom: 1px solid #dee2e6;
    background: #997d55;
    width: 15%;
    border: 1px solid #ebebeb;
    text-align: center;
    color: #fff;
    padding: 5px;
    font-size: 14px;
  }

  .table-block table td {
    text-align: center;
    padding: 20px 5px;
    font-size: 14px;
    border: 1px solid #ebebeb;
    color: #1c1c1c;
  }

  .table-block table th:nth-child(4),
  .table-block table td:nth-child(4) {
    width: 30%;
  }
</style>