<?php
require "C:\laragon\www\QLTD\Database\connect.php";

$targetDir = "uploads/";
$file = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if (isset($_POST['upload'])) {
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');

    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $file = $_POST['file'];

    try {
        $sql = "INSERT INTO users (name, email, phone,file,active) VALUES ('$username', '$email', '$phone','$file',0)";
        $pdo->exec($sql);
        echo "Thêm bản ghi thành công.";
    } catch (PDOException $e) {
        die("ERROR: Không thể thực thi $sql. " . $e->getMessage());
    }

    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $insert = $db->query("INSERT into cvs (name, email, phone,file,active) VALUES ('$username', '$email', '$phone','$file',0)");
            if ($insert) {
                $statusMsg = "The file " . $file . " has been uploaded successfully.";
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
    // Đóng kết nôi
    unset($pdo);
}
