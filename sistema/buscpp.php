<?php 
session_start();
if(empty($_SESSION['active']))
	
	?>
<?php include("../conexion.php"); ?>
<?php 
$busqueda="";
$fecha_de="";
$fecha_a="";


if(isset($_REQUEST['busqueda']) && $_REQUEST['busqueda']=='')
{
	header("location:telar_proceso1.php");
}
if(isset($_REQUEST['fecha_de'])|| isset($_REQUEST['fecha_de']))
{
	if($_REQUEST['fecha_de']== ''|| $_REQUEST['fecha_de'] == '')
	{
		header("location:telar_proceso1.php");
}
}
		
if(!empty($_REQUEST['busqueda'])){
if(!is_numeric($_REQUEST['busqueda'])){
	header("local:telar_proceso1.pp");
}
$busqueda=strtolower($_REQUEST['busqueda']);
$where="telar_pp=$busqueda";
$buscar="busqueda=$busqueda";
}
if(!empty($_REQUEST['fecha_de']) && !empty($_REQUEST['fecha_a'])){
$fecha_de=$_REQUEST['fecha_de'];
$fecha_a=$_REQUEST['fecha_a'];
$buscar="";
if($fecha_de > $fecha_a){
	header("local:telar_proceso1.php");
}else if($fecha_de == $fecha_a){
	
	$where="fecha_pp like '$fecha_de%'";
	$buscar="fecha_de=$fecha_de&$fecha_a=$fecha_a";
}else{
	$where="fecha_pp BETWEEN '$fecha_de' AND '$fecha_a'";
	$buscar="fecha_de=$fecha_de&$fecha_a=$fecha_a";
      }
   }
?>


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
		<!--paginador-->
	 <link rel="stylesheet" href="../css/paginador.css">
  </head>

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
.eli{
	color: #f26b6b;
}
.left{
	float:left;
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
   <title>Telares en Proceso</title>
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
		  <li class='has-sub'><a href='telar_jareta1.php'><span>Telares de Jareta</span></a>
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
<!--Empieza el contenido-->
<br>
<br>
			   
        <h1><center><span class="icon-doc-text-inv" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> TELARES EN PROCESO</h1></center></b>
        <hr>
        <main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      </div>
    </div>
   <div class="col-md-31">
	 <div class="table-responsive" style="overflow-x:auto;">
	   <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>TURNO</th>
            <th>FECHA</th>
            <th>TELAR</th>
			 <th>ESTILO</th>
			 <th>SISTEMA</th>
			  <th>FALLA</th>
			  <th>TIPO DE FALLA</th>
			   <th>COMENTARIO</th>
			    <th>TIPO DE TELAR</th>
				<th>ACCIONES</th>
          </tr>
        </thead>
	 	<!--buscador-->
<form action="buscpp.php" method="get">
<div class="right">
<input type="text" name="busqueda" id="busqueda" placeholder="busca por telar.." value="<?php echo $busqueda; ?>">
<button type="submit" class="search"><span class="icon-search" ></span>
</form></button></div>

<!--<a href="npp.php" class="btn_new"><span class="icon-plus"> Nuevo Registro</a></span>-->
 	   <button class="btn btn-secondary" >
              <a href="../registros/telar_proceso.php" class=""><span class="icon-eye">Todos los registros</span> 
</button>  </a><br>
 <!--termina el buscador-->
	<br>
	
	<div class="left">
	 <form action="buscpp.php"method="get"> De:
		<input type="date" name="fecha_de" id="fecha_de" value="<?php echo $fecha_de; ?>"required> A		
		<input type="date" name="fecha_a" id="fecha_a"  value="<?php echo $fecha_a; ?>" required>
	<button type="submit" class="search"><span class="icon-search"></span></button></div>
		</form>
        <tbody>
	   <tbody>
		<br>
		<br>
<!--mostrar datos en tabla-->
       <?php
//paginador 
$sql_registe= mysqli_query($conection,"SELECT COUNT(*) as total FROM telar_proceso WHERE $where AND MONTH(fecha_pp) = MONTH(CURDATE())");
$result_register=mysqli_fetch_array($sql_registe);
$total= $result_register['total'];
echo 'Total de registros encontrados: ';
echo '<b>'.$total.'<b>';

$por_pagina=10;//numero de paginas que se dese mostrar 
if(empty($_GET['pagina']))
{
$pagina=1;
}else{
$pagina=$_GET['pagina'];
}
$desde=($pagina-1)*$por_pagina;
$total_paginas =ceil($total /$por_pagina);

         $query=mysqli_query($conection, "SELECT * FROM telar_proceso WHERE $where AND MONTH(fecha_pp) = MONTH(CURDATE()) LIMIT $desde, $por_pagina");
         mysqli_close($conection);

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)) {
					
			  $estado_color = array(
        'Cambio de estilo'=> "#E7E0B2",
		'En espera de trama'=> "#E7E0B2",
		'Fuera de programa'=> "#E7E0B2",
        'Por terminar'=> "#E7E0B2"
   ) ?>
          <tr>
            <td><?php echo $data['id_pp']; ?></td>
            <td><?php echo $data['turno_pp']; ?></td>
            <td><?php echo $data['fecha_pp']; ?></td>
			<td><?php echo $data['telar_pp']; ?></td>
            <td><?php echo $data['estilo_pp']; ?></td>
            <td><?php echo $data['sistema_pp']; ?></td>
			  <td bgcolor="<?php $estado_color[$data['falla_pp']] ?>"><?php echo $data['falla_pp']; ?></td>
			<td><?php echo $data['tipofalla_pp']; ?></td>
			<td><?php echo $data['com_pp']; ?></td>
            <td><?php echo $data['tipotelar_pp']; ?></td>
            <td>
			 <a href="acpp.php?id_pp=<?php echo $data['id_pp']?>" class="link_edit"><h6>Editar
                <i class="icon-edit"></i></h6>
				</a>
             
			   <a href="elipp.php?id_pp=<?php echo $data['id_pp']?>" class="eli"><h6>Eliminar
                <i class="icon-trash"></i></h6>
              </a>

            </td>
          </tr>
          <?php } } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<!--paginador-->
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
				<li><a href="?pagina=<?php echo 1; ?>&busqueda=<?php echo $busqueda; ?>">|<</a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>&busqueda=<?php echo $busqueda; ?>"><<</a></li>
			<?php 
				}
				for ($i=1; $i <= $total_paginas; $i++) { 
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'&busqueda='.$busqueda.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>&busqueda=<?php echo $busqueda; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?>&busqueda=<?php echo $busqueda; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div>
<?php } ?>
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
</html>