<?php

include("db.php");

if(isset($_GET['id_v'])) {
  $id_v= $_GET['id_v'];
  $query = "DELETE FROM vaporizador WHERE id_v= $id_v";
  $result = mysqli_query($conn, $query);
  }

?>


<script type="text/javascript">
	alert("Se ha  eliminado exitosamente");
	window.location.href='vaporizador1.php';
</script>