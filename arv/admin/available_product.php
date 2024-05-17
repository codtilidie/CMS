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
  require "../components/admin_product.php";
  ?>
    <div class="container">
    <div class="row py-5">
        <?php
        require '../db_files/connection.php';
        require_once '../orders/get_data.php';
        ?>
        <?php
          while($row= mysqli_fetch_assoc($result)){
            components($row["Food_name"],$row["Food_price"], $row["Description"], $row["food_img"], $row["no"]);
          }
          mysqli_close($conn);
        ?>
          </div>
        </div>
      </div>
    </div>
  </body>


<script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"
      src="./test.js"
    ></script>
</html>
