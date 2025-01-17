<?php include('app/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>QuickPark - Inicio</title>

</head>
<!-- "Imagen de fondo" -->
<body class="bg-body-secondary">

<!-- "Barra de navegación" -->
<nav class="navbar navbar-expand-lg shadow p-1 mb-5 bg-white" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <!-- Logo -->
            <img src="public\img\minimalist--futuristic--quickpark-letter.svg.png" alt="Bootstrap" width="125" height="85">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <div class="container-fluid">
                </a>
        </button>

        <!-- "Botones de la barra de navevación" -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="#"><b>INICIO</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-dark" href="#"><b>REGISTRO</b></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b>
                            SERVICIOS
                        </b>
                    </a>
                    <ul class="dropdown-menu bg-white">
                        <li><a class="dropdown-item text-dark bg-white" href="#">DISPENSADORA</a></li>
                        <li><a class="dropdown-item text-dark bg-white" href="#">VALIDADORA</a></li>

                        <li><a class="dropdown-item text-dark bg-white" href="#">FACTURAR</a></li>
                    </ul>
                <li class="nav-item">
                    <a class="nav-link active text-dark" href="#"><b>CONTACTANOS</b></a>
                </li>

            </ul>
            <style>

            </style>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            </form>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Ingresar
            </button>
        </div>
    </div>
</nav>

<br>

<div class="row">
    <?php

    $query_mapeos = $pdo->prepare("SELECT * FROM tb_mapeos WHERE estado = '1' ");
    $query_mapeos->execute();
    $mapeos = $query_mapeos->fetchAll(PDO::FETCH_ASSOC);
    foreach($mapeos as $mapeo){
        $id_map = $mapeo['id_map'];
        $nro_espacio = $mapeo['nro_espacio'];
        $estado_espacio = $mapeo['estado_espacio'];

        if($estado_espacio == "DISPONIBLE"){ ?>
            <div class="col">
                <center>
                    <h4 style="color: #000000;"><?php echo $nro_espacio?></h4>
                    <button class="btn shadow" style="border: #686868; background-color: #28a745 ;border: 1px solid; border-radius: 5px; width: 100%; height: 156px">
                        <p style="outline-style: auto ; background-color: #28a745; color: #FFFFFF; border-radius: 5px; "><?php echo $estado_espacio?></p>
                    </button>

                </center>
            </div>
            <?php
        }if($estado_espacio == "OCUPADO"){ ?>
            <div class="col">
                <center>
                    <h4 style="color: #000000;"><?php echo $nro_espacio?></h4>
                    <button class="btn shadow" style="border: #686868;background-color: #da0023 ; border: 1px solid; border-radius: 5px">
                        <img src="<?php echo $URL;?>/public/img/vehicle.png" width="100px" alt="car">
                        <p style="outline-style: auto ; background-color: #da0023; color: #FFFFFF; border-radius: 5px; "><?php echo $estado_espacio?></p>
                    </button>
                </center>
            </div>
            <?php
        }
        ?>

        <?php
    }
    ?>

</div>
<!-- "Integración de Bootstrap" -->
<script> src="public\js\jquery-3.7.1.min.js"</script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>



<!-- "Boton de inicio de sesión -->

<style>
    .form-group {
        margin-bottom: 10px;
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar Sesión</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col12">
                        <div class="form-group">
                            <label for="">Usuario/Email</label>
                            <input type="email" id='usuario' class="form-control">

                        </div>
                    </div>
                    <div class="col12">
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input type="password" id='password' class="form-control">
                        </div>
                    </div>
                </div>
                <div id="respuesta">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-outline-primary" id="btn_ingresar" >Ingresar</button>
            </div>
        </div>
    </div>
</div>

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


