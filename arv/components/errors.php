<?php
if(isset($_GET["error"])){
  if($_GET["error"] == "empty_input"){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong> Please don\'t leave any field empty...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

if($_GET["error"] == "invalid_name"){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong>  Invalid Name...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

if($_GET["error"] == "invalid_email"){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong> Invalid email...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

if($_GET["error"] == "password_do_not_match"){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong> Password do not match ...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

if($_GET["error"] == "email_already_exist"){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong> Email already exist...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

if($_GET["error"] == "none"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Successfully created...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}
if($_GET["error"] == "incorrect_password"){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong> Incorrect or invalid password...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }

        if($_GET["error"] == "login_error"){
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failed!</strong>Error logging in...
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }
}
?>
