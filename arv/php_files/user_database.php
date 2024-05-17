<?php
require_once "../db_files/connection.php";
$user_key = $_SESSION['c_id'];
$sql = "select * from customers where sno = $user_key;";
$user_query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($user_query);
$username = $row["name"];
?>