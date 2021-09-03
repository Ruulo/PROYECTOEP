<?php
include("../conexion.php");
if (isset($_POST['update'])) {
  $id_v= $_GET['id_v'];
  $turno_v= $_POST['turno_v'];
  $equipo_v=$_POST['equipo_v'];
  $sistema_v= $_POST['sistema_v'];
  $falla_v=$_POST['falla_v'];
  $refa_v= $_POST['refa_v'];
  $estado_v=$_POST['estado_v'];
  $tipofalla_v=$_POST['tipofalla_v'];
  $com_v=$_POST['com_v'];
  

  $query = "UPDATE vaporizador set  turno_v= '$turno_v', equipo_v = '$equipo_v' , sistema_v= '$sistema_v' ,falla_v= '$falla_v' , refa_v='$refa_v', estado_v='$estado_v',tipofalla_v='$tipofalla_v', com_v = '$com_v'  WHERE id_v=$id_v";
  mysqli_query($conection, $query);
 }?>
	<SCRIPT LANGUAGE="javascript"> 
         alert("Se actualizaron los datos correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=vaporizador.php">

