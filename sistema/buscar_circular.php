<?php 
session_start();
if(empty($_SESSION['active']))
	
	?>
<?php include("../conexion.php"); ?>
<?php 
$busqueda =strtolower($_REQUEST['busqueda']);
if(empty($busqueda))
{
	header("location:telar_circular.php");
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
.left{
	float:left;
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
	  
   <title>Telares Circular</title>
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
        <h1><center><span class="icon-doc-text-inv" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> TELARES CIRCULARES</h1></center></b>
        <hr>
        <main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

 

      <!-- Formulario de insertar -->

      <div class="card card-body">
	  
        <form action="gtc.php" method="POST">
           <!--  <div class="form-group">
		 <td><label><b>ID:</b> </label></td><td>
            <input type="numeric" name="id_tc" class="form-control" placeholder="" autofocus required></input>
          </div>-->
          <div class="form-group">
		    <td><label><b>TURNO:</B></label></td><td>
          <input type="numeric" name="turno_tc" class="form-control" placeholder="Ingrese el turno" autofocus required></input>
          </div>
		  
		  <div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_tc">
							 <option value=""></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							         </select></div>
  <script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="Filetas")
                {
                    var arr=["Bujes","Arañas/Circulos", "Tubo", "Manguera", "Completor"];
                }
                else if(a==="Rodillo Arrastre Hilos")
                {
                    var arr=["Catarina","Cadena","Motor","Cambio Paràmetro"];
                }
				
				
				 var a=document.getElementById("input").value;
                if(a==="Formaciòn Tejido")
                {
                    var arr=["Lanzadores", "Rodillo empuje", "Agujas", "Cambio estilo", "Ajuste tijera", "Expansores", "Limpieza", "Jinetes", "Botoneras", "Motor Principla", "Otro"];
                }
                else if(a==="Rodillo Arrastre Tela")
                {
                    var arr=["Cadena", "Sprocket", "Sensor de Velocidad", "Motor"];
                }
				
				 var a=document.getElementById("input").value;
                if(a==="Enrollador")
                {
                    var arr=["Recubrimiento", "Motor", "Cadena", "Sprocket"];
                }
                else if(a==="Lubricaciòn")
                {
                    var arr=["Rutinas MP9","Reposiciòn aceite deposito" ];
                }
					
				else if(a==="Panel general")
                {
                    var arr=["Rutinas MP9", "Cambio paràmetros", "Ajuste de cuenta" ];
                }
                
				else if(a==="Trabajando")
                {
                    var arr=["Comentario" ];
                }
                var string="";
                
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option>"+arr[i]+"</option>";
                }
                string="<select name='falla_tc'>"+string+"</select>";
                document.getElementById("output").innerHTML=string;
            }
        </script>
									 
	       <div class="form-group">
		  <td><label><B>SISTEMA:</B></label></td>
							<select  id="input" name="sistema_tc" onchange="random_function()">
							    <option value=""></option>
								<option value="Filetas">Filetas</option>
								<option value="Rodillo Arrastre Hilos">Rodillo Arrastre Hilos</option>
								<option value="Formaciòn Tejido">Formaciòn Tejido</option>
								<option value="Rodillo Arrastre Tela">Rodillo Arrastre Tela</option>
								<option value="Enrollador">Enrollador</option>
								<option value="Lubricaciòn">Lubricaciòn</option>
							    <option value="Panel general">Panel general</option>
								<option value="Trabajando">Trabajando</option>
								<option value="Otros">Otros</option>
							         </select></div>
									 
			
				  <td><label><b>FALLA:</b></label></td>	 					 
			 <div class="form-group" id="output"  name="falla_tc">
							</div>
									 
					             <div class="form-group">
		                        <td><label><B>REFACCIÒN</B></label></td>
							    <select name="refa_tc">
							    <option value=""></option>
								<option value="Almacèn/Nueva">Almacèn/Nueva</option>
								<option value="Reportada/Maquina">Reportada/Maquina Extra</option>
								<option value="Acondicionada">Acondicionada</option>
								<option value="No necesaria">No necesaria</option>
								
							         </select></div>
			
			<div class="form-group">
		  <td><label><B>ESTADO:</B></label></td>
							<select name="estado_tc">
							    <option value=""></option>
								<option value="Pendiente">	Pendiente</option>
								<option value="Terminado">Terminado</option>
							         </select></div>
									 
									 
									 <div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_tc">
							     <option value=""></option>
								<option value="Eléctrica">Eléctrica</option>
								<option value="Mecánica">Mecánica</option>
								<option value="Eléctrica y Mecánica">Eléctrica y Mecánica</option>
									<option value="Otras">Otras</option>
							         </select></div>

		  
		  <div class="form-group">
		    <td><label><B>COMENTARIO:</B></label></td><td>
            <textarea type="text" name="com_tc" class="form-control" placeholder="Escribe un comentario" autofocus></textarea>
          </div>
		                  	 <div class="form-group">
						<td><label><B>Estilo:</B></label></td>
							<select name="estilo_tc">
							 <option value=""></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							         </select></div>
		  
        	     <button class="btn btn-info btn-block"   name="gtc"  value="Guardar">
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
			  <th>TIPO DE FALLA</th>
			   <th>COMENTARIO</th>
			    <th>ESTILO</th>
				<th>ACCIONES</th>
          </tr>
        </thead>
							<!--buscador-->
