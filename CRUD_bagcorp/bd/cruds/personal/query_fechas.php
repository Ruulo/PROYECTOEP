<?php
include_once '../../conexion.php';// include once se utilisa para traer el rchivo conexion, osea que se conecte a al base de datos
$objeto = new Conexion();//objeto coneccion
$conexion = $objeto->Conectar();

$fecha_de = $_POST['fecha_de'];
$fecha_a = $_POST['fecha_a'];

$consulta = "SELECT * FROM personal WHERE fecha_reg BETWEEN '$fecha_de'and'$fecha_a'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);//fetchAll TRAE TODOS LOS DATOS DE GOLPE

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a ajax (archivo de javascript)
$conexion = NULL;
?>
