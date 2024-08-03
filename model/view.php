<?php
function show_sp_home($products)
{
  $html_product_new = "";
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
                                <div class="variants product-action">
                                            <div class="product-thumbnail">
                                                    <a href="?mod=product&act=productDetails&idpro=' . $id . '" class="image_thumb scale_hover" title="" style="height: 258px;">
                                                            <img width="480" height="480" src="assets_user/img/' . $thumbnail . '" alt="' . $name . '">
                                                    </a>
                                                    ' . $giamgia . '
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
  }
  return $html_product_new;
}

function show_sp_home_category($products)
{
  $html_product_new = "";
  foreach ($products as $item) {
    extract($item);
    $discounted_price = calculateDiscountPrice($price, $discount_percentage);
    if ($discount_percentage > 0) {
      $giamgia = '<span class="smart">' . $discount_percentage . '%</span>';
    } else {
      $giamgia = '';
    }
    $html_product_new .= '<div class="swiper-slide" style="width: 300px; margin-right: 20px;"">
                            <div class="item_product_main">
                                    <div class="variants product-action">
                                            <div class="product-thumbnail">
                                                    <a href="?mod=product&act=productDetails&idpro=' . $id . '" class="image_thumb scale_hover" title="" style="height: 196px;">
                                                            <img width="480" height="480" src="assets_user/img/' . $thumbnail . '" alt="' . $name . '">
                                                    </a>
                                                    ' . $giamgia . '
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
  }
  return $html_product_new;
}

function showProductFlashSales($products)
{
  $html_product_sale = '';
  foreach ($products as $item) {
    extract($item);
    $discounted_price = calculateDiscountPrice($price, $discount_percentage);
    $html_product_sale .= '<div class="swiper-slide" style="width: 228px; margin-left: 10px; margin-right: 10px;">
        <div class="item_product_main">
            <div class="variants product-action">
                <div class="product-thumbnail">
                    <a href="?mod=product&act=productDetails&idpro=' . $id . '" class="image_thumb scale_hover" title="' . $name . '" style="height: 196px;">
                        <img width="480" height="480" src="assets_user/img/' . $thumbnail . '" alt="' . $name . '">
                    </a>
                    <span class="smart">' . $discount_percentage . '%</span>
                </div>
                <div class="product-info">
                    <h3 class="product-name">
                        <a href="?mod=product&act=productDetails&idpro=' . $id . '" title="' . $name . '">' . $name . '</a>
                    </h3>
                    <div class="price-box">
                        <span class="price">' . number_format($discounted_price, 0, ',', '.') . 'đ</span>
                        <span class="compare-price">' . number_format($price, 0, ',', '.') . '₫</span>
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
  }
  return $html_product_sale;
}

function showProductRelated($products)
{
  $html_product_related = '';
  foreach ($products as $item) {
    extract($item);
    $discounted_price = calculateDiscountPrice($price, $discount_percentage);
    if ($discount_percentage > 0) {
      $giamgia = '<span class="smart">' . $discount_percentage . '%</span>';
    } else {
      $giamgia = '';
    }
    $html_product_related .= '<div class="swiper-slide" style="width: 236px; margin-left: 10px;  margin-right: 10px;">
                            <div class="item_product_main">
                                    <div class="variants product-action">
                                            <div class="product-thumbnail">
                                                    <a href="?mod=product&act=productDetails&idpro=' . $id . '" class="image_thumb scale_hover" title="" style="height: 204px;">
                                                            <img width="480" height="480" src="assets_user/img/' . $thumbnail . '" alt="' . $name . '">
                                                    </a>
                                                    ' . $giamgia . '
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
  }
  return $html_product_related;
}

function showBlogs($blogs)
{
  $html_blog = '';
  foreach ($blogs as $item) {
    extract($item);
    $html_blog .= '<div class="tin-tuc-item">
                    <div class="tin-tuc-thumb">
                        <a href="?mod=page&act=blogDetails&idblog=' . $id . '">
                            <img src="assets_user/img/' . $img . '" alt="' . $img . '">
                            <div class="tin-tuc-content">
                                <h3>' . $name . '</h3>
                            </div>
                        </a>
                    </div>
                </div>';
  }
  return $html_blog;
}

function show_cart_checkout()
{
  $html_table_product = '';

  if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
    $tong = 0;
    foreach ($_SESSION['giohang'] as $item) {
      extract($item);
      $thanhtien = $giasp * $soluong;
      $tong += $thanhtien;
      $html_table_product .= '<table class="product-table">
                      <tbody>
                        <tr class="product">
                          <td class="product__image">
                            <div class="product-thumbnailtt">
                              <div class="product-thumbnailtt__wrapper">
                                <img src="assets_user/img/' . $hinhsp . '" alt="' . $tensp . '">
                              </div>
                              <span class="product-thumbnailtt__quantity">' . $soluong . '</span>
                            </div>
                          </td>
                          <th class="product__description">
                            <span class="product__description__name">' . $tensp . '</span>
                          </th>
                          <td class="product__price">' . number_format($giasp, 0, ',', '.') . 'đ</td>
                        </tr>
                      </tbody>
                    </table>';
    }
  }
  return $html_table_product;
}

function show_bill($billct)
{
  $html_orderdetails = '';
  foreach ($billct as $item) {
    extract($item);
    $html_orderdetails .= '
                          <tr class="product">
                            <td class="product__image">
                              <div class="product-thumbnail">
                                <div class="product-thumbnail__wrapper">
                                  <img src="assets_user/img/' . $img . '" alt="product-thumbnail__image" class="product-thumbnail__image">
                                </div>
                                <span class="product-thumbnail__quantity unprintable">' . $quantity . '</span>
                              </div>
                            </td>
                            <th class="product__description">
                              <span class="product__description__name">' . $name . '</span>
                            </th>
                            <td class="product__price">' . number_format($price, 0, ',', '.') . '₫</td>
                          </tr>
                        ';
  }
  return $html_orderdetails;
}

function show_sp_admin($products)
{
  $html_product_admin = "";
  foreach ($products as $item) {
    extract($item);
    $discounted_price = calculateDiscountPrice($price, $discount_percentage);
    // $short_desc = mb_strimwidth($des, 0, 20, '...'); // Giới hạn 50 ký tự
    $html_product_admin .= '<tr>
                                    <td>' . $id . '</td>
                                    <td>' . $name . '</td>
                                    <td>' . number_format($discounted_price, 0, ',', '.') . 'đ</td>
                                    <td>' . $discount_percentage . '</td>
                                    <td>' . $id_category . '</td>
                                    <td>' . $thumbnail . '</td>
                                    <td>
<a href="?mod=product&act=add_product"><span class="status delivered">Add</span></a>
<a href="?mod=product&act=edit_product&id=' . $id . '"><span class="status delivered">Edit</span>
<a href="?mod=product&act=Delete_product&id=' . $id . '"><span class="status return">Delete</span>
                                    </td>
                                </tr>';
  }
  return $html_product_admin;
}
