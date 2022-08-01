<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qltd";

// tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
// kiểm kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, password FROM users";
$result = $conn->query($sql);

$columns = ['id', 'name', 'email', 'password', 'role'];
foreach ($columns as $value) {
    echo "$value <br>";
}
$conn->close();
