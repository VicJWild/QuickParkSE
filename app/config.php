<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','quickpark');

$servidor= "mysql:dbname=".BD."; host=".SERVIDOR;

try {
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexión a la Base de Datos fué exitosa";
} catch(PDOException $e){
    //echo "Error a la Base de Datos";
    echo "<script>alert('Error de conexión a la Base de Datos');</script>";
}


$URL = "http://localhost/www.quickparkse.com/";

$estado_del_registro = "1";
?>