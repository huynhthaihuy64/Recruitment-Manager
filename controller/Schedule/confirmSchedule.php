<?php
require "C:\laragon\www\Recruitment-Manager\Database\connect.php";

if (isset($_POST['confirm'])) {

    $username = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    try {
        $sql = "INSERT INTO confirms (name, email, date) VALUES ('$username', '$email', '$date')";
        $pdo->exec($sql);
        echo "<SCRIPT>
            alert('Confirm Success')
            window.location.replace('http://localhost/Recruitment-Manager/views/admin/index.php');
            </SCRIPT>";
    } catch (PDOException $e) {
        die("ERROR: Không thể thực thi $sql. " . $e->getMessage());
    }
    // Đóng kết nôi
    unset($pdo);
}
