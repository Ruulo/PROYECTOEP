<?php
include("../conexion.php");
if (isset($_POST['update'])) {
  $id_c= $_GET['id_c'];
  $turno_c= $_POST['turno_c'];
  $equipo_c = $_POST['equipo_c'];
  $sistema_c= $_POST['sistema_c'];
  $falla_c=$_POST['falla_c'];
  $refa_c= $_POST['refa_c'];
  $estado_c=$_POST['estado_c'];
 $tipofalla_c=$_POST['tipofalla_c']; 
  $com_c=$_POST['com_c'];
  

  $query = "UPDATE calentadores set  turno_c= '$turno_c', equipo_c='$equipo_c', sistema_c= '$sistema_c' ,falla_c= '$falla_c' , refa_c='$refa_c', estado_c='$estado_c', tipofalla_c='$tipofalla_c', com_c = '$com_c'  WHERE id_c=$id_c";
  mysqli_query($conection, $query);
}

?>
<SCRIPT LANGUAGE="javascript"> 
         alert("Se actualizaron los datos correctamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=calentadores1.php">