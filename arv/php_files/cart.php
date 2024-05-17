<?php
session_start();
 require_once '../orders/products.php';
 require '../db_files/connection.php';
 require_once '../orders/get_data.php';
 require_once '../orders/ch_error.php';
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
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq"
      crossorigin="anonymous"
    />
    <!-- font awesome  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <title>OnlineCanteen</title>
  </head>

  <body class="bg-light">
    <div class="row container-fluid">
      <div class="row col-md-8">
        <div class="col-md-">
          <div class="shopping-cart">
              <?php

              $total= 0;
              if(isset($_SESSION['cart'])){
                $food_ids = array_column($_SESSION['cart'], "food_id");  //row array added in the variable in $food_id
                
                //displaying all the selected food

                while($row= mysqli_fetch_assoc($result)){
                  //is the selected food id is equal to the available food id.
                foreach($food_ids as $id){
                if($row["no"]==$id){
                    cart_element($row["food_img"], $row["Food_name"], $row["Food_price"], $row["no"]);
                    $total = $total + (int)$row["Food_price"];
                  }

                }
              }             
              }
              else{
                echo "<h5>Cart is empty</h5>";
              }
              ?>
          </div>
        </div>
      </div>
      <div
      class="col-md-3 border rounded mt-4 pb-3 bg-white h-25">
      <div class="pt-4">
        <h6>PRICE DETAILS</h6>
        <hr>
        <div CLASS="Row Price-details">
          <div class="col-md-6">           
            <?php
            if(isset($_SESSION['cart'])){
              $count = count($_SESSION['cart']);
              echo "<h6>Price($count items)</h6>";
            }
            else{
              echo "<h6>Price(0 items)</h6>";
            }
            ?>
            <h6>Total amount: </h6>
          </div>
          <div class="col-md-6">
            <h6>

            <?php

            echo $total;
            ?>
            </h6>
          </div>
        </div>
        <form action ="./checkout.php" method="post"><button type="submit" name="submit" class="col-md-4 btn btn-info btn-sm justify-content-center">Order</button></form>
      </div>
    </div>
  </body>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"
  ></script>
</html>
