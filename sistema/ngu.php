<?php

include('db.php');

if (isset($_POST['ngu'])) {
  $turno_u = $_POST['turno_u'];
  $fecha_u=date('y-m-d');
  $equipo_u = $_POST['equipo_u'];
  $sistema_u = $_POST['sistema_u'];
  $falla_u = $_POST['falla_u'];
  $refa_u = $_POST['refa_u'];
  $estado_u = $_POST['estado_u'];
  $tipofalla_u=$_POST['tipofalla_u'];
  $com_u = $_POST['com_u'];
  $usuario_id=$_SESSION['idUser'];
  
  $query = "INSERT INTO urdidor( turno_u, fecha_u, equipo_u, sistema_u,  falla_u, refa_u, estado_u,tipofalla_u, com_u,usuario_id) 
   VALUES ('$turno_u', '$fecha_u', '$equipo_u', '$sistema_u','$falla_u', '$refa_u', '$estado_u', '$tipofalla_u','$com_u','$usuario_id')";
  $result = mysqli_query($conn, $query);
}
?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Datos guardados correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=urdidor1.php">