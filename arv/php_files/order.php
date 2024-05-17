
<?php
session_start();


// session_destroy();
require_once '../orders/products.php';
require_once './food_db.php';
require_once '../orders/ch_error.php';

$database= new Createdb(db_name:"CMS",table_name:"food_product"); 

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

  <style>
  body {
      background-color: lightblue;
    }
    
  </style>

  <body>
    <?php
  require_once '../components/navbar.php';
  ?>
    <div class="container">
    <div class="row py-5">
        <?php
        require '../db_files/connection.php';
        require_once '../orders/get_data.php';

        //to display the product id (primary key)    //Array ( [0] => Array ( [food_id] => 6 ) )

        if(isset($_POST['submit'])){
         if(isset($_SESSION['cart'])){

        //to check weather the product is already added or not
          $item_array_id = array_column($_SESSION['cart'], "food_id");     
                
          // //if that array contains the value of item_array_id
              if(in_array($_POST["food_id"], $item_array_id)){

                echo "<script> alert('product already added')</script>";
                echo "<script>window.location='order.php'</script>"; 

               }

                else{
                  //if the product is in the session variable
                  $count = count($_SESSION['cart']);
                  
                    //no.of elements in the array
                  $_item = array('food_id'=>$_POST['food_id']);
                  $_SESSION['cart'][$count] = $_item;
                //   print_r($_item);
               }
         }

         else{
          $_item = array('food_id'=>$_POST['food_id']);
          $_SESSION['cart'][0] = $_item;
          // print_r($_SESSION['cart']);
        }  
      }?>

<div class="mb-5 text-center">
  <!-- cart icon  -->
  <a href="./cart.php" class="nav-item active">
        <h5>
          <i class="mx-2 text-success fa-solid fa-cart-plus fa-beat-fade"> Cart 
            <?php
            if(isset($_SESSION['cart'])){
              $count = count($_SESSION['cart']);
              echo "<span id=\"cart_count\" class=\"text-success bg-light\">'$count'</span>";
            }

            else{
              echo '<span id="cart_count" class="text-success bg-light">0</span>';
            }
            ?>
          </i>
        </h5>
      </a>
          </div>



<?php
          // functions for the products 
          // The products in the database will be displayed
          while($row= mysqli_fetch_assoc($result)){
            components($row["Food_name"],$row["Food_price"], $row["Description"], $row["food_img"], $row["no"]);
          }
          mysqli_close($conn);
        ?>
          </div>
        </div>
      </div>
    </div>

    <!-- ordering button  -->
    <form action ="./checkout.php" method="post">
    <div class=" container d-grid gap-2 mb-5">
           <button class="text-center btn btn-info" name="submit" type="submit">CLICK TO ORDER</button>
    </div>
        </form>
  </body>
  <?php
    require_once "../components/footer.php";
  ?>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"
></script>
</html>

