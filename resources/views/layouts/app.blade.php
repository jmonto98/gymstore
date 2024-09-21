<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>@yield('title', 'Online Store')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="/">{{ __('messages.brand') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('home.index') }}">{{ __('messages.home') }}</a>
                    <a class="nav-link active" href="{{ route('product.index') }}">{{ __('messages.products') }}</a>
                    <a class="nav-link active" href="{{ route('home.about') }}">{{ __('messages.about') }}</a>
                    <a class="nav-link active" href="{{ route('home.contact') }}">{{ __('messages.contact_us') }}</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                    <a class="nav-link active" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                    <a class="nav-link active" href="{{ route('register') }}">{{ __('messages.register') }}</a>
                    <a class="nav-link active" href="{{ route('cart.index') }}">{{ __('messages.cart') }}</a>
                    @else
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                    <a class="nav-link active" href="{{ route('cart.index') }}">{{ __('messages.cart') }}</a>
                    @if(Auth::check() && Auth::user()->getRol() == 'ADMIN')
                    <a class="nav-link active" href="{{ route('admin.home.index') }}">{{ __('messages.admin_panel') }}</a>
                    @endif
                    <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">{{ __('messages.logout') }}</a>
                    @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'GymStore')</h2>
        </div>
    </header>
    <!-- header -->

    <div class="container my-4">
        @yield('content')
    </div>

    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - GymStore Team
                </a>
            </small>
        </div>
    </div>
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>