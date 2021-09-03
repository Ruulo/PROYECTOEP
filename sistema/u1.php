<?php
include("../conexion.php");
if (isset($_POST['update'])) {
  $rol= $_POST['rol'];
  

  $query = "UPDATE usuario SET rol='$rol'
															WHERE idusuario= '$idusuario'";
  mysqli_query($conection, $query);
}

?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Se actualizaron los datos correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=usuario.php">