<?php

include("db.php");

if(isset($_GET['id_p'])) {
  $id_p= $_GET['id_p'];
  $query = "DELETE FROM plegadores WHERE id_p= $id_p";
  $result = mysqli_query($conn, $query);
  }

?>


<script type="text/javascript">
	alert("Se ha  eliminado exitosamente");
	window.location.href='plegadores1.php';
</script>