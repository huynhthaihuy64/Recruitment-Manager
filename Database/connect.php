<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=qltd", "root", "");
    // Thiết lập PDO erorr thành Ngoại lệ
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Không thể kết nối. " . $e->getMessage());
}
