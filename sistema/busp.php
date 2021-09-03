<?php
session_start();
if(empty($_SESSION['active']))
	?>
<?php include("../conexion.php");
////////////////////////
 ?>
<!--////VARIABLES////-->
<!----><?php
/*$busqueda="";*/
/**/$fecha_de_formateada="";
/**/$fecha_a_formateada="";
/**/////VARIABLES////-->

/*////VALIDACION DE BUSQUEDA////*/
/**/ /*if(isset($_REQUEST['busqueda']) && $_REQUEST['busqueda']=='')
 {	header("location:personal1.php");} */
/*////VALIDACION DE BUSQUEDA////*/

/*/////VALIDACION SI CUALQUIERA DE LAS FECHAS ESTA VACIA///////////////*/
/**/ if(isset($_REQUEST['fecha_de'])|| isset($_REQUEST['fecha_a']))  /**/
/**/  {                                                              /**/
/**/   if($_REQUEST['fecha_de']== ''|| $_REQUEST['fecha_a'] == '')   /**/
/**/ {                                                               /**/
/**/   header("location:personal1.php"); } }                         /**/
/*/////VALIDACION SI CUALQUIERA DE LAS FECHAS ESTA VACIA//////////////**/


/*///VALIDACION POR SI INGRESAN LETRAS EN VEZ DE NUMEROS///*/
/**//*if(!empty($_REQUEST['busqueda']))*/                   /**/
/**/ //{                                                  /**/
/**///if(!is_numeric($_REQUEST['busqueda']))              /**/
/**/// {                                                  /**/
/**/ //header("location:personal1.php");                  /**/
/**/ //}                                                  /**/
/**/ //$busqueda=strtolower($_REQUEST['busqueda']);       /**/
/**/   ////strtolower convierte mayus en minus          /**/
/**/ //$where="turno_pe=$busqueda";                       /**/
/**/ //$buscar="busqueda=$busqueda";                      /**/
/**/ //}                                                  /**/
/*//VALIDACION POR SI INGRESAN LETRS EN VEZ DE NUMEROS////*/

/*//////////// ESTO ES LO DEL FILTRO POR FECHAS//////////////////////////////////////////*/
/**/ if(!empty($_REQUEST['fecha_de']) && !empty($_REQUEST['fecha_a'])){                /**/
/**/ $fecha_de=$_REQUEST['fecha_de'];                                                  /**/
/**/ $fecha_a=$_REQUEST['fecha_a'];                                                    /**/
/**///////////formateo a como esta en MySQL, Año-Mes-Dia (yyyy-mm-dd)////////////*/    /**/
/*///En php para año es Y, para mes m y dia d, entonces el formato es Y-m-d//////*/    /**/
/**/ $fecha_de_formateada = date('Y-m-d',strtotime($fecha_de));                        /**/
/**/                      //date devuelve una cadena forateada                         /**/
/**///fecha obtenida del form, hacemos un CAST para que sea igual a la de MySQL        /**/
/**/$fecha_a_formateada = date('Y-m-d',strtotime($fecha_a));                           /**/


/**/ if($fecha_de_formateada > $fecha_a_formateada){                                   /**/

/**/ header("local:personal1.php");                                                    /**/
/**/}                                                                                  /**/
/**/else if($fecha_de_formateada == $fecha_a_formateada)                               /**/
     //si tienen la misma fecha es consulta valida                                   /**/
/**/{                                                                                  /**/
                            /**/
/**/      $where="fecha_pe LIKE '$fecha_de_formateada%'";                              /**/
           /**/
/**/ }else{                                                                            /**/
                                        /**/
/**/ 	$where="fecha_pe BETWEEN '$fecha_de_formateada'and'$fecha_a_formateada'";        /**/
/**/ 	//$buscar="fecha_de=$fecha_de_formateada&fecha_a=$fecha_a_formateada";             /**/
/**/       }                                                                           /**/
/**/   }                                                                               /**/
/**/       ?>                                                                       <!---->
<!--////////////////////////////////////////////////////////////////////////////////////-->

<!--/////////////////HEAD////////////////////-->
<!doctype html>
<html lang=''>
<head>
<meta charset='utf-8'>
	         <!--icono de la pagina web-->
<link rel="icon"  type="image/png"  href="../img/00.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<script src="../js/jquery.js"></script>
<script src="../js/myjava.js"></script>

<!--/////////////////HEAD////////////////////-->
<!--//////ESTILOS//////-->
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
</style>
<!--/////ESTILOS///////-->
<title>Personal</title>
</head>
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

