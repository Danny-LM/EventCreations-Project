
<section class="dashboard-home">
  <!----------------------------------- Header ----------------------------------->
  <div class="header-background">
    <div class="container position-relative">
      <!-- Dynamic Message -->
      <div class="header-content">
        <h2 id="dynamic-message">Welcome to EventCreations!</h2>
      </div>

      <div class="header-nav">
        <div class="d-flex align-items-center">
          <!-- Search Bar -->
          <div class="search-bar me-3">
            <form class="d-flex search-form">
              <div class="search-box">
                <span class="search-icon">
                  <i class="lni lni-search-1"></i>
                </span>
                <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
              </div>
            </form>
          </div>

          <!-- Nav Buttons -->
          <div class="header-home-buttons">
            <ul class="navbar-nav d-flex flex-row">
              <!-- Settings -->
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="lni lni-gear-1"></i>
                </a>
              </li>
              <!-- Notifications -->
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="lni lni-bell-1"></i>
                </a>
              </li>
              <!-- User Profile -->
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="lni lni-user-4"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!----------------------------------- Cards Nose ----------------------------------->
  <div class="d-flex flex-wrap gap-3">
    <li class="custom-card">
      <span>Birthday</span>
      <div class="icon-circle">
          <i class="lni lni-cake-1"></i>
      </div>
    </li>

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
    <!-- Primera Fila -->
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-6">
        <div class="card p-3 h-100">
          <img src="https://placehold.jp/250x100.png" class="img-fluid rounded mb-3" alt="Evento">
          <h3>Tools</h3>
          <div class="d-flex justify-content-around">
            <div class="custom-card">
            <span>Highlights</span>
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

      <div class="col-12 col-md-6">
        <div class="card p-3 h-100">
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
    </div>

    <!-- Segunda Fila -->
    <div class="row g-3">
        <div class="col-12 col-md-6">
            <div class="card p-3 h-100">
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
                            <td><i class="lni lni-check-circle-1 text-success"></i></td>
                        </tr>
                        <tr>
                            <td><i class="lni lni-calendar me-2"></i>Event 2</td>
                            <td>DD/MM/YY</td>
                            <td><i class="lni lni-refresh-circle-1-clockwise text-warning"></i></td>
                        </tr>
                        <tr>
                            <td><i class="lni lni-calendar me-2"></i>Event 3</td>
                            <td>DD/MM/YY</td>
                            <td><i class="lni lni-refresh-circle-1-clockwise text-warning"></i></td>
                        </tr>
                        <tr>
                            <td><i class="lni lni-calendar me-2"></i>Event 4</td>
                            <td>DD/MM/YY</td>
                            <td><i class="lni lni-refresh-circle-1-clockwise text-warning"></i></td>
                        </tr>
                        <tr>
                            <td><i class="lni lni-calendar me-2"></i>Event 5</td>
                            <td>DD/MM/YY</td>
                            <td><i class="lni lni-refresh-circle-1-clockwise text-warning"></i></td>
                        </tr>
                        <tr>
                            <td><i class="lni lni-calendar me-2"></i>Event 6</td>
                            <td>DD/MM/YY</td>
                            <td><i class="lni lni-refresh-circle-1-clockwise text-warning"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card p-3 h-100">
                <h3 class="fw-bold">Notes</h3>
                <div class="d-grid gap-2">
                    <div class="note-card p-3">
                      <i class="lni lni-pencil-1"></i>
                      <span class=note-text-1>Texto corto o lista de tareas</span>
                    </div>
                    <div class="note-card p-3">
                      <i class="lni lni-pencil-1"></i>
                      <span class=note-text-1>Otra nota important</span>
                    </div>
                    <div class="note-card p-3">
                      <i class="lni lni-pencil-1"></i>
                      <span class=note-text-1>Recordatorio especial</span>
                    </div>
                    <div class="note-card p-3">
                      <i class="lni lni-pencil-1"></i>
                      <span class=note-text-1>Idea rápida</span>
                    </div>
                    <div class="note-card p-3">
                      <i class="lni lni-pencil-1"></i>
                      <span class=note-text-1>Texto corto o lista de tareas</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

</section>
<script src="{{ asset('js/dynamic-messages.js') }}"></script>
<script src="{{ asset('js/themes.js') }}"></script>
