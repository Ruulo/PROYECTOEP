<?php

include("db.php");

if(isset($_GET['id_tj'])) {
  $id_tj= $_GET['id_tj'];
  $query = "DELETE FROM telar_jareta WHERE id_tj= $id_tj";
  $result = mysqli_query($conn, $query);
  }

?>


<script type="text/javascript">
	alert("Se ha  eliminado exitosamente");
	window.location.href='telar_jareta1.php';
</script>