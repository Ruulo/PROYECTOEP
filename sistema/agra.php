<?php

				require_once("../conexion1/conexion.php");

?>
<?php 
session_start();
if(empty($_SESSION['active']))
	
	?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--icono de la pagina web-->
	<link rel="icon"  type="image/png"  href="../img/00.png">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../css/menu.css">
   <script src="../js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../js/script.js"></script>
     <!--iconos-->
     <link rel='stylesheet' href='../css/fontello.css'>
	  <link rel='stylesheet' href='../css/foundation-icons.css'>
	      <!--css de footer-->
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
  		<!--crud-->
<link rel="stylesheet" href="../css/bootstrap.minc.css">
<!--libreria de graficas-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>	  
	  <style type="text/css">
h1 {
	color:#4c4c4c;
}
#container {
	height: 400px; 
	min-width: 310px; 
	max-width: 800px;
	margin: 0 auto;
}

.btn_r{
	display: inline-block;
	background:#ff0101;
	color: #FFF;
	padding: 5px 25px;
	border-radius: 4px;
	margin: 20px;
}
.btn_new{
	display: inline-block;
	background:#4cb6ea;
	color: #FFF;
	padding: 5px 25px;
	border-radius: 4px;
	margin: 20px;
}
	
		</style>
	<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: 95,
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'TRANSPORTE DE PLEGADORES ESTADO PENDIENTE POR MES'
        },
        subtitle: {
            text: ''
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: [
			<?php
$sql=mysql_query("select id_p from plegadores where MONTH(fecha_p) = MONTH(CURDATE()) AND estado_p='pendiente'");
while($res=mysql_fetch_array($sql)){			
?>					
			
			['<?php echo $res['id_p']; ?>'],
<?php
}
?>
			]
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'ID',
            data: [
			
			<?php
$sql=mysql_query("select id_p from plegadores where MONTH(fecha_p) = MONTH(CURDATE()) AND estado_p='pendiente'");
while($res=mysql_fetch_array($sql)){			
?>			
			
			[<?php echo $res['id_p'] ?>],
			
<?php
}
?>
			]
        }]
    });
});
		</script>
   <title>graficas</title>
</head>
<body>
<!--logo--><div class="logo logo_main"></div> <img src="../img/baner.png" width="100%" height="100%"  /></div>
</body>
<?php include "../includes/nav.php"; ?>
<?php
echo 'Bienvenido, ';
echo ''.$_SESSION['user'];'<b>';
?>

       <center> <div class="caja">
          <a href="g8.php" class="btn_new" ><span class="fi fi-graph-trend">Cambio de estilo</a></span>
		  <a href="g8.php" class="btn_new" ><span class="fi fi-graph-trend"></a></span>
<a href="g8.php" class="btn_new" ><span class="fi fi-graph-trend"> Siguiente</a></span>

<a href="g8.php" class="btn_new" ><span class="fi fi-graph-trend"> Siguiente</a></span>
<a href="g8.php" class="btn_new" ><span class="fi fi-graph-trend"> Siguiente</a></span>
        </div></center>

       
 <body>

<script src="../Highcharts-4.1.5/js/highcharts.js"></script>
<script src="../Highcharts-4.1.5/js/highcharts-3d.js"></script>
<script src="../Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<br><br>
<center><button type="button" value="Regresar" class="btn btn-primary tn-lg" id="regresar" onclick="history.back()" >
 <span class="fi fi-arrow-left"> Regresar</span></button>



  <!-- Empieza pie de pagina -->

<br>

<footer>
		
<h5> ??BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
<html>
