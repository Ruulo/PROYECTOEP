<?php
include("../conexion.php");

if (isset($_POST['update'])) {
  $id_pe= $_GET['id_pe'];
  $nombre_pe= $_POST['nombre_pe'];
  $apellido_pe = $_POST['apellido_pe'];
  $com_pe= $_POST['com_pe'];
  

  $query = "UPDATE personal set nombre_pe = '$nombre_pe', apellido_pe = '$apellido_pe' , com_pe = '$com_pe' WHERE id_pe=$id_pe";
  mysqli_query($conection, $query);

}?>
	<SCRIPT LANGUAGE="javascript"> 
         alert("Se actualizaron los datos correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=personal.php">
