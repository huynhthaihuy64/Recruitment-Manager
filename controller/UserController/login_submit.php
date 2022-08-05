<?php
session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    $password = md5($password);
    if (strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    }
    if ($_POST['email'] == null) {
        echo "Please Enter your email";
    } else {
        $u = $_POST['email'];
    }
    if ($_POST['password'] == null) {
        echo "Please Enter your password";
    } else {
        $p = $password;
    }
    if ($u && $p) {
        $conn = mysqli_connect("localhost", 'root', "", "qltd");
        mysqli_select_db($conn, "login");
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email='" . $u . "' and password='" . $p . "'");
        if (mysqli_num_rows($result) == 0) {
            echo "<SCRIPT>
            alert('Email or Password is not correct, please try again')
            window.location.replace('http://localhost/Recruitment-Manager/views/login.php');
            </SCRIPT>";
        } else {
            $_SESSION['email'] = $email;
            echo "<SCRIPT>
            alert('Login success')
            window.location.replace('http://localhost/Recruitment-Manager/views/admin/index.php');
            </SCRIPT>";
            die();
        }
    }
}
