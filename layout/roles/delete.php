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
    <div class="content-wrapper">
        <br>

        <div class="container">
            <p class="fs-1" style="font-size: 40px; margin-left: 15px">Eliminación de Rol</p>

            <?php
            $id_rol = $_GET['id'];
            $query_roles = $pdo->prepare("SELECT * FROM tb_roles WHERE id_rol = '$id_rol' AND estado = '1' ");
            $query_roles->execute();
            $roles = $query_roles->fetchAll(PDO::FETCH_ASSOC);
            foreach($roles as $role){
                $id_rol = $role['id_rol'];
                $nombre = $role['nombre'];
            }
            ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-danger" style="border: 1px  solid #606060; margin-left: 10px">
                            <div class="card-header" style="background-color; font-size: 25px ; color: #ffffff">
                                <h4>¿Estás seguro de eliminar este registro?</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nombres</label>
                                    <input type="text" class="form-control" id="nombre" value="<?php echo $nombre; ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-outline-danger" id="btn_eliminar">Borrar</button>
                                    <a href="<?php echo $URL;?>/roles" class="btn btn-default">Cancelar</a>
                                </div>
                                <div id="respuesta"></div>
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
    $(document).ready(function() {
        $('#btn_eliminar').click(function() {
            var id_rol = '<?php echo $id_rol; ?>';

            $.ajax({
                url: 'controller_delete.php',
                type: 'GET',
                data: { id_rol: id_rol },
                success: function(response) {
                    $('#respuesta').html(response);
                },
                error: function() {
                    $('#respuesta').html('Error al eliminar el registro.');
                }
            });
        });
    });
</script>