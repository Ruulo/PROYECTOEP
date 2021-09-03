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
		<link rel='stylesheet' href='../css/fontello.css'>
		<link rel='stylesheet' href='../css/fontper.css'>
		<!--iconos-->
     <link rel='stylesheet' href='css/fondoregistros.css'>
	  <link rel='stylesheet' href='../css/foundation-icons.css'>
		    <script src="tableToExcel.js"></script>

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
					"sAjaxSource": "pe.php"
				});
			});

		</script>
	</head>


<body>
	<!--&nbsp;-->
<div class="">
<h2 id="todos-registros">PERSONAL - todos los registros</h2>
<u><span><h6 class="excel_icon">DESCARGAR</u><a href="../EXCEL/per.php">  <img src="../img/excel.png " width="35" height="35"></a>
</h6></span></div>
<br><br><br><br><br>




		<div class="container">
    <br>
    <div class="row table-responsive">
				<table class="display" id="mitabla">
					<thead>
						<tr>
							<th>ID</th>
							<th>TURNO</th>
							<th>NOMBRES</th>
							<th>APELLIDOS</th>
							<th>FECHA</th>
							<th>COMENTARIO</th>
							<th>DIA</th>
						</tr>
					</thead>

					<tbody>

					</tbody>
				</table>
			</div>
		</div>


<center>
	<button type="button" value="Regresar" class="btn btn-primary tn-lg" id="regresar" onclick="history.back()" >
	 <span class="fi fi-arrow-left"> Regresar</span></button>
	</button>
</center>

	</body>
</html>
