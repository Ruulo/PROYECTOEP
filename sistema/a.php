<?php session_start(); ?>

<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
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
    <link rel="stylesheet" href="../css/all.css">
	<!--menu de imagenes-->
	    <link rel="stylesheet" href="../css/menuinicio.css"/>
	<!---home de administrador-->
<link href="../css/home1.css" rel="stylesheet" type="text/css" />
		</head>

	<style type="text/css">
h2{
	color:#4c4c4c;
}
</style>

   <title>Gràficas</title>
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

        <h2><center><!--<span class="icon-doc-text-inv"></span>--><b></span>ANÀLISIS ESTADÌSTICOS</h2></center></b>
        <hr>

  <body>
    <!--<h1>Truco CSS 32 :not selector</h1>-->

  <div class="gallery-container">
  <div class="gallery-item" class="" id=""><a href="gs1s.php"><img class="n" src="../img/71.png" width="512" height="512" />  <p class="text">TELARES PLANOS
 </p></div></a>
 <div class="gallery-item" class="" id=""><a href="gs2s.php"><img class="n" src="../img/72.png" width="512" height="512" />  <p class="text">TELARES EN PROCESO
 </p></div></a>
 <div class="gallery-item" class="" id=""><a href="g2tcs.php"><img class="n" src="../img/73.png" width="512" height="512" />  <p class="text">TELARES CIRCULARES
 </p></div></a>
  <div class="gallery-item" class="" id=""><a href="g4cs.php"><img class="n" src="../img/75.png" width="512" height="512" />  <p class="text">CALENTADORES
 </p></div></a>
  <div class="gallery-item" class="" id=""><a href="g5us.php"><img class="n" src="../img/76.png" width="512" height="512" />  <p class="text">URDIDOR
 </p></div></a>
  <div class="gallery-item" class="" id=""><a href="g6tps.php"><img class="n" src="../img/77.png" width="512" height="512" />  <p class="text">TRANSPORTE DE PLEGADORES
 </p></div></a>
   <div class="gallery-item" class="" id=""><a href="g7vs.php"><img class="n" src="../img/78.png" width="512" height="512" />  <p class="text">VAPORIZADOR
 </p></div></a>

    <div class="gallery-item" class="" id=""><a href="tp1.php"><img class="n" src="../img/80.png" width="512" height="512" />  <p class="text">TIPO DE TELAR
 </p></div></a>

</div>

  </body>



  <!-- Empieza pie de pagina -->
<br></br>

<footer>

<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->
</body>
</html>
