<?php

include('db.php');

if (isset($_POST['ngtj'])) {
   $turno_tj = $_POST['turno_tj'];
   $fecha_tj=date('y-m-d');
   $equipo_tj = $_POST['equipo_tj'];
   $sistema_tj = $_POST['sistema_tj'];
   $falla_tj= $_POST['falla_tj'];
   $refa_tj = $_POST['refa_tj'];
   $estado_tj = $_POST['estado_tj'];
   $tipofalla_tj=$_POST['tipofalla_tj'];
   $com_tj = $_POST['com_tj'];
   $usuario_id=$_SESSION['idUser'];
  
  $query = "INSERT INTO telar_jareta( turno_tj,fecha_tj,equipo_tj, sistema_tj, falla_tj, refa_tj, estado_tj,tipofalla_tj,com_tj,usuario_id)
  VALUES ( '$turno_tj', '$fecha_tj', '$equipo_tj', '$sistema_tj', '$falla_tj', '$refa_tj', '$estado_tj','$tipofalla_tj','$com_tj','$usuario_id')";
  $result = mysqli_query($conn, $query);
 }
?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Datos guardados correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=telar_jareta1.php">
