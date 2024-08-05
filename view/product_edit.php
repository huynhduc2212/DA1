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
        <h1>Edit Product</h1>
    </div>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>" />
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Name</td>
                    <td><input type='text' name='up_name' class='form-control' value="<?php echo htmlspecialchars($product['name']); ?>" /></td>
                </tr>

                <tr>
                    <td>Price</td>
                    <td><input type='number' name='up_price' class='form-control' value="<?php echo htmlspecialchars($product['price']); ?>" /></td>
                </tr>

                <tr>
                    <td>Discount Percentage</td>
                    <td><input type='number' name='up_discount_percentage' class='form-control' value="<?php echo htmlspecialchars($product['discount_percentage']); ?>" /></td>
                </tr>

                <tr>
                    <td>Category</td>
                    <td>
                        <select name="up_Category" class='form-control'>
                            <option value="1" <?php echo ($product['id_category'] == 1) ? 'selected' : ''; ?>>Tổ yến tinh chế</option>
                            <option value="2" <?php echo ($product['id_category'] == 2) ? 'selected' : ''; ?>>Tổ yến thô</option>
                            <option value="3" <?php echo ($product['id_category'] == 3) ? 'selected' : ''; ?>>Tổ yến chưng sẵn</option>
                            <option value="4" <?php echo ($product['id_category'] == 4) ? 'selected' : ''; ?>>Món soup</option>
                            <option value="5" <?php echo ($product['id_category'] == 5) ? 'selected' : ''; ?>>Nước yến</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Description</td>
                    <td><textarea name='up_Des' class='form-control' rows='5'><?php echo htmlspecialchars($product['des']); ?></textarea></td>
                </tr>

                <tr>
                    <td>Current Image</td>
                    <td>
                        <img src="assets_user/img/<?php echo $product['thumbnail']; ?>" alt="Current Image" width="100">
                        <input type="hidden" name="current_image" value="<?php echo $product['thumbnail']; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>New Image</td>
                    <td>
                        <input type="file" name="up_img">
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="submit" class="btn btn-primary">Edit Product</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>