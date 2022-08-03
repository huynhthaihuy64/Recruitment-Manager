<?php 
    require "C:\laragon\www\Recruitment-Manager\Database\connect.php";

    $id =$_GET['id'];
    $sql = "DELETE FROM cvs where id = $id";
    $pdo->exec($sql);
    header('http://localhost:83/Recruitment-Manager/views/admin/CV/list.php')
?>