<?php

if (isset($_POST["submit"])) {

  
  require_once '../db_files/connection.php';
  require_once 'functions.php';
  
  $name = $_POST['name'];
  $email = $_POST['email']; 
  $password  = $_POST['password'];
  $c_password = $_POST['c_password'];

  if(empty_input_signup($name, $email, $password, $c_password) !== false) {
   header("location: ./index.php?error=empty_input");
   exit();
   }

  if(invalid_name($name) !== false) {
    header("location: ./index.php?error=invalid_name");
    exit();
  }

  if(invalid_email($email) !== false) {
    header("location: ./index.php?error=invalid_email");
    exit();
  }

  if(password_match($password, $c_password) !== false) {
    header("location: ./index.php?error=password_do_not_match");
    exit();
  }

  if(email_exist($conn, $email) !== false) {
    header("location: ./index.php?error=email_already_exist");
    exit();
  }

  create_user($conn, $name, $email, $password);
}

else {
  header("location: ./index.php");
  exit();
}
?>



