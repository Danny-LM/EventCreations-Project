<section class="dashboard-home">
  <!----------------------------------- Header ----------------------------------->
  <div class="container">
      <x-header></x-header>
  </div>

<!----------------------------------- Content ----------------------------------->
  <div class="container extra-margin margin-bottom">
    <!-- <h1>Welcome to your users page</h1> -->

    <!-- Form to create a new user -->
    <div class="d-flex justify-content-center align-items-center">
      <div class="card p-4" style="max-width: 90%; width: 100%;">
        <h4 class="card-title text-center mb-4">Create User</h4>
        <form action="">
          <!-- Username field -->
          <div class="form-group mb-3">
            <label for="name">Username</label>
            <input type="text" name="name" id="name" class="form-control" required>
          </div>
          <div class="form-group mb-3">
            <label for="name">Username</label>
            <input type="text" name="name" id="name" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Create Role</button>
        </form>
      </div>
    </div>

  </div>
</section>
