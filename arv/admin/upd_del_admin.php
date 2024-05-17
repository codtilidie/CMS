<?php
require_once "../db_files/connection.php";


if(isset($_POST['delete'])){
  if($_GET['action']=='remove'){
     $food_id = $_GET['id'];
     $query = "DELETE FROM food_product  WHERE food_product.no='$food_id';";
     $result = mysqli_query($conn, $query);
     echo "<script>alert('Item deleted')</script>";
     echo "<script>window.location='upd_del_admin.php'</script>"; 
    }
 }

if(isset($_GET['submit'])){
    $u_k =$_GET['id'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    $image = $_GET['image'];
    $description = $_GET['description'];

    $query = "UPDATE food_product SET Food_name ='$name' ,  Food_price='$price', food_img ='$image', food_product.Description='$description' WHERE food_product.no='$u_k';";
    $result = mysqli_query($conn, $query);

    if($result){
        echo "<script> alert('Product successfully updated.')</script>";
        echo "<script>window.location='upd_del_admin.php'</script>"; 
    }

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
}
?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
    />

    <title>OnlineCanteen</title>
  </head>
  <?php
  require "../components/admin_navbar.php";
  require "../components/admin_product_list.php";
  ?>

<script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"
    ></script>
</html>
  </body>
</html>
