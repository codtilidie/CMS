<?php
require_once "../db_files/connection.php";


if(isset($_POST['add_food'])){
    $f_n = $_POST['name'];
    $f_p = $_POST['price'];
    $f_i = '../orders/food_img/'.$_POST['image'].'.jpg';
    $f_d = $_POST['description'];

    $query = "INSERT INTO food_product(Food_name, Food_price, food_img, food_product.Description)VALUES('$f_n','$f_p','$f_i','$f_d');";
    $result = mysqli_query($conn, $query);

    if($result){
        echo "<script> alert('Product successfully added.')</script>";
        echo "<script>window.location='available_product.php'</script>"; 
    }

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

 }

 if(isset($_POST['cancel_add'])){
    header("location: ./available_product.php");
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
  ?>
  
</body>
<script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"
      src="./test.js"
    ></script>
</html>



<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <div class="container">
      <div class="heading text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Add FOOD ITEMS
            </h1>
            <h2 class="wv-heading--subtitle">
              Please responsibly add the detail of item because it's vulnerable and may cause improper display of food items.
            </h2>
         </div>
      </div>
      <div class="row">
         <div class="row">
            <div class="form ">
               <form action="" method="post">
                  <div class="form-group">
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="Food Name" required>
                  </div>
                  <div class="form-group">
                     <input type="text" name="price"  class="form-control my-input" id="name" placeholder="Food Price"  required>
                  </div>
                  <div class="form-group">
                     <input type="text" name="image"  class="form-control my-input" id="name" placeholder="Food Img"  required>
                  </div>
                  <div class="form-group">
                     <input type="text" name="description"  class="form-control my-input" id="name" placeholder="Food Description" required> 
                  </div>
                  <div class="text-center ">
                     <button name ="add_food" type="submit" class=" btn btn-block send-button tx-tfm">Save and Update</button>
                  </div>
                  <div class="col-md-12 ">
                     <div class="login-or">
                        <hr class="hr-or">
                        <span class="span-or">or</span>
                     </div>
                  </div>
                   <div class="form-group">
                  <button name ="cancel_add" type="submit" class=" btn btn-block g-button tx-tfm">Cancel </button>
                     </a>
                  </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>






<style>
.send-button{
background: #54C7C3;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.g-button{
color: #fff !important;
border: 1px solid #EA4335;
background: #ea4335 !important;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
.my-input{
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
cursor: text;
padding: 8px 10px;
transition: border .1s linear;
}
.header-title{
margin: 5rem 0;
}
h1{
font-size: 31px;
line-height: 40px;
font-weight: 600;
color:#4c5357;
}
h2{
color: #5e8396;
font-size: 21px;
line-height: 32px;
font-weight: 400;
}
.login-or {
position: relative;
color: #aaa;
margin-top: 10px;
margin-bottom: 10px;
padding-top: 10px;
padding-bottom: 10px;
}
.span-or {
display: block;
position: absolute;
left: 50%;
top: -2px;
margin-left: -25px;
background-color: #fff;
width: 50px;
text-align: center;
}
.hr-or {
height: 1px;
margin-top: 0px !important;
margin-bottom: 0px !important;
}


.heading {
  margin-left: 30%;
  margin-right: 30%;
}

.form {
  margin-left: 30%;
  margin-right: 30%;
}