<?php

include("db.php");

if(isset($_GET['idusuario'])) {
  $idusuario= $_GET['idusuario'];
  $query = "DELETE FROM usuario WHERE idusuario= $idusuario";
  $result = mysqli_query($conn, $query);
  }
?>
<script type="text/javascript">
	alert("Se ha  eliminado exitosamente");
	window.location.href='usuario.php';
</script>