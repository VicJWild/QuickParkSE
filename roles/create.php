<?php

include('..\app\config.php');
include('..\layout\admin\datos_usuario_sesion.php');

?>
<!DOCTYPE html>

<html lang="es">
<head>
    <?php
    include('..\layout\admin\head.php');
    ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php
    include('..\layout\admin\menu.php');
    ?>
    <!-- Contenido -->
    <div class="content-wrapper">
        <br>

        <div class="container">
            <p class="fs-1" style="font-size: 40px"><b>Crear un nuevo Rol</b></p>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="border: 1px  solid #606060; margin-left: 10px">
                            <div class="card-header" style="background-color: #007bff; font-size: 25px ; color: #ffffff">
                                <h4><b>Nuevo Rol</b></h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nombres</label>
                                    <input type="text" class="form-control" id="nombre">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-outline-primary" id="btn_guardar"><b>Guardar</b></button>
                                    <a href="<?php echo $URL;?>/roles" class="btn btn-outline-secondary">Cancelar</a>
                                </div>
                                <div id="respuesta">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>

        </div>

    </div>

</div>



<?php
include('..\layout\admin\footer.php');?>

<?php
include('..\layout\admin\footerlinks.php');?>

</body>
</html>

<script>
    $('#btn_guardar').click(function () {
        var nombre = $('#nombre').val();

        if(nombre == ""){
            alert('Debes colocar el nombre del rol');
            $('#nombre').focus();
        }else{
            var url = '../roles/controller_create.php';
            $.get(url , {nombre:nombre},   function(datos){
                $('#respuesta').html(datos);
            });
        }




    });
</script>
<?php



?>
