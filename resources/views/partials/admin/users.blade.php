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
      <div class="p-4" style="max-width: 100%;">
        <h4 class="card-title text-center mb-4">Create User</h4>
        <form action="">
          <div class="row mb-3">
            <!-- Role field -->
            <div class="col-md-6">
              <label for="name">Role</label>
              <select name="role" id="role" class="form-control">
                <option value="1">Admin</option>
                <option value="2">Support</option>
                <option value="3" selected>User</option>
              </select>
            </div>
            <!-- Username field -->
            <div class="col-md-6">
              <label for="name">Username</label>
              <input type="text" name="username" id="username" class="form-control" required>
            </div>
          </div>
          
          <div class="row mb-3">
            <!-- Email field -->
            <div class="col-md-12">
              <label for="name">Email</label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <!-- Password field -->
            <div class="col-md-12">
              <label for="name">Password</label>
              <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <!-- Confirm password field -->
            <div class="col-md-12">
              <label for="name">Confirm Password</label>
              <input type="password" name="confirm-password" id="confirm-password" class="form-control" required>
            </div>
          </div>

          <button type="submit" class="btn btn-primary w-100">Create Role</button>
        </form>
      </div>
    </div>

  </div>
</section>
