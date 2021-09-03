<?php
include("../conexion.php");
if (isset($_POST['update'])) {
  $id_u= $_GET['id_u'];
  $turno_u= $_POST['turno_u'];
  $equipo_u= $_POST['equipo_u'];
  $sistema_u= $_POST['sistema_u'];
  $falla_u= $_POST['falla_u'];
  $refa_u=$_POST['refa_u'];
  $estado_u= $_POST['estado_u'];
  $tipofalla_u=$_POST['tipofalla_u'];
  $com_u=$_POST['com_u'];
  
  

  $query = "UPDATE urdidor set turno_u = '$turno_u', equipo_u = '$equipo_u' , sistema_u= '$sistema_u' , falla_u = '$falla_u' , refa_u='$refa_u', estado_u = '$estado_u',tipofalla_u='$tipofalla_u' ,com_u ='$com_u' WHERE id_u=$id_u";
   mysqli_query($conection, $query);
}
?>
<SCRIPT LANGUAGE="javascript"> 
   alert("Se actualizaron los datos correctamente");
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=urdidor.php">