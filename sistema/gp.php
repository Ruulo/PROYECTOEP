<?php

include('db.php');

if (isset($_POST['gp'])) {
  $turno_p = $_POST['turno_p'];
  $fecha_p=date('y-m-d');
  $equipo_p = $_POST['equipo_p'];
  $sistema_p = $_POST['sistema_p'];
  $falla_p = $_POST['falla_p'];
  $refa_p= $_POST['refa_p'];
  $estado_p = $_POST['estado_p'];
  $tipofalla_p=$_POST['tipofalla_p'];
  $com_p = $_POST['com_p'];
  $usuario_id=$_SESSION['idUser'];
  
  
  $query = "INSERT INTO plegadores( turno_p, fecha_p, equipo_p, sistema_p, falla_p, refa_p, estado_p,tipofalla_p, com_p,usuario_id) 
  VALUES ( '$turno_p','$fecha_p', '$equipo_p', '$sistema_p', '$falla_p', '$refa_p', '$estado_p','$tipofalla_p', '$com_p','$usuario_id')";
  $result = mysqli_query($conn, $query);
}
?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Datos guardados correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=plegadores.php">
