<?php
include("../conexion.php");
if (isset($_POST['update'])) {
  $id_tj= $_GET['id_tj'];
  $turno_tj= $_POST['turno_tj'];
  $equipo_tj=$_POST['equipo_tj'];
  $sistema_tj= $_POST['sistema_tj'];
  $falla_tj=$_POST['falla_tj'];
  $refa_tj= $_POST['refa_tj'];
  $estado_tj=$_POST['estado_tj'];
  $tipofalla_tj=$_POST['tipofalla_tj'];
  $com_tj=$_POST['com_tj'];
  

  $query = "UPDATE telar_jareta set  turno_tj= '$turno_tj', equipo_tj = '$equipo_tj' , sistema_tj= '$sistema_tj' ,falla_tj= '$falla_tj' , refa_tj='$refa_tj', estado_tj='$estado_tj', tipofalla_tj='$tipofalla_tj', com_tj = '$com_tj'  WHERE id_tj=$id_tj";
  mysqli_query($conection, $query);
 }?>
	<SCRIPT LANGUAGE="javascript"> 
         alert("Se actualizaron los datos correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=telar_jareta.php">