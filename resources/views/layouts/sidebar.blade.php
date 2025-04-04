<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventCreations - My Dashboard</title>
    
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    
    <link rel="stylesheet" href="/css/custom.css">

</head>
<body>
    <div class="wrapper d-flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="d-flex flex-column expand">
            <div class="d-flex">
                <button id="sidebar-toggle-btn" type="button">
                    <i class="fi fi-rr-apps"></i>
                </button>
                <div class="sidebar-logo">
                    <h3>EventCreations</h3>
                </div>
            </div>
            <ul class="sidebar-nav">
                
                <!-- Overview Page -->
                <li class="sidebar-item">
                    <a href="#"
                        class="sidebar-link"
                        data-route="{{ route('dashboard', ['section' => 'my-home']) }}"
                        aria-label="Go to your home">
                        <i class="fi fi-rr-home"></i>
                        <span>Home</span>
                    </a>
                </li>

                <!-- User Management -->
                <li class="sidebar-item"> <!-- (Admin Only) -->
                    <a href="#"
                        class="sidebar-link"
                        data-route="{{ route('dashboard', ['section' => 'users']) }}"
                        aria-label="Go to your users">
                        <i class="fi fi-rr-users"></i>
                        <span>Users [Admin]</span>
                    </a>
                </li>
                <li class="sidebar-item"> <!-- (Admin Only) -->
                    <a href="#"
                        class="sidebar-link"
                        data-route="{{ route('dashboard', ['section' => 'permissions']) }}"
                        aria-label="Go to your roles and permissions">
                        <i class="fi fi-rr-shield"></i>
                        <span>Roles [Admin]</span>
                    </a>
                </li>

                <!-- Event Management -->
                <li class="sidebar-item">
                    <a href="#"
                        class="sidebar-link"
                        data-route="{{ route('dashboard', ['section' => 'my-events']) }}"
                        aria-label="Go to your events">
                        <i class="fi fi-rr-table-picnic"></i>
                        <span>My Events</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#"
                        class="sidebar-link"
                        data-route="{{ route('dashboard', ['section' => 'my-notes']) }}"
                        aria-label="Go to your notes">
                        <i class="fi fi-rr-edit"></i>
                        <span>My Notes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#"
                        class="sidebar-link"
                        data-route="{{ route('dashboard', ['section' => 'my-schedule']) }}"
                        aria-label="Go to your schedule">
                        <i class="fi fi-rr-calendar-day"></i>
                        <span>My Schedule</span>
                    </a>
                </li>

                <!-- Analytics & Reports -->
                <li class="sidebar-item"> <!-- (Admin Only) -->
                    <a href="#"
                        class="sidebar-link"
                        data-route="{{ route('dashboard', ['section' => 'analytics']) }}"
                        aria-label="Go to your analytics">
                        <i class="fi fi-rr-chat-arrow-grow"></i>
                        <span>Analytics [Admin]</span>
                    </a>
                </li>
                <li class="sidebar-item"> <!-- (Admin Only) -->
                    <a href="#"
                        class="sidebar-link"
                        data-route="{{ route('dashboard', ['section' => 'reports']) }}"
                        aria-label="Go to your reports">
                        <i class="fi fi-rr-file-medical-alt"></i>
                        <span>Reports [Admin]</span>
                    </a>
                </li>

                <!-- Support & Help -->
                <li class="sidebar-item">
                    <a href="#"
                        class="sidebar-link"
                        data-route="{{ route('dashboard', ['section' => 'support']) }}"
                        aria-label="Go to your support">
                        <i class="fi fi-rr-headset"></i>
                        <span>Support</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#"
                        class="sidebar-link"
                        data-route="{{ route('dashboard', ['section' => 'documentation']) }}"
                        aria-label="Go to your documentation">
                        <i class="fi fi-rr-document"></i>
                        <span>Documentation</span>
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
         <div id="main-content" class="flex-grow-1">
            @isset($content)
                @include($content)
            @endisset
         </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script type="module" src="{{ asset('js/dashboard/sidebar-toggle.js') }}"></script>
    <script type="module" src="{{ asset('js/dashboard/spa-navigation.js') }}"></script>
</body>
</html> 
