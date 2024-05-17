<?php
if(isset($_POST['remove'])){
  if($_GET['action']=='remove'){
    foreach($_SESSION['cart'] as $key => $value){
        if($value["food_id"]==$_GET['id']){
          unset($_SESSION['cart'][$key]);
          echo "<script>alert('product deleted')</script>";
          header("location: ./order.php");
        }
      }
  }
}
?>