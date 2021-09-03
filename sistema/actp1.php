<?php
include("../conexion.php");

if (isset($_POST['update'])) {
  $id_tp= $_GET['id_tp'];
  $turno_tp= $_POST['turno_tp'];
  $telar_tp= $_POST['telar_tp'];
  $estilo_tp=$_POST['estilo_tp'];
  $sistema_tp= $_POST['sistema_tp'];
  $falla_tp= $_POST['falla_tp'];
  $estado_tp= $_POST['estado_tp'];
  $tipofalla_tp=$_POST['tipofalla_tp'];
  $com_tp=$_POST['com_tp'];
  $tipotelar_tp=$_POST['tipotelar_tp'];


  $query = "UPDATE telar_planos set turno_tp = '$turno_tp', telar_tp = '$telar_tp' , estilo_tp='$estilo_tp', sistema_tp= '$sistema_tp' , falla_tp = '$falla_tp' , estado_tp = '$estado_tp',tipofalla_tp='$tipofalla_tp',com_tp ='$com_tp', tipotelar_tp='$tipotelar_tp' WHERE id_tp=$id_tp";
  mysqli_query($conection, $query);
}

?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Se actualizaron los datos correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=telar_planos1.php">