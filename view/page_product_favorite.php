<?php
if (isset($_SESSION['favorite']) && (count($_SESSION['favorite']) > 0)) {
    $html_product_favorite = "";

    $i = 0;
    foreach ($_SESSION['favorite'] as $item) {
        extract($item);
        $discounted_price = calculateDiscountPrice($price, $discount_percentage);
        if ($discount_percentage > 0) {
            $giamgia = '<span class="smart">' . $discount_percentage . '%</span>';
        } else {
            $giamgia = '';
        }
        $html_product_favorite .= '<div class="swiper-slide" style="width: 300px; margin-left: 10px;  margin-right: 10px;">
                            <div class="item_product_main">
                                <div class="variants product-action">
                                            <div class="product-thumbnail">
                                                    <a href="?mod=product&act=productDetails&idpro=' . $id . '" class="image_thumb scale_hover" title="" style="height: 258px;">
                                                            <img width="480" height="480" src="assets_user/img/' . $thumbnail . '" alt="' . $name . '">
                                                    </a>
                                                    ' . $giamgia . '
                                        <div class="action d-xl-block d-none">
                                            <div class="actions-secondary2">
                                                <a title="Xem nhanh" href="?mod=product&act=productDetails&idpro=' . $id . '" class="btn-views quick-view">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a title="Thêm vào yêu thích" href="?mod=page&act=favorite&ind=' . $i . '" class="btn-views compare">
                                                    <i class="fa-solid fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                            </div>
                                            <div class="product-info">
                                                    <h3 class="product-name">
                                                            <a href="?mod=product&act=productDetails&idpro=' . $id . '" title="' . $name . '">' . ($name) . '</a>
                                                    </h3>
                                                    <div class="price-box">
                                                            <span class="price">' . number_format($discounted_price, 0, ',', '.') . 'đ</span>
                                            ' . ($discount_percentage > 0 ? '<span class="compare-price">' . number_format($price, 0, ',', '.') . '₫</span>' : '') . '
                                                    </div>
                                            </div>
                                            <div class="product-btn d-none d-xl-block">
                                                <div class="actions-primary btn-views">
                                                      <form action="?mod=page&act=cart" method="post">
                                                      <input type="hidden" name="tensp" value="' . $name . '">
                                                      <input type="hidden" name="idpro" value="' . $id . '">
                                                      <input type="hidden" name="hinhsp" value="' . $thumbnail . '">
                                                      <input type="hidden" name="giasp" value="' . $discounted_price . '">
                                                      <input type="hidden" name="soluong" value="1">
                                                      <button class="btn-cart" name="btn_addcart" type="submit" title="Thêm vào giỏ hàng">
                                                                     Thêm vào giỏ hàng
                                                      </button>
                                                   </form>
                                                </div>
                                            </div>
                                </div>
                            </div>
                          
                    </div>';
        $i++;
    }
} else {
    $html_product_favorite = '<div class= "box-favor">
  <div class="text">Không có sản phẩm nào trong danh mục yêu thích của bạn của bạn</div>
  </div>';
}
?>
<main>
    <div class="bg-home">
        <div class="layout-collection">
            <div class="container">
                <h2 class="title-favor">Danh sách sản phẩm yêu thích của tôi</h2>
                <div class="row-bd">
                    <div class="row-bd1">
                        <div class="block-product">
                            <div class="swiper-container" style="cursor: grab;">
                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                    <?php echo $html_product_favorite; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .title-favor {
        font-weight: 600;
        padding-top: 10px;
    }
</style>