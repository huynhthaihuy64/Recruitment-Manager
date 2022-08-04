<?php 
session_start();
include '../UserController/sendmail.php';
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "qltd";
$conn = new mysqli($hostName, $userName, $password, $databaseName);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errors = '';
    $email = '';

    //Check email exist and format
    if(isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $email = $_POST['email'];
    }else{
        $errors = "email";
    }
    if(empty($_POST['email'])){
        $_SESSION['errors'] = 'Please enter your email';
        echo "<SCRIPT>
            alert('Email is not correct, please try again')
            window.location.replace('http://localhost/Recruitment-Manager/views/forgot-password.php');
            </SCRIPT>";
    }
    if(!empty($errors)){
        $_SESSION['errors'] = 'Email address does not exist';
        header('Location:forgot-password.php');
        exit();
    }
    if(empty($errors) && !empty($email)){
        $sql = "SELECT * FROM `users` WHERE email = `" . $email . "`";
        $result = $conn -> query($sql);
        $users = mysqli_fetch_assoc($result);
    }
    if(empty($account)){
        $_SESSION['errors'] = 'Email address does not exist';
        header('Location: forgot-password.php');
        exit();
    }
    // $randPassword = rand_string(8);
    $title = "update password";
    $content = "<h3>Dear " . $users['name']. "</h3>";
    $content = "<p>We have received your request</p>";
    $content = "<p>We have updated and send you a new password</p>";
    $content = "<p>Your password is: </p> <b>".$users['password']."</b>";
    $sendmail = Mailer::sendMail($title,$content,$users['email']);

    if($sendmail){
        $hash = password_hash($users['password'],PASSWORD_DEFAULT);
        $sqlUpdate = "UPDATE `users` SET `Pass`=". $hash . " ' WHERE `id` = ". $users['id'];
    $conn->query($sqlUpdate);
    $_SESSION['success'] = "We went you an email plese check it";
    header('Location: forgot.php');
    }else{
        $_SESSION['errors'] = 'An error has occurred unable to retrieve the password';
        exit();
    }
}