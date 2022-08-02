<?php
require "C:\laragon\www\Recruitment-Manager\Database\connect.php";
if(isset($_POST["upload"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $pname = rand(1000,10000)."-".$_FILES["cv"]["name"];
    $tname = $_FILES["cv"]["tmp_name"];
    $uploads_dir = 'C:\laragon\www\Recruitment-Manager\Public\img';
    move_uploaded_file($tname,$uploads_dir.'/'.$pname);

    try{
    $sql = "INSERT INTO cvs (name, email, phone,file,active) VALUES ('$name', '$email', '$phone','$pname',1)";
    $pdo->exec($sql);
    echo "Thêm bản ghi thành công.";
    } catch (PDOException $e) {
        die("ERROR: Không thể thực thi $sql. " . $e->getMessage());
    }
}
?>