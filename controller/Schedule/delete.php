<?php
$conn = mysqli_connect("localhost", "root", "", "qltd");

$id = $_GET['id'];
$sql = "DELETE FROM confirms WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    echo "<SCRIPT>
            alert('Delete Success')
            window.location.replace('http://localhost/Recruitment-Manager/views/admin/listConfirm.php');
            </SCRIPT>";
} else {
    $result = "Delete Fail" . mysqli_error($conn);
}
mysqli_close($conn);
