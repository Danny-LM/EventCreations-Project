
<!----------------------------------- Header ----------------------------------->
  <div class="container">
    <div class="header-background">
      <x-head-nav-btns></x-head-nav-btns>
      <x-head-footer text="My Events"></x-head-footer>
    </div>

    <!-- search and filter bar -->
    <div class="d-flex align-items-center pt-5">
      <x-search-bar></x-search-bar>
      <x-modal-button></x-modal-button>
      <x-modal-button></x-modal-button>
    </div>
  </div>

<!----------------------------------- Content ----------------------------------->
  <div class="container py-2">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
      <!-- Add dynamic event cards here -->
      <x-event-card></x-event-card>
      <x-event-card></x-event-card>
      <!-- Button to add new event -->
      <x-new-element-card text="New Event"></x-new-element-card>
    </div>
  </div>
