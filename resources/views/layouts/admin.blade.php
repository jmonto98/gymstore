<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>@yield('title', 'Admin - Gym Store')</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="position-sticky pt-3">
                    <a href="{{ route('admin.home.index') }}"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-4">Admin Panel</span>
                    </a>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('admin.home.index') }}">Admin - Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('admin.product.index') }}">Admin -Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('category.home.index') }}">Admin -Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('useMode.home.index') }}">Admin -UseMode</a>
                        </li>
                    </ul>
                    <hr>
                    <div class="px-3">
                        <a href="{{ route('home.index') }}" class="btn btn-primary w-100">Go back to home page</a>
                    </div>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <span class="profile-font me-2">Admin</span>
                            <img class="img-profile rounded-circle" src="{{ asset('/images/undraw_profile.svg') }}"alt="Profile" width="33" height="33">
                        </div>
                    </div>
                </div>

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white py-4">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">Gym Store</a>
            </small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>