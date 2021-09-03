<?php

include('db.php');

if (isset($_POST['ngusu'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $usuario = $_POST['usuario'];
  $clave  = md5($_POST['clave']);
  $rol    = $_POST['rol'];
 

  $query = "INSERT INTO usuario(nombre,correo,usuario,clave,rol)
  VALUES('$nombre','$correo','$usuario','$clave','$rol')";
  $result = mysqli_query($conn, $query);

}

?>

<SCRIPT LANGUAGE="javascript"> 
         alert("Datos Registrados correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=usuario.php">