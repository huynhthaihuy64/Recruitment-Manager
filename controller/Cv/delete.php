<?php
$conn = mysqli_connect("localhost", "root", "", "qltd");

$id = $_GET['id'];
$sql = "DELETE FROM cvs WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    echo "<SCRIPT>
            alert('Delete Success')
            window.location.replace('http://localhost/Recruitment-Manager/views/admin/listCv.php');
            </SCRIPT>";
} else {
    $result = "Delete Fail" . mysqli_error($conn);
}
mysqli_close($conn);
