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
	background:#7f7f7f;
	color: #FFF;
	padding: 5px 25px;
	border-radius: 4px;
	margin: 20px;
}
.btn_1{
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
            type: 'pyramid',
            marginRight: 200
        },
        title: {
            text: 'TIPO  DE TELARES EN PROCEESO ',
            x: -50
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b> ({point.y:,.0f})',
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
                    softConnector: true
                }
            }
        },
        legend: {
            enabled: false
        },
        series: [{
            name: 'Tipo Falla',
            data: [

			<?php
			$sql_re=mysqli_query($conection,"select DISTINCT nom_te,id_te,estado_te from tipotelar");
			while($res=mysqli_fetch_array($sql_re)){
			?>

['<?php echo $res['nom_te'].' '.$res['id_te'] ?>', <?php echo $res['estado_te'] ?> ],

			<?php
			}
			?>

            ]
        }]
    });
});
		</script>
   <title>Graficas</title>
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
	 <li><a href='a.php'><span class="fi fi-page-multiple"></span> ANÀLISIS</a></li><?php } ?>
   <!------------------------------------------------------------->

   <?php
				if($_SESSION['rol'] ==1){
			 ?>
      <li class='last'><a href='../salir.php'><span class="icon-logout"> cerrar sesión</span></a></li><?php } ?>
</ul>
</div><!--termina el menu-->
<?php
echo 'Bienvenido, ';
echo ''.$_SESSION['user'];'<b>';
?>
<br>
 <aside>
 		  <a href="gg.php" class="btn_new" name="boton" value="Boton de color"   onClick="uno(this)"  ><span class="fi fi-graph-trend"> TW-11 130</a></span>
		  <br>

		  <a href="PSS.php" class="btn_new" name="boton" value="Boton de color"   onClick="dos(this)"  ><span class="fi fi-graph-trend"> PS</a></span>
<br>
 <a href="P77.php" class="btn_new" name="boton" value="Boton de color"   onClick="seis(this)"  ><span class="fi fi-graph-trend"> P7300</a></span>
 <br>
<a href="1533.php" class="btn_new" name="boton" value="Boton de color"   onClick="tres(this)"  ><span class="fi fi-graph-trend"> TW-11 153</a></span>
<br>
<a href="1100.php" class="btn_new"  name="boton" value="Boton de color"   onClick="cuatro(this)" ><span class="fi fi-graph-trend"> TW-11 110</a></span>
<br>
<a href="2200.php" class="btn_new"  name="boton" value="Boton de color"   onClick="cinco(this)" ><span class="fi fi-graph-trend"> TW220</a></span>
 <br>
<a href="P711.php" class="btn_new"  name="boton" value="Boton de color"   onClick="siete(this)" ><span class="fi fi-graph-trend"> P7100</a></span>
 <br>
 <a href="PUU.php" class="btn_new"  name="boton" value="Boton de color"   onClick="ocho(this)" ><span class="fi fi-graph-trend"> PU</a></span>
 <br>
<!--<a href="gm2c.php" class="btn_1">Siguiente <span class="fi fi-arrow-right"></a></span>-->
<a href="tp1.php" class="btn_1"  name="boton"  ><span class="icon-logout"> Salir</a></span>

  </aside>
  <script language="javascript">
// esta parte entre las etiquetas head
<!--Script ofrecido por tutores.org -->
var nav = (document.layers) ? true : false




function uno(Boton){
   if (!nav && Boton) Boton.style.backgroundColor="#98FB98" // color al pulsar
}


function dos(Boton){
   if (!nav && Boton) Boton.style.backgroundColor="#fb8c5b" // color al pulsar
}
function tres(Boton){
   if (!nav && Boton) Boton.style.backgroundColor="#cb00ff" // color al pulsar
}
function cuatro(Boton){
   if (!nav && Boton) Boton.style.backgroundColor="#FFCCFF" // color al pulsar
}
function cinco(Boton){
   if (!nav && Boton) Boton.style.backgroundColor="#ecee29" // color al pulsar
}
function seis(Boton){
   if (!nav && Boton) Boton.style.backgroundColor="#b6447e" // color al pulsar
}
function siete(Boton){
   if (!nav && Boton) Boton.style.backgroundColor="#b6447e" // color al pulsar
}
function ocho(Boton){
   if (!nav && Boton) Boton.style.backgroundColor="#b6447e" // color al pulsar
}
</script>
	<section>

<script src="../Highcharts-4.1.5/js/highcharts.js"></script>
<script src="../Highcharts-4.1.5/js/modules/funnel.js"></script>
<script src="../Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<br><br>
</section>


<center>




<center><button type="button" value="Regresar" class="btn btn-defaull tn-lg"  >
 <span class="fi fi-arrow-left" style="color:#fff"></span></button>
</center>
  <!-- Empieza pie de pagina -->

<br>
<br>
<br>
<br>
<br>
<br>
</br>
<footer>

<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->
</body>
</html>
