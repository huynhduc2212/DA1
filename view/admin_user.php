
<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets_admin/css/admin.css">
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

                <!-- <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li> -->
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here" id="searchInput" onkeyup="filterTable()">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="name">
                    <p>Admin</p>
                </div>
            </div>
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Người Dùng</h2>
                        <a href="?mod=user&act=add_user" style="padding: 5px 10px;"><span class="status delivered" style="padding: 8px 10px;">Add</span></a>
                    </div>

                    <table id="orderTable">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Password</td>
                                <td>Role</td>
                                <td>Actions</td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php echo show_us_admin($users); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="assets_admin/js/main.js"></script>
    <script src="assets_admin/js/search.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
