<?php
include("../conexion.php");
if (isset($_POST['update'])) {
  $idusuario= $_GET['idusuario'];
  $nombre= $_POST['nombre'];
  $correo = $_POST['correo'];
  $usuario= $_POST['usuario'];
  $rol= $_POST['rol'];
  

  $query = "UPDATE usuario SET nombre = '$nombre', correo='$correo',usuario='$usuario',rol='$rol'
															WHERE idusuario= '$idusuario'";
  mysqli_query($conection, $query);
}

?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Se actualizaron los datos correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=usuario.php">