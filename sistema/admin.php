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
<link href="../css/1.css" rel="stylesheet" type="text/css" />
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
  <div  class="gallery-item" class="b" id="dos" ><a href="gs1.php"><img class="n" src="../img/p1.png" width="512" height="512" />  <p class="text">PERSONAL
 </p></div></a>
 <div  class="gallery-item" class="q"id="uno"><a href="gs2.php"><img class="n" src="../img/24.png" width="512" height="512" />  <p class="text">TELARES PLANOS
 </p></div></a>
 <div class="gallery-item" class="q" id="dos"><a href="g2tc.php"><img class="n" src="../img/24.png" width="512" height="512" />  <p class="text">TELARES EN PROCESO
 </p></div></a>
 <div  class="gallery-item" class="q" id="uno"><a href="g3tj.php"><img class="n" src="../img/24.png" width="512" height="512" />  <p class="text">TELARES CIRCULARES
 </p></div></a>
  <!--<div  class="gallery-item" class="q" id="dos"><a href="g4c.php"><img class="n" src="../img/24.png" width="512" height="512" />  <p class="text">TELARES EN JARETA
 </p></div></a>-->
  <div  class="gallery-item" class="q" id="uno"><a href="g5u.php"><img class="n" src="../img/s.png" width="512" height="512" />  <p class="text">CALENTADORES
 </p></div></a>
  <div  class="gallery-item" class="q" id="dos"><a href="g6tp.php"><img class="n" src="../img/s.png" width="512" height="512" />  <p class="text">URDIDOR
 </p></div></a>
   <div  class="gallery-item" class="q" id="uno"><a href="g7v.php"><img class="n" src="../img/s.png" width="512" height="512" />  <p class="text">TRANSPORTE DE PLEGADORES
 </p></div></a>
  <div  class="gallery-item" class="q" id="dos"><a href="gs1.php"><img class="n" src="../img/s.png" width="512" height="512" />  <p class="text">VAPORIZADOR
 </p></div></a>
 <div  class="gallery-item" class="q"id="uno"><a href="gs2.php"><img class="n" src="../img/10.png" width="512" height="512" />  <p class="text">ANÀLISIS
 </p></div></a>
 <div  class="gallery-item" class="q" id="dos"><a href="g2tc.php"><img class="n" src="../img/u.png" width="512" height="512" />  <p class="text">USUARIO
 </p></div></a>
  <div class="gallery-item" class="q" id="uno"><a href="g6tp.php"><img class="n" src="../img/b.png" width="512" height="512" />  <p class="text">BASE DE DATOS
 </p></div></a>

   <div id="below" >
 </div>



<div class="b" id="uno"><img class="n" src="../img/ca.png" width="512" height="512" />  <p class="text">FECHA:  <?php
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
 //$datenow=date("l, d F Y");
  //echo $datenow
?> </p></div>

</div>

  </body>



  <!-- Empieza pie de pagina -->
<br></br>

<footer>

<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->
</body>
<html>
