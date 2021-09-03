<?php
include_once '../../conexion.php';// include once se utilisa para traer el rchivo conexion, osea que se conecte a al base de datos
$objeto = new Conexion();//objeto coneccion
$conexion = $objeto->Conectar();

$id_next = $_POST['id_next'];
$id_pe = $_POST['id_pe'];
$nom_pe = $_POST['nom_pe'];
$ap_pa = $_POST['ap_pa'];
$ap_ma = $_POST['ap_ma'];
$fecha_reg = $_POST['fecha_reg'];
$status = $_POST['status'];
$consulta = "UPDATE personal SET id_pe='$id_next', nom_pe='$nom_pe', ap_pa ='$ap_pa', ap_ma='$ap_ma', fecha_reg='$fecha_reg',  status='$status' WHERE id_pe='$id_pe' ";
error_log($consulta);
$resultado = $conexion->prepare($consulta);
$resultado->execute();
?>
