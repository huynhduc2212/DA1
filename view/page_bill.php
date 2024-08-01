<main>
  <div class="content">
    <form>
      <div class="wrap wrap--mobile-fluid">
        <main class="main main--nosidebar">
          <header class="main__header">
            <div class="logo logo--left">
              <h1 class="shop__name">
                <a href="">Lofi Nest</a>
              </h1>
            </div>
          </header>
          <div class="main__content">
            <article class="row">
              <div class="col col--primary">
                <section class="section section--icon-heading">
                  <div class="section__icon unprintable">
                    <svg xlmns="http://www.w3.org/2000/svg" width="72px" height="72px">
                      <g fill="none" stroke="#8EC343" stroke-width="2">
                        <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                        <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                      </g>
                    </svg>
                  </div>
                  <div class="thankyou-message-container">
                    <h2 class="section__title">Cảm ơn bạn đã đặt hàng</h2>
                    <p class="section__text">
                      Một email xác nhận đã được gửi tới lehuynhduc2279@gmail.com.
                      <br>
                      Xin vui lòng kiểm tra email của bạn
                    </p>
                  </div>
                </section>
              </div>
              <div class="col col--secondary">
                <aside class="order-summary order-summary--bordered order-summary--is-collapsed">
                  <div class="order-summary__header">
                    <div class="order-summary__title">
                      Đơn hàng #1010
                      <span class="unprintable">(1)</span>
                    </div>
                  </div>
                  <div class="order-summary__sections">
                    <div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
                      <table class="product-table">
                        <tbody>
                          <tr class="product">
                            <td class="product__image">
                              <div class="product-thumbnail">
                                <div class="product-thumbnail__wrapper">
                                  <img src="assets_user/img/toyentinhche3.webp" alt="product-thumbnail__image" class="product-thumbnail__image">
                                </div>
                                <span class="product-thumbnail__quantity unprintable">1</span>
                              </div>
                            </td>
                            <th class="product__description">
                              <span class="product__description__name">Tổ yến rút lông xuất khẩu</span>
                            </th>
                            <td class="product__price">5.300.000₫</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="order-summary__section">
                      <table class="total-line-table">
                        <tbody class="total-line-table__tbody">
                          <tr class="total-line total-line--subtotal">
                            <th class="total-line__name">Tạm tính</th>
                            <td class="total-line__price">5.300.000₫</td>
                          </tr>
                          <tr class="total-line total-line--shipping-fee">
                            <th class="total-line__name">Phí vận chuyển</th>
                            <td class="total-line__price"><span>Miễn phí</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="order-summary__section">
                      <table class="total-line-table">
                        <tbody class="total-line-table__tbody">
                          <tr class="total-line payment-due">
                            <th class="total-line__name">
                              <span class="payment-due__label-total">Tổng cộng</span>
                            </th>
                            <td class="total-line__price">
                              <span class="payment-due__price">5.300.000₫</span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </aside>
              </div>
              <div class="col col--primary">
                <section class="section">
                  <div class="section__content section__content--bordered">
                    <div class="row">
                      <div class="col col--md-two">
                        <h2>Thông tin mua hàng</h2>
                        <p>Lê Huỳnh Đức</p>
                        <p>lehuynhduc2279@gmail.com</p>
                        <p>+84367856202</p>
                      </div>
                      <div class="col col--md-two">
                        <h2>Địa chỉ nhận hàng</h2>
                        <p>Lê Huỳnh Đức</p>
                        <p>91/10/200</p>
                        <p>Phường Đa Kao, Quận 1, TP Hồ Chí Minh</p>
                        <p>+84367856202</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col--md-two">
                        <h2>Phương thức thanh toán</h2>
                        <p>Thanh toán khi giao hàng (COD)</p>
                      </div>
                      <div class="col col--md-two">
                        <h2>Phương thức vận chuyển</h2>
                        <p>Giao hàng tận nơi</p>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="section unprintable">
                  <div class="field__input-btn-wrapper field__input-btn-wrapper--floating">
                    <a href="" class="btn btn--large">Tiếp tục mua hàng</a>
                  </div>
                </section>
              </div>
            </article>
          </div>
        </main>
      </div>
    </form>
  </div>
