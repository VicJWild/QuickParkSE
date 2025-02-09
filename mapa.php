<?php include('app/config.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>QuickPark - Mapa De Puestos</title>

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



  <div class="row">
          <center>
              <h3>
                  <?php include ('layout/admin/contadormapa.php')?>
              </h3>
          </center>
      <br><br><br>
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


 <!-- "Integración de Bootstrap" -->
 <script> src="public/js/jquery-3.7.1.min.js"</script>
    <script src="public/js/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="public/js/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="public/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


    </body>
</html>
