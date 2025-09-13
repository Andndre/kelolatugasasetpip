<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.3.4/b-3.2.5/datatables.min.css" rel="stylesheet" integrity="sha384-6XpFRggENgqyjzajDl+e76Spqk33H96i3/fAf3TVAEGEXGbyuBQFMV8Id0amI58e" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.3.4/b-3.2.5/datatables.min.js" integrity="sha384-tAtmBHElm2LQzhN4HTR0+9YecfW1tMSASrq0lInT/gkds5VIPzsxNjfRqstPNGvD" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app" class="d-flex">
    <!-- Sidebar -->
    <div id="sidebar" class="p-3">
        <nav class="card">
            <div class="card-body justify-content-between d-flex flex-column">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="{{ route('admin.home') }}" class="nav-link {{ request()->routeIs('admin.home') ? 'active' : '' }}"> <i class="bi bi-grid me-2"></i> <span class="nav-item-text">Dashboard</span></a></li>
                    <li class="nav-item"><a href="{{ route('admin.penugasan.index') }}" class="nav-link {{ request()->routeIs('admin.penugasan.*') ? 'active' : '' }}"> <i class="bi bi-inbox me-2"></i> <span class="nav-item-text">Penugasan</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> <i class="bi bi-people me-2"></i> <span class="nav-item-text">Users</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> <i class="bi bi-clipboard-check me-2"></i> <span class="nav-item-text">Kehadiran</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> <i class="bi bi-pause-circle me-2"></i> <span class="nav-item-text">Izin</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> <i class="bi bi-arrow-left-right me-2"></i> <span class="nav-item-text">Approval Petugas</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> <i class="bi bi-box me-2"></i> <span class="nav-item-text">Asset</span></a></li>
                </ul>
                <div>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="bi bi-person me-2"></i> <span class="nav-item-text">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right me-2"></i> <span class="nav-item-text">Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </nav>
    </div>

    <!-- Content -->
    <div id="content" class="flex-grow-1 p-3">
        @yield('content')
    </div>
</div>
</body>
</html>
