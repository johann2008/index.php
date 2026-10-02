<?php
//configuaración básica de la pagina//
$nombreRestaurante = "Delicias Caseras";
$telefonowhatsapp = "951335622";
$mensajePedido = urlencode("hola, deseo realizar un pedido de comida.");

$platos = [
    [
        "nombre" => "lomo saltado clasico",
        "descripcion" => "jugosos trozos de lomo fino salteados al wok con cebolla,tomate , aji amarillo ,servido con papa frita y arroz blanco",
        "precio" => " 28.00",
        "imagen" => "img/lomo saltado.jpg"
    ],
    [

        "nombre" => "pollo a la brasa",
        "descripcion" => "pollo sazonado con especias y hierbas, asado a la perfección, acompañado de papas fritas y ensalada fresca.",
        "precio" => " 50.00",
        "imagen" => "img/pollo a la brasa.jpg"
    ],
    [
        "nombre" => "ceviche de pescado",
        "descripcion" => "fresco pescado marinado en jugo de limón, mezclado con cebolla, culantro y ají, servido con camote y choclo.",
        "precio" => " 22.00",
        "imagen" => "img/ceviche pescado.jpg"
    ],

    [
        "nombre" => "arroz con pollo",
        "descripcion" => "arroz cocido con trozos de pollo, verduras y especias, servido con salsa de ají.",
        "precio" => " 20.00",
        "imagen" => "img/arroz con pollo.jpg"
    ]

];

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $nombreRestaurante; ?>-platos a la carta</title>

    <style>
        /*estilos generales*/
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #8d4925
        }

        /*--logo y encabezado--*/
        .hero {
            padding: 20px 40px;
            align-items: center;
        }

        .hero-content {
            display: flex;
            align-items: center;
            /* Alinea verticalmente el logo y el texto */
            gap: 20px;
            /* Espacio entre el logo y el texto */
        }

        .logo {
            width: 250px;
            /* Ajusta aquí el tamaño deseado */
            height: 250px;
            object-fit: contain;
            /* Mantiene la proporción sin deformarse */
            border-radius: 8px;
            /* Opcional: bordes redondeados */
            align-items: center;
        }

        .hero-text {
            text-align: left;
            /* Mantiene el texto alineado a la izquierda junto al logo */
        }

        /* --- TAMAÑO UNIFORME EN IMÁGENES DE TARJETAS --- */
        .card img {
            width: 100%;
            /* Ocupa el ancho completo de la tarjeta */
            height: 200px;
            /* Altura fija para que todas queden iguales */
            object-fit: cover;
            /* Recorta la imagen proporcionalmente sin deformarla */
            display: block;
        }

        /*contenedor del menú*/
        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 30px;
            color: #2b2d42;
        }

        .platos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        /*tarjeta de cada plato*/
        .card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .car img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .card-title {
            font-size: 1.3rem;
            margin-bottom: 8px;
            color: #2b2d42;
        }

        .card-desc {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 15px;
        }

        .card-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #e63946;


        }

        .cta-section {
            background-color: #A9A9A9;
            border-top: 1px solid #e0e0e0;
            text-align: center;
            padding: 60px 20px;
            margin-top: 40px;

        }

        .cta-section h2 {
            font-size: 2.2rem;
            margin-bottom: 15px;
            color: #1d3557;
        }

        .cta-section p {
            font-size: 1.1rem;
            margin-bottom: 25px;
            color: #555;

        }

        .btn-comprar {
            display: incline-block;
            background-color: #25d366;
            color: #ffffff;
            font-size: 1.3rem;
            font-weight: bold;
            padding: 16px 40px;
            border-radius: 50px;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        .btn-comprar:hover {
            background-color: #1ebc59;
            transform: scale(1.059);
        }

        /*pie de pagina*/
        footer {
            background-color: #1a1a1a;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <!-- encabezado/hero -->
    <header class="hero">
        <div class="hero-content">
            <img src="img/logo.jpeg" alt="Logo" class="logo">
            <div class="hero-text">
                <h1><?php echo $nombreRestaurante; ?></h1>
                <p>para disfrutar de la mejor comida casera, hecha con amor y los mejores ingredientes.</p>
            </div>
        </div>
    </header>
    <!--menu de platos-->
    <main class="container">
        <h2 class="section-title">nuestra carta</h2>
        <div class="platos-grid">
            <?php foreach ($platos as $plato): ?>
                <div class="card">
                    <img src="<?php echo $plato["imagen"]; ?>" alt="<?php echo $plato["nombre"]; ?>">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo htmlspecialchars($plato["nombre"]); ?></h3>
                        <p class="card-desc"><?php echo htmlspecialchars($plato["descripcion"]); ?></p>
                        <span class="card-price">S/.<?php echo htmlspecialchars($plato["precio"]); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <!--sección final de botón de compra-->
    <section class="cta-section">

        <img src="img/logo whatsapp.png" alt="WhatsApp" style="width: 50px; height: 50px; margin-bottom: 15px;">
        <h2>"¿Listo para disfrutar de un buen plato?"</h2>
        <p>"Haz tu pedido "</p>
        <a href="https://wa.me/<?php echo $telefonowhatsapp; ?>?text=<?php echo $mensajePedido; ?>" class="btn-comprar" target="_blank">Compra aquí</a>
    </section>
    <!--pie de pagina-->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $nombreRestaurante; ?>- Todos los derechos reservados</p>
    </footer>
</body>

</html>