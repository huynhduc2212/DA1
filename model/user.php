<?php
function check_user($username, $password) {
    $sql = "SELECT * FROM users WHERE username = $username AND password = $password";
    return pdo_execute($sql);
}