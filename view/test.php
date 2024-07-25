<?php
$products = getDiscountedProducts();
foreach ($products as $product) {
    $discounted_price = calculateDiscountPrice($product['price'], $product['discount_percentage']);
?>
    <div class="swiper-slide" style="width: 228px; margin-left: 10px; margin-right: 10px;">
        <div class="item_product_main">
            <form class="variants product-action" action="" method="post">
                <div class="product-thumbnail">
                    <a href="?mod=product&act=productDetails" class="image_thumb scale_hover" title="<?php echo $product['name']; ?>" style="height: 196px;">
                        <img width="480" height="480" src="assets_user/img/<?php echo $product['thumbnail']; ?>" alt="<?php echo $product['name']; ?>">
                    </a>
                    <span class="smart"><?php echo $product['discount_percentage']; ?>%</span>
                </div>
                <div class="product-info">
                    <h3 class="product-name">
                        <a href="#" title="<?php echo $product['name']; ?>"><?php echo $product['name']; ?></a>
                    </h3>
                    <div class="price-box">
                        <span class="price"><?php echo number_format($discounted_price, 0, ',', '.'); ?>đ</span>
                        <span class="compare-price"><?php echo number_format($product['price'], 0, ',', '.'); ?>₫</span>
                    </div>
                </div>
                <div class="product-btn d-none d-xl-block">
                    <div class="actions-primary btn-views">
                        <button class="btn-cart" type="button" title="Thêm vào giỏ hàng">
                            Thêm vào giỏ hàng
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
}
?>