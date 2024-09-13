<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Store</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <h1>Sport Store</h1>
            <ul>
                <li><a href="#products">Productos</a></li>
                <li><a href="#about">Sobre Nosotros</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero">
        <h2>Bienvenido a la tienda de artículos deportivos</h2>
        <p>Encuentra los mejores productos para tu entrenamiento y bienestar</p>
        <a href="#products" class="btn">Ver Productos</a>
    </section>

    <section id="products">
        <h2>Nuestros Productos</h2>
        <div class="product-grid">
            <!-- Aquí puedes hacer un loop de productos -->
            <div class="product">
                <img src="images/product1.jpg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>$100</p>
                <a href="#" class="btn">Comprar</a>
            </div>
            <div class="product">
                <img src="images/product2.jpg" alt="Producto 2">
                <h3>Producto 2</h3>
                <p>$120</p>
                <a href="#" class="btn">Comprar</a>
            </div>
        </div>
    </section>

    <section id="about">
        <h2>Sobre Nosotros</h2>
        <p>Somos una tienda especializada en productos de deporte y fitness para ayudarte a mantenerte en forma.</p>
    </section>

    <section id="contact">
        <h2>Contacto</h2>
        <p>¿Tienes preguntas? Contáctanos en <strong>info@sportstore.com</strong></p>
    </section>

    <footer>
        <p>&copy; 2024 Sport Store. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
