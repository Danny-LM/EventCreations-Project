<section class="dashboard-home">
  <!----------------------------------- Header ----------------------------------->
  <div class="container">
      <div class="header-background">
          <!-- 1: Header Nav Buttons -->
          <div class="header-nav d-flex justify-content-end align-items-center p-2">
              <ul class="navbar-nav d-flex flex-row">
                  <!-- Settings -->
                  <li class="nav-item mx-3">
                      <a class="nav-link" href="#">
                          <i class="lni lni-gear-1"></i>
                      </a>
                  </li>
                  <!-- Notifications -->
                  <li class="nav-item mx-3">
                      <a class="nav-link" href="#">
                          <i class="lni lni-bell-1"></i>
                      </a>
                  </li>
                  <!-- User Profile -->
                  <li class="nav-item mx-3">
                      <a class="nav-link" href="#">
                          <i class="lni lni-user-4"></i>
                      </a>
                  </li>
              </ul>
          </div>

          <!-- 2: Dynamic Message -->
          <div class="header-content d-flex justify-content-center align-items-center flex-grow-1">
              <h2 class="dash-home-text" id="dynamic-message">Welcome to EventCreations!</h2>
          </div>

          <!-- 3: Header Footer -->
          <div class="head-footer p-2">
              <!-- Clean Space -->
          </div>
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
  <div class="container">
    <!-- Primera Fila -->
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-6">
        <!-- Tools Card -->
        <div class="card p-3 h-100">
          <img src="https://placehold.jp/250x100.png" class="img-fluid rounded mb-3" alt="Evento">
          <h3>Tools</h3>

          <div class="row row-cols-2 row-cols-lg-3 g-3 justify-content-center">
            <x-head-card icon="lni lni-highlighter-1" text="Highlights"></x-head-card>
            <x-head-card icon="lni lni-envelope-1" text="Invitations"></x-head-card>
            <x-head-card icon="lni lni-photos" text="Photos"></x-head-card>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <!-- Calendar Card -->
        <div class="card p-3 h-100">
          <div class="d-flex justify-content-between align-items-center">
            <div class="text-center">
              <h2 class="display-3 fw-bold" id="Calendar-Day">8</h2>
              <h3 class="text-primary" id="Calendar-Month">March</h3>
            </div>
            <div class="calendar">
              <img src="https://placehold.jp/450x350.png" class="img-fluid rounded mb-3" alt="Evento">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Segunda Fila -->
    <div class="row g-3">
      <!-- Events Card -->
      <div class="col-12 col-md-6">
          <div class="card p-3 h-100">
            <h3 class="fw-bold">Events</h3>
            <table class="table">
              <thead>
                <tr>
                  <a class="card-event-list" href="">
                  <th>Event Name</th>
                  <th>Date</th>
                  <th>Status</th>
                  </a>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <a class="card-event-list" href="">
                  <td><i class="lni lni-calendar me-2"></i>Event 1</td>
                  <td>DD/MM/YY</td>
                  <td><i class="lni lni-check-circle-1 text-success"></i></td>
                  </a>
                </tr>
                <tr>
                  <a class="card-event-list" href="">
                  <td><i class="lni lni-calendar me-2"></i>Event 2</td>
                  <td>DD/MM/YY</td>
                  <td><i class="lni lni-refresh-circle-1-clockwise text-warning"></i></td>
                  </a>
                </tr>
                <tr>
                  <a class="card-event-list" href="">
                  <td><i class="lni lni-calendar me-2"></i>Event 3</td>
                  <td>DD/MM/YY</td>
                  <td><i class="lni lni-refresh-circle-1-clockwise text-warning"></i></td>
                  </a>
                </tr>
                <tr>
                  <a class="card-event-list" href="">
                  <td><i class="lni lni-calendar me-2"></i>Event 4</td>
                  <td>DD/MM/YY</td>
                  <td><i class="lni lni-refresh-circle-1-clockwise text-warning"></i></td>
                  </a>
                </tr>
                <tr>
                  <a class="card-event-list" href="">
                  <td><i class="lni lni-calendar me-2"></i>Event 5</td>
                  <td>DD/MM/YY</td>
                  <td><i class="lni lni-refresh-circle-1-clockwise text-warning"></i></td>
                  </a>
                </tr>
                <tr>
                  <a class="card-event-list" href="">
                  <td><i class="lni lni-calendar me-2"></i>Event 6</td>
                  <td>DD/MM/YY</td>
                  <td><i class="lni lni-refresh-circle-1-clockwise text-warning"></i></td>
                  </a>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
      <div class="col-12 col-md-6">
          <div class="card p-3 h-100">
              <h3 class="fw-bold">Notes</h3>

              <div class="d-grid gap-2">
                  <div class="note-card p-2">
                    <a class="note-card" href="">
                      <i class="lni lni-pencil-1"></i>
                      <span class=note-text-1>Note Title 1</span>
                    </a>
                  </div>
                  <div class="note-card p-2">
                    <a class="note-card" href="">
                      <i class="lni lni-pencil-1"></i>
                      <span class=note-text-1>Note Title 2</span>
                    </a>
                  </div>
                  <div class="note-card p-2">
                    <a class="note-card" href="">
                      <i class="lni lni-pencil-1"></i>
                      <span class=note-text-1>Note Title 3</span>
                    </a>
                  </div>
                  <div class="note-card p-2">
                    <a class="note-card" href="">
                      <i class="lni lni-pencil-1"></i>
                      <span class=note-text-1>Note Title 4</span>
                    </a>
                  </div>
                  <div class="note-card p-2">
                    <a class="note-card" href="">
                      <i class="lni lni-pencil-1"></i>
                      <span class=note-text-1>Note Title 5</span>
                    </a>
                  </div>
                  <div class="note-card p-2">
                    <a class="note-card" href="">
                      <i class="lni lni-pencil-1"></i>
                      <span class=note-text-1>Note Title 6</span>
                    </a>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

</section>
<script src="{{ asset('js/dynamic-messages.js') }}"></script>
<script src="{{ asset('js/themes.js') }}"></script>
<script src="{{ asset('js/calendar.js') }}"></script>
