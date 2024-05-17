
<?php
session_start();
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
  <body>
    <?php
  require_once '../components/navbar.php';
  require_once "../db_files/user_database.php";
  ?>
<div class="container text-center mt-2">
<h2><samp>Hello There, 
    <?php echo $_SESSION['c_name'];?></br>YOUR ORDER FOODS</samp></h2>
    <div>

<table class="table container mt-4" id = "user">
  <thead>
    <tr>
      <th scope="col">No</th>
      <!-- <th scope="col">Order_id</th> -->
      <th scope="col">Food</th>
      <th scope="col">price</th>
      <th scope="col">Time_of_order</th>
      <th scope="col">Remove</th>
    </tr>
    <tr>
        <?php
          while($row= mysqli_fetch_assoc($item_query)){
        ?>
        <td><?php echo $row['Order_no']; ?></td>
        <td><?php echo $row['food_name']; ?></td>
        <td><?php
                require_once "../db_files/connection.php";
                $f_name = $row['food_name'];
                $sql = "SELECT * FROM food_product WHERE food_name ='$f_name';";
                $food_query = mysqli_query($conn, $sql); 
                while($food_row= mysqli_fetch_assoc($food_query)){
                    echo $food_row['Food_price'];
                }
                ?>
    </td>
        <td ><?php echo $row['Time_of_order']; ?></td>
        <td><form action="../orders/order_del.php?action=remove&id=<?php $o_no=$row['Order_no']; echo $o_no;?>" method ="post">
            <button type="submit" name ="user_order_delete" class="btn btn-danger">Cancel Order</button>
          </form></td>
    </tr>
        <?php   
          }    
        ?>

        </thread>

</table>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"
></script>
</html>
