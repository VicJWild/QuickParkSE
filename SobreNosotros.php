<?php include('app/config.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>QuickPark - Sobre Nosotros</title>

    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70%;
        }
        .section-title {
            margin-top: 40px;
            margin-bottom: 40px;
            font-weight: 600;
        }
        .about-us ul {
            padding-left: 20px;
        }
        .about-us li {
            margin-bottom: 10px;
        }
        .about-us img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
    </style>
</head>

<!-- Imagen de fondo -->
<body class="bg-body-secondary">
<!-- Barra de navegaion -->
<nav class="navbar navbar-expand-lg shadow p-1 mb-5 bg-white" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <!-- Logo -->
            <img src="public/img/minimalist--futuristic--quickpark-letter.svg.png" alt="Bootstrap" width="125" height="85">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Botones de la barra de navegacion -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="index.php" href="index.php"><b>INICIO</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-dark" href="mapa.php"><b>MAPA DE PUESTOS</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-dark" href="SobreNosotros.php"><b>SOBRE NOSOTROS</b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sección "Sobre Nosotros" -->
<section id="about-us" class="about-us container my-5">
    <h2 class="text-center section-title">¿Quiénes Somos?</h2>
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-lg-6 col-xl-5">
            <img class="img-fluid rounded mb-3" loading="lazy" src="public/img/desarrolladores.jpg" alt="Personas">
            <img class="img-fluid rounded" loading="lazy" src="public/img/moto-carro.jpg" alt="Parking">
        </div>
        <div class="col-12 col-lg-6 col-xl-7">
            <div class="row justify-content-xl-center">
                <div class="col-12 col-xl-11">
                    <p><strong>QuickPark</strong> fue creado con la misión de proporcionar servicios de estacionamiento eficientes y seguros para los usuarios. Nuestra visión es ser la solución líder en estacionamiento, reconocida por nuestro compromiso con la seguridad, la conveniencia y la atención al cliente.</p>

                    <h4 class="mt-4">Valores y Principios</h4>
                    <p>En <strong>QuickPark</strong> nos guiamos por valores fundamentales como la integridad, la excelencia, y la sostenibilidad. Creemos en ofrecer un servicio honesto y de alta calidad.</p>

                    <h4 class="mt-4">Equipo</h4>
                    <p>Contamos con un equipo de personas dedicados y todos comprometidos a brindar una excelente experiencia a nuestros usuarios.</p>

                    <h4 class="mt-4">Servicios Ofrecidos</h4>
                    <p>Ofrecemos una variedad de servicios, incluyendo:</p>
                    <ul>
                        <li>Tarifas planas: Precios flexibles para adaptarse a las necesidades de nuestros clientes.</li>
                        <li>Estacionamiento para carros y motos: Espacios dedicados para el estacionamiento seguro y conveniente de vehículos de todos los tamaños.</li>
                        <li>Seguridad las 24 horas: Sistema de vigilancia y personal de seguridad para garantizar la protección de su vehículo.</li>
                    </ul>

                    <h4 class="mt-4">Beneficios para los Usuarios</h4>
                    <p>Los usuarios eligen QuickPark por nuestra seguridad y atención personalizada. Nos esforzamos por hacer que el proceso de estacionamiento sea lo más fácil y cómodo posible.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="public/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+CVt/tI1B+L47jHA5aOWfEdl6rdkK" crossorigin="anonymous"></script>
</body>
</html>