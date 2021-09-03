<?php
include("../conexion.php");
if (isset($_POST['update'])) {
  $id_pp= $_GET['id_pp'];
  $turno_pp= $_POST['turno_pp'];
  $telar_pp=$_POST['telar_pp'];
  $estilo_pp= $_POST['estilo_pp'];
  $sistema_pp=$_POST['sistema_pp'];
  $falla_pp= $_POST['falla_pp'];
  $tipofalla_pp= $_POST['tipofalla_pp'];
  $com_pp=$_POST['com_pp'];
  $tipotelar_pp=$_POST['tipotelar_pp'];
  

  $query = "UPDATE telar_proceso set  turno_pp= '$turno_pp', telar_pp = '$telar_pp' , sistema_pp= '$sistema_pp' ,falla_pp= '$falla_pp' , tipofalla_pp='$tipofalla_pp', com_pp='$com_pp', tipotelar_pp='$tipotelar_pp'  WHERE id_pp=$id_pp";
  mysqli_query($conection, $query);
  }?>
	<SCRIPT LANGUAGE="javascript"> 
         alert("Se actualizaron los datos correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=telar_proceso.php">