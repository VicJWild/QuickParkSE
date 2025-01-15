<?php

include('app\config.php');
include('layout\admin\datos_usuario_sesion.php');

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

    <?php include('layout\admin\menu.php'); ?>
    <!-- Contenido -->
    <div class="content-wrapper">
        <br>

        <div class="container">
            <p class="fs-1" style="font-size: 40px"><b>Lista de Usuarios</b></p>
        </div>

        <br>
        <table class="table table-striped-columns table-sm">
            <th><center>Nro</center></th>
            <th>Nombre</th>
            <th>Email</th>
            <th><center>Accion</center></th>

            <?php
            $contador = 0;
            $query_usuario = $pdo->prepare("SELECT * FROM tb_usuarios WHERE Estado = '1' ");
            $query_usuario->execute();
            $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
            foreach($usuarios as $usuario){
                $id = $usuario['id'];
                $nombre = $usuario['nombres'];
                $email = $usuario['email'];
                $contador = $contador + 1;
                ?>
                <tr>
                    <td><center><?php echo $contador; ?></center></td>
                    <td><?php echo $nombre; ?></td>
                    <td><?php echo $email; ?></td>
                    <td>
                        <center>
                            <a href="usuarios\update.php?id=<?php echo $id;?>" class="btn btn-outline-success">Editar</a>
                            <a href="usuarios/delete.php?id=<?php echo $id;?>"class="btn btn-outline-danger">Eliminar</a>
                        </center>
                    </td>
                </tr>

                <?php
            }

            ?>

        </table>

    </div>



    <?php
    include('layout\admin\footer.php');?>

    <?php
    include('layout\admin\footerlinks.php');?>

</body>
</html>
<?php



?>
