
<section class="dashboard-events">
<!----------------------------------- Header ----------------------------------->
  <div class="container">
    <div class="header-background">
      <x-head-nav-btns></x-head-nav-btns>
      <x-head-dynamic-message></x-head-dynamic-message>
    </div>
  </div>

<!----------------------------------- Content ----------------------------------->
  <div class="container margin-bottom">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
      <!-- Add dynamic event cards here -->
      <x-event-card></x-event-card>
      <x-event-card></x-event-card>
      <!-- Button to add new event -->
      <x-new-element-card text="New Event"></x-new-element-card>
    </div>
  </div>
</section>
