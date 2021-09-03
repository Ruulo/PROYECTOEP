<?php

include("db.php");

if(isset($_GET['id_u'])) {
  $id_u= $_GET['id_u'];
  $query = "DELETE FROM urdidor WHERE id_u= $id_u";
  $result = mysqli_query($conn, $query);
  }

?>


<script type="text/javascript">
	alert("Se ha  eliminado exitosamente");
	window.location.href='urdidor1.php';
</script>