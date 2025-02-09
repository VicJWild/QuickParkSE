<?php include('app/config.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>QuickPark - Inicio</title>

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
                    <a class="nav-link active text-dark" aria-current="page" href="index.php"><b>INICIO</b></a>
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
<!-- Login -->
<div class="login-container">
    <div class="bg-white p-5 rounded-2 text-secondary shadow" style="width: 26rem; margin: auto;">
        <div class="text-center fs-1 fw-bold text-dark">Iniciar sesión</div>
        <div class="input-group mt-5">
            <div class="input-group-text btn btn-primary">
                <img src="public/img/username-icon.svg" alt="username-icon" style="height: 1rem" />
            </div>
            <input class="form-control bg-light" type="email" id='usuario' placeholder="Usuario/Correo electrónico" />
        </div>
        <div class="input-group mt-2">
            <div class="input-group-text btn btn-primary">
                <img src="public/img/password-icon.svg" alt="password-icon" style="height: 1rem" />
            </div>
            <input class="form-control bg-light" type="password" id='password' placeholder="Contraseña" />
        </div>
        <div id="respuesta">

        </div>
        <div class="btn btn-primary text-white w-100 mt-4 fw-semibold shadow-sm" id="btn_ingresar">Ingresar</div>
    </div>
</div>

<!-- "Integración de Bootstrap" -->
<script> src="public/js/jquery-3.7.1.min.js"</script>
<script src="public/js/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="public/js/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="public/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


</body>
</html>

<script>
    $("#btn_ingresar").click(function(){
        login();
    });

    $('#password').keypress(function(e){
        if(e.which == 13){
            login();
        }
    });

    function login(){
        var usuario = $('#usuario').val();
        var password_user = $('#password').val();

        if( usuario == "" ){
            alert('Ingrese su Usuario');
        }else if (password_user == "") {
            alert('Ingrese su Contraseña');
        }else{
            var url = 'login/controller_login.php'
            $.post(url , {usuario:usuario , password_user:password_user}, function(datos){
                $('#respuesta').html(datos);
            });

        }
    }
</script>
