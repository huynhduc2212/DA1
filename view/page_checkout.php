<?php
if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
  $html_table_product = '';
  $tong = 0;
  foreach ($_SESSION['giohang'] as $item) {
    extract($item);
    $thanhtien = $giasp * $soluong;
    $tong += $thanhtien;
    $html_table_product .= '<table class="product-table">
                    <tbody>
                      <tr class="product">
                        <td class="product__image">
                          <div class="product-thumbnailtt">
                            <div class="product-thumbnailtt__wrapper">
                              <img src="assets_user/img/' . $hinhsp . '" alt="' . $tensp . '">
                            </div>
                            <span class="product-thumbnailtt__quantity">' . $soluong . '</span>
                          </div>
                        </td>
                        <th class="product__description">
                          <span class="product__description__name">' . $tensp . '</span>
                        </th>
                        <td class="product__price">' . number_format($giasp, 0, ',', '.') . 'đ</td>
                      </tr>
                    </tbody>
                  </table>';
  }
}
$total = get_total();
?>

<main>
  <div class="content">
    <form action="" method="post">
      <div class="wrap">
        <main class="main">
          <div class="main__content">
            <article class="animate-floating-labels row">
              <div class="col col--two">
                <section class="section">
                  <div class="section__header">
                    <div class="layout-flex">
                      <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                        Thông tin nhận hàng
                      </h2>

                    </div>
                  </div>
                  <div class="section__content">
                    <a class="dnnud" href="">
                      <i class="fa fa-user-circle-o fa-lg"></i>
                      <span>Đăng nhập để nhận thêm ưu đãi</span>
                    </a>
                    <div class="fieldset">
                      <div class="field">
                        <div class="field__input-wrapper">
                          <input type="email" name="email" value="<?= $email ?>" class="field__input" placeholder="Email">
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__input-wrapper">
                          <input type="text" name="fullname" value="<?= $fullname ?>" class="field__input" placeholder="Họ và tên">
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__input-wrapper">
                          <input type="tel" name="phone" value="<?= $phone ?>" class="field__input" placeholder="Số điện thoại">
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__input-wrapper">
                          <input type="text" name="address" value="<?= $address ?>" class="field__input" placeholder="Địa chỉ">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section__header">
                    <div class="layout-flex">
                      <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                        Thông tin người nhận khác (nếu cần)
                      </h2>
                    </div>
                  </div>
                  <div class="section__content">
                    <div class="fieldset">
                      <div class="field">
                        <div class="field__input-wrapper">
                          <input type="email" class="field__input" placeholder="Email">
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__input-wrapper">
                          <input type="text" class="field__input" placeholder="Họ và tên">
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__input-wrapper">
                          <input type="tel" class="field__input" placeholder="Số điện thoại">
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__input-wrapper">
                          <input type="text" class="field__input" placeholder="Địa chỉ">
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </article>
          </div>
        </main>
        <aside class="sidebar">
          <div class="sidebar__header">
            <h2 class="sidebar__title">Đơn hàng (2 sản phẩm)</h2>
          </div>
          <div class="sidebar__content">
            <div class="order-summary order-summary--is-collapsed">
              <div class="order-summary__sections">
                <div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
                  <?= $html_table_product ?>
                </div>
                <div class="order-summary__section order-summary__section--discount-code">
                  <div class="edit_checkout animate-floating-labels">
                    <div class="fieldset">
                      <div class="field ">
                        <div class="field__input-btn-wrapper">
                          <div class="field__input-wrapper">
                            <input type="text" class="field__input" placeholder="Nhập mã giảm giá">
                          </div>
                          <button type="button" class="field__input-btn btt spinner btn--disabled">
                            <span class="spinner-label">Áp dụng</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element">
                  <table class="total-line-table">
                    <tbody class="total-line-table__tbody">
                      <tr class="total-line total-line--subtotal">
                        <th class="total-line__name">Tạm tính</th>
                        <td class="total-line__price"><?= number_format($total, 0, ',', '.') ?>₫</td>
                      </tr>
                      <tr class="total-line total-line--shipping-fee">
                        <th class="total-line__name">Phí vận chuyển</th>
                        <td class="total-line__price">
                          <span>Miễn phí</span>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot class="total-line-table__footer">
                      <tr class="total-line payment-due">
                        <th class="total-line__name">
                          <span class="payment-due__label-total">Tổng cộng</span>
                        </th>
                        <td class="total-line__price">
                          <span class="payment-due__price"><?= number_format($total, 0, ',', '.') ?>₫</span>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
                  <button type="submit" name="btn_order" class="btt btn-checkout spinner">
                    <a href="?mod=page&act=bill">
                      <span class="spinner-label">ĐẶT HÀNG</span>
                    </a>
                  </button>
                  <a href="?mod=page&act=cart" class="previous-link">
                    <i class="previous-link__arrow">❮</i>
                    <span class="previous-link__content">Quay về giỏ hàng</span>
                  </a>
                </div>
                <section class="section">
                  <div class="section__content">
                    <div class="content-box">
                      <div class="content-box__row">
                        <div class="radio-wrapper">
                          <div class="radio__input">
                            <input type="radio" class="input-radio" name="payment_method" value="Thanh toán khi giao hàng">
                          </div>
                          <label class="radio__label">
                            <span class="radio__label__primary">Thanh toán khi giao hàng</span>
                            <span class="radio__label__accessory">
                              <span class="radio__label__icon"></span>
                            </span>
                          </label>
                        </div>
                        <div class="radio-wrapper">
                          <div class="radio__input">
                            <input type="radio" class="input-radio" name="payment_method" value="Thanh toán online">
                          </div>
                          <label class="radio__label">
                            <span class="radio__label__primary">Thanh toán online</span>
                            <span class="radio__label__accessory">
                              <span class="radio__label__icon"></span>
                            </span>
                          </label>

                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </form>
  </div>
