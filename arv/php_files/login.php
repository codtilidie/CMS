
<?php
 require_once '../db_files/connection.php';
 require_once 'functions.php';


if(isset($_POST["submit"])) {

  $email = $_POST['email']; 
  $password  = $_POST['password'];

  if(empty_input_login($email, $password) !== false) {
    header("location: ./index.php?error=empty_input");
    exit();
  }

  login_user($conn, $email, $password);
}

else{
  header("location: ./index.php");
  exit();
}
?>
