<?php
$html_product_new = show_sp_home($products);
$html_product_category = show_sp_home_category($products_category);
extract($product_details);

$discounted_price = calculateDiscountPrice($price, $discount_percentage);
$discount_html = $discount_percentage > 0 ? '<span class="smart">' . $discount_percentage . '%</span>' : '';
$html_price = '
<div class="price-box clearfix">
    <span class="special-price">
        <span class="price product-price">' . number_format($discounted_price, 0, ',', '.') . 'đ</span>
    </span>';
if ($discount_percentage > 0) {
  $html_price .= '
    <span class="old-price">
        <del class="price product-price-old">' . number_format($price, 0, ',', '.') . 'đ</del>
    </span>';
}
$html_price .= '</div>';

// Xử lí hiển thị ảnh
$mainImage = $product_images[0]['img'] ?? '';;
$thumbnail_images = array_slice($product_images, 0, 3);
$list_img = '';
foreach ($thumbnail_images as $index => $image) {
  $list_img .= '
    <div class="swiper-slide" style="width: 116px; margin-right: 10px;" data-hash="' . ($index + 1) . '">
        <div class="p-100">
            <img src="assets_user/img/' . $image['img'] . '" alt="' . ($name) . '" class="lazy thumb">
        </div>
    </div>';
}
$html_product_related = showProductRelated($product_related);
?>
<main>
  <div class="bg-home">
    <section class="product layout-product">
      <div class="container">
        <div class="details-product">
          <div class="row-dt">
            <div class="product-detail-left product-images col-12 col-md-12 col-lg-6 col-left">
              <div class="product-image-block relative">
                <div class="swiper-container gallery-top">
                  <div class="swiper-wrapper" id="lightgallery">
                    <a href="assets_user/img/<?= $mainImage ?>" class="swiper-slide swiper-slide-active" title="Click để xem" style="width: 620px;" data-hash="0">
                      <img id="main-image" height="540" width="540" src="assets_user/img/<?= $mainImage ?>" alt="Tổ yến tinh chế loại 2" class="img-responsive mx-auto d-block lazy">
                    </a>
                  </div>
                </div>
                <div class="swiper-container gallery-thumbs swiper-container-free-mode swiper-container-thumbs">
                  <div class="swiper-wrapper">
                    <?= $list_img ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-right">
              <div class="details-pro">
                <h1 class="title-product"><?= $name ?></h1>
                <!-- <form action="" class="form-inline"> -->
                <?= $html_price ?>
                <div class="form-product">
                  <div class="product-promotion rounded-sm" id="lofi-salebox">
                    <div class="product-promotion__heading">
                      <h3 class="d-inline-flex align-items-center">
                        <img src="assets_user/img/icon-product-promotion.webp" alt="Tổ yến tinh chế loại 2" width="22" height="22" class="mr-2">
                        Khuyến mãi
                      </h3>
                    </div>
                    <ul class="promotion-box">
                      <li>Miễn phí giao hàng cho đơn hàng từ 2.000.000 VNĐ tới mọi tỉnh thành</li>
                      <li>Miễn phí ship nội thành trong bán kính 5km với đơn hàng từ 1.000.000 VNĐ</li>
                      <li>Quà tặng hấp dẫn lên tới 1.000.000 VNĐ</li>
                      <li>Tiết kiệm lên tới 50% khi mua các sản phẩm combo</li>
                    </ul>
                  </div>
                  <form action="?mod=page&act=cart" method="POST" class="form-inline">
                    <input type="hidden" name="idpro" value="<?= $id ?>">
                    <input type="hidden" name="tensp" value="<?= $name ?>">
                    <input type="hidden" name="hinhsp" value="<?= $mainImage ?>">
                    <input type="hidden" name="giasp" value="<?= $price ?>">
                    <input type="hidden" name="discount_percentage" value="<?= $discount_percentage ?>">
                    <input type="hidden" name="soluong" value="1">

                    <div class="clearfix form-group">
                      <div class="flex-quantity">
                        <div class="custom custom-btn-number show">
                          <label class="sl section">Số lượng:</label>
                          <div class="input_number_product form-control">
                            <button class="btn_num num_1 button button_qty" type="button" onclick="var result = document.getElementById('qty'); var qtypro = result.value; if( !isNaN( qtypro ) && qtypro > 1 ) result.value--;return false;">-</button>
                            <input type="text" id="qty" name="quantity" value="1" maxlength="3" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                            <button class="btn_num num_2 button button_qty" type="button" onclick="var result = document.getElementById('qty'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;">+</button>
                          </div>
                        </div>
                        <div class="btn-mua button_actions clearfix">
                          <div class="group-button">
                            <button type="submit" class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart btn-soldout" name="btn_addcart">
                              <span>Thêm vào giỏ hàng</span>
                            </button>
                            <button type="button" class="btn btn-lg btn-gray btn_buy btn-buyNow">
                              <span>Mua ngay</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>

                </div>
                <!-- </form> -->
              </div>
            </div>
          </div>
          <div class="row-dt">
            <div class="product-detail-left col-12 col-md-12 col-lg-12">
              <div class="append-product-tab">
                <div class="product-tab e-tabs not-dqtab">
                  <ul class="tabs tabs-title clearfix">
                    <li class="tab-link active">
                      <h3>Chi tiết sản phẩm</h3>
                    </li>
                  </ul>
                  <div class="tab-float">
                    <div id="tab-1" class="tab-1 tab-content content_extab current">
                      <div class="rte product_getcontent">
                        <div class="ba-text-fpt has-height">
                          <p name="des" id="des"><?= $des ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="productRelate">
        <div class="container">
          <div class="block-title">
            <h2>
              <a href="" title="Sản phẩm cùng loại">
                Sản phẩm cùng loại
              </a>
            </h2>
          </div>
          <div class="margin-am">
            <div class="product-relate-swiper swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" style="cursor: grab;">
              <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                <?= $html_product_related ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>