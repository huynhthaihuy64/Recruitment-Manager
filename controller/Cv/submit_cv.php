<?php
require "C:\laragon\www\Recruitment-Manager\Database\connect.php";

if (isset($_POST["upload"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $date = $_POST['date'];

    $pname = rand(1000, 10000) . "-" . $_FILES["cv"]["name"];
    $tname = $_FILES["cv"]["tmp_name"];
    $uploads_dir = 'C:\laragon\www\Recruitment-Manager\Public\img';
    move_uploaded_file($tname, $uploads_dir . '/' . $pname);

    try {
        $sql = "INSERT INTO cvs (name, email, phone,file,position,date,active) VALUES ('$name', '$email', '$phone','$pname','$position','$date',1)";
        $pdo->exec($sql);
        echo "<SCRIPT> //not showing me this
            alert('Submit Success')
            window.location.replace('http://localhost/Recruitment-Manager/views/admin/index.php');
            </SCRIPT>";
    } catch (PDOException $e) {
        die("ERROR: Không thể thực thi $sql. " . $e->getMessage());
    }
}
