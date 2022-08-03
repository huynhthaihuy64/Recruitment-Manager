<?php
require "C:\laragon\www\Recruitment-Manager\Database\connect.php";

if (isset($_POST['register'])) {

    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    // $password = md5($password);
    if (strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    } else {
        try {
            $sql = "INSERT INTO users (name, email, password,role) VALUES ('$username', '$email', '$password',1)";
            $pdo->exec($sql);
            echo "<SCRIPT> //not showing me this
            alert('Register Success')
            window.location.replace('http://localhost/Recruitment-Manager/index.php');
            </SCRIPT>";
        } catch (PDOException $e) {
            die("ERROR: Không thể thực thi $sql. " . $e->getMessage());
        }
    }
    // Đóng kết nôi
    unset($pdo);
}
