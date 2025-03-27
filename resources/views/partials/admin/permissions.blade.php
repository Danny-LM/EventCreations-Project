<section class="dashboard-home">
  <!----------------------------------- Header ----------------------------------->
  <div class="container">
      <x-header></x-header>
  </div>

<!----------------------------------- Content ----------------------------------->
  <div class="container extra-margin margin-bottom">
    <!-- <h1>Welcome to permisions & roles</h1> -->

    <!-- Mensaje de éxito -->
    <!-- @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif -->

    <!-- Form to create a new role -->
    <div class="d-flex justify-content-center align-items-center">
      <div class="card p-4" style="max-width: 90%; width: 100%;">
        <h4 class="card-title text-center mb-4">Create Role</h4>
        <form action="">
          <!-- Name field -->
          <div class="form-group mb-3">
            <label for="name">Role Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Create Role</button>
        </form>
      </div>
    </div>

  </div>
</section>
