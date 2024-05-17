<?php
function empty_input_signup($name, $email, $password, $c_password) {
    $result;      //which returns the bool data
        if(empty($name) || empty($email) || empty($password) || empty($c_password)){
            $result = true;
        }
        else{
         $result = false;
        }
        return $result;
}

function invalid_name($name) {
    $result;     
        if(!preg_match("/^[a-zA-Z]*$/", $name)) {
            $result = true;
        }
  else{
    $result = false;
  }
  return $result;
}

function invalid_email($email) {
    $result;     
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
  else{
    $result = false;
  }
  return $result;
}

function password_match($password, $c_password) {
    $result;     
        if($password!==$c_password) {
            $result = true;
        }
  else{
    $result = false;
  }
  return $result;
}

function email_exist($conn, $email) {
    $sql = "SELECT * FROM customers WHERE email = ?;";   // ? is a placeholder to protect from the sql injection 
    $stmt = mysqli_stmt_init($conn);                     // prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ./index.php?error=sql_stmt_fail");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result_data = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result_data)) {      
        return $row; 
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function create_user($conn, $name, $email, $password) {
    $sql = "INSERT INTO customers (name, email , password) VALUES (?, ?, ?);";   // ? is a placeholder to protect from the sql injection 
    $stmt = mysqli_stmt_init($conn);                     // prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ./index.php?error=sql_stmt_fail");
        exit();
    }
    trim($_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashed_password);
    mysqli_stmt_execute($stmt);
    header("location: ./index.php?error=none");
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

function empty_input_login($email, $password) {
    $result;     
        if(empty($email) || empty($password)){
            $result = true;
        }
  else{
    $result = false;
  }
  return $result;
}

function login_user($conn, $email, $password){
    $email_exist = email_exist($conn, $email);

    if($email_exist == false) {
        header("location: ./index.php?error=login_error");
        exit();
    }

    $password_hashed = $email_exist["password"];               
    $check_pwd = password_verify($password, $password_hashed);
    
    
    if($check_pwd === false) {
        header("location: ./index.php?error=incorrect_password");
    }

    else if($check_pwd === true){
        session_start();
        $_SESSION["c_id"] = $email_exist["Sno"];
        $_SESSION["eml"] =  $email_exist["email"];
        $_SESSION['c_name'] = $email_exist["name"];
        header("location: ./order.php");
    }

}
function empty_input_admin($admin_id, $password) {
    $result;     
        if(empty($admin_id) || empty($password)){
            $result = true;
        }
  else{
    $result = false;
  }
  return $result;
}


function login_admin($conn, $admin_id, $password){
    $admin_id_exist = admin_id_exist($conn, $admin_id);

    if($admin_id_exist == false) {
        header("location: ../php_files/index.php?error=login_error");
        exit();
    }

    $password_hashed = MD5($password);               
    if($password_hashed === $admin_id_exist["Password"]) {
        header("location: ./available_product.php");
    }

    else {
        header("location: ../php_files/index.php?error=incorrect_password");
    }

}


function admin_id_exist($conn, $admin_id) {
    $sql = "SELECT * FROM admin WHERE Admin_id = ?;";   
    $stmt = mysqli_stmt_init($conn);                 
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ./index.php?error=sql_stmt_fail");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $admin_id);
    mysqli_stmt_execute($stmt);

    $result_data = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result_data)) {      
        return $row; 
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

?>