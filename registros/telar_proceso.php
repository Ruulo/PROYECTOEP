<?php
	require 'conexion.php';
	
?>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/jquery.dataTables.min.js"></script>
			<!--iconos-->
     <link rel='stylesheet' href='../css/fontello.css'>
	  <link rel='stylesheet' href='../css/foundation-icons.css'>
	  
		<script>
			$(document).ready(function(){
				$('#mitabla').DataTable({
					"order": [[1, "asc"]],
					"language":{
					"lengthMenu": "Mostrar _MENU_ registros por pagina",
					"info": "Mostrando pagina _PAGE_ de _PAGES_",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(filtrada de _MAX_ registros)",
						"loadingRecords": "Cargando...",
						"processing":     "Procesando...",
						"search": "Buscar:",
						"zeroRecords":    "No se encontraron registros coincidentes",
						"paginate": {
							"next":       "Siguiente",
							"previous":   "Anterior"
						},					
					},
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "pp.php"
				});	
			});
			
		</script>
		
	</head>
	
	<body>
		
	&nbsp;<!--logo--><div class="logo logo_main"></div> <img src="../img/12.png" width="16%" height="10%" align="left" /></div>
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">Lista de Telares en Proceso</h2>
			</div>
			
		
				<center>  <td><a href="../EXCEL/tpp.php"><img src="../img/e.PNG " width="30"></a></td> </center>
			<br>
			
			<div class="row table-responsive">
				<table class="display" id="mitabla">
					<thead>
						<tr>
							<th>ID</th>
							<th>TURNO</th>
							<th>FECHA</th>
							<th>TELAR</th>
							<th>ESTILO</th>
							<th>SISTEMA</th>
							<th>FALLA</th>
							<th>TIPO DE FALLA</th>
							<th>COMENTARIO</th>
							<th>TIPO DE TELAR</th>
						</tr>
					</thead>
					
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
				<br>  
<center><button type="button" value="Regresar" class="btn btn-primary tn-lg" id="regresar" onclick="history.back()" >
 <span class="fi fi-arrow-left"> Regresar</span></button></center>
			
		
	</body>
</html>	