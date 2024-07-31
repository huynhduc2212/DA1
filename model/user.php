<?php
function insert_user($username, $password, $email)
{
    $sql = "INSERT INTO users (username, password, email) values('$username','$password','$email')";
    return pdo_execute($sql);
}

function insert_user_returnID($username, $password, $email, $phone)
{
    $sql = "INSERT INTO users (username, password, email, phone) values('$username','$password','$email','$phone')";
    return pdo_execute_returnID($sql);
}

function check_login($email, $password)
{
    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
    return pdo_query_one($sql);
}

function update_user($email, $fullname, $address, $phone, $password, $username)
{
    $sql = "UPDATE users SET email = '$email', fullname = '$fullname', address = '$address',
    phone = '$phone', password = '$password', username = '$username'";
    return pdo_execute($sql);
}
