<section class="dashboard-home">
<!----------------------------------- Header ----------------------------------->
  <div class="container">
    <div class="header-background">
      <x-head-nav-btns></x-head-nav-btns>
      <x-head-dynamic-message></x-head-dynamic-message>
    </div>
  </div>

<!----------------------------------- Header Cards ----------------------------------->
  <div class="container">
      <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 g-3 justify-content-center">
          <x-head-card icon="lni lni-cake-1" text="Birthday"></x-head-card>
          <x-head-card icon="lni lni-diamonds-1" text="Wedding"></x-head-card>
          <x-head-card icon="lni lni-balloons" text="Babyshower"></x-head-card>
          <x-head-card icon="lni lni-graduation-cap-1" text="Graduations"></x-head-card>
          <x-head-card icon="lni lni-party-flags" text="And More..."></x-head-card>
      </div>
  </div> 

  <!----------------------------------- Contents ----------------------------------->
  <div class="container margin-bottom">
    <!-- Primera Fila -->
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-6">
        <x-tools-card></x-tools-card>
      </div>

      <div class="col-12 col-md-6">
        <x-calendar-card></x-calendar-card>
      </div>
    </div>

    <!-- Segunda Fila -->
    <div class="row g-3">
      <div class="col-12 col-md-6">
          <x-events-table-card></x-events-table-card>
      </div>

      <div class="col-12 col-md-6">
          <x-note-list-card></x-note-list-card>
      </div>
    </div>
  </div>
</section>

<script src="{{ asset('js/dynamic-messages.js') }}"></script>
<script src="{{ asset('js/themes.js') }}"></script>
<script src="{{ asset('js/calendar.js') }}"></script>
