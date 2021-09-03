<?php

include('db.php');

if (isset($_POST['gc'])) {
  $turno_c = $_POST['turno_c'];
  $fecha_c=date('y-m-d');
  $equipo_c = $_POST['equipo_c'];
  $sistema_c = $_POST['sistema_c'];
  $falla_c = $_POST['falla_c'];
  $refa_c = $_POST['refa_c'];
  $estado_c = $_POST['estado_c'];
  $tipofalla_c=$_POST['tipofalla_c'];
  $com_c= $_POST['com_c'];
  $usuario_id=$_SESSION['idUser'];
 

  $query = "INSERT INTO calentadores(turno_c, fecha_c,equipo_c,sistema_c,falla_c,refa_c,estado_c,tipofalla_c,com_c,usuario_id) 
  VALUES ('$turno_c','$fecha_c','$equipo_c', '$sistema_c','$falla_c', '$refa_c','$estado_c','$tipofalla_c', '$com_c','$usuario_id')";
  $result = mysqli_query($conn, $query);
}
?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Datos guardados correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=calentadores.php">