</main>

<style>
  .content {
    overflow: hidden;
  }

  .content,
  .content .wrap,
  .main,
  .main__content,
  .step,
  .content>form {
    display: flex;
    flex: 1 0 auto;
    flex-direction: column;
  }

  form {
    margin: 0;
    padding: 0;
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
  }

  .main--nosidebar .main__header {
    padding-bottom: 1.5em;
  }

  header {
    display: block;
    unicode-bidi: isolate;
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

  h1 {
    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    unicode-bidi: isolate;
  }

  .shop__name {
    line-height: 1.12;
  }

  h1,
  .heading-1 {
    font-size: 2em;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    margin: 0;
    font-weight: normal;
  }

  a,
  .icon-print {
    color: #bf9f70;
    text-decoration: none;
    cursor: pointer;
  }

  .main__content {
    padding-bottom: 1.5em;
  }

  .row {
    margin-left: -10px;
    margin-right: -10px;
  }

  .col--primary .row {
    display: flex;
  }

  article {
    display: block;
    unicode-bidi: isolate;
  }

  .col {
    float: left;
    width: 100%;
    box-sizing: border-box;
    padding-top: 2em;
  }

  div {
    display: block;
    unicode-bidi: isolate;
  }

  .col {
    padding-left: 1em;
    padding-right: 1em;
    padding-top: 0;
  }

  .col--primary {
    width: 60%;
  }

  .row:first-child>.col:first-child {
    padding-top: 0;
  }

  section {
    display: block;
    unicode-bidi: isolate;
  }

  .section--icon-heading {
    text-align: inherit;
    display: flex;
    align-items: center;
    padding-left: 0;
    padding-right: 0;
  }

  .section:first-child {
    padding-top: 0;
  }

  .section__icon {
    margin-bottom: .5rem;
  }

  .section__icon {
    margin-right: 1rem;
  }

  svg:not(:root) {
    overflow-clip-margin: content-box;
    overflow: hidden;
  }

  .thankyou-message-container {
    max-width: 75%;
  }

  h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    unicode-bidi: isolate;
  }

  .section__title,
  .modal__title,
  .sidebar__title,
  .order-summary-toggle__text {
    color: #333;
    font-weight: 600;
    font-size: 1.15rem;
  }

  h2 {
    color: #333;
  }

  p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    unicode-bidi: isolate;
  }

  .col--secondary {
    width: 40%;
    margin-top: 122px;
  }

  .col--secondary {
    float: right;
  }

  .thankyou-page .order-summary {
    background-color: #fafafa;
  }

  .order-summary--bordered {
    border: 1px solid #e1e1e1;
    background: #fff;
  }

  .order-summary--bordered .order-summary__header {
    padding: 7px 15px;
    display: flex;
    justify-content: space-between;
  }

  .order-summary__title {
    font-weight: 600;
  }

  .order-summary__sections {
    display: flex;
    flex-direction: column;
  }

  .order-summary--bordered .order-summary__section--product-list {
    border-top: 1px solid #e1e1e1;
    padding-top: 0;
    padding-bottom: 0;
  }

  .order-summary--bordered .order-summary__section {
    padding: 7px 15px;
  }

  .order-summary__section--is-scrollable {
    overflow-y: auto;
    max-height: calc(100vh - 480px);
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

  table {
    border-collapse: collapse;
    border-spacing: 0;
    font-size: 1em;
    width: 100%;
    margin: 0;
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

  td {
    display: table-cell;
    vertical-align: inherit;
    unicode-bidi: isolate;
  }

  .product-table td,
  .stock-table td {
    padding-left: 1em;
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

  .order-summary--bordered .order-summary__section--product-list tbody td,
  .order-summary--bordered .order-summary__section--product-list tbody th {
    border-bottom: 1px solid #e6e6e6;
    padding-top: 1em;
    padding-bottom: 1em;
  }

  .product-table td:first-child,
  .stock-table td:first-child {
    padding-left: 0;
  }

  .order-summary--bordered .order-summary__section--product-list tbody tr:last-child td,
  .order-summary--bordered .order-summary__section--product-list tbody tr:last-child th {
    border-bottom: none;
  }

  .product-thumbnail {
    width: 50px;
    height: 50px;
    border-radius: 8px;
    background: #fff;
    position: relative;
  }

  .product-thumbnail__wrapper {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
  }

  .product-thumbnail__image {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    max-width: 100%;
    max-height: 100%;
    margin: auto;
  }

  img {
    overflow-clip-margin: content-box;
    overflow: clip;
  }

  .product-thumbnail__quantity {
    font-size: .78em;
    white-space: nowrap;
    padding: 0 .62em;
    border-radius: 2em;
    background-color: #bf9f70;
    color: #fff;
    position: absolute;
    right: -.9em;
    top: -.55em;
    z-index: 3;
    box-sizing: border-box;
    min-width: 1.75em;
    height: 1.75em;
    text-align: center;
    line-height: 1.75em;
  }

  .product-thumbnail::after {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    border-radius: 8px;
    border: 1px rgba(0, 0, 0, .1) solid;
    z-index: 2;
  }

  .product__description {
    text-align: left;
    width: 100%;
  }

  .product-table tbody th,
  .stock-table tbody th {
    padding-left: 1em;
    font-weight: 500;
    color: #333;
    padding-top: 0;
    padding-bottom: 0;
  }

  .order-summary--bordered .order-summary__section--product-list tbody td,
  .order-summary--bordered .order-summary__section--product-list tbody th {
    border-bottom: 1px solid #e6e6e6;
    padding-top: 1em;
    padding-bottom: 1em;
  }

  .order-summary--bordered .order-summary__section--product-list tbody tr:last-child td,
  .order-summary--bordered .order-summary__section--product-list tbody tr:last-child th {
    border-bottom: none;
  }

  .product__description__name,
  .product__description__property {
    display: block;
  }

  .order-summary__section~.order-summary__section {
    border-top: 1px solid rgba(175, 175, 175, .34);
  }

  .order-summary--bordered .order-summary__section {
    padding: 7px 15px;
  }

  .order-summary__section~.order-summary__section {
    border-top: 1px solid rgba(175, 175, 175, .34);
  }

  .order-summary--bordered .order-summary__section {
    padding: 7px 15px;
  }

  .total-line th,
  .total-line td {
    padding-top: .75em;
  }

  td:first-child,
  th:first-child {
    padding-left: 0;
    text-align: left;
  }

  .payment-due__label-total {
    font-size: 1.2em;
  }

  td:last-child,
  th:last-child {
    text-align: right;
  }

  .total-line__price {
    padding-left: 1.5em;
    text-align: right;
    white-space: nowrap;
  }

  .payment-due__price {
    font-size: 1.5em;
    font-weight: 500;
    letter-spacing: -.04em;
    line-height: 1em;
    color: #bf9f70;
  }

  .section__content--bordered {
    border: 1px solid #dadada;
    padding: 1em;
    margin: 1em;
  }

  .section__content::after,
  .section__content::before {
    content: "";
    display: table;
  }

  .row {
    margin-left: -10px;
    margin-right: -10px;
  }

  .row::after {
    content: "";
    display: table;
    clear: both;
  }

  .section__content::after {
    clear: both;
  }

  .field__input-btn-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .field__input-btn-wrapper--floating {
    justify-content: center;
  }

  .field__input-btn-wrapper--floating {
    justify-content: flex-end;
  }

  a,
  .icon-print {
    color: #bf9f70;
    text-decoration: none;
    cursor: pointer;
  }

  .btn--large {
    font-size: 1.1rem;
  }

  .btn {
    cursor: pointer;
    display: inline-block;
    background-color: #bf9f70;
    border-color: #bf9f70;
    background-clip: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border: 1px transparent solid;
    border-radius: 5px;
    color: #fff;
    font-weight: 500;
    padding: .98em 1.7em;
    text-align: center;
    position: relative;
  }

  .product-thumbnail__image {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    max-width: 100%;
    max-height: 100%;
    margin: auto;
  }
</style>