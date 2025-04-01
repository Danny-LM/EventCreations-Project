<section class="dashboard-events">
  <!----------------------------------- Header ----------------------------------->
  <div class="container">
    <x-header></x-header>
  </div>

<!----------------------------------- Dashboard ----------------------------------->
  <div class="container extra-margin margin-bottom">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
      <x-event-card></x-event-card>
      <x-event-card></x-event-card>
      <x-event-card></x-event-card>
      <x-event-card></x-event-card>
      <x-event-card></x-event-card>
      <x-event-card></x-event-card>
      <x-new-event-card icon="lni lni-plus" text="New Event"></x-new-event-card>
    </div>
  </div>
</section>
