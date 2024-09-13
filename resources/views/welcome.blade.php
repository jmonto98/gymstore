<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Store - Fitness & Deportes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* In-line styles for easier setup */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #343a40;
        }

        header {
            background-color: #282828;
            padding: 15px 0;
            text-align: center;
            color: white;
        }

        header nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        header nav ul li {
            display: inline;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        #hero {
            height: 90vh;
            background-image: url('/images/fitness-banner.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        #hero h1 {
            font-size: 48px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        #hero p {
            font-size: 18px;
            margin-bottom: 25px;
        }

        .btn-primary {
            background-color: #ff7f50;
            color: white;
            padding: 15px 30px;
            border: none;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background-color: #e06f3f;
        }

        .section-title {
            text-align: center;
            margin: 50px 0;
            font-size: 36px;
            font-weight: 600;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            padding: 0 50px;
        }

        .product {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .product img {
            max-width: 100%;
            height: auto;
        }

        .product h3 {
            font-size: 20px;
            margin: 15px 0;
        }

        .product p {
            font-size: 16px;
            color: #6c757d;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            #hero h1 {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="#hero">Inicio</a></li>
                <li><a href="#products">Productos</a></li>
                <li><a href="#about">Nosotros</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero">
        <h1>Sport Store</h1>
        <p>Encuentra los mejores productos deportivos y de fitness aquí.</p>
        <a href="#products" class="btn-primary">Ver Productos</a>
    </section>

    <section id="products">
        <h2 class="section-title">Productos Destacados</h2>
        <div class="product-grid">
            <!-- Reemplazar con un loop de productos dinámicos -->
            <div class="product">
                <img src="/images/product1.jpg" alt="Producto 1">
                <h3>Pesa Rusa</h3>
                <p>$120</p>
                <a href="#" class="btn-primary">Comprar</a>
            </div>
            <div class="product">
                <img src="/images/product2.jpg" alt="Producto 2">
                <h3>Mancuernas</h3>
                <p>$150</p>
                <a href="#" class="btn-primary">Comprar</a>
            </div>
            <div class="product">
                <img src="/images/product3.jpg" alt="Producto 3">
                <h3>Colchoneta Yoga</h3>
                <p>$80</p>
                <a href="#" class="btn-primary">Comprar</a>
            </div>
        </div>
    </section>

    <section id="about">
        <h2 class="section-title">Sobre Nosotros</h2>
        <p style="text-align: center; padding: 0 50px;">
            En Sport Store, nos especializamos en productos de alta calidad para el deporte y el fitness. Nuestro objetivo es ayudarte a mantenerte en forma con los mejores equipos.
        </p>
    </section>

    <section id="contact">
        <h2 class="section-title">Contáctanos</h2>
        <p style="text-align: center;">¿Tienes alguna pregunta? Escríbenos a <strong>info@sportstore.com</strong></p>
    </section>

    <footer>
        <p>&copy; 2024 Sport Store. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