<!--/////////////////////INICIO DEL MENU/////////////////////-->
<div id='cssmenu'>
<ul>
<!------------------------------------------------------------>
<?php
if($_SESSION['rol'] ==1){
?> <li><a href='home.php'><span class="fi fi-home"></span></a></li><?php } ?>
<!------------------------------------------------------------>
<?php
if($_SESSION['rol'] ==1){
?> <li><a href='personal1.php'><span class=" fi fi-torsos-all"> Personal </span></a></li><?php } ?>
<!------------------------------------------------------------>
<?php
if($_SESSION['rol'] ==1){
?> <li class='active has-sub'><a href='#'><span class="fi fi-clipboard-notes"> Telares</span></a>
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
?> <li><a href='calentadores1.php'><span class="fi fi-clipboard-notes"> Calentadores </span></a></li><?php } ?>
<!-------------------------------------------------------------------------->
<?php
if($_SESSION['rol'] ==1){
?> <li><a href='urdidor1.php'><span class="fi fi-clipboard-notes"> Urdidor </span></a></li><?php } ?>
<!--------------------------------------------------------------------------->
<?php
if($_SESSION['rol'] ==1){
?> <li><a href='plegadores1.php'><span class="fi fi-clipboard-notes"> Transporte de Plegadores </span></a></li><?php } ?>
<!------------------------------------------------------------------------->
<?php
if($_SESSION['rol'] ==1){
?> <li><a href='vaporizador1.php'><span class="fi fi-clipboard-notes"></span> Vaporizador</a></li><?php } ?>
<!------------------------------------------------------------------------->
<?php
if($_SESSION['rol'] ==1){
?> <li><a href='usuario.php'><span class="icon-user-add">USUARIOS</span></a></li><?php } ?>
<!------------------------------------------------------------------------------------------------------->
<?php
if($_SESSION['rol'] ==1){
?> <li><a href='a.php'><span class="fi fi-page-multiple"></span> ANÀLISIS</a></li><?php } ?>
<!------------------------------------------------------------->
<?php
if($_SESSION['rol'] ==1){
?> <li class='last'><a href='../salir.php'><span class="icon-logout"> cerrar sesión</span></a></li><?php } ?>
</ul>
</div>
<!--///////////////////////////TERMINA EL MENU/////////////////////////////-->
<?php
echo 'Bienvenido, ';
echo ''.$_SESSION['user'];'<b>';
?>
<!--Empieza el encabezado-->
  <h2 id="letras_personal"><center><p><span ><img src="../img/u.png" width="40px" height="40px"/><b> PERSONAL</h2></b></center></p></span>
<!--encabezado-->

<main class="container p-6">


  <div class="col-md-30">
	 <div class="table-responsive" style="overflow-x:auto;">
      <table class="table table-bordered" id="myTable">
	     <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
		      	<th>TURNO</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
			      <th>FECHA</th>
			      <th>COMENTARIO</th>
						<th>DIA REGISTRO</th>
			      <th>ACCIONES</th>
          </tr>
        </thead>


<!--/*/////////////////////LINK QUE MUESTRA TODOS LOS REGISTROS/////-->
<button class="btn btn-secondary">
<a href="../registros/personal.php" class=""><span class="icon-eye">Todos los registros</span>
</button></a>
<!--/*/////////////////////LINK QUE MUESTRA TODOS LOS REGISTROS/////-->
<br>
<br>



<!--/////BUSQUEDA X FECHAS/////-->
<form action="busp.php" method="get"> De: <!--a qui tambien tenia en action a busp.php-->
<input type="date" name="fecha_de" id="fecha_de" value="<?php echo $fecha_de_formateada; ?>"required> A
<input type="date" name="fecha_a" id="fecha_a" value="<?php echo $fecha_a_formateada; ?>" required>
<button type="submit" class="search"><span class="icon-search"></span></button>
</form>
<!--/////BUSQUEDA X FECHAS/////-->
		<br>
		<br>

