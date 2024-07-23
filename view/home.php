<div class="bg-home">
        <section class="section_banner_top">
                <div class="banner-cover">
                        <picture>
                                <img width="1920" height="500" src="assets_user/img/banner_top_image.webp" alt="Lofi Nest">
                        </picture>
                </div>
                <div class="banner-text">
                        <div class="container">
                                <div class="banner-content">
                                        <h3 class="title">Yến sào</h3>
                                        <p class="sub-title">Giá trị dinh dưỡng cao, nguồn cung cấp năng lượng tự nhiên</p>
                                        <p class="desc">Hãy khám phá sự tinh túy của Yến Sào - một món quà quý giá mà thiên nhiên ban tặng. Với chất lượng đẳng cấp và giá trị dinh dưỡng cao, Yến Sào đã trở thành biểu tượng của sự sang trọng và sức khỏe.</p>
                                </div>
                        </div>
                </div>
        </section>
        <section class="section_flash_sale">
                <div class="container">
                        <div class="block-wraper">
                                <div class="block-title">
                                        <h2>
                                                <a href="" title="Giảm giá sốc">
                                                        <img width="47" height="51" src="assets_user/img/flash-left.webp" alt="Giảm giá sốc">
                                                        Giảm giá sốc
                                                        <img width="63" height="44" src="assets_user/img/flash-right.webp" alt="Giảm giá sốc">
                                                </a>
                                        </h2>
                                </div>
                                <div class="block-content">
                                        <div class="row-bd">
                                                <div class="row-bd1">
                                                        <div class="swiper-container" style="cursor: grab;">
                                                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                                                        <?php
                                                                        $products = getDiscountedProducts();
                                                                        foreach ($products as $product) {
                                                                                $discounted_price = calculateDiscountPrice($product['price'], $product['discount_percentage']);
                                                                        ?>
                                                                                <div class="swiper-slide" style="width: 228px; margin-right: 20px;">
                                                                                        <div class="item_product_main">
                                                                                                <form class="variants product-action" action="" method="post">
                                                                                                        <div class="product-thumbnail">
                                                                                                                <a href="#" class="image_thumb scale_hover" title="<?php echo $product['name']; ?>" style="height: 196px;">
                                                                                                                        <img width="480" height="480" src="assets_user/img/<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>">
                                                                                                                </a>
                                                                                                                <span class="smart">- <?php echo $product['discount_percentage']; ?>%</span>
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
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!-- <section class="section_mission">
                <div class="container">
                        <div class="block-title">
                                <h2>Sứ mệnh</h2>
                        </div>
                        <div class="block-content">
                                <div class="mission-desc">
                                        <p>Yến ra đời với sứ mệnh trở thành người đồng hành uy tín của người Việt Nam trên hành trình nâng cao sức khoẻ. Là người tiên phong trong ngành yến chúng tôi lao động với tất cả cái tâm, cái đức hun đúc từ muôn đời xưa!</p>
                                        <p>Những người đi trước, những người kế thừa, hai thế hệ giữa dòng chảy của cuộc sống từ 10 năm trước hay hôm nay, trên hành trình tìm ra lời giải cho yến Việt chung mục tiêu: Vì khách hàng Cam kết chất lượng – Không ngừng học hỏi, Chuyên nghiệp – Chính trực – Hài hòa lợi ích</p>
                                        <p>DrVitamin ra đời với sứ mệnh trở thành người đồng hành uy tín của người Việt Nam trên hành trình nâng cao sức khoẻ.</p>
                                </div>
                                <div class="mission-image">
                                        <img width="1170" height="515" src="assets_user/img/section_mission_image.webp" alt="Lofi Nest">
                                </div>
                        </div>
                </div>
        </section> -->
        <section class="section_product_new section_product">
                <div class="container">
                        <div class="block-title">
                                <h2>
                                        <a href="#" title="Tổ yến chưng sẵn">Tổ yến chưng sẵn</a>
                                </h2>
                        </div>
                        <div class="row-bd">
                                <div class="row-bd1">
                                        <div class="block-product">
                                                <div class="swiper-container" style="cursor: grab;">
                                                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                                                <?php
                                                                $products = getProductsByCategory(3);
                                                                foreach ($products as $product) {
                                                                        $discounted_price = calculateDiscountPrice($product['price'], $product['discount_percentage']);
                                                                ?>
                                                                        <div class="swiper-slide" style="width: 300px; margin-right: 20px;">
                                                                                <div class="item_product_main">
                                                                                        <form class="variants product-action" action="" method="post">
                                                                                                <div class="product-thumbnail">
                                                                                                        <a href="#" class="image_thumb scale_hover" title="Yến chưng khang phục 2" style="height: 258px;">
                                                                                                                <img width="480" height="480" src="assets_user/img/<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>">

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
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <section class="section_product_tab">
                <div class="container">
                        <div class="e-tabs not-dqtab ajax-tab-1">
                                <div class="content">
                                        <div class="block-title">
                                                <h2>Tổ yến</h2>
                                                <ul class="tabs tabs-title tab-desktop ajax clearfix">
                                                        <li class="tab-link has-content current">
                                                                <span title="Tổ yến tinh chế">Tổ yến tinh chế</span>
                                                        </li>
                                                        <li class="tab-link ">
                                                                <span title="Tổ yến thô">Tổ yến thô</span>
                                                        </li>
                                                        <li class="tab-link ">
                                                                <span title="Tổ yến chưng sẵn">Tổ yến chưng sẵn</span>
                                                        </li>
                                                        <li class="tab-link ">
                                                                <span title="Món soup">Món soup</span>
                                                        </li>
                                                        <li class="tab-link ">
                                                                <span title="Nước yến">Nước yến</span>
                                                        </li>
                                                </ul>
                                        </div>
                                        <div class="tab-1 tab-content current">
                                                <div class="contentfill">
                                                        <div class="swiper-container">
                                                                <div class="swiper-wrapper" style="width: 1280px; transform: translate3d(0px, 0px, 0px); margin-right: 20px;">
                                                                        <div class="swiper-slide" style="width: 300px; margin-right: 20px;">
                                                                                <div class="item_product_main">
                                                                                        <form class="variants product-action" action="" method="post">
                                                                                                <div class="product-thumbnail">
                                                                                                        <a href="#" class="image_thumb scale_hover" title="Tổ yến tinh chế loại 2" style="height: 196px;">
                                                                                                                <img width="480" height="480" src="assets_user/img/ezgif-com-webp-to-jpg-7-15a2056f-35a4-4ad8-891c-9fb85d59ce58-961bb2fe-bfbf-4b3a-be9c-0e63c8bec06f.webp" alt="Tổ yến tinh chế loại 2">
                                                                                                        </a>
                                                                                                        <span class="smart">- 9%</span>
                                                                                                        <span class="smart">- 9%</span>
                                                                                                </div>
                                                                                                <div class="product-info">
                                                                                                        <h3 class="product-name">
                                                                                                                <a href="#" title="Tổ yến tinh chế loại 2">Tổ yến tinh chế loại 2</a>
                                                                                                        </h3>
                                                                                                        <div class="price-box">
                                                                                                                <span class="price">2.150.000đ</span>
                                                                                                                <span class="compare-price">2.350.000₫</span>
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
                                                                        <div class="swiper-slide" style="width: 300px; margin-right: 20px;">
                                                                                <div class="item_product_main">
                                                                                        <form class="variants product-action" action="" method="post">
                                                                                                <div class="product-thumbnail">
                                                                                                        <a href="#" class="image_thumb scale_hover" title="Tổ yến tinh chế loại 1" style="height: 196px;">
                                                                                                                <img width="480" height="480" src="assets_user/img/ezgif-com-webp-to-jpg-4-22cafcf8-ff8d-4f35-83c7-c04882005b53.webp" alt="Tổ yến tinh chế loại 1">
                                                                                                        </a>
                                                                                                        <span class="smart">- 9%</span>
                                                                                                        <span class="smart">- 9%</span>
                                                                                                </div>
                                                                                                <div class="product-info">
                                                                                                        <h3 class="product-name">
                                                                                                                <a href="#" title="Tổ yến tinh chế loại 1">Tổ yến tinh chế loại 1</a>
                                                                                                        </h3>
                                                                                                        <div class="price-box">
                                                                                                                <span class="price">2.150.000đ</span>
                                                                                                                <span class="compare-price">2.350.000₫</span>
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
                                                                        <div class="swiper-slide" style="width: 300px; margin-right: 20px;">
                                                                                <div class="item_product_main">
                                                                                        <form class="variants product-action" action="" method="post">
                                                                                                <div class="product-thumbnail">
                                                                                                        <a href="#" class="image_thumb scale_hover" title="Tổ yến rút lông xuất khẩu" style="height: 196px;">
                                                                                                                <img width="480" height="480" src="assets_user/img/ezgif-com-webp-to-jpg-3-fb37e369-6fd4-4b2b-a003-6d7b49aae776.webp" alt="Tổ yến rút lông xuất khẩu">
                                                                                                        </a>
                                                                                                        <span class="smart">- 9%</span>
                                                                                                        <span class="smart">- 5%</span>
                                                                                                </div>
                                                                                                <div class="product-info">
                                                                                                        <h3 class="product-name">
                                                                                                                <a href="#" title="Tổ yến rút lông xuất khẩu">Tổ yến rút lông xuất khẩu</a>
                                                                                                        </h3>
                                                                                                        <div class="price-box">
                                                                                                                <span class="price">5.300.000đ</span>
                                                                                                                <span class="compare-price">5.600.000₫</span>
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
                                                                        <div class="swiper-slide" style="width: 300px; margin-right: 20px;">
                                                                                <div class="item_product_main">
                                                                                        <form class="variants product-action" action="" method="post">
                                                                                                <div class="product-thumbnail">
                                                                                                        <a href="#" class="image_thumb scale_hover" title="Tổ yến rút lông thường" style="height: 196px;">
                                                                                                                <img width="480" height="480" src="assets_user/img/ezgif-com-webp-to-jpg-1-02e5b6dd-4db6-4ecf-949c-6f6d1b57b505.webp" alt="Tổ yến tinh chế loại 2">
                                                                                                        </a>
                                                                                                        <span class="smart">- 9%</span>
                                                                                                        <span class="smart">- 5%</span>
                                                                                                </div>
                                                                                                <div class="product-info">
                                                                                                        <h3 class="product-name">
                                                                                                                <a href="#" title="Tổ yến rút lông thường">Tổ yến rút lông thường</a>
                                                                                                        </h3>
                                                                                                        <div class="price-box">
                                                                                                                <span class="price">5.200.000đ</span>
                                                                                                                <span class="compare-price">5.500.000₫</span>
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
                                                                </div>
                                                                <div class="swiper-wrapper" style="width: 1280px; transform: translate3d(0px, 0px, 0px);margin-top: 20px;">
                                                                        <div class="swiper-slide" style="width: 300px; margin-right: 20px;margin-right: 20px;">
                                                                                <div class="item_product_main">
                                                                                        <form class="variants product-action" action="" method="post">
                                                                                                <div class="product-thumbnail">
                                                                                                        <a href="#" class="image_thumb scale_hover" title="Tổ yến tinh chế loại 2" style="height: 196px;">
                                                                                                                <img width="480" height="480" src="assets_user/img/ezgif-com-webp-to-jpg-7-15a2056f-35a4-4ad8-891c-9fb85d59ce58-961bb2fe-bfbf-4b3a-be9c-0e63c8bec06f.webp" alt="Tổ yến tinh chế loại 2">
                                                                                                        </a>
                                                                                                        <span class="smart">- 9%</span>
                                                                                                        <span class="smart">- 9%</span>
                                                                                                </div>
                                                                                                <div class="product-info">
                                                                                                        <h3 class="product-name">
                                                                                                                <a href="#" title="Tổ yến tinh chế loại 2">Tổ yến tinh chế loại 2</a>
                                                                                                        </h3>
                                                                                                        <div class="price-box">
                                                                                                                <span class="price">2.150.000đ</span>
                                                                                                                <span class="compare-price">2.350.000₫</span>
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
                                                                        <div class="swiper-slide" style="width: 300px; margin-right: 20px;">
                                                                                <div class="item_product_main">
                                                                                        <form class="variants product-action" action="" method="post">
                                                                                                <div class="product-thumbnail">
                                                                                                        <a href="#" class="image_thumb scale_hover" title="Tổ yến tinh chế loại 1" style="height: 196px;">
                                                                                                                <img width="480" height="480" src="assets_user/img/ezgif-com-webp-to-jpg-4-22cafcf8-ff8d-4f35-83c7-c04882005b53.webp" alt="Tổ yến tinh chế loại 1">
                                                                                                        </a>
                                                                                                        <span class="smart">- 9%</span>
                                                                                                        <span class="smart">- 9%</span>
                                                                                                </div>
                                                                                                <div class="product-info">
                                                                                                        <h3 class="product-name">
                                                                                                                <a href="#" title="Tổ yến tinh chế loại 1">Tổ yến tinh chế loại 1</a>
                                                                                                        </h3>
                                                                                                        <div class="price-box">
                                                                                                                <span class="price">2.150.000đ</span>
                                                                                                                <span class="compare-price">2.350.000₫</span>
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
                                                                        <div class="swiper-slide" style="width: 300px; margin-right: 20px;">
                                                                                <div class="item_product_main">
                                                                                        <form class="variants product-action" action="" method="post">
                                                                                                <div class="product-thumbnail">
                                                                                                        <a href="#" class="image_thumb scale_hover" title="Tổ yến rút lông xuất khẩu" style="height: 196px;">
                                                                                                                <img width="480" height="480" src="assets_user/img/ezgif-com-webp-to-jpg-3-fb37e369-6fd4-4b2b-a003-6d7b49aae776.webp" alt="Tổ yến rút lông xuất khẩu">
                                                                                                        </a>
                                                                                                        <span class="smart">- 9%</span>
                                                                                                        <span class="smart">- 5%</span>
                                                                                                </div>
                                                                                                <div class="product-info">
                                                                                                        <h3 class="product-name">
                                                                                                                <a href="#" title="Tổ yến rút lông xuất khẩu">Tổ yến rút lông xuất khẩu</a>
                                                                                                        </h3>
                                                                                                        <div class="price-box">
                                                                                                                <span class="price">5.300.000đ</span>
                                                                                                                <span class="compare-price">5.600.000₫</span>
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
                                                                        <div class="swiper-slide" style="width: 300px; margin-right: 20px;">
                                                                                <div class="item_product_main">
                                                                                        <form class="variants product-action" action="" method="post">
                                                                                                <div class="product-thumbnail">
                                                                                                        <a href="#" class="image_thumb scale_hover" title="Tổ yến rút lông thường" style="height: 196px;">
                                                                                                                <img width="480" height="480" src="assets_user/img/ezgif-com-webp-to-jpg-1-02e5b6dd-4db6-4ecf-949c-6f6d1b57b505.webp" alt="Tổ yến tinh chế loại 2">
                                                                                                        </a>
                                                                                                        <span class="smart">- 9%</span>
                                                                                                        <span class="smart">- 5%</span>
                                                                                                </div>
                                                                                                <div class="product-info">
                                                                                                        <h3 class="product-name">
                                                                                                                <a href="#" title="Tổ yến rút lông thường">Tổ yến rút lông thường</a>
                                                                                                        </h3>
                                                                                                        <div class="price-box">
                                                                                                                <span class="price">5.200.000đ</span>
                                                                                                                <span class="compare-price">5.500.000₫</span>
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
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!-- <section class="section_product_special">
                <div class="container">
                        <div class="block-title">
                                <h2>
                                        <a href="#" title="Sản phẩm đặc biệt">Sản phẩm đặc biệt</a>
                                </h2>
                        </div>
                        <div class="block-content">
                                <div class="special-desc">
                                        <p>Sử dụng yến sào để làm quà tặng hiện đang là xu hướng HOT trong những năm gần đây. Gói trọn tâm tư, tình cảm trân quý trong set yến quà tặng chính là cách thể hiện tấm lòng một cách tinh tế, đầy đủ thành ý. So với yến sào nguyên tổ thì những hũ yến chưng sẵn chính là sự lựa chọn hoàn hảo để làm quà biếu tặng vì thành phần dinh dưỡng trọn vẹn cùng sự tiện ích. Cùng tham khảo hộp quà tặng từ yến sào thượng hạng cao cấp mà Lofi Nest chuẩn bị nhé.</p>
                                        <p>Yến sào là thực phẩm thượng hạng được đánh giá là giàu dưỡng chất thiết yếu cho cơ thể con người mà không phải sản phẩm tự nhiên nào cũng sở hữu được. Các nghiên cứu khoa học cũng đã chứng minh rằng, yến sào phù hợp sử dụng với hầu hết các đối tượng khác nhau. Từ trẻ nhỏ đến người già, người khỏe hay người ốm đau, phụ nữ mang thai hay cho con bú hoặc người đang ở tuổi trưởng thành thì yến sào đều mang tới những công dụng riêng biệt.</p>
                                </div>
                                <div class="special-image">
                                        <img width="758" height="491" src="assets_user/img/section_product_special_image.webp" alt="Lofi Nest">
                                </div>
                        </div>
                </div>
        </section> -->
        <section class="section_service">
                <div class="container">
                        <div class="swiper-container">
                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide" style="width: 228px; margin-right: 20px;">
                                                <div class="item">
                                                        <div class="image">
                                                                <img width="150" height="150" src="assets_user/img/image_service1.webp" alt="Cảm kết chất lượng">
                                                        </div>
                                                        <div class="text">
                                                                <h3>Cảm kết chất lượng</h3>
                                                                <p>Bồi hoàn gấp 10 lần giá trị sản phẩm nếu phát hiện hàng giả.</p>
                                                        </div>
                                                </div>

                                        </div>
                                        <div class="swiper-slide" style="width: 292.5px; margin-right: 30px;">
                                                <div class="item">
                                                        <div class="image">
                                                                <img width="150" height="150" src="assets_user/img/image_service2.webp" alt="Đảm bảo vệ sinh ATTP">
                                                        </div>
                                                        <div class="text">
                                                                <h3>Đảm bảo vệ sinh ATTP</h3>
                                                                <p>Quy trình sản xuất khép kín, theo tiêu chuẩn về VSATTP của bộ y tế.</p>
                                                        </div>
                                                </div>

                                        </div>
                                        <div class="swiper-slide" style="width: 292.5px; margin-right: 30px;">
                                                <div class="item">
                                                        <div class="image">
                                                                <img width="150" height="150" src="assets_user/img/image_service3.webp" alt="Đổi trả sản phẩm">
                                                        </div>
                                                        <div class="text">
                                                                <h3>Đổi trả sản phẩm</h3>
                                                                <p>Đổi trả sản phẩm trong vòng 24h kể từ thời điểm nhận hàng</p>
                                                        </div>
                                                </div>

                                        </div>
                                        <div class="swiper-slide" style="width: 292.5px; margin-right: 30px;">
                                                <div class="item">
                                                        <div class="image">
                                                                <img width="150" height="150" src="assets_user/img/image_service4.webp" alt="Giao hàng">
                                                        </div>
                                                        <div class="text">
                                                                <h3>Giao hàng</h3>
                                                                <p>Giao hàng toàn quốc, thanh toán COD ngay tại nơi nhận hàng.</p>
                                                        </div>
                                                </div>

                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <section class="section_blog">
                <div class="container">
                        <div class="block-title">
                                <h2>
                                        <a href="#" title="Tin tức">Tin tức</a>
                                </h2>
                        </div>
                        <div class="block-blog">
                                <div class="swiper-container">
                                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                                <div class="swiper-slide" style="width: 400px; margin-right: 30px;">
                                                        <div class="item-blog">
                                                                <div class="block-thumb">
                                                                        <a href="#" class="thumb" title="Ngọc yến kim miêu - set quà tết siêu tiết kiệm 2023">
                                                                                <img src="assets_user/img/thumb1.webp" alt="Ngọc yến kim miêu - set quà tết siêu tiết kiệm 2023">
                                                                        </a>
                                                                </div>
                                                                <div class="block-content">
                                                                        <h3>
                                                                                <a href="#" title="Ngọc yến kim miêu - set quà tết siêu tiết kiệm 2023">Ngọc yến kim miêu - set quà tết siêu tiết kiệm 2023</a>
                                                                        </h3>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="swiper-slide" style="width: 400px; margin-right: 30px;">
                                                        <div class="item-blog">
                                                                <div class="block-thumb">
                                                                        <a href="#" class="thumb" title="Bánh trung thu Nguyệt Dạ Yến">
                                                                                <img src="assets_user/img/thumb2.webp" alt="Bánh trung thu Nguyệt Dạ Yến">
                                                                        </a>
                                                                </div>
                                                                <div class="block-content">
                                                                        <h3>
                                                                                <a href="#" title="Bánh trung thu Nguyệt Dạ Yến">Bánh trung thu Nguyệt Dạ Yến</a>
                                                                        </h3>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="swiper-slide" style="width: 400px; margin-right: 30px;">
                                                        <div class="item-blog">
                                                                <div class="block-thumb">
                                                                        <a href="#" class="thumb" title="SET quà ý nghĩa dành tặng cho đồng nghiệp, đối tác">
                                                                                <img src="assets_user/img/thumb3.webp" alt="SET quà ý nghĩa dành tặng cho đồng nghiệp, đối tác">
                                                                        </a>
                                                                </div>
                                                                <div class="block-content">
                                                                        <h3>
                                                                                <a href="#" title="SET quà ý nghĩa dành tặng cho đồng nghiệp, đối tác">SET quà ý nghĩa dành tặng cho đồng nghiệp, đối tác</a>
                                                                        </h3>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <section class="section_mailchimp">
                <div class="container">
                        <div class="mailchimp">
                                <div class="text-email">
                                        <h4 class="title-menu">
                                                Mong rằng Quý khách hàng sẽ có trải nghiệm tuyệt vời nhất khi sử dụng sản phẩm của chúng tôi!
                                        </h4>
                                        <p class="desc">Đăng ký tư vấn sản phẩm phù hợp & chương trình ưu đãi đặc biệt dành riêng cho bạn!</p>
                                </div>
                                <div class="email">
                                        <form class="newsletter-form" id="mc-form">
                                                <input aria-label="Địa chỉ Email" type="email" class="form-control" placeholder="Nhập email của bạn" name="EMAIL">
                                                <button class="btn btn-default" type="submit" aria-label="Đăng ký nhận tin" name="subscribe">Gửi</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </section>
</div>
<!-- <div class="bg-footer">
        <img src="assets_user/img/footer-bg.webp" class="img-responsion" alt="Lofi Nest">
</div> -->