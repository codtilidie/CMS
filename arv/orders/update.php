<?php

require_once "../db_files/connection.php";
$f_i  = $_GET['id'];
$f_n  = $_GET['name'];
$f_p = $_GET['price'];
$f_d = $_GET['food_dec'];
$f_img = $_GET['food_img'];

?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               UPDATE FOOD
            </h1>
            <h2 class="wv-heading--subtitle">
              Please responsibly update the detail of item because it's vulnerable any may cause improper display.
            </h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="../admin/upd_del_admin.php" method="get">
               <div class="form-group">
                     <input name="id" type ="hidden"  class="form-control my-input" id="name" placeholder="Food Name" value ="<?php echo $f_i; ?>" required>
                  </div>
                  <div class="form-group">
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="Food Name" value ="<?php echo $f_n; ?>" required>
                  </div>
                  <div class="form-group">
                     <input type="text" name="price"  class="form-control my-input" id="name" placeholder="Food Price" value ="<?php echo $f_p; ?>" required>
                  </div>
                  <div class="form-group">
                     <input type="text" name="image"  class="form-control my-input" id="name" placeholder="Food Img" value ="<?php echo $f_img; ?>" required>
                  </div>
                  <div class="form-group">
                     <input type="text" name="description"  class="form-control my-input" id="name" placeholder="Food Description" value ="<?php echo $f_d; ?>"required>
                  </div>
                  <div class="text-center ">
                     <button name ="submit" type="submit" class=" btn btn-block send-button tx-tfm">Save change and Update</button>
                  </div>
                  <div class="col-md-12 ">
                     <div class="login-or">
                        <hr class="hr-or">
                        <span class="span-or">or</span>
                     </div>
                  </div>
                  <div class="form-group">
                     <a class="btn btn-block g-button" href="../admin/upd_del_admin.php">Reset to Default
                     </a>
                  </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>






<style>
    .send-button{
background: #54C7C3;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.g-button{
color: #fff !important;
border: 1px solid #EA4335;
background: #ea4335 !important;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
.my-input{
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
cursor: text;
padding: 8px 10px;
transition: border .1s linear;
}
.header-title{
margin: 5rem 0;
}
h1{
font-size: 31px;
line-height: 40px;
font-weight: 600;
color:#4c5357;
}
h2{
color: #5e8396;
font-size: 21px;
line-height: 32px;
font-weight: 400;
}
.login-or {
position: relative;
color: #aaa;
margin-top: 10px;
margin-bottom: 10px;
padding-top: 10px;
padding-bottom: 10px;
}
.span-or {
display: block;
position: absolute;
left: 50%;
top: -2px;
margin-left: -25px;
background-color: #fff;
width: 50px;
text-align: center;
}
.hr-or {
height: 1px;
margin-top: 0px !important;
margin-bottom: 0px !important;
}
@media screen and (max-width:480px){
h1{
font-size: 26px;
}
h2{
font-size: 20px;
}
}
<