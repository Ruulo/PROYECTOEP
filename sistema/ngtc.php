<?php

include('db.php');

if (isset($_POST['ngtc'])) {
   $turno_tc = $_POST['turno_tc'];
   $fecha_tc=date('y-m-d');
   $equipo_tc = $_POST['equipo_tc'];
   $sistema_tc = $_POST['sistema_tc'];
   $falla_tc= $_POST['falla_tc'];
   $refa_tc = $_POST['refa_tc'];
   $estado_tc = $_POST['estado_tc'];
   $tipofalla_tc=$_POST['tipofalla_tc'];
   $com_tc = $_POST['com_tc'];
   $estilo_tc = $_POST['estilo_tc'];
   $usuario_id=$_SESSION['idUser'];
	 
  $query = "INSERT INTO telar_circular( turno_tc, fecha_tc, equipo_tc, sistema_tc, falla_tc, refa_tc, estado_tc, tipofalla_tc,com_tc, estilo_tc,usuario_id)
  VALUES ( '$turno_tc', '$fecha_tc', '$equipo_tc', '$sistema_tc', '$falla_tc', '$refa_tc', '$estado_tc', '$tipofalla_tc','$com_tc', '$estilo_tc','$usuario_id')";
  $result = mysqli_query($conn, $query);
 }
?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Datos guardados correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=telar_circular1.php">