<?php

$conn = mysqli_connect("localhost", "root", "", "qltd");

if (isset($_POST["update"])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    $password = md5($password);
    $role = $_POST['role'];

    if (strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    } else {
        $sql = "UPDATE users SET name = '$name', email = '$email', password = '$password', role = '$role' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_query($conn, $sql)) {
            echo "<SCRIPT>
            alert('Update Success')
            window.location.replace('http://localhost/Recruitment-Manager/views/admin/listUser.php');
            </SCRIPT>";
        } else {
            echo $id, $name, $email, $password, $role;
        }
    }
}
