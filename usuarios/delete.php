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

      <?php
      $id_get = $_GET['id'];
      $query_usuario = $pdo->prepare("SELECT * FROM tb_usuarios WHERE id = '$id_get' AND estado = '1' ");
      $query_usuario->execute();
      $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
      foreach($usuarios as $usuario) {
          $id = $usuario['id'];
          $nombres = $usuario['nombres'];
          $email = $usuario['email'];
          $password_user = $usuario['password_user'];
      }
      ?>

      <p class="fs-1" style="font-size: 40px"><b>Eliminación de Usuarios</b></p>

      <div class="container">
          <div class="row">
              <div class="col-md-6">

                  <div class="card card-danger" style="border: 1px solid #777777">
                      <div class="card-header">
                          <h3 class="card-title"><b>¿Está seguro de eliminar este registro?</b></h3>
                      </div>
                      <div class="card-body">
                          <div class="form-group">
                              <label for="">Nombres</label>
                              <input type="text" class="form-control" id="nombres" value="<?php echo $nombres;?>" disabled>
                          </div>
                          <div class="form-group">
                              <label for="">Email</label>
                              <input type="email" class="form-control" id="email" value="<?php echo $email;?>" disabled>
                          </div>
                          <div class="form-group">
                              <label for="">Password</label>
                              <input type="text" class="form-control" id="password_user" value="<?php echo $password_user;?>" disabled>
                          </div>
                          <div class="form-group">
                              <button class="btn btn-outline-danger" id="btn_borrar"><b>Eliminar</b></button>
                              <a href="<?php echo $URL;?>lista_usuarios.php" class="btn btn-outline-secondary">Cancelar</a>
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
    $('#btn_borrar').click(function () {

        var id_user = '<?php echo $id_get = $_GET['id'];?>';

        var url = 'controller_delete.php';
        $.get(url,{id_user:id_user},function (datos) {
            $('#respuesta').html(datos);
        });

    });
</script>