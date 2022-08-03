<?php
session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($_POST['email'] == null) {
        echo "Please Enter your email";
    } else {
        $u = $_POST['email'];
    }
    if ($_POST['password'] == null) {
        echo "Please Enter your password";
    } else {
        $p = $_POST['password'];
    }
    if ($u && $p) {
        $conn = mysqli_connect("localhost", 'root', "", "qltd");
        mysqli_select_db($conn, "login");
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email='" . $u . "' and password='" . $p . "'");
        if (mysqli_num_rows($result) == 0) {
            echo "<SCRIPT> //not showing me this
            alert('Email or Password is not correct, please try again')
            window.location.replace('http://localhost/Recruitment-Manager/views/login.php');
            </SCRIPT>";
        } else {
            $_SESSION['email'] = $email;
            echo "<SCRIPT> //not showing me this
            alert('Login success')
            window.location.replace('http://localhost/Recruitment-Manager/views/admin/index.php');
            </SCRIPT>";
            die();
        }
    }
}