<form action="buscar_circular.php" method="get" class="form_search">
<div class="right">
<center><input type="text" name="busqueda" id="busqueda" placeholder="buscar por equipo.."  value="<?php echo $busqueda; ?>">
<button type="submit" class="search"><span class="icon-search" ></span>
</form></button></div>
<!--se termina el buscador-->
<?php 
				if($_SESSION['rol'] ==2){
			 ?>
<a href="../repo/tc2.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>
<?php 
				if($_SESSION['rol'] ==3){
			 ?>
<a href="../repo/tc3.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>

<?php 
				if($_SESSION['rol'] ==4){
			 ?>
<a href="../repo/tc4.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>
	
<!--<a href="graficas3.php" class="btn_r" ><span class="icon-cancel"> Incidencias</a></span><!--botton del pdf-->

	  <tbody>
	<br>
<!--mostrar datos en tabla-->
         <?php
//paginador 
$sql_registe= mysqli_query($conection,"SELECT COUNT(*) as total FROM telar_circular WHERE  equipo_tc LIKE '%$busqueda%' AND DATE_FORMAT(fecha_tc, '%Y-%m-%d') = CURDATE()");
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

         $query = "SELECT * FROM telar_circular WHERE  equipo_tc LIKE '%$busqueda%' AND DATE_FORMAT(fecha_tc, '%Y-%m-%d') = CURDATE() LIMIT $desde, $por_pagina";
          $result_telar_circular = mysqli_query($conection, $query);    

          while($row = mysqli_fetch_assoc($result_telar_circular)) 
			  {
  $estado_color = array(
        'Terminado' => "#E7E0B2"

   ) ?>	
          <tr>
            <td><?php echo $row['id_tc']; ?></td>
            <td><?php echo $row['turno_tc']; ?></td>
            <td><?php echo $row['fecha_tc']; ?></td>
			<td><?php echo $row['equipo_tc']; ?></td>
            <td><?php echo $row['sistema_tc']; ?></td>
            <td><?php echo $row['falla_tc']; ?></td>
			<td><?php echo $row['refa_tc']; ?></td>
			<td bgcolor="<?php $estado_color[$row['estado_tc']] ?>"><?php echo $row['estado_tc']; ?></td>
            <td><?php echo $row['tipofalla_tc']; ?></td>
			<td><?php echo $row['com_tc']; ?></td>
			 <td><?php echo $row['estilo_tc']; ?></td>
            <td>
			
                <a href="editetc.php?id_tc=<?php echo $row['id_tc']?>" class="link_edit"><h6>Editar
                <i class="icon-edit"></i> 
              </a>
			     <a href="../registros/telar_circular.php" class="ver"><h6>Ver..
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
