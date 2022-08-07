<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "qltd");
include './sendmail.php';

//Kiểm tra nếu thực hiện các thao tác cập nhật quyền của người dùng
function rand_string($length){
    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $size = strlen($chars);
    $str = '';
    for($i = 0; $i < $length; $i++){
        $str .= $chars[rand(0,$size - 1)];
    }
    return $str;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errors = '';
    $email = '';
    if(isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $email = $_POST['email'];
    }
    else{
        $errors = "email";
    }
    if(empty($_POST['email'])){
        $_SESSION['errors'] = 'Please enter your email';
        echo "<SCRIPT>
            window.location.replace('http://localhost:83/Recruitment-Manager/views/forgot-password.php');
            </SCRIPT>";
        exit();
    }
    if(!empty($errors)){
        $_SESSION['errors'] = 'Email address does not exist';
        echo "<SCRIPT>
            window.location.replace('http://localhost:83/Recruitment-Manager/views/forgot-password.php');
            </SCRIPT>";
        exit();
    }
    if(empty($errors) && !empty($email)){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);
        $account = mysqli_fetch_assoc($result);

        if(empty($account)){
            $_SESSION['errors'] = 'Email address does not exist';
            echo "<SCRIPT>
            window.location.replace('http://localhost:83/Recruitment-Manager/views/forgot-password.php');
            </SCRIPT>";
            exit();
        }
        $id = $account['id'];
        $randPassword = rand_string(8);
        $title = 'Forgot Password';
        $content = "<h3>Dear ". $account['name'] . "</h3> <p>We have received a request to re-issue your password recently</p> <p>We have sent you a new password.</p><p>Your new password is: <b>$randPassword</b> $id </p>";
        $sendMail = SendMail::send($title,$content,$account['email'],$account['name']);
        if($sendMail){
            $password = md5($randPassword);
            $sqlUpdate = "UPDATE users SET password = '$password' WHERE id = '$id'";
            $result = mysqli_query($conn, $sqlUpdate);
        }else{
            $_SESSION['errors'] = 'An error has occurred unable to retrieve the password';
            echo "<SCRIPT>
            window.location.replace('http://localhost:83/Recruitment-Manager/views/forgot-password.php');
            </SCRIPT>";
            exit();
        }
    }
}
 ?>