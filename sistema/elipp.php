<?php

include("db.php");

if(isset($_GET['id_pp'])) {
  $id_pp= $_GET['id_pp'];
  $query = "DELETE FROM telar_proceso WHERE id_pp= $id_pp";
  $result = mysqli_query($conn, $query);
  }

?>


<script type="text/javascript">
	alert("Se ha  eliminado exitosamente");
	window.location.href='telar_proceso1.php';
</script>
