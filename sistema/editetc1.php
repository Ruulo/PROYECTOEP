<?php
include("../conexion.php");
if (isset($_POST['update'])) {
  $id_tc= $_GET['id_tc'];
  $turno_tc= $_POST['turno_tc'];
  $equipo_tc=$_POST['equipo_tc'];
  $sistema_tc= $_POST['sistema_tc'];
  $falla_tc=$_POST['falla_tc'];
  $refa_tc= $_POST['refa_tc'];
  $estado_tc=$_POST['estado_tc'];
  $tipofalla_tc=$_POST['tipofalla_tc'];
  $com_tc=$_POST['com_tc'];
  $estilo_tc=$_POST['estilo_tc'];

  $query = "UPDATE telar_circular set  turno_tc= '$turno_tc', equipo_tc = '$equipo_tc' , sistema_tc= '$sistema_tc' ,falla_tc= '$falla_tc' , refa_tc='$refa_tc', estado_tc='$estado_tc', tipofalla_tc='$tipofalla_tc', com_tc = '$com_tc',estilo_tc='$estilo_tc'  WHERE id_tc=$id_tc";
  mysqli_query($conection, $query);
}

?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Se actualizaron los datos correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=telar_circular.php">