<section class="dashboard-roles">
<!----------------------------------- Header ----------------------------------->
  <div class="container">
    <div class="header-background">
      <x-head-nav-btns></x-head-nav-btns>
      <x-head-dynamic-message></x-head-dynamic-message>
    </div>
  </div>

<!----------------------------------- Content ----------------------------------->
  <div class="container margin-bottom">
    <!-- <h1>Welcome to permisions & roles</h1> -->

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <!-- Form to create a new role -->
    <div class="d-flex justify-content-center align-items-center">
      <div class="p-4" style="max-width: 90%; width: 100%;">
        <h4 class="card-title text-center mb-4">Create Role</h4>
        
        <form action="{{ url('/roles') }}" method="POST">
          @csrf
          <!-- Name field -->
          <div class="form-group mb-3">
            <label for="name">Role Name</label>
            <input type="text" name="role_name" id="role_name" class="form-control" required>
            @error('role_name')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary w-100">Create Role</button>
        </form>

      </div>
    </div>

  </div>
</section>
