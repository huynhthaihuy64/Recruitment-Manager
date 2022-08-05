<?php
$conn = mysqli_connect("localhost", "root", "", "qltd");

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    echo "<SCRIPT>
            alert('Delete Success')
            window.location.replace('http://localhost/Recruitment-Manager/views/admin/listUser.php');
            </SCRIPT>";
} else {
    $result = "Delete Fail" . mysqli_error($conn);
}
mysqli_close($conn);
