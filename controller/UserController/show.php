<?php

$conn = mysqli_connect("localhost", "root", "", "qltd");
$showid = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$showid'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];
    $password = $row['password'];
    $role = $row['role'];
}
