<?php
 require_once "../db_files/admin_database.php";
 ?>

<div class="container my-5">
<table class="table">
  <thead>
    <tr >
      <th id = "column" scope="col">No</th>
      <th id = "column" scope="col">Customer</th>
      <th id = "column" scope="col">Food</th>
      <th id = "column" scope="col">ID</th>
      <th id = "column" scope="col">Order time</th>
      <th id = "column" scope="col">Delete</th>
    </tr>

    <tr>
        <?php
          while($row= mysqli_fetch_assoc($item_query)){
        ?>
        <td ><?php echo $row['Order_no']; ?></td>
        <td ><?php echo $row['customer_name']; ?></td>
        <td ><?php echo $row['food_name']; ?></td>
        <td ><?php echo $row['unique_key']; ?></td>
        <td ><?php echo $row['Time_of_order']; ?></td>
        <td><form action="../orders/order_del.php?action=remove&id=<?php $o_no=$row['Order_no']; echo $o_no;?>" method ="post">
            <button type="submit" name ="order_delete" class="btn btn-danger">Delete</button>
          </form></td>
    </tr>
        <?php   
          }    
        ?>

        </thread>

</table>
<div>

<style>

#column{
  text-align: center;
}

</style>