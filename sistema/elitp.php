<?php

include("db.php");

if(isset($_GET['id_tp'])) {
  $id_tp= $_GET['id_tp'];
  $query = "DELETE FROM telar_planos WHERE id_tp= $id_tp";
  $result = mysqli_query($conn, $query);
   $result = mysqli_query($conn, $query);
  }

?>

<script type="text/javascript">
	alert("Se ha  eliminado exitosamente");
	window.location.href='telar_planos1.php';
</script>

?>