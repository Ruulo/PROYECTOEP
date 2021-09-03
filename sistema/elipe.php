<?php

include("db.php");

if(isset($_GET['id_pe'])) {
  $id_pe= $_GET['id_pe'];
  $query = "DELETE FROM personal WHERE id_pe= $id_pe";
  $result = mysqli_query($conn, $query);
  }

?>


<script type="text/javascript">
	alert("Se ha  eliminado exitosamente");
	window.location.href='personal1.php';
</script>
