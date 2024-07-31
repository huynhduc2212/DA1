<main>
  <div class="content">
    <form action="?mod=page&act=checkout" method="post">
      <div class="wrap">
        <main class="main-payment">
          <header class="main__header">
            <div class="logo logo--left">
              <h1 class="shop__name">
                <a href="">Lofi Nest</a>
              </h1>
            </div>
          </header>
          <div class="main__content">
            <article class="animate-floating-labels row">
              <div class="col col--two">
                <section class="section">
                  <div class="section__header">
                    <div class="layout-flex">
                      <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                        Thông tin nhận hàng
                      </h2>
                      <a href="">
                        <i class="fa fa-user-circle-o fa-lg"></i>
                        <span>Đăng nhập</span>
                      </a>
                    </div>
                  </div>
                  <div class="section__content">
                    <div class="fieldset">
                      <div class="field">
                        <div class="field__input-wrapper">
                          <input name="fullname" type="text" class="field__input" placeholder="Họ và tên">
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__input-wrapper">
                          <input name="phone" type="tel" class="field__input" placeholder="Số điện thoại">
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__input-wrapper">
                          <input name="address" type="text" class="field__input" placeholder="Địa chỉ">
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col col--two">
                <section class="section">
                  <div class="section__header">
                    <div class="layout-flex">
                      <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                        Thanh toán
                      </h2>
                    </div>
                  </div>
                  <div class="section__content">
                    <div class="content-box">
                      <div class="content-box__row">
                        <div class="radio-wrapper">
                          <div class="radio__input">
                            <input type="radio" class="input-radio">
                          </div>
                          <label class="radio__label">
                            <span class="radio__label__primary">Thanh toán khi giao hàng (COD)</span>
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
                  <table class="product-table">
                    <tbody>
                      <tr class="product">
                        <td class="product__image">
                          <div class="product-thumbnailtt">
                            <div class="product-thumbnailtt__wrapper">
                              <img src="assets_user/img/toyentinhche3.webp" alt="">
                            </div>
                            <span class="product-thumbnailtt__quantity">1</span>
                          </div>
                        </td>
                        <th class="product__description">
                          <span class="product__description__name">Tổ yến rút lông xuất khẩu</span>
                        </th>
                        <td class="product__price">5.300.000₫</td>
                      </tr>

                      <tr class="product">
                        <td class="product__image">
                          <div class="product-thumbnailtt">
                            <div class="product-thumbnailtt__wrapper">
                              <img src="assets_user/img/toyentinhche3.webp" alt="">
                            </div>
                            <span class="product-thumbnailtt__quantity">1</span>
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
                        <td class="total-line__price">10.600.000₫</td>
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
                          <span class="payment-due__price">10.600.000</span>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
                  <input type="hidden" name="tongdonhang">
                  <button name="btn_order" type="submit" class="btt btn-checkout spinner">
                    <span class="spinner-label">ĐẶT HÀNG</span>
                  </button>
                  <a href="" class="previous-link">
                    <i class="previous-link__arrow">❮</i>
                    <span class="previous-link__content">Quay về giỏ hàng</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </form>
  </div>
</main>