<?php
$html_product_category = show_sp_home($products_category);

if ($category_id > 0) $actAll = '';
else $actAll = 'active';
$html_categories = '<li class="tab-link has-content ' . $actAll . '">
                                                    <a href="?mod=product&act=product">
                                                        <span title="Tất cả sản phẩm yến">Tất cả</span>
                                                    </a>
                         </li>';
foreach ($categories as $item) {
    extract($item);
    if ($id == $category_id) {
        $act = 'active';
    } else {
        $act = '';
    }
    $html_categories .= '<li class="tab-link has-content ' . $act . '">
                                                    <a href="?mod=product&act=product&category_id=' . $id . '#ghim">
                                                        <span title="' . $name . '">' . $name . '</span>
                                                    </a>
                         </li>';
}
?>
<main>
    <div class="bg-home">
        <div class="layout-collection">
            <div class="container">
                <a href="" id="ghim"></a>
                <ul class="list-category">
                    <?php echo $html_categories ?>
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
<section id="pagination">
    <?= $dssotrang ?>
</section>