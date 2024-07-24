<?php
$products = getProductByCategory_Home();
foreach ($products as $product) {
    $discounted_price = calculateDiscountPrice($product['price'], $product['discount_percentage']);
?>
    <div class="swiper-slide" style="width: 300px; margin-right: 20px;">
        <div class="item_product_main">
            <form class="variants product-action" action="" method="post">
                <div class="product-thumbnail">
                    <a href="#" class="image_thumb scale_hover" title="Yến chưng khang phục 2" style="height: 258px;">
                        <img width="480" height="480" src="assets_user/img/<?php echo $product['thumbnail']; ?>" alt="<?php echo $product['name']; ?>">
                    </a>
                    <?php if ($product['discount_percentage'] > 0) : ?>
                        <span class="smart"><?php echo $product['discount_percentage']; ?>%</span>
                    <?php endif; ?>
                </div>
                <div class="product-info">
                    <h3 class="product-name">
                        <a href="#" title="<?php echo $product['name']; ?>"><?php echo $product['name']; ?></a>
                    </h3>
                    <div class="price-box">
                        <span class="price"><?php echo number_format($discounted_price, 0, ',', '.'); ?>đ</span>
                        <?php if ($product['discount_percentage'] > 0) : ?>
                            <span class="compare-price"><?php echo number_format($product['price'], 0, ',', '.'); ?>₫</span>
                        <?php endif; ?>
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