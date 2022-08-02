<?php
if (isset($_POST['dangnhap'])) {
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
        mysqli_select_db($conn, "dangnhap");
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email='" . $u . "' and password='" . $p . "'");
        if (mysqli_num_rows($result) == 0) {
            echo "<SCRIPT> //not showing me this
            alert('Email or Password is not correct, please try again')
            window.location.replace('http://localhost/qltd/index.php');
            </SCRIPT>";
        } else {
            echo "<SCRIPT> //not showing me this
            alert('Login success')
            window.location.replace('http://localhost/qltd/index.php');
            </SCRIPT>";
        }
    }
}
