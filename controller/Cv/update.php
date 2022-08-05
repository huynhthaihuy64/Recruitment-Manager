<?php

$conn = mysqli_connect("localhost", "root", "", "qltd");

if (isset($_POST["update"])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];
    $active = $_POST['role'];

    $sql = "UPDATE cvs SET name = '$name', email = '$email', phone = '$phone', position= '$position', file = '$pname', active = '$active' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
        echo "<SCRIPT>
            alert('Update Success')
            window.location.replace('http://localhost/Recruitment-Manager/views/admin/listCv.php');
            </SCRIPT>";
    } else {
        echo $id, $name, $email, $phone, $position, $pname, $active;
    }
}
