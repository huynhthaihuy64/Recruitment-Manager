<?php
$conn = mysqli_connect("localhost", "root", "", "qltd");

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
if ($result == true) {
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $msg = $row;
    } else {
        $msg = "No Data Found";
    }
} else {
    $msg = mysqli_error($conn);
}

return $msg;
