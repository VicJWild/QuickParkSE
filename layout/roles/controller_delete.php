<?php
include('../app/config.php');

$id_rol = $_GET['id_rol'];
$estado_inactivo = "0";
date_default_timezone_set("America/caracas");
$fechaHora = date("Y-m-d h:i:s");

try {
    $sentencia = $pdo->prepare("UPDATE tb_roles SET estado = :estado,
                    fyh_eliminacion = :fyh_eliminacion 
                WHERE id_rol = :id_rol");
    $sentencia->bindParam(':estado', $estado_inactivo);
    $sentencia->bindParam(':fyh_eliminacion', $fechaHora);
    $sentencia->bindParam(':id_rol', $id_rol);
    $sentencia->execute();

    echo '<script>window.location.href = "../roles/";</script>';

} catch(PDOException $e) {
    echo "Error al eliminar el registro: " . $e->getMessage();
}
?>