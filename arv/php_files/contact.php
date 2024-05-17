<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq"
      crossorigin="anonymous"
    />

    <title>OnlineCanteen</title>
  </head>
  <body>
    
  <?php 
  require_once '../components/navbar.php'; 
  require '../components/login-modal.html';
  require '../components/signup-modal.html'; 
  ?>

    <div class="container">
      <div class="row featurette d-flex justify-content-center align-items-center my-5">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">
            ONLINE CANTEEN SERVICE..<br>
            <span class="text-body-secondary"><br>Place your orders....</span>
          </h2>
          <p class="font-italic">
          <samp> High quality foods with proper price and management.<br>
           Thankyou for joining with us.</samp>
          </p>
        </div>
        <div class="col-md-5">
            <img src ="../photos/contact.jpg" alt ="">
       
            <title>Placeholder</title>
            <rect
              width="100%"
              height="100%"
              fill="var(--bs-secondary-bg)"
            ></rect>
          </svg>
        </div>
      </div>
    </div>
</div>
<?php
    require_once "../components/footer.php";
  ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    -->
  </body>
</html>
