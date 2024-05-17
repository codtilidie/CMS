<?php
require_once "connection.php";
$u_name = $_SESSION['c_name'];
$sql = "SELECT * FROM order_items WHERE customer_name ='$u_name';";
$item_query = mysqli_query($conn, $sql);
?>
