<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <h1>Order User</h1>
    </div>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>" />
            <table class='table table-hover table-responsive table-bordered'>
        
                <tr>
                    <td>Phone</td>
                    <td><input name='up_phone' class='form-control' value="<?php echo htmlspecialchars($order['phone']); ?>" /></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input name='up_address' class='form-control' value="<?php echo htmlspecialchars($order['address']); ?>" /></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="up_status" class='form-control'>
                            <option value="1" <?php echo ($order['status'] == 1) ? 'selected' : ''; ?>>Đang xử lý</option>
                            <option value="2" <?php echo ($order['status'] == 2) ? 'selected' : ''; ?>>Đang giao hàng</option>
                            <option value="3" <?php echo ($order['status'] == 3) ? 'selected' : ''; ?>>Đã giao hàng</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="submit" class="btn btn-primary">Edit Order</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
