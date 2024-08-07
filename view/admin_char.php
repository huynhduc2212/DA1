<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets_admin/css/admin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="?mod=page&act=home">
                        <!-- <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span> -->
                        <span class="title">Lofi Nest</span>
                    </a>
                </li>

                <li>
                    <a href="?mod=product&act=admin_char">
                        <span class="icon">
                            <ion-icon name="bar-chart-outline"></ion-icon>
                        </span>
                        <span class="title">Thống kê</span>
                    </a>
                </li>
                <li>
                    <a href="?mod=product&act=admin_product">
                        <span class="icon">
                            <ion-icon name="bag-remove-outline"></ion-icon>
                        </span>
                        <span class="title">Sản Phẩm</span>
                    </a>
                </li>

                <li>
                    <a href="?mod=user&act=admin_user">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Khách Hàng</span>
                    </a>
                </li>

                <li>
                    <a href="?mod=product&act=admin_order">
                        <span class="icon">
                            <ion-icon name="clipboard-outline"></ion-icon>
                        </span>
                        <span class="title">Đơn Hàng</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="name">
                    <p>Admin</p>
                </div>
            </div>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo get_total_orders(); ?></div>
                        <div class="cardName">Sản phẩm đã bán</div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo number_format(get_total_income(), 0, ',', '.'); ?>đ</div>
                        <div class="cardName">Thu nhập</div>
                    </div>
                </div>
            </div>
            <div class="details">
                <div class="recentOrders">
                <div class="cardHeader">
                        <h2>Doanh Thu</h2>
                    </div>
                        <tbody>
                            <canvas id="lineChart" style="width:100%;max-width:1000px"></canvas>
                        </tbody>
                    
                </div>
            </div>
        </div>

    </div>

    <div id="xValues" style="display:none;"><?php echo json_encode($xValues); ?></div>
    <div id="yValues" style="display:none;"><?php echo json_encode($yValues); ?></div>

    <script src="assets_admin/js/char.js"></script>
    <script src="assets_admin/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>