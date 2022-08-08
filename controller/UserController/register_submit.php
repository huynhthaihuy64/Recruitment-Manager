<?php
require "C:\laragon\www\Recruitment-Manager\Database\connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emailErr = '';
    $nameErr = '';
    $passErr = '';
    $username = '';
    $email = '';
    $password = '';
    $username = $_POST['name'];
    if (empty($username)) {
        $nameErr = "Name is required <br/>";
        echo "<SCRIPT>
        alert('$nameErr')
            window.location.replace('http://localhost:80/Recruitment-Manager/views/register.php');
            </SCRIPT>";
        exit();
    } else {
        $username = $_POST['name'];
    }
    $email = $_POST['email'];
    if (empty($email)) {
        $emailErr = "email is required <br/>";
        echo "<SCRIPT>
        alert('$emailErr')
            window.location.replace('http://localhost:80/Recruitment-Manager/views/register.php');
            </SCRIPT>";
        exit();
    } else {
        $email = $_POST['email'];
    }
    $password = $_POST['password'];
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    $password = md5($password);
    if (strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        $passErr =  "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
        echo "<SCRIPT>
        alert('$passErr')
            window.location.replace('http://localhost:80/Recruitment-Manager/views/register.php');
            </SCRIPT>";
        exit();
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
