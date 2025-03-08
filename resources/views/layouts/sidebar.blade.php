<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="/css/custom.css">

</head>
<body>
    <div class="wrapper d-flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="d-flex flex-column">
            <div class="sidebar-logo">
                <h3>EventCreations</h3>
            </div>
            <div class="d-flex">
                <button id="sidebar-toggle-btn" type="button">
                    <i class="lni lni-dashboard-square-1"></i>
                </button>
            </div>
            <ul class="sidebar-nav">
                
                <!-- Overview Page -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" data-route="{{ route('my-home') }}" aria-label="Go to Home">
                        <i class="lni lni-home-2"></i>
                        <span>Home</span>
                    </a>
                </li>

                <!-- User Management -->
                <li class="sidebar-item"> <!-- (Admin Only) -->
                    <a href="#" class="sidebar-link" data-route="{{ route('my-home') }}"> <!-- (modify later) -->
                        <i class="lni lni-user-multiple-4"></i>
                        <span>Users [Admin]</span>
                    </a>
                </li>
                <li class="sidebar-item"> <!-- (Admin Only) -->
                    <a href="#" class="sidebar-link" data-route="{{ route('my-home') }}"> <!-- (modify later) -->
                        <i class="lni lni-shield-2-check"></i>
                        <span>Roles & Permissions [Admin]</span>
                    </a>
                </li>

                <!-- Event Management -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" data-route="{{ route('my-events') }}" aria-label="Go to Your Events">
                        <i class="lni lni-agenda"></i>
                        <span>My Events</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" data-route="{{ route('my-notes') }}" aria-label="Go to Your Notes">
                        <i class="lni lni-pen-to-square"></i>
                        <span>Notes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" data-route="{{ route('my-schedule') }}" aria-label="Go to Your Schedule">
                        <i class="lni lni-calendar-days"></i>
                        <span>Schedule</span>
                    </a>
                </li>

                <!-- Analytics & Reports -->
                <li class="sidebar-item"> <!-- (Admin Only) -->
                    <a href="#" class="sidebar-link" data-route="{{ route('my-home') }}"> <!-- (modify later) -->
                        <i class="lni lni-bar-chart-4"></i>
                        <span>Analytics [Admin]</span>
                    </a>
                </li>
                <li class="sidebar-item"> <!-- (Admin Only) -->
                    <a href="#" class="sidebar-link" data-route="{{ route('my-home') }}"> <!-- (modify later) -->
                        <i class="lni lni-file-multiple"></i>
                        <span>Reports [Admin]</span>
                    </a>
                </li>

                <!-- Support & Help -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" data-route="{{ route('my-home') }}"> <!-- (modify later) -->
                        <i class="lni lni-question-mark"></i>
                        <span>Support</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" data-route="{{ route('my-home') }}"> <!-- (modify later) -->
                        <i class="lni lni-book-1"></i>
                        <span>Documentation</span>
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
         <div id="main-content" class="flex-grow-1">
            @yield('content')
         </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
