<?php

			require_once("../conexion.php");

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
${demo.css}
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
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'TELAR PLANOS ESTADO PENDIENTE POR SEMANA'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'PENDIENTE',
            data: [
			
			<?php
			$sql_re=mysqli_query($conection,"select DISTINCT telar_tp from telar_planos where DATE_ADD(fecha_tp, INTERVAL 8-DAYOFWEEK(fecha_tp) DAY) SEMANA AND estado_tp='Pendiente'");
			while($res=mysqli_fetch_array($sql_re)){
			?>
			
                ['<?php echo $res['telar_tp']; ?>', <?php echo $res['SEMANA'] ?>],
			
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
<div id='cssmenu'><!--inicio del menu-->
<ul>
<!------------------------------------------------------------>
       <?php 
				if($_SESSION['rol'] ==1){
			 ?>
       <li><a href='home.php'><span class="fi fi-home"></span></a></li><?php } ?>
	 <!------------------------------------------------------------>
	 <?php 
				if($_SESSION['rol'] ==1){
			 ?>
	   <li><a href='personal1.php'><span class=" fi fi-torsos-all"> Personal </span></a></li><?php } ?>
	   <!------------------------------------------------------------>
	 <?php 
				if($_SESSION['rol'] ==1){
			 ?>
   <li class='active has-sub'><a href='#'><span class="fi fi-clipboard-notes"> Telares</span></a>
      <ul>
	   <li class='has-sub'><a href='telar_planos1.php'><span>Telares Planos</span></a>
         </li>
         <li class='has-sub'><a href='telar_proceso1.php'><span>Telares Proceso</span></a>
         </li>
         <li class='has-sub'><a href='telar_circular1.php'><span>Telares Circulares</span></a>
         </li>
		  <li class='has-sub'><a href='telar_jareta1.php'><span>Telares de Jareta</span></a>
         </li>
      </ul>
   </li><?php } ?>
   <!----------------------------------------------------------------------->
    <?php 
				if($_SESSION['rol'] ==1){
			 ?>
      <li><a href='calentadores1.php'><span class="fi fi-clipboard-notes"> Calentadores </span></a></li><?php } ?>
 <!-------------------------------------------------------------------------->
 <?php 
				if($_SESSION['rol'] ==1){
			 ?>
	     <li><a href='urdidor1.php'><span class="fi fi-clipboard-notes"> Urdidor </span></a></li><?php } ?>
<!--------------------------------------------------------------------------->
		  <?php 
				if($_SESSION['rol'] ==1){
			 ?>
		    <li><a href='plegadores1.php'><span class="fi fi-clipboard-notes"> Transporte de Plegadores </span></a></li><?php } ?>
<!------------------------------------------------------------------------->
			  <?php 
				if($_SESSION['rol'] ==1){
			 ?>
			   <li><a href='vaporizador1.php'><span class="fi fi-clipboard-notes"></span> Vaporizador</a></li><?php } ?>
<!------------------------------------------------------------------------->
   <?php 
				if($_SESSION['rol'] ==1){
			 ?>
 <li class='last'><a href='usuario.php'><span class="icon-user-add">USUARIOS</span></a></li><?php } ?>
   <!------------------------------------------------------------------------------------------------------->
 <?php 
				if($_SESSION['rol'] ==1){
			 ?>
	 <li><a href='a.php'><span class="fi fi-page-multiple"></span> AN??LISIS</a></li><?php } ?>
   <!------------------------------------------------------------->
     
   <?php 
				if($_SESSION['rol'] ==1){
			 ?>
      <li class='last'><a href='../salir.php'><span class="icon-logout"> cerrar sesi??n</span></a></li><?php } ?>
</ul>
</div><!--termina el menu-->
<?php
echo 'Bienvenido, ';
echo ''.$_SESSION['user'];'<b>';
?>

       
 <body>

<script src="../Highcharts-4.1.5/js/highcharts.js"></script>
<script src="../Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<br><br>
<center><button type="button" value="Regresar" class="btn btn-secondary tn-lg" id="regresar" onclick="history.back()" >
 <span class="fi fi-arrow-left"> Regresar</span></button>
<a href="analisis.php" class="btn_new" ><span class="icon-logout"> Salir</a></span>

  <!-- Empieza pie de pagina -->

<br>

<footer>
		
<h5> ??BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
<html>
