@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 position-fixed vh-100 bg-dark bg-gradient p-4">
            <!-- Dashboards with Submenu -->
            <div class="dropdown">
                <a class="btn btn-primary w-100 dropdown-toggle" href="#" role="button" id="dashboardDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dashboards
                </a>
                <div class="dropdown-menu w-100" aria-labelledby="dashboardDropdown">
                    <a class="dropdown-item" href="{{ route('users.index') }}">Users</a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 offset-md-2 p-4">
            @yield('content')
        </div>
    </div>
</div>
