<?php
session_start();
require_once "./functions.php";
require_once "../db_files/connection.php";
require_once "../orders/get_data.php";
require_once "../orders/products.php";

$total= 0;
if(isset($_SESSION['cart'])){
     $food_ids = array_column($_SESSION['cart'], "food_id");
     while($row= mysqli_fetch_assoc($result)){
     foreach($food_ids as $id){
     if($row["no"]==$id){
     $total = $total + (int)$row["Food_price"];
     }
 }
 }             
 }

// $c_name = $_SESSION['c_name'];
$c_email = $_SESSION['eml'];
$c_id = $_SESSION['c_id'];
$order_id = rand(5000,10000);

if(isset($_POST["submit"])){
    if(isset($_SESSION['cart'])){
$order_sql= "INSERT INTO Orders(user_id, order_id, user_email, amount) VALUES('$c_id','$order_id', '$c_email', '$total');";
$order_sql_query = mysqli_query($conn, $order_sql );


require_once "./user_database.php";

$count = count($_SESSION['cart']);
$i=0;
while($i<$count){
$item_query = "SELECT * FROM food_product WHERE no = $food_ids[$i];";
$item_query_resullt = mysqli_query($conn, $item_query);
while($row = mysqli_fetch_assoc($item_query_resullt)){
            $for_names = $row['Food_name'];
            $final_item_query = "INSERT INTO order_items(food_name, customer_name, unique_key)VALUES ('$for_names', '$username', '$order_id');";
            $final_item_query_resullt = mysqli_query($conn, $final_item_query);

}
$i++;
}
echo "<script> alert('Your Order Has Been Placed Successfully.')</script>";
echo "<script>window.location='user.php'</script>"; 
}
}


?>
