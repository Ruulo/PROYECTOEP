<?php
session_start();
if(empty($_SESSION['active']))
	?>
<?php include("../conexion.php"); ?>

<!doctype html>
<html lang=''>
<!--/////////////CABECERA HOJAS DE ESTILOS Y DEMAS//////////////-->
<head>
   <meta charset='utf-8'>
	<!--icono de la pagina web-->
	<link rel="icon"  type="image/png"  href="../img/00.png">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--Menu-->
   <link rel="stylesheet" href="../css/menu.css">
	 <link rel="stylesheet" href="../css/menuinicio.css">
   <script src="../js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../js/script.js"></script>
     <!--iconos-->
     <link rel='stylesheet' href='../css/fontello.css'>
	  <link rel='stylesheet' href='../css/foundation-icons.css'>
	      <!--css de footer-->
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<!--crud-->
<link rel="stylesheet" href="../css/bootstrap.minc.css">
    <link rel="stylesheet" href="../css/all.css">
		<!--paginador-->
	 <link rel="stylesheet" href="../css/paginador.css">
	 <link rel="stylesheet" href="../css/fontper.css">


  </head>
<!--/////////////CABECERA HOJAS DE ESTILOS Y DEMAS//////////////-->

  <!--cerrar mensajes-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<style type="text/css">
h1 {
	color:#4c4c4c;
}
.btn_new{
	display: inline-block;
	background:#4cb6ea;
	color: #FFF;
	padding: 5px 25px;
	border-radius: 4px;
	margin: 20px;
}
.search{
	background:#4cb6ea;
	color: #fff;
	border: none;
}
.right{
    float: right;
}
	.eli{
	color: #f26b6b;
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

<title>PERSONAL</title>

<body>
	<div class="con">

	<img src="../img/banner_admin.png" id="img_banner"/>
	<div class="icon_date">
	 <p>
	 <?php
	 $dias = array("DOMINGO","LUNES","MARTES","MIERCOLES","JUEVES","VIERNES","SABADO");
	 $meses = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");
	 echo $dias[date('w')]." ".date('d')."/".$meses[date('n')-1]. "/".date('Y') ;
		//$datenow=date("l, d F Y");
		 //echo $datenow
		?> </p>
	</div>
		</div>
</body>

<div id='cssmenu'>
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
         </li>
      </ul>
		<?php } ?>
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
 <li><a href='usuario.php'><span class="icon-user-add">USUARIOS</span></a></li><?php } ?>
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
</div><!--A QUI TERMINA el MENU NEGRO-->


<?php
echo 'Bienvenido, ';//Mensaje que se muestra debajo del baner (Bienvenido, Roberto Torres)
echo ''.$_SESSION['user'];'<b>';//nombre del administrador y apareceria asi (Bienvenido, Roberto Torres)
?>
<!--Empieza el contenido-->

  <h2 id="letras_personal"><center><p><span ><img src="../img/u.png" width="40px" height="40px"/><b> PERSONAL</h2></b></center></p></span>
  <!--encabezado-->

<main class="container p-10">
<!-- al parecer este apartado no muestra ni hace nada-->
<div class="row">
<div class="col-md-10">
<!-- MESSAGES -->
</div>
</div>
<!-- al parecer este apartado no muestra ni hace nada-->


  <div class="col-md-31">
	<div class="table-responsive" style="overflow-x:auto; bgcolor:red">
  <table class="table table-striped">

<!--////PARTE DEL BUSCADOR (LA LUPITA A MANO DERECHA PARTE SUPERIOR)///AL PARECER NO FUNCIONA////-->
<form action="busp.php" method="get"><!-- los datos seran enviados a busp.php, con ayuda del metodo get-->
<div class="right">
<input type="text" name="busqueda" id="busqueda" placeholder="busca por turno..">
<button type="submit" class="search"><span class="icon-search" ></span>
</form></button></div>
<!--////PARTE DEL BUSCADOR (LA LUPITA A MANO DE RECHA PARTE SUPERIOR)///AL PARECER NO FUNCIONA////-->

<!--BOTON LINK QUE NOS ENVIA A VER TODOS LOS REGISTRSO DE personal.php-->
<button class="btn btn-secondary">
<a href="../registros/personal.php" class=""><span class="icon-eye">Todos los registros</span>
</button>  </a>
<br><br><!--BOTON LINK QUE NOS ENVIA A VER TODOS LOS REGISTRSO DE personal.php-->

<!--<a href="graficas15.php" class="btn_r" ><span class="icon-cancel"> Incidencias</a></span>--><!---botton del pdf-->
	 <!--termina el buscador-->

  <br><!--//////////formulario/////////////////////-->
	<form action="busp.php"method="get"> De:
	<input type="date" name="fecha_de" id="fecha_de"> A <!--required muetra un mensajito en la pantalla para que no se dejen los campos vacios-->
	<input type="date" name="fecha_a" id="fecha_a">
	<button type="submit" class="search"><span class="icon-search"></span></button><!--boton de la upita para buscar-->
</form> <!--//////////////formulario////////////////////-->
      </table>
    </div>
  </div>
</main>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!--//////////PIE DE PAGINA//////////////-->
<?php include('../includes/footer.php'); ?>

</body>
<div class="footer">
	<!-- Empieza pie de pagina -->
	<footer>
	<h7> ©BAG CORP Integrity Delivered</h7>
	</footer>
	<!-- Empieza pie de pagina -->
</div>
</html>
