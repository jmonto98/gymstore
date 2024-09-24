<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' crossorigin='anonymous' />
    <link href='{{ asset('/css/app.css') }}' rel='stylesheet' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css'>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-pzjw8f+ua7Kw1TIqK6GvZ6pB+N5hgl5O5r4Q8JXabxme4khyWT+v+uWlZ8M8z89b' crossorigin='anonymous'>

    <title>@yield('title', 'Online Store')</title>
</head>

<body>
    <nav class='navbar navbar-expand-lg navbar-light bg-light py-4'>
        <div class='container'>
            <a class='navbar-brand' href='/'><i class='fas fa-dumbbell me-2'></i>{{ __('messages.brand') }}</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarCircleIcons' aria-controls='navbarCircleIcons' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarCircleIcons'>
                <ul class='navbar-nav ms-auto'>
                    <li class='nav-item'>
                        <a class='nav-link' href='{{ route('product.index') }}'><span class='bg-success text-white rounded-circle p-2'><i class='fas fa-box'></i></span> {{ __('messages.products') }}</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='{{ route('cart.index') }}'><span class='bg-primary text-white rounded-circle p-2'><i class='fas fa-shopping-cart'></i></span> {{ __('messages.cart') }}</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='{{ route('home.about') }}'><span class='bg-warning text-white rounded-circle p-2'><i class='fas fa-info-circle'></i></span> {{ __('messages.about') }}</a>
                    </li>
                    @guest
                        <li class='nav-item'>
                            <a class='nav-link' href='{{ route('login') }}'><span class='bg-info text-white rounded-circle p-2'><i class='fas fa-sign-in-alt'></i></span> {{ __('messages.login') }}</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='{{ route('register') }}'><span class='bg-secondary text-white rounded-circle p-2'><i class='fas fa-user-plus'></i></span> {{ __('messages.register') }}</a>
                        </li>
                    @else               
                        <li class='nav-item'>
                            <a class='nav-link'><span class='bg-info text-white rounded-circle p-2'><i class='fas fa-coins'></i></span> {{ Auth::user()->getBalance() }}</a>
                        </li>
                        <li class='nav-item'>
                            <form id='logout' action='{{ route('logout') }}' method='POST'>
                                @csrf
                                <a role='button' class='nav-link' onclick="document.getElementById('logout').submit();"><span class='bg-danger text-white rounded-circle p-2'><i class='fas fa-sign-out-alt'></i></span> {{ __('messages.logout') }}</a>
                            </form>
                        </li>
                        @if(Auth::check() && Auth::user()->getRol() == 'Admin')
                            <li class='nav-item'>
                                <a class='nav-link' href='{{ route('admin.home.index') }}'><span class='bg-dark text-white rounded-circle p-2'><i class='fas fa-user-shield'></i></span> {{ __('messages.admin_panel') }}</a>
                            </li>
                        @endif
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <header class='masthead bg-primary text-white text-center py-4'>
        <div class='container d-flex align-items-center flex-column'>
            <h2>@yield('subtitle', 'GymStore')</h2>
        </div>
    </header>

    <div class='container my-4'>
        @yield('content')
    </div>

    <div class='copyright py-4 text-center text-white'>
        <div class='container'>
            <small>
                {{ __('messages.copyright') }}
            </small>
        </div>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' crossorigin='anonymous'></script>
</body>

</html>