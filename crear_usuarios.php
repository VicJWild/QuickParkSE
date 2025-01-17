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

        <?php
        include('layout\admin\menu.php');
        ?>
        <!-- Contenido -->
        <div class="content-wrapper">
            <br>

            <div class="container">
                <p class="fs-1" style="font-size: 40px"><b>Crear Usuarios</b></p>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card" style="border: 1px  solid #606060">
                                <div class="card-header" style="background-color: #007bff; color: #ffffff">
                                    <h4>Nuevo Usuario</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        <input type="text" class="form-control" id="nombres">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Contraseña</label>
                                        <input type="password" class="form-control" id="password_user">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-outline-primary" id="btn_guardar"><b>Guardar</b></button>
                                        <a href="<?php echo $URL;?>lista_usuarios.php" class="btn btn btn-outline-secondary">Cancelar</a>
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
    include('layout\admin\footer.php');?>

    <?php
    include('layout\admin\footerlinks.php');?>

    </body>
    </html>

    <script>
        $('#btn_guardar').click(function () {
            var nombres = $('#nombres').val();
            var email = $('#email').val();
            var password_user = $('#password_user').val();

            if(nombres == ""){
                alert('Debes llenar el campo nombres');
                $('#nombres').focus();
            }else if(email == ""){
                alert('Debes colocar el email');
                $('#email').focus();
            }else if(password_user == ""){
                alert('Debes ingresar la contraseña');
                $('#password_user').focus();
            }else{
                var url = 'usuarios/controller_create.php';
                $.get(url , {nombres:nombres , email:email, password_user:password_user},   function(datos){
                    $('#respuesta').html(datos);
                });
            }




        });
    </script>
<?php



?>