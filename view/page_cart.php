<?php
if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
  $html_cart = '<div class="cart-header-info">
                      <div>Thông tin sản phẩm</div>
                      <div>Đơn giá</div>
                      <div>Số lượng</div>
                      <div>Thành tiền</div>
                    </div>';
  $tong = 0;
  $i = 0;
  foreach ($_SESSION['giohang'] as $item) {
    extract($item);
    $id = $item['idpro'];
    $thanhtien = $giasp * $soluong;
    $tong += $thanhtien;
    // Đảm bảo rằng $giasp và $soluong là số
    // $giasp = is_numeric($giasp) ? (float) $giasp : 0;
    // $soluong = is_numeric($soluong) ? (int) $soluong : 0;
    $html_cart .= '<div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
                      <div class="ajaxcart__row">
                        <div class="ajaxcart__product cart_product">
                          <a href="?mod=product&act=productDetails&idpro=' . $id . '" class="ajaxcart__product-image cart_image" title="' . $tensp . '">
                            <img src="assets_user/img/' . $hinhsp . '" alt="' . $tensp . '">
                          </a>
                          <div class="grid__item cart_info">
                            <div class="ajaxcart__product-name-wrapper cart_name">
                              <a href="" class="ajaxcart__product-name h4" title="' . $tensp . '">' . $tensp . '</a>
                              <a href="?mod=page&act=cart&ind=' . $i . '" class="cart__btn-remove remove-item-cart ajaxifyCart--remove">Xóa</a>
                            </div>
                            <div class="grid">
                              <div class="grid__item one-half text-right cart_prices">
                                <span class="cart-price">' . number_format($giasp, 0, ',', '.') . '</span>
                              </div>
                            </div>
                            <div class="grid">
                              <div class="grid__item one-half cart_select">
                                <div class="ajaxcart__qty input-group-btn">
                                  ' . $soluong . '
                                </div>
                              </div>
                            </div>
                            <div class="grid">
                              <div class="grid__item one-half text-right cart_prices">
                                <span class="cart-price">' . number_format($thanhtien, 0, ',', '.') . '</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>';
    $i++;
  }
  $html_cart .= ' 
  <a href="?mod=page&act=cart&delcart=1" class="del-all">
  <button type="button">Xóa tất cả sản phẩm</button>
  </a>
  <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                      <div class="row-bd">
                        <div class="col-lg-4 col-12 offset-md-8 offset-lg-8 offset-xl-8">
                          <div class="ajaxcart__subtotal">
                            <div class="cart__subtotal">
                              <div class="cart__col-6">Tổng tiền:</div>
                              <div class="text-right cart__totle">
                                <span class="total-price">' . number_format($tong, 0, ',', '.') . '</span>
                              </div>
                            </div>
                          </div>
                          <div class="cart__btn-proceed-checkout-dt">
                          <a href="?mod=page&act=checkout">
                            <button type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
                          </a>
                          </div>
                        </div>
                      </div>
                    </div>';
} else {
  $html_cart = '<div class= "box-cart">
  <i class="fa-solid fa-cart-arrow-down empty-cart"></i>
  <div class="text">Không có sản phẩm nào trong giỏ hàng của bạn</div>
  </div>';
}
?>
<div class="bg-home">
  <section class="main-cart-page main-container col1-layout">
    <div class="main container cartpcstyle">
      <div class="wrap_background_aside margin-bottom-40">
        <div class="row-bd">
          <div class="col-xl-9 col-lg-8 col-12 col-cart-left">
            <div class="cart-page d-xl-block d-none">
              <div class="drawer__inner">
                <div class="CartPageContainer">
                  <?php echo $html_cart; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>