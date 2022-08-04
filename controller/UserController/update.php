<?php
require "C:\laragon\www\Recruitment-Manager\Database\connect.php";

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    echo $id;
    //     $username = $_POST['name'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     $role = $_POST['role'];

    //     try {
    //         // $sql = "INSERT INTO users (name, email, password,role) VALUES ('$username', '$email', '$password',1)";
    //         $sql = "UPDATE users SET name='$name' WHERE id='$id'";
    //         $pdo->exec($sql);
    //         echo "<SCRIPT> //not showing me this
    //             alert('Register Success')
    //             window.location.replace('http://localhost/Recruitment-Manager/index.php');
    //             </SCRIPT>";
    //     } catch (PDOException $e) {
    //         die("ERROR: Không thể thực thi $sql. " . $e->getMessage());
    //     }

    //     // Đóng kết nôi
    //     unset($pdo);
}
