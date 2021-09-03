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



/* Hoja de estilos
Contiene los estilos de un sitio web responsive.
Michel Haddad - Internetedadinero.com | 2017
*/
 

section,aside {
  padding: 7px;
  -moz-border-radius:2px;-webkit-border-radius:2px;-o-border-radius:3px;border-radius:3px;
}
section {
  float: right;
  width:70%;
  border: 0px solid #ccc;
}
aside {
  float:left;
  width: 30%;
  background:;
  color:;
}



/* pantalla maximo 980px */
@media screen and (max-width:980px) {
  .container {
    width:98%;
  }
  section {
    width:68%;
  }
}
 
/* pantalla maximo 700px */
@media screen and (max-width:700px) {
  aside,section {
    float:none;
    width:96%;
    font-size:1.2em;
  }
 
  aside {
    margin-top:5px;
    background:#fff;
    color: #fff;
  }


 
/* pantalla maximo 480px */
@media screen and (max-width:480px) {
  aside {
    display:block;
  
    font-size:1.5em;
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
            text: ' TELAR PROCESO ESTADO CAMBIO DE ESTILO POR SEMANA'
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
            name: 'Telar',
            data: [
			
			<?php
			$sql_re=mysqli_query($conection,"select DISTINCT  telar_tp from telar_planos where DATE_FORMAT(fecha_tp, '%Y-%m-%d') = CURDATE() AND estado_tp='pendiente'");
			while($res=mysqli_fetch_array($sql_re)){
			?>
			
                ['<?php echo $res['telar_tp']; ?>', <?php echo $res['telar_tp'] ?>],
			
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
<br>

<!-- Empieza Seccion de contenido -->
	<section>
	<script src="../Highcharts-4.1.5/js/highcharts.js"></script>
<script src="../Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<br><br>
</section>
<!-- Finaliza Seccion de contenido -->
 <br>
<!-- Empieza barra lateral -->
	<aside>

          <a href="g8.php" class="btn_new" name="boton" value="Boton de color"   onClick="enviamos(this)"  ><span class="fi fi-graph-trend"> Cambio de estilo</a></span>
		  
		  <br>
		  <a href="g8.php" class="btn_new" name="boton" value="Boton de color"   onClick="enviamos(this)"  ><span class="fi fi-graph-trend"> En espera de trama</a></span>
<br>
<a href="g8.php" class="btn_new" name="boton" value="Boton de color"   onClick="enviamos(this)"  ><span class="fi fi-graph-trend" >Fuera de programa</a></span>
<br>
<a href="g8.php" class="btn_new"  name="boton" value="Boton de color"   onClick="enviamos(this)" ><span class="fi fi-graph-trend"> Por atar</a></span>
<br>
<a href="g8.php" class="btn_new" name="boton" value="Boton de color"   onClick="enviamos(this)" ><span class="fi fi-graph-trend"> Por terminar</a></span>
     

  </aside>
  
  <script language="javascript">
// esta parte entre las etiquetas head
<!--Script ofrecido por tutores.org -->
var nav = (document.layers) ? true : false
 

 
 
function enviamos(Boton){
   if (!nav && Boton) Boton.style.backgroundColor="silver" // color al pulsar
}
 
</script>

<center><button type="button" value="Regresar" class="btn btn-defaull tn-lg"  >
 <span class="fi fi-arrow-left" style="color:#fff"></span></button>
</center>
<br>


  <!-- Empieza pie de pagina -->


<footer>
		
<center><h5> ©BAG CORP Integrity Delivered</h5>

	</footer></center>
<!-- Empieza pie de pagina -->	
</body>
<html>
