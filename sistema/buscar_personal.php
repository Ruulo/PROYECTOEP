<?php 
session_start();
if(empty($_SESSION['active']))
	
	?>
<?php include("../conexion.php"); ?>

<?php 
$busqueda =strtolower($_REQUEST['busqueda']);
if(empty($busqueda))
{
	header("location:personal.php");
	mysqli_close($conection);
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
.search{
	background:#4cb6ea;
	color: #fff;
	border: none;
}
.right{
    float: right;
	}
.btn_new{
	display: inline-block;
	background:#036dff;
	color: #FFF;
	padding: 5px 25px;
	border-radius: 4px;
	margin: 20px;
}
	.ver{
	color: #1f7e00;
}

</style>
	  
   <title>Personal</title>
</head>

<body>

  <!--logo--><div class="logo logo_main"></div> <img src="../img/baner.png" width="100%" height="100%"  /></div>

</body>

<?php include "../includes/nav.php"; ?>
<?php
echo 'Bienvenido, ';
echo ''.$_SESSION['user'];'<b>';
?>
<!--Empieza el contenido-->
<br>
<br>
			  
        <h1><center><span class="fi fi-torsos-all" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> PERSONAL</h1></b></center>
        <hr>
	
        <main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <!-- Formulario de insertar -->
      <div class="card card-body">
        <form action="gpe.php" method="POST">
		
          <!--<div class="form-group">
		    <td><label><b>ID:</b></label></td><td>
            <input type="numeric" name="id_a" class="form-control" placeholder="" autofocus required></input>
          </div>-->
		  
		    <div class="form-group">
		    <td><label><B>TURNO:</B></label></td><td>
          <input type="numeric" name="turno_pe" class="form-control" placeholder="Ingrese el turno" autofocus required></input>
          </div>
		  
          <div class="form-group">
		    <td><label><B>NOMBRE:</B></label></td><td>
          <input type="text" name="nombre_pe" class="form-control" placeholder="Ingrese los nombres" autofocus></input>
          </div>
		  <div class="form-group">
		    <td><label><B>APELLIDO:</B></label></td><td>
          <input type="text" name="apellido_pe" class="form-control" placeholder="Ingrese los apellidos" autofocus></input>
          </div>
		
		  
		   <div class="form-group">
		    <td><label><B>COMENTARIO</B></label></td><td>
            <textarea type="text" name="com_pe" class="form-control" placeholder="Escriba un comentario" autofocus></textarea>
          </div>
		  
            
	     <button class="btn btn-info btn-block"   name="gpe"  value="Guardar">
         <span class="fi fi-save"> Guardar </span> 
</button>


     <button class="btn btn-secondary btn-block"   type="reset"  value="Restaurar">
         <span class="fi fi-clipboard"> Restaurar </span> 
</button>
        </form>
      </div>
    </div>
    <div class="col-md-8">
	
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
			   <th>ACCIONES</th>
		
          </tr>
        </thead>
		
		
		  	<!--buscador-->
<form action="buscar_personal.php" method="get" class="form_search">
<div class="right">
	<input type="text" name="busqueda" id="busqueda" placeholder="buscar.." value="<?php echo $busqueda; ?>">
<button type="submit" class="search"><span class="icon-search" ></span>
		</form></button></div><!--termina el buscador-->
		<!--botton pdf-->
	<?php 
				if($_SESSION['rol'] ==2){
			 ?>
<a href="../repo/per2.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>
<?php 
				if($_SESSION['rol'] ==3){
			 ?>
<a href="../repo/per3.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>

<?php 
				if($_SESSION['rol'] ==4){
			 ?>
<a href="../repo/per4.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>
	
	
        <tbody>
		<br>
<!--mostrar datos en tabla-->
<?php
//paginador 
$sql_registe=mysqli_query($conection,"SELECT COUNT(*) as total FROM personal
																		WHERE ( id_pe LIKE '%$busqueda%' OR 
																		turno_pe LIKE '%$busqueda%' OR 
																		nombre_pe LIKE '%$busqueda%' OR 
																		apellido_pe LIKE '%$busqueda%' OR
																		fecha_pe LIKE '%$busqueda%' OR
																		com_pe LIKE '%$busqueda%') 
																		AND estatus=1 AND DATE_FORMAT(fecha_pe, '%Y-%m-%d') = CURDATE() "); 
$result_register=mysqli_fetch_array($sql_registe);
$total= $result_register['total'];
echo 'Total de registros encontrados: ';
echo '<b>'.$total.'<b>';
$por_pagina= 5;//numero de paginas que se dese mostrar 
if(empty($_GET['pagina']))
{
$pagina=1;
}else{
$pagina=$_GET['pagina'];
}
$desde=($pagina-1)*$por_pagina;
$total_paginas =ceil($total /$por_pagina);

         $query = "SELECT * FROM personal 
									   WHERE 
										( id_pe LIKE '%$busqueda%' OR 
										  turno_pe LIKE '%$busqueda%' OR 
										  nombre_pe LIKE '%$busqueda%' OR 
										  apellido_pe LIKE '%$busqueda%' OR 
										fecha_pe  LIKE  '%$busqueda%' OR
  										 com_pe LIKE '%$busqueda%') 
										AND
										DATE_FORMAT(fecha_pe, '%Y-%m-%d') = CURDATE()  LIMIT $desde,$por_pagina ";
									
		$result_personal = mysqli_query($conection, $query);   
          while($row = mysqli_fetch_assoc($result_personal))  { ?>
          <tr>
            <td><?php echo $row['id_pe']; ?></td>
			<td><?php echo $row['turno_pe']; ?></td>
            <td><?php echo $row['nombre_pe']; ?></td>
            <td><?php echo $row['apellido_pe']; ?></td>
            <td><?php echo $row['fecha_pe']; ?></td>
			   <td><?php echo $row['com_pe']; ?></td>
            <td>
               <a href="editpe.php?id_pe=<?php echo $row['id_pe']?>"class="link_edit"><h6>Editar
                <i class="icon-edit"></i> 
              </a>
			   <a href="../registros/personal.php" class="ver"><h6>Ver..
                <i class="icon-eye"></i>
              </a>		  
            </td>
          </tr>
          <?php } ?>     	
        </tbody>
      </table>
    </div>
  </div>
</main>

	</table>

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

<footer>	
<h5> ??BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
</html>