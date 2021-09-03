<?php
include_once '../../conexion.php';// include once se utilisa para traer el rchivo conexion, osea que se conecte a al base de datos
$objeto = new Conexion();//objeto coneccion
$conexion = $objeto->Conectar();

$id_pe = $_POST['id_next'];
$nom_pe = $_POST['nom_pe'];
$ap_pa = $_POST['ap_pa'];
$ap_ma = $_POST['ap_ma'];
$fecha_reg = $_POST['fecha_reg'];
$status = $_POST['status'];

$consulta = "INSERT INTO personal (id_pe, nom_pe, ap_pa, ap_ma, fecha_reg, status) VALUES('$id_pe', '$nom_pe', '$ap_pa', '$ap_ma', '$fecha_reg', '$status') ";
error_log($consulta);
$resultado = $conexion->prepare($consulta);
$resultado->execute();
?>
