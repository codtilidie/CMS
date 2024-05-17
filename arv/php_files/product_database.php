<?php
session_start();
require_once "../db_files/connection.php";
require_once "../orders/get_data.php";

$row = mysqli_fetch_assoc($result);
if($row === 0){
    echo "<script> alert('select atleast 1 product please to order')</script>";

}

$product_name = $row['Food_name'];
?>