</main>

<style>
  .content {
    overflow: hidden;
    display: flex;
  }

  .content .wrap {
    flex-direction: row;
  }

  .wrap:after,
  .wrap:before {
    content: "";
    display: table;
  }

  .main {
    width: 52%;
    padding: 2em 2em 0 2em;
    max-width: 400px;
  }

  .main__header {
    padding-bottom: 1.5em;
  }

  .wrap {
    width: 100%;
    box-sizing: border-box;
    padding: 0 1em;
    font-size: 14px;
    max-width: 40em;
    margin: 0 auto;
    max-width: 1200px;
    justify-content: center;
    align-items: flex-start;
  }

  .main .logo {
    display: block;
  }

  .logo--left {
    text-align: left;
  }

  .shop__name {
    line-height: 1.12;
  }

  .shop__name a {
    color: #bf9f70;
    text-decoration: none;
    cursor: pointer;
  }

  .icon-print {
    color: #bf9f70;
    text-decoration: none;
    cursor: pointer;
  }

  .main__content {
    padding-bottom: 1.5em;
    width: 700px;
  }

  .animate-floating-labels {
    margin-left: -10px;
    margin-right: -10px;
  }

  .animate-floating-labels:first-child>.col:first-child {
    padding-top: 0;
  }

  .col--two {
    width: 50%;
  }

  .col {
    padding-left: 1em;
    padding-right: 1em;
    float: left;
    box-sizing: border-box;
  }

  .section:first-child {
    padding-top: 0;
  }

  .section__header {
    margin-bottom: 12px;
  }

  .layout-flex {
    display: flex;
    align-items: baseline;
  }

  .section__title,
  .modal__title,
  .sidebar__title,
  .order-summary-toggle__text {
    color: #333;
    font-weight: 600;
    font-size: 1.15rem;
  }

  .layout-flex__item--stretch {
    flex: 1 1 auto;
  }

  .layout-flex a {
    color: #bf9f70;
    text-decoration: none;
    cursor: pointer;
  }

  .fa-lg {
    font-size: 1.33333333em;
    line-height: 0.75em;
    vertical-align: -15%;
  }

  .dnnud {
    color: #bf9f70;
    top: -15px;
    position: relative;
  }

  .fa {
    display: inline-block;
    font: normal normal normal 14px / 1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    transform: translate(0, 0);
  }

  .fa-user-circle-o:before {
    content: "";
  }

  .section__content::after,
  .section__content::before {
    content: "";
    display: table;
  }

  .fieldset {
    margin: -0.4em;
  }

  .fieldset::before,
  .fieldset::after {
    content: "";
    display: table;
  }

  .main .field {
    padding: 0.4em;
  }

  .field {
    float: left;
    width: 100%;
    box-sizing: border-box;
    padding: 0.4em;
  }

  .field__input-wrapper {
    position: relative;
  }

  .floating-labels .field--show-floating-label .field__input {
    padding-top: 1.5em;
    padding-bottom: 0.35em;
  }

  .field__input {
    border-radius: 4px;
    width: 100%;
    display: block;
    box-sizing: border-box;
    padding: 0.94em 0.8em;
    border: 1px #d9d9d9 solid;
    height: 44px;
    background-color: #fff;
    color: #333;
  }

  .fieldset::after {
    clear: both;
  }

  .section__content::after {
    clear: both;
  }

  .content-box__row:last-child {
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
  }

  .content-box__row {
    display: table;
    box-sizing: border-box;
    width: 100%;
    position: relative;
    padding: 1em;
  }

  .radio-wrapper {
    display: table;
    box-sizing: border-box;
    width: 100%;
    margin-bottom: 5px;
  }

  .radio-wrapper:after,
  .radio-wrapper:before,
  .checkbox-wrapper:after,
  .checkbox-wrapper:before {
    content: "";
    display: table;
  }

  .radio__input,
  .checkbox__input {
    display: table-cell;
  }

  .radio__input,
  .checkbox__input {
    white-space: nowrap;
    padding-right: 0.75em;
  }

  .content-box .input-checkbox,
  .content-box .input-radio {
    border-color: #d9d9d9;
    background-color: #fff;
  }

  .input-checkbox:after,
  .input-radio:after {
    content: "";
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: scale(0.2);
    transform: scale(0.2);
    -webkit-transition: all 0.2s ease-in-out 0.1s;
    transition: all 0.2s ease-in-out 0.1s;
    opacity: 0;
  }

  .input-radio:after {
    width: 4px;
    height: 4px;
    margin-left: -2px;
    margin-top: -2px;
    background-color: #fff;
    border-radius: 50%;
  }

  .radio__label,
  .checkbox__label {
    cursor: pointer;
    vertical-align: middle;
    display: table-cell;
    width: 100%;
  }

  .radio__label__primary {
    cursor: inherit;
    font-family: inherit;
    vertical-align: top;
    display: table-cell;
    width: 100%;
  }

  .radio__label__accessory {
    text-align: right;
    padding-left: 0.75em;
    white-space: nowrap;
    display: table-cell;
    vertical-align: middle;
  }

  .radio__label__icon {
    color: #1990c6;
    font-size: 1.5em;
    height: 100%;
    display: inline-block;
  }

  .payment-icon {
    display: flex;
    justify-content: center;
    align-content: center;
    width: 52px;
    height: 28px;
    transition: opacity 0.5s cubic-bezier(0.3, 0, 0, 1);
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    font: normal normal normal 14px / 1 FontAwesome;
    font-size: inherit;
    transform: translate(0, 0);
  }

  .payment-icon--4::before {
    content: "";
  }

  .content,
  .content .wrap,
  .main,
  .main__content,
  .step,
  .content>form {
    display: flex;
    flex: 1 0 auto;
    flex-direction: row;
  }

  .sidebar {
    width: 32%;
    color: #717171;
    position: relative;
    margin-top: 10px;
  }

  aside {
    display: block;
    unicode-bidi: isolate;
  }

  .sidebar__header,
  .sidebar__content {
    padding-left: 2em;
  }

  .sidebar__header {
    display: block;
  }

  .sidebar__header {
    border-bottom: 1px solid #e1e1e1;
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .section__title,
  .modal__title,
  .sidebar__title,
  .order-summary-toggle__text {
    color: #333;
    font-weight: 600;
    font-size: 1.15rem;
  }

  .order-summary__sections {
    display: flex;
    flex-direction: column;
  }

  .order-summary__section--is-scrollable {
    overflow-y: auto;
    max-height: calc(100vh - 480px);
  }

  .order-summary__section {
    padding-top: 1em;
    padding-bottom: 1em;
  }

  table {
    border-collapse: collapse;
    border-spacing: 0;
    font-size: 1em;
    width: 100%;
    margin: 0;
  }

  table {
    display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    unicode-bidi: isolate;
    border-spacing: 2px;
    border-color: gray;
  }

  tbody {
    display: table-row-group;
    vertical-align: middle;
    unicode-bidi: isolate;
    border-color: inherit;
  }

  tr {
    display: table-row;
    vertical-align: inherit;
    unicode-bidi: isolate;
    border-color: inherit;
  }

  .product-table td:first-child,
  .stock-table td:first-child {
    padding-left: 0;
  }

  .product td {
    padding-top: 1em;
  }

  .product-table td,
  .product-table th,
  .stock-table td,
  .stock-table th {
    padding-top: 0;
    padding-bottom: 0;
  }

  .product-thumbnailtt {
    width: 50px;
    height: 50px;
    border-radius: 8px;
    background: #fff;
    position: relative;
  }

  .product-thumbnailtt__wrapper {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
  }

  .product-thumbnailtt__image {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    max-width: 100%;
    max-height: 100%;
    margin: auto;
  }

  .product-thumbnailtt__quantity {
    font-size: 0.78em;
    white-space: nowrap;
    padding: 0 0.62em;
    border-radius: 2em;
    background-color: #bf9f70;
    color: #fff;
    position: absolute;
    right: -0.9em;
    top: -0.55em;
    z-index: 3;
    box-sizing: border-box;
    min-width: 1.75em;
    height: 1.75em;
    text-align: center;
    line-height: 1.75em;
  }

  .product-thumbnailtt::after {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    border-radius: 8px;
    border: 1px rgba(0, 0, 0, 0.1) solid;
    z-index: 2;
  }

  td:first-child,
  th:first-child {
    padding-left: 0;
    text-align: left;
  }

  td,
  th {
    font-weight: normal;
  }

  .product-table tbody th,
  .stock-table tbody th {
    padding-left: 1em;
    font-weight: 500;
    color: #333;
    padding-top: 0;
    padding-bottom: 0;
  }

  .product__description {
    text-align: left;
    width: 100%;
  }

  .product__description__name,
  .product__description__property {
    margin-top: 10px;
    display: block;
  }

  .product td {
    padding-top: 1em;
  }

  .product-table td,
  .stock-table td {
    padding-left: 1em;
  }

  td:last-child,
  th:last-child {
    text-align: right;
  }

  .order-summary__section~.order-summary__section {
    border-top: 1px solid rgba(175, 175, 175, 0.34);
  }

  .order-summary__section {
    padding-top: 1em;
    padding-bottom: 1em;
  }

  .visually-hidden {
    border: 0;
    clip: rect(0, 0, 0, 0);
    width: 2px;
    height: 2px;
    margin: -2px;
    overflow: hidden;
    padding: 0;
    position: absolute;
  }

  .field__input-btn-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .field__input-btn-wrapper .field__input-wrapper {
    flex-grow: 1;
  }

  .sidebar .field__input {
    border-color: #d5d5d5;
  }

  .spinner {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .field__input-btn {
    width: auto;
    margin-left: 0.85714em;
    white-space: nowrap;
  }

  .btn--disabled {
    opacity: 0.6;
  }

  .btt {
    cursor: pointer;
    display: inline-block;
    background-color: #bf9f70;
    border-color: #2f71a9;
    background-clip: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border: 1px transparent solid;
    border-radius: 5px;
    color: #fff;
    font-weight: 500;
    padding: 0.98em 1.7em;
    text-align: center;
    position: relative;
  }

  .order-summary__section~.order-summary__section {
    border-top: 1px solid rgba(175, 175, 175, 0.34);
  }

  .order-summary__section {
    padding-top: 1em;
    padding-bottom: 1em;
  }

  .total-line th,
  .total-line td {
    padding-top: 0.75em;
  }

  .origin-price {
    text-decoration: line-through;
    font-size: 0.85em;
  }

  tfoot {
    display: table-footer-group;
    vertical-align: middle;
    unicode-bidi: isolate;
    border-color: inherit;
  }

  .total-line-table__tbody+.total-line-table__footer .total-line:first-child th,
  .total-line-table__tbody+.total-line-table__footer .total-line:first-child td {
    padding-top: 2em;
    position: relative;
  }

  .sidebar .total-line-table__tbody+.total-line-table__footer .total-line:first-child th:before,
  .sidebar .total-line-table__tbody+.total-line-table__footer .total-line:first-child td:before {
    background-color: rgba(175, 175, 175, 0.34);
    content: "";
    position: absolute;
    top: 1em;
    left: 0;
    width: 100%;
    height: 1px;
  }

  .payment-due__label-total {
    font-size: 1.2em;
  }

  .payment-due__price {
    font-size: 1.5em;
    font-weight: 500;
    letter-spacing: -0.04em;
    line-height: 1em;
    color: #bf9f70;
  }

  .order-summary__nav {
    margin-bottom: 1em;
  }

  .field__input-btn-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .layout-flex--row-reverse {
    flex-direction: row-reverse;
  }

  .previous-link {
    color: #bf9f70;
    text-decoration: none;
    cursor: pointer;
  }

  .previous-link__arrow {
    display: inline-block;
    vertical-align: middle;
    font-style: normal;
    transition: all 0.2s ease-out;
    -webkit-transition: all 0.2s ease-out;
  }

  .previous-link__content {
    vertical-align: middle;
  }
</style>