<?php
include_once '../../conexion.php';// include once se utilisa para traer el rchivo conexion, osea que se conecte a al base de datos
$objeto = new Conexion();//objeto coneccion
$conexion = $objeto->Conectar();

$idrepo_tj     = $_POST['#idrepo_tj'];
$idusuario1   = $_POST['#idusuario1'];
$id_tj1        = $_POST['#id_tj1'];//trim para obtener los inputs sin espacios
$idsis_tj1     =  $_POST['#idsis_tj1'];//trim para obtener los inputs sin espacios
$idfalla_tj1  = $_POST['#idfalla_tj1'];//trim para obtener los inputs sin espacios
$idrefa1       = $_POST['#idrefa1'];
$idestado1     =  $_POST['#idestado1'];
$tipofalla_tj = $_POST['#tipofalla_tj'];
$turno_tj      =$_POST['#turno_tj'];
$fecharepo_tj = $_POST['#fecharepo_tj'];
$com_tj        = $_POST['#com_tj'];

$turno  = $_POST['turno'];

$consulta = "INSERT INTO `reportes_tj` (idusuario1, id_tj1, idsis_tj1, idfalla_tj1, idrefa1, idestado1, tipofalla_tj, turno_tj, fecharepo_tj, com_tj) VALUES('$idusuario1', '$id_tj1', '$idsis_tj1', '$idfalla_tj1', '$idrefa1', '$idestado1', '$tipofalla_tj', '$turno_tj', '$fecharepo_tj', '$com_tj') ";
error_log($consulta);
$resultado = $conexion->prepare($consulta);
$resultado->execute();
?>
