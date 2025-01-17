<?php

include('../app/config.php');

$cuviculo = $_GET['cuviculo'];
$estado_espacio = "OCUPADO";

    date_default_timezone_set("America/caracas");
    $fechaHora = date("Y-m-d h:i:s");
    //echo $nombres."-".$email."-".$password_user;

try {
    // Asegúrate de que id_map sea el campo correcto en tu base de datos
    $sentencia = $pdo->prepare("UPDATE tb_mapeos SET 
                     estado_espacio = :estado_espacio, 
                     fyh_actualizacion = :fyh_actualizacion 
                 WHERE id_map = :id_map");

    $sentencia->bindParam(':estado_espacio', $estado_espacio, PDO::PARAM_STR);
    $sentencia->bindParam(':fyh_actualizacion', $fechaHora, PDO::PARAM_STR);
    $sentencia->bindParam(':id_map', $cuviculo, PDO::PARAM_INT);

    $sentencia->execute();

    echo "Se actualizó el registro de la manera correcta";
} catch (PDOException $e) {
    echo "Error al actualizar el registro: " . $e->getMessage();
    // Registra el error para depuración posterior
    error_log("Error al actualizar estado: " . $e->getMessage());
}