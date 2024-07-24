<?php
//quản lý view và model liên quan: trang chủ,liên hệ, giới thiệu...
//gọi dc: view, model
include_once 'model/connect.php';
include_once 'view/template_head.php';
include_once 'view/template_header.php';

if ($_GET['act']) {
        switch ($_GET['act']) {
                case 'home':
                        include_once "model/products.php";
                        include_once "model/categories.php";
                        $html_product_new = "";
                        $products = getProductByCategory_Home();
                        foreach ($products as $item) {
                                extract($item);
                                $discounted_price = calculateDiscountPrice($price, $discount_percentage);
                                if ($discount_percentage > 0) {
                                        $giamgia = '<span class="smart">' . $discount_percentage . '%</span>';
                                } else {
                                        $giamgia = '';
                                }
                                $html_product_new .= '<div class="swiper-slide" style="width: 300px; margin-left: 10px;  margin-right: 10px;">
                            <div class="item_product_main">
                                    <form class="variants product-action" action="" method="post">
                                            <div class="product-thumbnail">
                                                    <a href="#" class="image_thumb scale_hover" title="" style="height: 258px;">
                                                            <img width="480" height="480" src="assets_user/img/' . $thumbnail . '" alt="' . $name . '">
                                                    </a>
                                                    ' . $giamgia . '
                                            </div>
                                            <div class="product-info">
                                                    <h3 class="product-name">
                                                            <a href="#" title="' . $name . '">' . ($name) . '</a>
                                                    </h3>
                                                    <div class="price-box">
                                                            <span class="price">' . number_format($discounted_price, 0, ',', '.') . 'đ</span>
                                            ' . ($discount_percentage > 0 ? '<span class="compare-price">' . number_format($price, 0, ',', '.') . '₫</span>' : '') . '
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
                    </div>';
                        }

                        include_once 'view/page_home.php';
                        break;
                default:
                        # 404 - trang web không tồn tại!
                        break;
        }
}
include_once 'view/template_near_footer.php';
include_once 'view/template_footer.php';
