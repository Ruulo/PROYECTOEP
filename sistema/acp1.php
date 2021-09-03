<?php
include("../conexion.php");
if (isset($_POST['update'])) {
  $id_p= $_GET['id_p'];
  $turno_p= $_POST['turno_p'];
  $equipo_p=$_POST['equipo_p'];
  $sistema_p= $_POST['sistema_p'];
  $falla_p=$_POST['falla_p'];
  $refa_p= $_POST['refa_p'];
  $estado_p=$_POST['estado_p'];
  $tipofalla_p=$_POST['tipofalla_p'];
  $com_p=$_POST['com_p'];
  

  $query = "UPDATE plegadores set  turno_p= '$turno_p', equipo_p = '$equipo_p' , sistema_p= '$sistema_p' ,falla_p= '$falla_p' , refa_p='$refa_p', estado_p='$estado_p', tipofalla_p='$tipofalla_p', com_p = '$com_p'  WHERE id_p=$id_p";
  mysqli_query($conection, $query);
 }?>
	<SCRIPT LANGUAGE="javascript"> 
         alert("Se actualizaron los datos correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=plegadores1.php">