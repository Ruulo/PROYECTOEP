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

   <title>Administrador</title>
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

        <h2><center><!--<span class="icon-doc-text-inv"></span>--><b></span>ANÀLISIS ESTADÌSTICOS</h2></center></b>
        <hr>

  <body>
    <!--<h1>Truco CSS 32 :not selector</h1>-->

  <div class="gallery-container">
  <div class="gallery-item" class="" id=""><a href="gs1.php"><img class="n" src="../img/71.png" width="512" height="512" />  <p class="text">TELARES PLANOS
 </p></div></a>
 <div class="gallery-item" class="" id=""><a href="gs2.php"><img class="n" src="../img/72.png" width="512" height="512" />  <p class="text">TELARES EN PROCESO
 </p></div></a>
 <div class="gallery-item" class="" id=""><a href="g2tc.php"><img class="n" src="../img/73.png" width="512" height="512" />  <p class="text">TELARES CIRCULARES
 </p></div></a>
  <div class="gallery-item" class="" id=""><a href="g4c.php"><img class="n" src="../img/75.png" width="512" height="512" />  <p class="text">CALENTADORES
 </p></div></a>
  <div class="gallery-item" class="" id=""><a href="g5u.php"><img class="n" src="../img/76.png" width="512" height="512" />  <p class="text">URDIDOR
 </p></div></a>
  <div class="gallery-item" class="" id=""><a href="g6tp.php"><img class="n" src="../img/77.png" width="512" height="512" />  <p class="text">TRANSPORTE DE PLEGADORES
 </p></div></a>
   <div class="gallery-item" class="" id=""><a href="g7v.php"><img class="n" src="../img/78.png" width="512" height="512" />  <p class="text">VAPORIZADOR
 </p></div></a>
      <div class="gallery-item" class="" id=""><a href="tp.php"><img class="n" src="../img/80.png" width="512" height="512" />  <p class="text">TIPO DE TELAR
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
