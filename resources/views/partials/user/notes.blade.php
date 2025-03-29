<section class="dashboard-notes">
<!----------------------------------- Header ----------------------------------->
  <div class="container">
    <div class="header-background">
      <x-head-nav-btns></x-head-nav-btns>
      <x-head-footer text="My Notes"></x-head-footer>
    </div>
  </div>

<!----------------------------------- Content ----------------------------------->
  <div class="container my-4">
    <x-search-filter-bar></x-search-filter-bar>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
      <x-event-card></x-event-card>
      <x-event-card></x-event-card> 
      <x-new-element-card text="New Note"></x-new-element-card>
    </div>
  </div>
</section>
