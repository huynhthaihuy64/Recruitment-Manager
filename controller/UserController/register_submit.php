<?php
require "C:\laragon\www\QLTD\Database\connect.php";

if (isset($_POST['dangky'])) {

    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    try {
        $sql = "INSERT INTO users (name, email, password,role) VALUES ('$username', '$email', '$password',1)";
        $pdo->exec($sql);
        echo "Thêm bản ghi thành công.";
    } catch (PDOException $e) {
        die("ERROR: Không thể thực thi $sql. " . $e->getMessage());
    }

    // Đóng kết nôi
    unset($pdo);
}
