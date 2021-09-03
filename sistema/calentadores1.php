<?php
session_start();
if(empty($_SESSION['active']))

	?>
<?php include("../conexion.php"); ?>


<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
	<!--icono de la pagina web-->
	<link rel="icon"  type="image/png"  href="../img/00.png">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--Menu-->
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

   <title>Calentadores</title>
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
<!--Empieza el contenido-->
<br>
<br>
        <h1><center><span class="icon-doc-text-inv" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b></span> CALENTADORES</h1></center></b>
        <hr>
        <main class="container p-10">
  <div class="row">
    <div class="col-md-10">
      <!-- MESSAGES -->


      </div>
    </div>
    <div class="col-md-31">
	 <div class="table-responsive" style="overflow-x:auto; bgcolor:red">
      <table class="table table-striped" id="tabla">
        <thead>
          <tr>
            <th>ID</th>
            <th>TURNO</th>
            <th>FECHA</th>
            <th>EQUIPO</th>
			 <th>SISTEMA</th>
			 <th>FALLA</th>
			  <th>REFACCIÒN</th>
			   <th>ESTADO</th>
			   <th>TIPO DE FALLA</th>
			    <th>COMENTARIO</th>
				<th>ACCIONES</th>
          </tr>
        </thead>
		 	<!--buscador-->
<form action="busca.php" method="get">
<div class="right">
<input type="text" name="busqueda" id="busqueda" placeholder="busca por equipo.." >
<button type="submit" class="search"><span class="icon-search" ></span>
</form></button></div>

<br>

<!--<a href="nca.php" class="btn_new"><span class="icon-plus"> Nuevo Registro</a></span>-->
  	   <button class="btn btn-secondary">
             <a href="../registros/calentadores.php" class=""><span class="icon-eye">Todos los registros</span>
</button>  </a> <br>
<!--<a href="graficas15.php" class="btn_r" ><span class="icon-cancel"> Incidencias</a></span><!--botton del pdf-->
	 <!--termina el buscador-->
	 <br>
	 <form action="busca.php"method="get"> De:
		<input type="date" name="fecha_de" id="fecha_de" required> A
		<input type="date" name="fecha_a" id="fecha_a" required>
	<button type="submit" class="search"><span class="icon-search"></span></button>
		</form>
        <tbody>
	   <tbody>
		<br>
		<br>

<!--mostrar datos en tabla-->
          <?php
//paginador
$sql_registe= mysqli_query($conection,"SELECT COUNT(*) as total  FROM calentadores WHERE  MONTH(fecha_c) = MONTH(CURDATE())");
$result_register=mysqli_fetch_array($sql_registe);
$total= $result_register['total'];
$por_pagina= 10;//numero de paginas que se dese mostrar
if(empty($_GET['pagina']))
{
$pagina=1;
}else{
$pagina=$_GET['pagina'];
}
$desde=($pagina-1)*$por_pagina;
$total_paginas =ceil($total /$por_pagina);

         $query =mysqli_query($conection, "SELECT * FROM calentadores WHERE MONTH(fecha_c) = MONTH(CURDATE()) LIMIT $desde, $por_pagina");
         mysqli_close($conection);

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query))  {
  $estado_color = array(
        'Terminado' =>"#E7E0B2"

   ) ?>
          <tr>
            <td><?php echo $data['id_c']; ?></td>
            <td><?php echo $data['turno_c']; ?></td>
            <td><?php echo $data['fecha_c']; ?></td>
			<td><?php echo $data['equipo_c']; ?></td>
            <td><?php echo $data['sistema_c']; ?></td>
            <td><?php echo $data['falla_c']; ?></td>
			<td><?php echo $data['refa_c']; ?></td>
			<td bgcolor="<?php $estado_color[$data['estado_c']] ?>"><?php echo $data['estado_c']; ?></td>
			<td><?php echo $data['tipofalla_c']; ?></td>
			<td><?php echo $data['com_c']; ?></td>
            <td>
			 <a href="acc.php?id_c=<?php echo $data['id_c']?>" class="link_edit"><h6>Editar
                <i class="icon-edit"></i></h6>
				</a>

			  <a href="elic.php?id_c=<?php echo $data['id_c']?>" class="eli"><h6>Eliminar
                <i class="icon-trash"></i></h6>
              </a>

            </td>
          </tr>
          <?php
		  }
		   } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
	<!--Empieza paginacion-->
		<div class="paginador">
			<ul>
			<?php
				if($pagina != 1)
				{
			 ?>
				<li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
			<?php
				}
				for ($i=1; $i <= $total_paginas; $i++) {
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div><!--Termina paginacion-->

<?php include('../includes/footer.php'); ?>



  <!-- Empieza pie de pagina -->
<footer>

<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->
</body>
</html>
