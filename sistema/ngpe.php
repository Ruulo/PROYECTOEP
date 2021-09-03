<?php

include('db.php');

if (isset($_POST['ngpe'])) {
  $turno_pe = $_POST['turno_pe'];
  $nombre_pe = $_POST['nombre_pe'];
  $apellido_pe = $_POST['apellido_pe'];
  $fecha_pe=date('y-m-d');
  $com_pe = $_POST['com_pe'];
  $usuario_id=$_SESSION['idUser'];
 

  $query = "INSERT INTO personal(turno_pe, nombre_pe,apellido_pe,fecha_pe,com_pe,usuario_id) 
  VALUES ('$turno_pe','$nombre_pe','$apellido_pe','$fecha_pe','$com_pe','$usuario_id')";
  $result = mysqli_query($conn, $query);

}

?>

<SCRIPT LANGUAGE="javascript"> 
         alert("Datos Registrados correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=personal1.php">
