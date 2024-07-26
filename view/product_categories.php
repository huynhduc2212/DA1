<?php
$html_product_category = show_sp_home($products_category);
?>
<main>
    <div class="bg-home">
        <div class="layout-collection">
            <div class="container">
                <ul class="list-category">
                    <li class="item active"><a href="">Tổ yến tinh chế</a></li>
                    <li class="item"><a href="">Tổ yến thô</a></li>
                    <li class="item"><a href="">Tổ yến chưng sẵn</a></li>
                    <li class="item"><a href="">Món soup</a></li>
                    <li class="item"><a href="">Nước yến</a></li>
                </ul>
                <div class="row-bd">
                    <div class="row-bd1">
                        <div class="block-product">
                            <div class="swiper-container" style="cursor: grab;">
                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                    <?php echo $html_product_category; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>