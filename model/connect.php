<?php
function dbConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lofinest";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function pdo_query($sql) {
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = dbConnection();
        if ($conn) {
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); // lấy tất cả tham số nhưng bỏ qua tham số đầu
            return $rows;
        } else {
            return [];
        }
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = dbConnection(); 
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);// Lấy một dòng kết quả từ câu truy vấn
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
