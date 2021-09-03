
<?php 
session_start();
if(empty($_SESSION['active']))
	
	?>
<?php include("../conexion.php"); ?>
<?php 
$busqueda =strtolower($_REQUEST['busqueda']);
if(empty($busqueda))
{
	header("location:vaporizador.php");
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
.btn_r{
	display: inline-block;
	background:#ff0101;
	color: #FFF;
	padding: 5px 25px;
	border-radius: 4px;
	margin: 20px;
}
</style>
	  
   <title>Vaporizador</title>
</head>
<body>
  <!--logo--><div class="logo logo_main"></div> <img src="../img/baner.png" width="100%" height="100%"  /></div>

</body>

<!--menu-->
<?php include "../includes/nav.php"; ?>
<?php
echo 'Bienvenido, ';
echo ''.$_SESSION['user'];'<b>';
?>
<!--Empieza el contenido-->
<br>
<br>			   
        <h1><center><span class="icon-doc-text-inv" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> VAPORIZADOR/SISTEMA GAS </h1></center></b>
        <hr>
        <main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->


      <!-- Formulario de insertar -->
      <div class="card card-body">
        <form action="gv.php" method="POST">
         
          <div class="form-group">
		    <td><label><B>TURNO:</B></label></td><td>
          <input type="numeric" name="turno_v" class="form-control" placeholder="Ingrese el turno" autofocus required></input>
          </div>
		  
		  <div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_v">
							    <option value=""></option>
								<option value="Vaporizador">Vaporizador</option>
								<option value="Suministro">Suministro</option>
							         </select></div>
									 
									 
									  <script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="Vaporizador")
                {
                    var arr=["Encendido","Apagado"];
                }
                else if(a==="Suministro")
                {
                    var arr=["Operaciòn bajo consumo","Operaciòn alto consumo"];
                }
				
				
                
                var string="";
                
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option>"+arr[i]+"</option>";
                }
                string="<select name='falla_v'>"+string+"</select>";
                document.getElementById("output").innerHTML=string;
            }
        </script>
		
			       <div class="form-group">
		  <td><label><B>SISTEMA:</B></label></td>
							<select  id="input" name="sistema_v" onchange="random_function()">
							    <option value=""></option>
								<option value="Vaporizador">Vaporizador</option>
								<option value="Suministro">Suministro</option>
							         </select></div>		 
			
							 
			 <div class="form-group" id="output"  name="falla_v">
		  <td><label><B>FALLA:</B></label></td>
							</div>
		  
		  
		   <div class="form-group">
		  <td><label><b>REFACCIÒN</B></label></td>
							<select name="refa_v">
							    <option value=""></option>
								<option value="Almacèn/Nueva">Almacèn/Nueva</option>
								<option value="Reparada/Maquina Extra">Reparada/Maquina Extra</option>
								<option value="Acondicionado">Acondicionado</option>
								<option value="No necesaria">No necesaria</option>
							         </select></div>
			
			<div class="form-group">
		  <td><label><B>ESTADO:</B></label></td>
							<select name="estado_v">
							    <option value=""></option>
								<option value="Pendiente">Pendiente</option>
								<option value="Terminado">Terminado</option>
									<option value="Terminado"></option>
							         </select></div>
			
			<div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_v">
							     <option value=""></option>
								<option value="Eléctrica">Eléctrica</option>
								<option value="Mecánica">Mecánica</option>
								<option value="Eléctrica y Mecánica">Eléctrica y Mecánica</option>
							         </select></div>

			
			<div class="form-group">
		    <td><label><B>COMENTARIO:</B></label></td><td>
          <textarea type="text" name="com_v" class="form-control" placeholder="Escribe un comentario" autofocus></textarea>
          </div>
									 
		 	     <button class="btn btn-info btn-block"   name="gv"  value="Guardar">
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
      <table class="table table-bordered">
	     <table class="table table-striped">
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
			   <th>TIPO DE FALLA </th>
			    <th>COMENTARIO</th>
				<th>ACCIONES</th>
          </tr>
        </thead>
		<!--buscador-->
<form action="buscv.php" method="get" class="form_search">
<div class="right">
<input type="text" name="busqueda" id="busqueda" placeholder="buscar por equipo.." value="<?php echo $busqueda; ?>">
<button type="submit" class="search"><span class="icon-search" ></span>
</form></button></div>
      <!--termina el buscador-->
<?php 
				if($_SESSION['rol'] ==2){
			 ?>
<a href="../repo/v2.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>
<?php 
				if($_SESSION['rol'] ==3){
			 ?>
<a href="../repo/v3.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>

<?php 
				if($_SESSION['rol'] ==4){
			 ?>
<a href="../repo/v4.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>
	

     
	   <tbody>
		<br>
<!--mostrar datos en tabla-->
         <?php
//paginador 
$sql_registe= mysqli_query($conection,"SELECT COUNT(*) as total FROM vaporizador WHERE equipo_v LIKE '%$busqueda%' AND DATE_FORMAT(fecha_v, '%Y-%m-%d') = CURDATE()");
$result_register=mysqli_fetch_array($sql_registe);
$total= $result_register['total'];
$por_pagina= 5;//numero de paginas que se dese mostrar 
if(empty($_GET['pagina']))
{
$pagina=1;
}else{
$pagina=$_GET['pagina'];
}
$desde=($pagina-1)*$por_pagina;
$total_paginas =ceil($total /$por_pagina);
echo 'Total de registros encontrados: ';
echo '<b>'.$total.'<b>';



         $query = "SELECT * FROM vaporizador WHERE equipo_v LIKE '%$busqueda%' AND DATE_FORMAT(fecha_v, '%Y-%m-%d') = CURDATE() LIMIT $desde, $por_pagina";
          $result_vaporizador = mysqli_query($conection, $query);    

          while($row = mysqli_fetch_assoc($result_vaporizador)) { 
		   $estado_color = array(
        'Terminado' => "#E7E0B2"

   ) ?>
          <tr>
            <td><?php echo $row['id_v']; ?></td>
            <td><?php echo $row['turno_v']; ?></td>
            <td><?php echo $row['fecha_v']; ?></td>
			<td><?php echo $row['equipo_v']; ?></td>
            <td><?php echo $row['sistema_v']; ?></td>
            <td><?php echo $row['falla_v']; ?></td>
			<td><?php echo $row['refa_v']; ?></td>
			<td bgcolor="<?php $estado_color[$row['estado_v']] ?>"><?php echo $row['estado_v']; ?></td>
			<td><?php echo $row['tipofalla_v']; ?></td>
			<td><?php echo $row['com_v']; ?></td>
            <td>
               <a href="editev.php?id_v=<?php echo $row['id_v']?>" class="link_edit"><h6>Editar
                <i class="icon-edit"></i> 
              </a>
			     <a href="../registros/vaporizador.php"class="ver"><h6>Ver..
                <i class="icon-eye"></i> </h6>
              </a>
             
            </td>
          </tr>
          <?php } ?>
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
<footer>
		
<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
</html>
