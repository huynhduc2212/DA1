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
        <h1>Add New Product</h1>
    </div>
    <div class="container">

        <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
            <table class='table table-hover table-responsive table-bordered'>

                <tr>
                    <td>Name</td>
                    <td><input type='text' name='up_name' class='form-control' /></td>
                </tr>

                <tr>
                    <td>Price</td>
                    <td><input name='up_price' class='form-control'></input></td>
                </tr>

                <tr>
                    <td>discount_percentage</td>
                    <td><input name='up_discount_percentage' class='form-control'></input></td>
                </tr>

                <tr>
                    <td>Category</td>
                    <td><input name='up_Category' class='form-control'></input></td>
                </tr>

                <tr>
                    <td>Des</td>
                    <td><textarea name='up_Des' class='form-control' rows='5' cols='100'></textarea></td>
                </tr>


                <tr>
                    <td>Image</td>
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