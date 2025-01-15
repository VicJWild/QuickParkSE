<?php

include('app\config.php');
include('layout\admin\datos_usuario_sesion.php');

// echo "Bienvenido";
?>
<!DOCTYPE html>

<html lang="es">
<head>
    <?php
    include('layout\admin\head.php');
    ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php
    include('layout\admin\menu.php');
    ?>
    <!-- Contenido -->
    <div class="content-wrapper">
        <br>
        <div class="container">

            <p class="fs-1" style="font-size: 100px; margin-left: 15px"><b>¡Bienvenido a QuickPark!</b></p>
            <br>
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><b>Mapa de Puestos</b></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
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
                                                <h2 style="color: #000000;"><?php echo $nro_espacio?></h2>
                                                <button class="btn" style="border: #686868; background-color: #28a745 ;border: 2px solid; border-radius: 5px; width: 100%; height: 148px"
                                                        data-toggle="modal" data-target="#modal<?php echo $id_map?>">
                                                 <p style="outline-style: auto ; background-color: #28a745; color: #FFFFFF; border-radius: 5px; "><?php echo $estado_espacio?></p>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="modal<?php echo $id_map?>" tabindex="-1"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Entrada de Vehiculo</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">Placa:</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" style="text-transform: uppercase" class="form-control" id="placa_buscar<?php echo $id_map;?>">
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <button class="btn btn-primary" id="btn_buscar_cliente<?php echo $id_map;?>" type="button">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                                                            </svg>
                                                                               Buscar
                                                                        </button>
                                                                        <script>
                                                                            $('#btn_buscar_cliente<?php echo $id_map;?>').click(function () {
                                                                                var placa = $('#placa_buscar<?php echo $id_map;?>').val();
                                                                                var id_map = "<?php echo $id_map;?>";

                                                                                if(placa == ""){
                                                                                    alert('Debe de llenar el campo placa');
                                                                                    $('#placa_buscar<?php echo $id_map;?>').focus();
                                                                                }else{
                                                                                    var url = 'clientes/controller_buscar_cliente.php';
                                                                                    $.get(url,{placa:placa,id_map:id_map},function (datos) {
                                                                                        $('#respuesta_buscar_cliente<?php echo $id_map;?>').html(datos);
                                                                                    });
                                                                                }
                                                                            });
                                                                        </script>
                                                                    </div>
                                                                </div>

                                                                <div id="respuesta_buscar_cliente<?php echo $id_map;?>">

                                                                </div>


                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">Fecha:</label>
                                                                    <div class="col-sm-9">
                                                                        <?php
                                                                        date_default_timezone_set("America/caracas");
                                                                        $fechaHora = date("Y-m-d h:i:s");
                                                                        $dia = date("d");
                                                                        $mes = date("m");
                                                                        $año = date("Y");

                                                                        ?>
                                                                        <input type="date" class="form-control" value="<?php echo $año."-".$mes."-".$dia;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">Hora:</label>
                                                                    <div class="col-sm-9">
                                                                        <?php
                                                                        date_default_timezone_set("America/caracas");
                                                                        $fechaHora = date("Y-m-d h:i:s");
                                                                        $segundo = date("s");
                                                                        $minuto = date("i");
                                                                        $hora = date("h");

                                                                        ?>
                                                                        <input type="time" class="form-control" value="<?php echo $hora.":".$minuto.":".$segundo;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>
                                                                <button type="button" class="btn btn-outline-success">Entrada</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>
                                        </div>
                                        <?php
                                    }if($estado_espacio == "OCUPADO"){ ?>
                                        <div class="col">
                                            <center>
                                                <h2 style="color: #000000;"><?php echo $nro_espacio?></h2>
                                                <button class="btn" style="border: #686868;background-color: #da0023 ; border: 2px solid; border-radius: 5px">
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

                        </div>

                    </div>



                </div>
            </div>

        </div>

    </div>



    <?php
    include('layout\admin\footer.php');?>

    <?php
    include('layout\admin\footerlinks.php');?>

</body>
</html>

