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
.btn_r{
	display: inline-block;
	background:#ff0101;
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
            text: 'TELAR PLANOS ESTADO PENDIENTE POR MES'
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
            name: 'TELAR',
            data: [
			
			<?php
			$sql_re=mysqli_query($conection,"select DISTINCT telar_tp, tipofalla_tp from telar_planos where DATE_FORMAT(fecha_tp, '%Y-%m-%d') = CURDATE()");
			while($res=mysqli_fetch_array($sql_re)){
			?>
			
                ['<?php echo $res['tipofalla_tp']; ?>', <?php echo $res['telar_tp'] ?>],
			
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

       
 <body>

<script src="../Highcharts-4.1.5/js/highcharts.js"></script>
<script src="../Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<br><br>
<center><button type="button" value="Regresar" class="btn btn-secondary tn-lg" id="regresar" onclick="history.back()" >
 <span class="fi fi-arrow-left"> Regresar</span></button>
<a href="g5.php" class="btn_new" ><span class="fi fi-graph-trend"> Siguiente</a></span>
<?php 
				if($_SESSION['rol'] ==2){
			 ?>
<a href="../repo/c_p2.php" class="btn_r" ><span class="icon-download-alt"> </a></span></center><!--botton del pdf-->
     <?php } ?>
<?php 
				if($_SESSION['rol'] ==3){
			 ?>
<a href="../repo/c_p3.php" class="btn_r" ><span class="icon-download-alt"> </a></span></center><!--botton del pdf-->
     <?php } ?>

<?php 
				if($_SESSION['rol'] ==4){
			 ?>
<a href="../repo/c_p4.php" class="btn_r" ><span class="icon-download-alt"> </a></span></center><!--botton del pdf-->
     <?php } ?>

</body>

  <!-- Empieza pie de pagina -->

<br>

<footer>
		
<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
<html>
