<?php
require_once "connection.php";
$sql = "SELECT * FROM order_items";
$item_query = mysqli_query($conn, $sql);
?>