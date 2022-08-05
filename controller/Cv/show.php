<?php

$conn = mysqli_connect("localhost", "root", "", "qltd");
$showid = $_GET['id'];
$sql = "SELECT * FROM cvs WHERE id = '$showid'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $file = $row["file"];
    $position = $row["position"];
    $active = $row["active"];
}