<!--///////////////MUESTRA LA TABLA CON RESULTADOS //// Y //// TOTAL DE REGISTROS ENCONTRADOS///////////////-->
<!----><?php                                                                                              /**/
/**/ $sql_registe= mysqli_query($conection,"SELECT COUNT(*) as total FROM personal WHERE $where");        /**/
/**/    /*ESTA CNSULTA MUESTRA EL TOTALA DE REGISTROS ENCONTRADOS */                                      /**/
/**/ $result_register=mysqli_fetch_array($sql_registe);                                                   /**/
/**/ if($result_register)                                                                                 /**/
/**/ $total= $result_register['total'];                                                                   /**/
/**/ $por_pagina=10;//numero de paginas que se dese mostrar                                                /**/
/**/ if(empty($_GET['pagina']))                                                                           /**/
/**/ {                                                                                                    /**/
/**/ $pagina=1;                                                                                           /**/
/**/ }else{                                                                                               /**/
/**/ $pagina=$_GET['pagina'];                                                                             /**/
/**/ }                                                                                                    /**/
/**/ $desde=($pagina-1)*$por_pagina;                                                                      /**/
/**/ $total_paginas = ceil($total /$por_pagina);                                                          /**/
/**/ echo 'Total de registros encontrados: ';                                                             /**/
/**/ echo $total;                                                                                         /**/
/*////////ESTA CONSULTA MUESTRA RESULTDOS EN LA TABLA, BUSQUEDA POR TURNO O POR FECHAS////*/              /**/
/**/ $query=mysqli_query($conection,"SELECT id_pe, turno_pe,nombre_pe,apellido_pe,fecha_pe,com_pe, (ELT(WEEKDAY(fecha_pe) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS DIA_SEMANA FROM personal  WHERE $where LIMIT $desde, $por_pagina");    /**/
/**/ mysqli_close($conection);                                                                            /**/
/**/ $result = mysqli_num_rows($query);                                                                   /**/
/**/ if($result > 0){                                                                                     /**/
/**/ while ($data= mysqli_fetch_array($query)) {                                                          /**/
/**/ ?>                                                                                                <!---->
<!----> <tr>                                                                                           <!---->
<!----> <td><?php echo $data['id_pe']; ?></td> <!--datos A mostrar en la tabla de busp.php-->          <!---->
<!----> <td><?php echo $data['turno_pe']; ?></td> <!-- datos a mostrar en la tabla de busp.php-->      <!---->
<!----> <td><?php echo $data['nombre_pe']; ?></td><!-- datos a mostrar en la tabla de busp.php-->      <!---->
<!----> <td><?php echo $data['apellido_pe']; ?></td><!-- datos a mostrar en la tabla de busp.php-->    <!---->
<!----> <td><?php echo $data['fecha_pe']; ?></td><!-- datos a mostrar en la tabla de busp.php-->       <!---->
<!----> <td><?php echo $data['com_pe']; ?></td><!-- datso a mostrar en la tabla de busp.php-->         <!---->
<!----> <td><?php echo $data['DIA_SEMANA']; ?></td>
        <td>                                                                                           <!---->
<!----> <a href="acpe.php?id_pe=<?php echo $data['id_pe']?>"class="link_edit"><h6>Editar               <!---->
<!----> <i class="icon-edit"></i></h6></a>                                                             <!---->
<!----> <a href='#' onclick="preguntar(<?php echo $data['id_pe']?>)"><h6>Eliminar</a>       <!---->
<!----> <i class="icon-trash"></i></h6>    <!--a qui me quede fata completar para ver si funciona como a el del video-->
<!---->
<!---->
<!---->
<!---->                                                                                                <!---->
<!----> </td>                                                                                          <!---->
<!----> </tr>                                                                                          <!---->
<!----> <?php                                                                                             /**/
/**/     }                                                                                                /**/
/**/  }                                                                                                   /**/
/**/ ?> </table> </div> </div>





<!--////////////////////////////////////////////////////////////////////////////-->

<!--//////////////////////////////////////////////////////////////////-->
<?php
	if($total!= 0)
	{
 ?>
		<div class="paginador">
			<ul>
			<?php
				if($pagina != 1)
				{
			 ?>
				<li><a href="?pagina=<?php echo 1; ?>&<?php echo $buscar; ?>">|<</a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>&<?php echo $buscar; ?>"><<</a></li>
			<?php
				}
				for ($i=1; $i <= $total_paginas; $i++) {
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'&'.$buscar.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>&<?php echo $buscar; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?>&<?php echo $buscar; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div>
<?php } ?>
<!--/////////////////////////////////////////////////////////////////////-->
<script type="text/javascript">
					 function preguntar(id_pe)
					 {
							 if(confirm('¿Estás seguro que deseas borrar?'))
							 {
									 window.location.href = "busp.php?del="+id_pe;
							 }
					 }
			 </script>                                                                      <!---->
<!----> </main>
                                                                                 <!---->
<!--/////////////////////////////TABLA CON RESULTADOS //// Y //// TOTAL DE REGISTROS ENCONTRADOS///////////-->

<!--//////////////////////////////////////PAGINADOR/////////////////////////////////-->

<!--//////////////////////////////////////PAGINADOR/////////////////////////////////-->
<!--se termina el paginador-->
<?php include('../includes/footer.php'); ?>
<!-- Empieza pie de pagina -->
   <br>
  <br>
<footer>
<h5> ©BAG CORP Integrity Delivered</h5>
	</footer>
<!-- Empieza pie de pagina -->
</body>
<html>
