
<footer class="container my-5 col-md-12">
  <div class = "row">
    <p class="float-end col-md-1">
        <button
          class="btn btn-dark"
          data-bs-toggle="modal"
          data-bs-target="#admin_Modal"
        >
          Admin
        </button>
      </p>
    <!-- <p class="float-end my-9"><a href="#">Back to top</a></p> -->
    <p class= "col-md-8">
      © Canteen Management Project · <a href="#">Privacy</a> ·
      <a href="#">Terms</a>
    </p>
    <div>
  </footer>

  <!-- admin  modal -->
  <div class="container">
  <div
    class="modal fade"
    id="admin_Modal"
    tabindex="-1"
    aria-labelledby="adminModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="font-weight-bold modal-title fs-5" id="adminModalLabel">ADMIN</h1>
          <button
            type="button"
            class="btn-close mx-1"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <form action="../admin/admin_verify.php" method="POST">
            <div class="mb-3">
              <label  class="form-label">Admin ID</label>
              <input
                name="admin_id"
                class="form-control"
                id="input-admin_id"
                aria-describedby="admin_id_Help"
              />
              <div id="Admin_id_Help" class="form-text">
                Don't share this info with anyone.
              </div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input
                name="password"
                type="password"
                class="form-control"
                id="password"
              />
            </div>
            <button type="submit" name="submit" class="btn btn-primary">
              Submit
            </button>
          </form>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
</div>