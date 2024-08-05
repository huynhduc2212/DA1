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
        <h1>Edit User</h1>
    </div>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>" />
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Name</td>
                    <td><input type='text' name='up_name' class='form-control' value="<?php echo htmlspecialchars($user['username']); ?>" /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type='email' name='up_email' class='form-control' value="<?php echo htmlspecialchars($user['email']); ?>" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type='password' name='up_password' class='form-control' value="<?php echo htmlspecialchars($user['password']); ?>" /></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input name='up_phone' class='form-control' value="<?php echo htmlspecialchars($user['phone']); ?>" /></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input name='up_address' class='form-control' value="<?php echo htmlspecialchars($user['address']); ?>" /></td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td>
                        <select name="up_role" class='form-control'>
                            <option value="0" <?php echo ($user['role'] == 0) ? 'selected' : ''; ?>>User</option>
                            <option value="1" <?php echo ($user['role'] == 1) ? 'selected' : ''; ?>>Admin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="submit" class="btn btn-primary">Edit User</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
