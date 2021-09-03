<?php
session_start();
if(empty($_SESSION['active']))
	{
		header('location:../index.php');
	}
	?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--icono de la pagina web-->
	<link rel="icon"  type="image/png"  href="../img/00.png">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--css del menu-->
   <link rel="stylesheet" href="../css/menu.css">
   <script src="../js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../js/script.js"></script>
     <!--iconos-->
     <link rel='stylesheet' href='../css/fontello.css'>
	  <link rel='stylesheet' href='../css/foundation-icons.css'>
	      <!--css de footer-->
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<!--home-->
		<link rel='stylesheet' href='../css/home.css'>
		<!--carrucel-->
   <link rel="stylesheet" href="../css/bootstrap.min.css" >
   <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js" ></script>
			<!--crud-->
<link rel="stylesheet" href="../css/bootstrap.minc.css">
	<!--menu de imagenes-->
	    <link rel="stylesheet" href="../css/menuinicio.css"/>
	<!---home de administrador-->
<link href="../css/1.css" rel="stylesheet" type="text/css" />
<!--Estos son los estilos de la fuente personalisada-->
<link rel="stylesheet" href="../css/fontper.css">
		</head>

	<style type="text/css">
h2,h3 {
	color: #4cb6ea;
}
h4{
	color:#4c4c4c;
}
</style>


   <title>home</title>

<!--/////////////////////BANNER Y MENU//////////////////////////////////////-->
<!---->  <div class="con">
<!----><!--     Start  header Content  -->
<!---->  <img src="../img/banner_admin.png" id="img_banner"/>
<!----><!--///////////////ACAMPOS DE USUARIO Y CONTRASEÑA//////-->
<!----> <div class="icon_date">
<!---->  <p><?php
/**/    $dias = array("DOMINGO","LUNES","MARTES","MIERCOLES","JUEVES","VIERNES","SABADO");
/**/    $meses = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");
/**/    echo $dias[date('w')]." ".date('d')."/".$meses[date('n')-1]. "/".date('Y') ;
/**/	//$datenow=date("l, d F Y");
/**///echo $datenow
/**/    ?> </p></div></div>
<!---->
<!---->  </head>
<!---->  <body>
<!---->  <?php include "../includes/nav.php"; ?>
<!---->
<!---->  <?php
/**/     echo 'Bienvenido, ';
/**/     echo ''.$_SESSION['user'];'<b>';
/**/      ?>
<!---->  <body>
<!---->  <?php
/**/	  if($_SESSION['rol'] == 1){
/**/	      ?>
<!--//////////////////////////BANNER Y MENU/////////////////////////////////-->

  <body>
    <!--<h1>Truco CSS 32 :not selector</h1>-->

  <div class="gallery-container">
  <div  class="gallery-item" class="b" id="" ><a href="personal1.php"><img class="n" src="../img/u.png" width="512" height="512" /><p class="text">PERSONAL
 </p></div></a>
 <div  class="gallery-item" class="q"id=""><a href="telar_planos1.php"><img class="n" src="../img/telarplano64.png" width="512" height="512" />  <p class="text">T - PLANOS
 </p></div></a>
 <div class="gallery-item" class="q" id=""><a href="telar_proceso1.php"><img class="n" src="../img/telarplano64.png" width="512" height="512" />  <p class="text">T - EN PROCESO
 </p></div></a>
 <div  class="gallery-item" class="q" id=""><a href="telar_circular1.php"><img class="n" src="../img/telarplano64.png" width="512" height="512" />  <p class="text">T - CIRCULARES
 </p></div></a>
<div  class="gallery-item" class="b" id=""><a href="urdidor1.php"><img class="n" src="../img/urdidor.png" width="512" height="512" />  <p class="text">URDIDOR
</p></div></a>
<div  class="gallery-item" class="b" id=""><a href="plegadores1.php"><img class="n" src="../img/plegador.png" width="512" height="512" />  <p class="text">TRANSPORTE DE PLEGADORES
</p></div></a>
  <div  class="gallery-item" class="b" id=""><a href="calentadores1.php"><img class="n" src="../img/calentador.png" width="512" height="512" />  <p class="text">CALENTADORES
 </p></div></a>
  <div  class="gallery-item" class="b" id=""><a href="vaporizador.php"><img class="n" src="../img/s7.png" width="512" height="512" />  <p class="text">VAPORIZADOR
 </p></div></a>
 <div  class="gallery-item" class="b"id=""><a href="a.php"><img class="n" src="../img/71.png" width="512" height="512" />  <p class="text">ANÀLISIS
 </p></div></a>
 <div  class="gallery-item" class="q" id=""><a href="usuario.php"><img class="n" src="../img/l.png" width="512" height="512" />  <p class="text">USUARIOS
 </p></div></a>
   <div class="gallery-item" class="q" id=""><a href="6.php"><img class="n" src="../img/pdf.png" width="512" height="512" />  <p class="text">REPORTE TURNO 1
 </p></div></a>
   <div class="gallery-item" class="q" id=""><a href="7.php"><img class="n" src="../img/pdf.png" width="512" height="512" />  <p class="text">REPORTE TURNO 2
 </p></div></a>
   <div class="gallery-item" class="q" id=""><a href="8.php"><img class="n" src="../img/pdf.png" width="512" height="512" />  <p class="text">REPORTE TURNO 3
 </p></div></a>
 <div class="gallery-item" class="q" id=""><a href="base.php"><img class="n" src="../img/b.png" width="512" height="512" />  <p class="text">BASE DE DATOS
</p></div></a>



</div>
  <br>
	<br>

		<?php } ?>


<!--Empieza el contenido-->
<article>
  <?php
			if($_SESSION['rol'] ==2 || $_SESSION['rol'] ==3 || $_SESSION['rol'] ==4 || $_SESSION['rol'] ==5 || $_SESSION['rol'] ==6 || $_SESSION['rol'] ==7){
			 ?>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
    <center>       <img src="../img/71.jpg" alt="">
        </div>
            <div class="item">
      <center>      <img src="../img/1.jpg" alt="">
        </div>
        <div class="item">
      <center>      <img src="../img/2.png" alt="">
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">

    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">

    </a>
</div>

    </article><!--termina el article-->

		   <!--Empieza la section-->
     <br>

			</section>

			<section id="bienvenidos">
			<div class="contenedor">
				<h2><b>BAG CORP</b></h2>
				<p>BAG Corp es el pionero de la industria FIBC en América del Norte desde 1969. También somos el creador y proveedor exclusivo de Super Sack ® Container (el estándar de oro de la industria en especificaciones de bolsas a granel).</p>
				</div>
			</section>

			<section id="blog">
				<div class="contenedor">
					<article>
						<img src="../img/1976-test-building1.jpg">
					</article>
					<article>
						<img src="../img/1976-test-building.jpg">
					</article>

					<div class="contenedor">
			    <h3><b>(Flexible Intermediate Bulk Container)</b></h3>
				<p>Desde 1969, nadie ha entregado productos y servicios como BAG Corp. Solo BAG Corp es la fuente original y única de Super Sack® FIBC (Flexible Intermediate Bulk Container).</p>
				</div>
					<article>
						<img src="../img/fibca-member.png">
					</article>
				</div>
			</section><?php } ?>
</body>

<div class="footer">
	<!-- Empieza pie de pagina -->
	<footer>
	<h7> ©BAG CORP Integrity Delivered</h7>
		</footer>
	<!-- Empieza pie de pagina -->
</div>

</html>
