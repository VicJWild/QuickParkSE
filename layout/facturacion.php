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
    <p class="fs-1">Bienvenidos a QuickPark</p>
  </div>

  <br>
  <table class="table table-striped-columns table-sm">
    <th>Nro</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Accion</th>

    <?php
    $query_usuario = $pdo->prepare("SELECT * FROM tb_usuarios WHERE Estado = '1' ");
    $query_usuario->execute();
    $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
    foreach($usuarios as $usuario){
      $id = $usuario['id'];
      $nombre = $usuario['nombres'];
      $email = $usuario['email'];
      
  ?>
      <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $nombre; ?></td>
      <td><?php echo $email; ?></td>
      <td>
        <a href="" class="btn btn-info">Editar</a>
        <a href=""class="btn btn-danger">Eliminar</a>
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

