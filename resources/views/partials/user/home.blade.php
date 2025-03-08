<section class="main-contents">
  <!----------------------------------- Header ----------------------------------->
  <div class="header-background">
    <!-- Background -->
    <div class="header-overlay"></div>
    <div class="container">
      <!-- Dynamic Messaje -->
      <div class="header-content text-center">
        <h2 id="dynamic-message">Bienvenido a EventCreations</h2>
      </div>
      <!-- Search Bar -->
      <div class="search-bar">
        <form class="d-flex search-form">
          <div class="search-box">
            <span class="search-icon">
              <i class="lni lni-search-1"></i>
            </span>
            <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
          </div>
        </form>
      </div>
      <!-- Buttons & User Profile -->
      <div class="header-home-buttons">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <!-- Theme Toggle -- >
          <li class="nav-item">
            <a class="nav-link active theme-toggle" aria-current="page" href="#">
              <i class="lni lni-sun-1 theme-icon-light"></i> < !-- Light Icon Theme -- >
              <i class="lni lni-moon-half-right-5 theme-icon-dark" style="display: none;"></i> < !-- Dark Icon Theme -- >
            </a>
          </li> -->
          <!-- Settings -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="lni lni-gear-1"></i>
            </a>
          </li>
          <!-- Notifications -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="lni lni-bell-1"></i>
            </a>
          </li>
          <!-- User Profile -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="lni lni-user-4"></i>
              <span class="d-none d-sm-inline">My Profile</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!----------------------------------- Cards Nose ----------------------------------->
  <div class="d-flex flex-wrap gap-3">
    <div class="custom-card">
        <span>Birthday</span>
        <div class="icon-circle">
            <i class="lni lni-cake-1"></i>
        </div>
    </div>

    <div class="custom-card">
        <span>Wedding</span>
        <div class="icon-circle">
            <i class="lni lni-diamonds-1"></i>
        </div>
    </div>

    <div class="custom-card">
        <span>Babyshower</span>
        <div class="icon-circle">
            <i class="lni lni-balloons"></i>
        </div>
    </div>

    <div class="custom-card">
        <span>Graduations</span>
        <div class="icon-circle">
            <i class="lni lni-graduation-cap-1"></i>
        </div>
    </div>

    <div class="custom-card">
        <span>And More...</span>
        <div class="icon-circle">
            <i class="lni lni-party-flags"></i>
        </div>
    </div>
  </div>

  <!----------------------------------- Contents ----------------------------------->
  <div class="container py-4">
    <!-- Firs Row -->
    <div class="row g-3">
        <!-- tools -->
        <div class="col-12 col-lg-6">
            <div class="card p-3">
                <img src="https://placehold.jp/250x100.png" class="img-fluid rounded mb-3" alt="Evento">
                <h3 class="">Tools</h3>
                <div class="d-flex justify-content-around">
                  <div class="custom-card">
                      <span>Higligts</span>
                      <div class="icon-circle">
                          <i class="lni lni-highlighter-1"></i>
                      </div>
                  </div>
                  <div class="custom-card">
                      <span>Invitations</span>
                      <div class="icon-circle">
                          <i class="lni lni-envelope-1"></i>
                      </div>
                  </div>
                  <div class="custom-card">
                      <span>Photos</span>
                      <div class="icon-circle">
                          <i class="lni lni-photos"></i>
                      </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Calendar -->
        <div class="col-12 col-lg-6">
            <div class="card p-3">
              <div class="d-flex justify-content-between align-items-center">
                <div class="text-center">
                  <h2 class="display-3 fw-bold" id="Calendar-Day">8</h2>
                  <h3 class="text-primary" id="Calendar-Month">March</h3>
                </div>
                <div class="calendar">
                  <img src="https://placehold.jp/350x350.png" class="img-fluid rounded mb-3" alt="Evento">
                </div>
            </div>
        </div>
    </div>

    <!-- Second Row -->
    <div class="col-12 col-lg-8">
        <div class="card p-3">
            <h3 class="fw-bold">Events</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Events</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="lni lni-calendar me-2"></i>Event 1</td>
                        <td>DD/MM/YY</td>
                        <td><i class="lni lni-checkmark-circle text-primary"></i></td>
                    </tr>
                    <tr>
                        <td><i class="lni lni-calendar me-2"></i>Event 2</td>
                        <td>DD/MM/YY</td>
                        <td><i class="lni lni-spinner-arrow text-warning"></i></td>
                    </tr>
                    <tr>
                        <td><i class="lni lni-calendar me-2"></i>Event 3</td>
                        <td>DD/MM/YY</td>
                        <td><i class="lni lni-checkmark-circle text-primary"></i></td>
                    </tr>
                    <tr>
                        <td><i class="lni lni-calendar me-2"></i>Event 4</td>
                        <td>DD/MM/YY</td>
                        <td><i class="lni lni-spinner-arrow text-warning"></i></td>
                    </tr>
                    <tr>
                        <td><i class="lni lni-calendar me-2"></i>Event 5</td>
                        <td>DD/MM/YY</td>
                        <td><i class="lni lni-checkmark-circle text-primary"></i></td>
                    </tr>
                    <tr>
                        <td><i class="lni lni-calendar me-2"></i>Event 6</td>
                        <td>DD/MM/YY</td>
                        <td><i class="lni lni-spinner-arrow text-warning"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-12 col-lg-4">
        <div class="card p-3">
            <h3 class="fw-bold">Notes</h3>
            <div class="d-grid gap-2">
                <div class="note-card p-3">Texto corto o lista de tareas</div>
                <div class="note-card p-3">Otra nota importante</div>
                <div class="note-card p-3">Recordatorio especial</div>
                <div class="note-card p-3">Idea rápida</div>
            </div>
        </div>
    </div>
</div>

</section>
<script src="{{ asset('js/dynamic-messages.js') }}"></script>
<!-- <script src="{{ asset('js/themes.js') }}"></script> -->
