<?php

include('db.php');

if (isset($_POST['gpp'])) {
   $turno_pp = $_POST['turno_pp'];
   $fecha_pp=date('y-m-d');
   $telar_pp = $_POST['telar_pp'];
   $estilo_pp = $_POST['estilo_pp'];
   $sistema_pp = $_POST['sistema_pp'];
   $falla_pp= $_POST['falla_pp'];
   $tipofalla_pp= $_POST['tipofalla_pp'];
   $com_pp = $_POST['com_pp'];
   $tipotelar_pp= $_POST['tipotelar_pp'];
   $usuario_id=$_SESSION['idUser'];
  $query = "INSERT INTO telar_proceso( turno_pp, fecha_pp, telar_pp, estilo_pp, sistema_pp, falla_pp,tipofalla_pp, com_pp,tipotelar_pp,usuario_id)
  VALUES ('$turno_pp', '$fecha_pp','$telar_pp', '$estilo_pp','$sistema_pp', '$falla_pp', '$tipofalla_pp','$com_pp', '$tipotelar_pp', '$usuario_id')";
  $result = mysqli_query($conn, $query);
}
?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Datos guardados correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=telar_proceso.php">

