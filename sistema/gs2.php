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
.btn_1{
	display: inline-block;
	background:#7f7f7f;
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

   <title>Graficas</title>
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
 <aside>
 		  <a href="gs2ce.php" class="btn_new" name="boton" value="Boton de color"   onClick="uno(this)"  ><span class="fi fi-graph-trend"> Cambio de Estilo</a></span>
		  <br>

		  <a href="gs2e.php" class="btn_new" name="boton" value="Boton de color"   onClick="dos(this)"  ><span class="fi fi-graph-trend"> En espera de trama</a></span>
<br>
 <a href="p.php" class="btn_new" name="boton" value="Boton de color"   onClick="seis(this)"  ><span class="fi fi-graph-trend"> En espera de plegador</a></span>
 <br>
<a href="gs2f.php" class="btn_new" name="boton" value="Boton de color"   onClick="tres(this)"  ><span class="fi fi-graph-trend"> Fuera de programa</a></span>
<br>
<a href="gs2a.php" class="btn_new"  name="boton" value="Boton de color"   onClick="cuatro(this)" ><span class="fi fi-graph-trend"> Por atar</a></span>
<br>
<a href="gs2t.php" class="btn_new"  name="boton" value="Boton de color"   onClick="cinco(this)" ><span class="fi fi-graph-trend"> Por terminar</a></span>
 <br>
<!--<a href="gm2c.php" class="btn_1">Siguiente <span class="fi fi-arrow-right"></a></span>-->
<a href="analisis.php" class="btn_1"  name="boton"  ><span class="icon-logout"> Salir</a></span>

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
</script>  
	<section>

	<h2><center><IMG SRC="../img/k.png" width="70%" height="50%" ><br></center>

<br><br>
</section>


<center>
 



<center><button type="button" value="Regresar" class="btn btn-defaull tn-lg"  >
 <span class="fi fi-arrow-left" style="color:#fff"></span></button>
</center>
  <!-- Empieza pie de pagina -->

<br>

<footer>
		
<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
</html>
