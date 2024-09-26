<?php
// function insert_user($username, $password, $email, $phone, $address)
// {
//     $sql = "INSERT INTO users (username, password, email, phone, address) values('$username','$password','$email', '$phone','$address')";
//     return pdo_execute($sql);
// }

function insert_user($username, $fullname, $email, $password)
{
    $sql = "INSERT INTO users (username,fullname,email, password) values('$username','$fullname','$email','$password')";
    return pdo_execute($sql);
}

// function insert_user_returnID($username, $password, $email, $phone)
// {
//     $sql = "INSERT INTO users (username, password, email, phone) values('$username','$password','$email','$phone')";
//     return pdo_execute_returnID($sql);
// }

function insert_user_returnID($fullname, $address, $email, $phone, $password)
{
    $sql = "INSERT INTO users (fullname, address, email, phone, password) values('$fullname','$address','$email','$phone','$password')";
    return pdo_execute_returnID($sql);
}


function check_login($email, $password)
{
    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
    return pdo_query_one($sql);
}

function update_user($id, $email, $fullname, $address, $phone, $password, $username)
{
    $sql = "UPDATE users SET email = '$email', fullname = '$fullname', address = '$address',
    phone = '$phone', password = '$password', username = '$username' where id = $id";
    return pdo_execute($sql);
}

function check_password($id, $password)
{
    $sql = "SELECT * FROM users WHERE id = '$id' and password = '$password'";
    return pdo_query_one($sql);
}

function change_password($id, $password_new)
{
    $sql = "UPDATE users SET password = '$password_new' WHERE id = $id";
    return pdo_execute($sql);
}

function get_user_info($iduser)
{
    $sql = "SELECT * FROM users WHERE id = " . $iduser;
    return pdo_query_one($sql);
}

function validate($data)
{
    $data = trim($data); // Loại bỏ khoảng trắng đầu và cuối chuỗi
    $data = stripslashes($data); // Loại bỏ ký tự backslashes (\)
    $data = htmlspecialchars($data); // Chuyển đổi các ký tự đặc biệt thành HTML entities
    return $data;
}

// hàm lấy tất cả user ko limit
function getAllUserNoLimit()
{
    $sql = "SELECT * FROM users ORDER BY id DESC";
    return pdo_query($sql);
}

//hàm add user
function add_user($username, $email, $phone, $address, $password, $role)
{
    try {
        $sql = "SELECT MAX(id) as max_id FROM users";
        $max_id_row = pdo_query_one($sql);
        $new_id = ($max_id_row['max_id'] ?? 0) + 1;

        $sql = "INSERT INTO users (id, username, email, phone, address, password, role) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $result = pdo_execute($sql, $new_id, $username, $email, $phone, $address, $password, $role);

        if ($result === false) {
            throw new Exception("Không thể thêm người dùng vào cơ sở dữ liệu.");
        }
        return true;
    } catch (Exception $e) {
        return false;
    }
}


//hàm edit user
function update_ad_user($id, $name, $email, $password, $phone, $address, $role)
{
    try {
        $sql = "UPDATE users SET 
                  username = ?, 
                  email = ?, 
                  password = ?, 
                  phone = ?, 
                  address = ?, 
                  role = ?
                  WHERE id = ?";

        $params = [$name, $email, $password, $phone, $address, $role, $id];

        $result = pdo_execute($sql, ...$params);

        if ($result === false) {
            throw new Exception("Không thể cập nhật thông tin người dùng vào cơ sở dữ liệu.");
        }
        return true;
    } catch (Exception $e) {
        return false;
    }
}



// hàm lấy user theo id
function get_user_by_id($id)
{
    $sql = "SELECT * FROM users WHERE id = ?";
    return pdo_query_one($sql, $id);
}

// hàm xóa user
function delete_user($id)
{
    try {
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = dbConnection()->prepare($sql);
        $stmt->execute([$id]);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo "Lỗi khi xóa user: " . $e->getMessage();
        return false;
    }
}
