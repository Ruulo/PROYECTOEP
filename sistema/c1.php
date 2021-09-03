<?php
include("../conexion.php");
if (isset($_POST['update'])) {
  $idusuario= $_GET['idusuario'];
  $clave= md5($_POST['clave']);


  $query = "UPDATE usuario SET clave='$clave'
															WHERE idusuario= '$idusuario'";
  mysqli_query($conection, $query);
}

?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Se actualizaron los datos correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=usuario.php">