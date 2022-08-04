<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "qltd";
$conn = new mysqli($hostName, $userName, $password, $databaseName);

$db = $conn;
$tableName = "users";
$columns = ['id', 'name', 'email', 'password', 'role'];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns)
{
    $id = $_POST['id'];
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "columns Name must be defined in an indexed array";
    } elseif (empty($tableName)) {
        $msg = "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $stmt = "SELECT * FROM `users` WHERE `id` = ?";
        $stmt->bind_param("i", $id);
        $id = (int) $_SESSION['user_id'];
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $db->query($stmt);
        if ($result == true) {
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
            } else {
                $msg = "No Data Found";
            }
        } else {
            $msg = mysqli_error($db);
        }
    }
    return $msg;
}
