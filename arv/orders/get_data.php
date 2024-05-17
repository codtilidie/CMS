 
<?php
    require_once "../db_files/connection.php";

    $query = "SELECT * FROM food_product";
    $result = mysqli_query($conn, $query);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 ?>