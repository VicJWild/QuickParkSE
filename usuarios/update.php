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
      $query_usuario = $pdo->prepare("SELECT * FROM tb_usuarios WHERE id = '$id_get' AND Estado = '1' ");
      $query_usuario->execute();
      $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
      foreach($usuarios as $usuario) {
          $id = $usuario['id'];
          $nombre = $usuario['nombres'];
          $email = $usuario['email'];
          $password_user = $usuario['password_user'];
      }
      ?>

  <p class="fs-1" style="font-size: 35px; margin-bottom: 5px" >Actualización de Usuarios</p>

      <div class="container">
          <div class="row">
              <div class="col-md-6">

                  <div class="card card-success" style="border: 1px  solid #606060">
                      <div class="card-header" style="background-color: #28a745; color: #ffffff; font-size: 25px">
                          <h4>Editar Información</h4>

                      </div>
                      <div class="card-body">
                          <div class="form-group">
                              <label for="">Nombres</label>
                              <input type="text" class="form-control" id="nombres" value="<?php echo $nombre;?>">
                          </div>
                          <div class="form-group">
                              <label for="">Email</label>
                              <input type="email" class="form-control" id="email" value="<?php echo $email;?>">
                          </div>
                          <div class="form-group">
                              <label for="">Contraseña</label>
                              <input type="text" class="form-control" id="password_user" value="<?php echo $password_user;?>">
                          </div>
                          <div class="form-group">
                              <button class="btn btn-outline-success" id="btn_editar">Actualizar</button>
                              <a href="<?php echo $URL;?>lista_usuarios.php" class="btn btn-default">Cancelar</a>
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
    $('#btn_editar').click(function () {
        var nombres = $('#nombres').val();
        var email = $('#email').val();
        var password_user = $('#password_user').val();
        var id_user = '<?php echo $id_get = $_GET['id'];?>';

        if(nombres == ""){
            alert('Debe de llenar el campo nombres');
            $('#nombres').focus();
        }else if(email == ""){
            alert('Debe de llenar el campo de email');
            $('#email').focus();
        }else if(password_user == ""){
            alert('Debe de llenar el campo de password');
            $('#password_user').focus();
        }else{
            var url = 'controller_update.php';
            $.get(url,{nombres:nombres, email:email, password_user:password_user,id_user:id_user},function (datos) {
                $('#respuesta').html(datos);
            });
        }
    });
</script>