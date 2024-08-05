<body>
  <div class="top-bar">
    <div class="container">
      <div class="row-top-bar">
        <div class="top-bar-left">
          <a href="" title="">
            <i class="fa-solid fa-phone contact"></i>
            <span>1900 6750</span>
          </a>
          <a href="" title="">
            <i class="fa-solid fa-envelope mailbox"></i>
            <span>support@sapo.vn</span>
          </a>
        </div>
        <div class="top-bar-right">
          <ul>
            <?php
            if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
              echo '
            <li><a href="?mod=user&act=logout">Đăng xuất</a></li>';
            }
            ?>
            <!-- <?php
                  if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
                    echo '<li><a href="?mod=user&act=userupdate">' . $_SESSION['user']['username'] . '</a></li>
            <li><a href="?mod=user&act=logout">Đăng xuất</a></li>';
                  } else {
                    echo '<li><a href="?mod=user&act=login">Đăng nhập</a></li>
            <li><a href="?mod=user&act=signup">Đăng kí</a></li>';
                  }
                  ?> -->
            <li><a href="">Hệ thống cửa hàng</a></li>
            <li><a href="?mod=page&act=favorite">Sản phẩm yêu thích</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <header class="header">
    <div class="container">
      <div class="row-header">
        <div class="header-logo">
          <a href="?mod=page&act=home"><img src="assets_user/img/logo.webp" alt="" /></a>
        </div>
        <?php
        if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
          echo '<div class="header-menu" style=" min-width: 856px;";>
          <nav class="header-nav">
            <ul class="nav-list">
              <li class="nav-item"><a href="?mod=page&act=home">Trang chủ</a></li>
              <li class="nav-item">
                <a href="?mod=page&act=about" class="link-item">Giới thiệu </a>
              </li>
              <li class="nav-item">
                <a href="?mod=product&act=product" class="link-item">Sản phẩm </a>
                <i class="fa fa-caret-down"></i>
                <div class="mega-content">
                  <div class="container">
                    <ul class="level0">
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=1">Tổ yến tinh chế</a>
                      </li>
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=2">Tổ yến thô</a>
                      </li>
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=3">Tổ yến chưng sẵn</a>
                      </li>
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=4">Món soup</a>
                      </li>
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=5">Nước yến</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item"><a href="?mod=page&act=blog">Tin tức</a></li>
              <li class="nav-item"><a href="?mod=page&act=contact">Liên hệ</a></li>
            </ul>
          </nav>
        </div>';
        } else {
          echo '<div class="header-menu" style=" min-width: 915px;";>
          <nav class="header-nav">
            <ul class="nav-list">
              <li class="nav-item"><a href="?mod=page&act=home">Trang chủ</a></li>
              <li class="nav-item">
                <a href="?mod=page&act=about" class="link-item">Giới thiệu </a>
              </li>
              <li class="nav-item">
                <a href="?mod=product&act=product" class="link-item">Sản phẩm </a>
                <i class="fa fa-caret-down"></i>
                <div class="mega-content">
                  <div class="container">
                    <ul class="level0">
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=1">Tổ yến tinh chế</a>
                      </li>
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=2">Tổ yến thô</a>
                      </li>
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=3">Tổ yến chưng sẵn</a>
                      </li>
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=4">Món soup</a>
                      </li>
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=5">Nước yến</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item"><a href="?mod=page&act=blog">Tin tức</a></li>
              <li class="nav-item"><a href="?mod=page&act=contact">Liên hệ</a></li>
            </ul>
          </nav>
        </div>';
        }
        ?>
        <!-- <div class="header-menu">
          <nav class="header-nav">
            <ul class="nav-list">
              <li class="nav-item"><a href="?mod=page&act=home">Trang chủ</a></li>
              <li class="nav-item">
                <a href="?mod=page&act=about" class="link-item">Giới thiệu </a>
              </li>
              <li class="nav-item">
                <a href="?mod=product&act=product" class="link-item">Sản phẩm </a>
                <i class="fa fa-caret-down"></i>
                <div class="mega-content">
                  <div class="container">
                    <ul class="level0">
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=1">Tổ yến tinh chế</a>
                      </li>
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=2">Tổ yến thô</a>
                      </li>
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=3">Tổ yến chưng sẵn</a>
                      </li>
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=4">Món soup</a>
                      </li>
                      <li class="level1">
                        <a href="?mod=product&act=product&category_id=5">Nước yến</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item"><a href="?mod=page&act=blog">Tin tức</a></li>
              <li class="nav-item"><a href="?mod=page&act=contact">Liên hệ</a></li>
            </ul>
          </nav>
        </div> -->
        <div class="header-control">
          <div class="ul-control">
            <?php
            if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
              echo '<ul><li><a href="?mod=user&act=client">Hi,' . $_SESSION['user']['username'] . '</a></li></ul>';
            } else {
              echo ' <div class="header-user">
              <a href="" class="icon">
                <i class="fa-solid fa-user"></i>
              </a>
              <ul class="option-user">
                <li><a href="?mod=user&act=signup">Đăng kí</a></li>
                <li><a href="?mod=user&act=login">Đăng nhập</a></li>
              </ul>
            </div>';
            }
            ?>
            <!-- <div class="header-user">
              <a href="" class="icon">
                <i class="fa-solid fa-user"></i>
              </a>
              <ul class="option-user">
                <li><a href="?mod=user&act=signup">Đăng kí</a></li>
                <li><a href="?mod=user&act=login">Đăng nhập</a></li>
              </ul>
            </div> -->
            <div class="header-search">
              <a href="" class="icon">
                <i class="fa-solid fa-magnifying-glass button-search"></i>
              </a>
              <div class="search-header">
                <form action="?mod=product&act=product" class="search-form" method="post">
                  <input type="text" placeholder="Tìm kiếm sản phẩm" name="keyword">
                  <button type="submit" name="timkiem">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </form>
              </div>
            </div>
            <div class="header-cart">
              <a href="?mod=page&act=cart" class="icon">
                <img src="https://bizweb.dktcdn.net/100/488/726/themes/911609/assets/shopping-cart.svg?1705829900945" alt="" />
                <span><?= get_soluong_cart() ?></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>