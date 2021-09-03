<?php

include('db.php');

if (isset($_POST['gv'])) {
  $turno_v = $_POST['turno_v'];
  $fecha_v=date('y-m-d');
  $equipo_v = $_POST['equipo_v'];
  $sistema_v = $_POST['sistema_v'];
  $falla_v = $_POST['falla_v'];
  $refa_v = $_POST['refa_v'];
  $estado_v = $_POST['estado_v'];
  $tipofalla_v=$_POST['tipofalla_v'];
  $com_v = $_POST['com_v'];
  $usuario_id=$_SESSION['idUser'];
  
  $query = "INSERT INTO vaporizador(turno_v, fecha_v, equipo_v, sistema_v,  falla_v, refa_v, estado_v,tipofalla_v, com_v,usuario_id) 
   VALUES ( '$turno_v', '$fecha_v','$equipo_v', '$sistema_v', '$falla_v','$refa_v', '$estado_v','$tipofalla_v','$com_v','$usuario_id')";
  $result = mysqli_query($conn, $query);
}
?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Datos guardados correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=vaporizador.php">