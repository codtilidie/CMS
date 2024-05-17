<?php
require_once "../db_files/connection.php";


if(isset($_POST['order_delete'])){
  if($_GET['action']=='remove'){
     $o_n = $_GET['id'];
     $sql = "DELETE FROM order_items WHERE Order_no = $o_n;";
     $result = mysqli_query($conn, $sql); 
     if($result) {
        header("location: ../admin/admin_orders.php");
     }

     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    }
 }

 if(isset($_POST['user_order_delete'])){
    if($_GET['action']=='remove'){
       $o_n = $_GET['id'];
       $sql = "DELETE FROM order_items WHERE Order_no = $o_n; ";
       $result = mysqli_query($conn, $sql); 
       if($result) {
        header("location: ../php_files/user.php");
       }
  
       if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
      }
   }
?>

