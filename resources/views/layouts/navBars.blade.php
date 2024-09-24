<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' crossorigin='anonymous' />
    <link href='{{ asset('/css/app.css') }}' rel='stylesheet' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css'>
    <title>@yield('title', 'Online Store')</title>
</head>

<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-secondary py-4'>
    <div class='container'>
        <a class='navbar-brand' href='/'>{!! __('messages.brand') !!}</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSearch' aria-controls='navbarSearch' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSearch'>
            <form class='d-flex ms-auto'>
                <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'>
                <button class='btn btn-outline-light' type='submit'>Search</button>
            </form>
        </div>
    </div>
</nav>

<nav class='navbar navbar-expand-lg navbar-dark bg-primary py-4'>
    <div class='container'>
        <a class='navbar-brand' href='/'>{!! __('messages.brand') !!}</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarIcons' aria-controls='navbarIcons' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarIcons'>
            <ul class='navbar-nav ms-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('home.index') }}'><i class='fas fa-home'></i> {!! __('messages.home') !!}</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('cart.index') }}'><i class='fas fa-shopping-cart'></i> {!! __('messages.cart') !!}</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'><i class='fas fa-user'></i> Perfil</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('home.about') }}'><i class='fas fa-info-circle'></i> {!! __('messages.about') !!}</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('home.contact') }}'><i class='fas fa-envelope'></i> {!! __('messages.contact_us') !!}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class='navbar navbar-expand-lg navbar-dark bg-primary py-4'>
    <div class='container'>
        <a class='navbar-brand' href='/'>{!! __('messages.brand') !!}</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarIconsBelow' aria-controls='navbarIconsBelow' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarIconsBelow'>
            <ul class='navbar-nav ms-auto text-center'>
                <li class='nav-item'>
                    <a class='nav-link d-flex flex-column' href='{{ route('home.index') }}'>
                        <i class='fas fa-home mb-1'></i>
                        <span>{!! __('messages.home') !!}</span>
                    </a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link d-flex flex-column' href='{{ route('cart.index') }}'>
                        <i class='fas fa-shopping-cart mb-1'></i>
                        <span>{!! __('messages.cart') !!}</span>
                    </a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link d-flex flex-column' href='#'>
                        <i class='fas fa-user mb-1'></i>
                        <span>Perfil</span>
                    </a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link d-flex flex-column' href='{{ route('home.about') }}'>
                        <i class='fas fa-info-circle mb-1'></i>
                        <span>{!! __('messages.about') !!}</span>
                    </a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link d-flex flex-column' href='{{ route('home.contact') }}'>
                        <i class='fas fa-envelope mb-1'></i>
                        <span>{!! __('messages.contact_us') !!}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class='navbar navbar-expand-lg navbar-light bg-light py-4'>
    <div class='container'>
        <a class='navbar-brand' href='/'><i class='fas fa-dumbbell me-2'></i>{!! __('messages.brand') !!}</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarCircleIcons' aria-controls='navbarCircleIcons' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarCircleIcons'>
            <ul class='navbar-nav ms-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('home.index') }}'><span class='bg-primary text-white rounded-circle p-2'><i class='fas fa-home'></i></span> {!! __('messages.home') !!}</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('cart.index') }}'><span class='bg-success text-white rounded-circle p-2'><i class='fas fa-shopping-cart'></i></span> {!! __('messages.cart') !!}</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'><span class='bg-info text-white rounded-circle p-2'><i class='fas fa-user'></i></span> Perfil</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('home.about') }}'><span class='bg-warning text-white rounded-circle p-2'><i class='fas fa-info-circle'></i></span> {!! __('messages.about') !!}</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('home.contact') }}'><span class='bg-danger text-white rounded-circle p-2'><i class='fas fa-envelope'></i></span> {!! __('messages.contact_us') !!}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class='navbar navbar-expand-lg navbar-light bg-light py-4'>
    <div class='container'>
        <a class='navbar-brand' href='/'><i class='fas fa-dumbbell me-2'></i>{!! __('messages.brand') !!}</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarDeportivo' aria-controls='navbarDeportivo' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarDeportivo'>
            <ul class='navbar-nav ms-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('home.index') }}'><i class='fas fa-running me-2'></i>{!! __('messages.home') !!}</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('cart.index') }}'><i class='fas fa-shopping-bag me-2'></i>{!! __('messages.cart') !!}</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'><i class='fas fa-tshirt me-2'></i>Ropa Deportiva</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'><i class='fas fa-futbol me-2'></i>Equipamiento</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('home.contact') }}'><i class='fas fa-headset me-2'></i>{!! __('messages.contact_us') !!}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class='navbar navbar-expand-lg navbar-light bg-white py-4 border-bottom'>
    <div class='container'>
        <a class='navbar-brand fw-bold' href='/'>Gym<span class='text-primary'>Store</span></a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarMinimalista' aria-controls='navbarMinimalista' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarMinimalista'>
            <ul class='navbar-nav ms-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('home.index') }}'>{!! __('messages.home') !!}</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'>Catálogo</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'>Ofertas</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('cart.index') }}'>{!! __('messages.cart') !!}</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('home.contact') }}'>{!! __('messages.contact_us') !!}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class='navbar navbar-expand-lg navbar-dark bg-gradient py-4' style='background: linear-gradient(45deg, #ff4e50, #f9d423);'>
    <div class='container'>
        <a class='navbar-brand' href='/'><i class='fas fa-bolt me-2'></i>{!! __('messages.brand') !!}</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarEnergetico' aria-controls='navbarEnergetico' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarEnergetico'>
            <ul class='navbar-nav ms-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('home.index') }}'><i class='fas fa-home me-2'></i>{!! __('messages.home') !!}</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'><i class='fas fa-fire-alt me-2'></i>Novedades</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'><i class='fas fa-medal me-2'></i>Marcas Top</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('cart.index') }}'><i class='fas fa-shopping-cart me-2'></i>{!! __('messages.cart') !!}</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='{{ route('home.contact') }}'><i class='fas fa-envelope me-2'></i>{!! __('messages.contact_us') !!}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>