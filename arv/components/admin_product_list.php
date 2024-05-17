<?php
 require_once "../orders/get_data.php";
 ?>

<div class="container my-5">
<table class="table">
  <thead>
    <tr>
      <th id = "column"  scope="col">No</th>
      <th id = "column"  scope="col">Item</th>
      <th id = "column"  scope="col">Price</th>
      <th id = "column"  scope="col">Image</th>
      <th id = "column"  scope="col">Description</th>
      <th id = "column"  scope="col">Update</th>
      <th id = "column"  scope="col">Delete</th>
    </tr>

  </thead>
    <tr>
        <?php
          while($row= mysqli_fetch_assoc($result)){
        ?>
        <td ><?php echo $row['no'] ?></td>
        <td ><?php echo $row['Food_name']; ?></td>
        <td ><?php echo $row['Food_price']; ?></td>
        <td ><?php echo $row['food_img']; ?></td>
        <td ><?php echo $row['Description']; ?></td>
        <td><a href='../orders/update.php?id=<?php $food_no=$row['no'];
                                        echo $food_no;?>&name=<?php $food_name=$row['Food_name'];
                                        echo $food_name;?>&price=<?php $food_price=$row['Food_price'];
                                        echo $food_price;?>&food_img=<?php $food_image=$row['food_img'];
                                        echo $food_image;?>&food_dec=<?php $food_dec=$row['Description'];
                                        echo $food_dec;?>'
                                        ><button class="btn btn-success">Update</button></td>
          <td>
            <form action="../admin/upd_del_admin.php?action=remove&id=<?php $food_no=$row['no']; echo $food_no;?>" method ="post">
            <button type="submit" name ="delete" class="btn btn-danger">Delete</button>
          </form>
          </td>
    </tr>

        <?php   
          }    
        ?>

</table>
<div>
<style>

#column{
  text-align: center;
}

</style>
    <!-- <td><button name = "update_btn" type="submit" class="btn btn-success">Update</button></td>
        <td><button name = "delete_btn" type="submit" class="btn btn-danger">Delete</button></td> -->