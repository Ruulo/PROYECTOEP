<?php
include_once '../../conexion.php';// include once se utilisa para traer el rchivo conexion, osea que se conecte a al base de datos
$objeto = new Conexion();//objeto coneccion
$conexion = $objeto->Conectar();

$idrepo_pe     = $_POST['idrepo_pe'];
$idusuario9    = $_POST['idusuario9'];
$id_reportado  = $_POST['id_reportado'];
$turno_pe      = $_POST['turno_pe'];
$fecharepo_per = $_POST['fecharepo_per'];
$comrepo_pe    = $_POST['comrepo_pe'];
$turno  = $_POST['turno'];
$consulta = "UPDATE reporte_personal SET idusuario9='$idusuario9', id_reportado='$id_reportado', turno_pe='$turno_pe', fecharepo_per='$fecharepo_per', comrepo_pe='$comrepo_pe' WHERE idrepo_pe='$idrepo_pe'";
error_log($consulta);
$resultado = $conexion->prepare($consulta);
$resultado->execute();
?>
