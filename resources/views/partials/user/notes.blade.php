
<!----------------------------------- Header ----------------------------------->
  <div class="container">
    <div class="header-background">
      <x-head-nav-btns></x-head-nav-btns>
      <x-head-footer text="My Notes"></x-head-footer>
    </div>

    <!-- search and filter bar -->
    <div class="d-flex align-items-center pt-5">
      <x-search-bar></x-search-bar>
    </div>
  </div>

<!----------------------------------- Content ----------------------------------->
  <div class="container py-2">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
      <!-- Add dynamic notes cards here -->
      <x-note-card></x-note-card>
      <x-note-card></x-note-card> 
      <!-- Button to add new note -->
      <x-new-element-card text="New Note"></x-new-element-card>
    </div>
  </div>
