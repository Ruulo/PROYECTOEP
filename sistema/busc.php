<?php 
session_start();
if(empty($_SESSION['active']))
	
	?>
<?php include("../conexion.php"); ?>
<?php 
$busqueda =strtolower($_REQUEST['busqueda']);
if(empty($busqueda))
{
	header("location:calentadores.php");
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
	  
   <title>Calentadores</title>
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
        <h1><center><span class="icon-doc-text-inv" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b></span> CALENTADORES</h1></center></b>
        <hr>
        <main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <!-- Formulario de insertar -->
	  
	
	  
      <div class="card card-body">
        <form action="gc.php" method="POST">
          <!--<div class="form-group">
		    <td><label><b>ID:</b></label></td><td>
            <input type="numeric" name="id_c" class="form-control" placeholder="" autofocus required></input>
          </div>-->
          <div class="form-group">
		    <td><label><b>TURNO:</b></label></td><td>
          <input type="numeric" name="turno_c" class="form-control" placeholder="Ingrese el turno" autofocus required></input>
          </div>
		 
		  
		  	<div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_c">
							    <option value=""></option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
							         </select></div>
		  <script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="Ventiladores")
                {
                    var arr=["Ventilador lado vàlvula dañada","Ventilador lado contrario valvula dañada"];
                }
                else if(a==="Tuberìa Alimentaciòn")
                {
                    var arr=["Fuga de gas de conexiòn","Regulador de gas","Respirador"];
                }
				
				
				 var a=document.getElementById("input").value;
                if(a==="Sistema Distribuciòn de Gas")
                {
                    var arr=["Vàlvula de gas", "Quemadores", "Espreas/Tamaño de flama", "Termoposo"];
                }
                else if(a==="Extracciòn de Vapores")
                {
                    var arr=["Turbina extracciòn", "Sensor/Manguera sensor de gases", "Escape de vapores"];
                }
				
				 var a=document.getElementById("input").value;
                if(a==="Lubricaciòn")
                {
                    var arr=["MP9", "Lubricaciòn de bujes"];
                }
                else if(a==="Control")
                {
                    var arr=["Ignitor/Chispa","Sensor de flama","Sensor de temperatura de seguridad", "Tarjeta elèctrica", "Timer" ];
                }
					
	else if(a==="Trabajando")
                {
                    var arr=["Comentario" ];
                }
				
					else if(a==="Otros")
                {
                    var arr=["Comentario" ];
                }

                
                var string="";
                
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option>"+arr[i]+"</option>";
                }
                string="<select name='falla_c'>"+string+"</select>";
                document.getElementById("output").innerHTML=string;
            }
        </script>
				  <div class="form-group">
		  <td><label><b>SISTEMA:</b></label></td>
							<select id="input" name="sistema_c" onchange="random_function()" >
								 <option value=""></option>
								<option value="Ventiladores">Ventiladores</option>
								<option value="Tuberìa Alimentaciòn">Tuberìa Alimentaciòn</option>
								<option value="Sistema Distribuciòn de Gas">Sistema Distribuciòn de Gas</option>
								<option value="Extracciòn de Vapores">Extracciòn de Vapores</option>
								<option value="Lubricaciòn">Lubricaciòn</option>
								<option value="Control">Control</option>
										<option value="Trabajando">Trabajando</option>
								<option value="Otros">Otros</option>
							         </select></div>
							 
			
		    <td><label><b>FALLA:</b></label></td>	 
		 <div class="form-group" id="output"  name="falla_c">
							</div>
		  
		  
		  
		  	  
				  <div class="form-group">
		  <td><label><B>REFACCIÒN:</B></label></td>
							<select name="refa_c">
							 <option value=""></option>
								<option value="Almacèn/Nueva">Almacèn/Nueva</option>
								<option value="Reparada/Maquina Extra">Reparada/Maquina Extra</option>
								<option value="Acondicionado">Acondicionado</option>
								<option value="No necesaria">No necesaria</option>
							         </select></div>
			
				<div class="form-group">
		  <td><label><B>ESTADO:</B></label></td>
							<select name="estado_c">
							 <option value=""></option>
								<option value="Pendiente">Pendiente</option>
								<option value="Terminado">Terminado</option>
							         </select></div>
				
					 <!-- style="background-color:red;"-->
			<div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_c">
							     <option value=""></option>
								<option value="Eléctrica">Eléctrica</option>
								<option value="Mecánica">Mecánica</option>
								<option value="Eléctrica y Mecánica">Eléctrica y Mecánica</option>
							         </select></div>

			 <div class="form-group">
		    <td><label><b>COMENTARIO:</b></label></td><td>
          <textarea type="text" name="com_c" class="form-control" placeholder="Escriba un comentario" autofocus></textarea>
          </div>
									 
	  	     <button class="btn btn-info btn-block"   name="gc"  value="Guardar">
         <span class="fi fi-save"> Guardar </span> 
