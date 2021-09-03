<?php

include("db.php");

if(isset($_GET['id_c'])) {
  $id_c= $_GET['id_c'];
  $query = "DELETE FROM calentadores WHERE id_c= $id_c";
  $result = mysqli_query($conn, $query);
  }

?>


<script type="text/javascript">
	alert("Se ha  eliminado exitosamente");
	window.location.href='calentadores1.php';
</script>