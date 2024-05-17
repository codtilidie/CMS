
<?php
 require_once '../db_files/connection.php';
 require_once '../php_files/functions.php';


if(isset($_POST["submit"])) {

  $admin_id = $_POST['admin_id']; 
  $password  = $_POST['password'];

  if(empty_input_admin($admin_id, $password) !== false) {
    header("location: ../php_files/index.php?error=empty_input");
    exit();
  }

  login_admin($conn, $admin_id, $password);
}

else{
  header("location: ./index.php");
  exit();
}
?>
