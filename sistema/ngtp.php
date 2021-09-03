<?php

include('db.php');

if (isset($_POST['ngtp'])) {
  $turno_tp = $_POST['turno_tp'];
  $fecha_tp =date('y-m-d');
  $telar_tp = $_POST['telar_tp'];
  $estilo_tp = $_POST['estilo_tp'];
  $sistema_tp = $_POST['sistema_tp'];
  $falla_tp = $_POST['falla_tp'];
  $refa_tp = $_POST['refa_tp'];
  $estado_tp = $_POST['estado_tp'];
  $tipofalla_tp=$_POST['tipofalla_tp'];
  $com_tp = $_POST['com_tp'];
  $tipotelar_tp = $_POST['tipotelar_tp'];
  $usuario_id=$_SESSION['idUser'];

  
  $query = "INSERT INTO telar_planos(turno_tp, fecha_tp, telar_tp, estilo_tp, sistema_tp,falla_tp,refa_tp,estado_tp,tipofalla_tp,com_tp,tipotelar_tp,usuario_id) 
  VALUES ('$turno_tp','$fecha_tp', '$telar_tp', '$estilo_tp', '$sistema_tp', '$falla_tp', '$refa_tp', '$estado_tp', '$tipofalla_tp','$com_tp','$tipotelar_tp','$usuario_id')";
  $result = mysqli_query($conn, $query);
  }

?>

<SCRIPT LANGUAGE="javascript"> 
         alert("Datos Registrados correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=telar_planos1.php">