</button>


     <button class="btn btn-secondary btn-block"   type="reset"  value="Restaurar">
         <span class="fi fi-clipboard"> Restaurar </span> 
</button>
        </form>
      </div>

    </div>
    <div class="col-md-8">
	 <div class="table-responsive" style="overflow-x:auto; bgcolor:red">
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
				<th>ACCIONES</th>
          </tr>
        </thead>
		   	<!--buscador-->
<form action="busc.php" method="get" class="form_search">
<div class="right">
<input type="text" name="busqueda" id="busqueda" placeholder="buscar por equipo.." >
<button type="submit" class="search"><span class="icon-search" ></span>
</form></button></div>
     <!--termina el buscador-->
<?php 
				if($_SESSION['rol'] ==2){
			 ?>
<a href="../repo/c2.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>
<?php 
				if($_SESSION['rol'] ==3){
			 ?>
<a href="../repo/c3.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>

<?php 
				if($_SESSION['rol'] ==4){
			 ?>
<a href="../repo/c4.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>
	
<!--<a href="graficas5.php" class="btn_r" ><span class="icon-cancel"> Incidencias</a></span><!--botton del pdf-->  


		<br>
<!--mostrar datos en tabla-->
          <?php
//paginador 
$sql_registe= mysqli_query($conection,"SELECT COUNT(*) as total FROM calentadores WHERE equipo_c LIKE '%$busqueda%' AND DATE_FORMAT(fecha_c, '%Y-%m-%d') = CURDATE()");
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

         $query = "SELECT * FROM calentadores WHERE equipo_c LIKE '%$busqueda%' AND DATE_FORMAT(fecha_c, '%Y-%m-%d') = CURDATE() LIMIT $desde, $por_pagina";
          $result_calentadores = mysqli_query($conection, $query); 
	  	mysqli_close($conection);		  
          while($row = mysqli_fetch_assoc($result_calentadores)) 
			  { 
		  
		    $estado_color = array(
        'Terminado' => "#E7E0B2"

   ) ?>
          <tr>
            <td><?php echo $row['id_c']; ?></td>
            <td><?php echo $row['turno_c']; ?></td>
            <td><?php echo $row['fecha_c']; ?></td>
			<td><?php echo $row['equipo_c']; ?></td>
            <td><?php echo $row['sistema_c']; ?></td>
            <td><?php echo $row['falla_c']; ?></td>
			<td><?php echo $row['refa_c']; ?></td>
			<td bgcolor="<?php $estado_color[$row['estado_c']] ?>"><?php echo $row['estado_c']; ?></td>
			<td><?php echo $row['tipofalla_c'];?></td>
			<td><?php echo $row['com_c']; ?></td>
            <td>
                 <a href="editec.php?id_c=<?php echo $row['id_c']?>" class="link_edit"><h6>Editar
                <i class="icon-edit"></i> 
              </a>
                <a href="../registros/calentadores.php"class="ver">Ver..
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
