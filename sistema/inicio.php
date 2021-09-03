<?php session_start(); ?>

<!doctype html>
<html lang=''>
<!--/////////////////////////////////INICIO HEAD////////////////////////// -->
<!--//// --><head>
<!--//// --> <meta charset='utf-8'>
<!--///// --><link rel="icon"  type="image/png"  href="../img/00.png">	<!--icono de la pagina web-->
<!--//// --><meta name="viewport" content="width=device-width, initial-scale=1">
<!--//// --> <link rel="stylesheet" href="../css/menu.css">
<!--//// --><script src="../js/jquery-latest.min.js" type="text/javascript"></script>
<!--//// --><script src="../js/script.js"></script>
<!--iconos-->
<!--//// --><link rel='stylesheet' href='../css/fontello.css'>
<!--//// --><link rel='stylesheet' href='../css/foundation-icons.css'>
<!--css de footer-->
<!--///// --><link rel="stylesheet" type="text/css" href="../css/footer.css">
<!--crud-->
<!--//// --><link rel="stylesheet" href="css/bootstrap.minc.css">
<!--///// --> <link rel="stylesheet" href="css/all.css">
<!--imagenes-->
<!--//// --> <link rel="stylesheet" href="css/styles.css"/>
<!--//// -->  </head>
<!--///////////////////////////////////FINAL DEL HEAD////////////////////////// -->
<title>ADMINISTRADOR</title>
</head>
<body>
  <!--logo--><div class="logo logo_main"></div> <img src="../img/baner.png" width="100%" height="100%"/></div>
</body>

<!--menu-->
<div id='cssmenu'>
<ul>
  <!-- <li><a href='../home.html'><span class=" fi fi-home"></span></span></a></li>
   <li><a href='empleados.php'><span class=" fi fi-torsos-all">Empleados</span></span></a></li>
   <li class='active has-sub'><a href='#'><span class="fi fi-clipboard-notes"> Telares</span></a>
      <ul>
	   <li class='has-sub'><a href='telar_planos.php'><span>Telares Planos</span></a>
         </li>
         <li class='has-sub'><a href='telar_circular.php'><span>Telares Circulares</span></a>
         </li>
         <li class='has-sub'><a href='telar_jareta.php'><span>Telares de Jareta</span></a>
         </li>
		  <li class='has-sub'><a href='telar_proceso.php'><span>Telares en proceso</span></a>
         </li>
      </ul>
   </li>
      <li><a href='calentadores.php'><span class="fi fi-clipboard-notes"> Calentadores </span></a></li>
	     <li><a href='urdidor.php'><span class="fi fi-clipboard-notes"> Urdidor </span></a></li>
		    <li><a href='plegadores.php'><span class="fi fi-clipboard-notes"> Transporte de Plegadores </span></a></li>
			   <li><a href='vaporizador.php'><span class="fi fi-clipboard-notes"></span> Vaporizador</a></li>
				  <li class='active has-sub'><a href='#'><span class="fi fi-page-multiple"> Reportes</span></a>
      <ul>
         <li class='has-sub'><a href='pdf.php'><span class="icon-file-pdf">Pdf</span></a>
         </li>
         <li class='has-sub'><a href='graficas.php'><span class="fi fi-graph-trend"> Gráfica</span></a>
         </li>
      </ul>
   </li>
   <li class='last'><a href='contacto.php'><span class="icon-mail"> Contacto</span></a></li>-->
      <li class='last'><a href='../salir.php'><span class="icon-logout">cerrar sesión</span></a></li>
</ul>
</div><!--termina el menu-->
<!--Empieza el contenido-->

<?php
echo 'Bienvenido, ';
echo ''.$_SESSION['user'];'<b>';
?>
<br>
</br>
  <body>
    <!--<h1>Truco CSS 32 :not selector</h1>-->
    <div class="gallery-container">
    <a href='empleados.php'>  <div class="gallery-item"><img src="img/1m.jpg"/></a></div>
     <a href='personal.php'>  <div class="gallery-item"><img src="img/2M.jpg"/></a></div>
      <a href='telar_planos.php'> <div class="gallery-item"><img src="img/3M.jpg"/></a></div>
       <a href='telar_circular.php'><div class="gallery-item"><img src="img/4M.jpg"/></a></div>
      <a href='telar_jareta.php'> <div class="gallery-item"><img src="img/5M.jpg"/></a></div>
      <a href='telar_proceso.php'> <div class="gallery-item"><img src="img/6M.jpg"/></a></div>
       <a href='calentadores.php'><div class="gallery-item"><img src="img/7M.jpg"/></a></div>
       <a href='urdidor.php'><div class="gallery-item"><img src="img/8M.jpg"/></a></div>
       <a href='plegadores.php'><div class="gallery-item"><img src="img/9M.jpg"/></a></div>
       <a href='vaporizador.php'><div class="gallery-item"><img src="img/10M.jpg"/></a></div>
       <a href='pdf.php'><div class="gallery-item"><img src="img/11M.jpg"/></a></div>
       <a href='graficas.php'><div class="gallery-item"><img src="img/12M.jpg"/></a></div>
	   <a href='contacto.php'><div class="gallery-item"><img src="img/13M.jpg"/></a></div>
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
