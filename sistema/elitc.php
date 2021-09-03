<?php

include("db.php");

if(isset($_GET['id_tc'])) {
  $id_tc= $_GET['id_tc'];
  $query = "DELETE FROM telar_circular WHERE id_tc= $id_tc";
   $result = mysqli_query($conn, $query);
  }

?>


<script type="text/javascript">
	alert("Se ha  eliminado exitosamente");
	window.location.href='telar_circular1.php';
</script>