
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CMS</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <!-- php -->
    <?php
      if(!isset($_SESSION["eml"]))
       echo '<div class="mx-2">
        <button
          class="btn btn-primary"
          data-bs-toggle="modal"
          data-bs-target="#loginModal"
          
        >
          Login
        </button>
        <button
          class="btn btn-primary"
          data-bs-toggle="modal"
          data-bs-target="#signupModal"
        >
          Signup
        </button>
      </div>'
    ?>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../php_files/index.php">Home</a>
        </li>
        <li action class="nav-item">
          <a class="nav-link" href="./contact.php">About</a>
        </li>

        <!-- php -->
        <?php
        if(isset($_SESSION["eml"])){

          echo '<li class="nav-item">
          <a class="nav-link" href="/arv/php_files/user.php">User</a>
        </li>';

         echo '<li class="nav-item">
          <a class="nav-link" href="/arv/php_files/order.php">Orders</a>
        </li>';

         echo '<li class="nav-item">
         <a class="nav-link" href="/arv/php_files/logout.php">Logout</a>
        </li>';

        }

        else {
          echo '<li class="nav-item">
          <a class="nav-link disabled">Orders</a>
        </li>';
        }
        ?>

      </ul>
      <form class="d-flex" role="search">
        <input
          class="form-control me-2"
          type="search"
          placeholder="Search"
          aria-label="Search"
        />
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
