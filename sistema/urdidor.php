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
.btn_r{
	display: inline-block;
	background:#ff0101;
	color: #FFF;
	padding: 5px 25px;
	border-radius: 4px;
	margin: 20px;
}
	.ver{
	color: #1f7e00;
}

</style>
	  
   <title>Urdidor</title>
</head>
<body>
  <!--logo--><div class="logo logo_main"></div> <img src="../img/baner.png" width="100%" height="100%"/></div>

</body>

<?php include "../includes/nav.php"; ?>
<?php
echo 'Bienvenido, ';
echo ''.$_SESSION['user'];'<b>';
?>
<!--Empieza el contenido-->
<br>
<br>
		   
        <h1><center><span class="icon-doc-text-inv" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span>
<b>URDIDOR</h1></center></b>
        <hr>
        <main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

   
       <!-- Formulario de insertar -->
      <div class="card card-body">
        <form action="gu.php" method="POST">
     
          <div class="form-group">
		    <td><label><b>TURNO:</b></label></td><td>
          <input type="numeric" name="turno_u" class="form-control" placeholder="Ingrese el turno" autofocus required></input>
          </div>
			  <div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_u">
							    <option value=""></option>
								<option value="Urdidor">Urdidor</option>
								   </select></div>
					   
		  <script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="Fileta A")
                {
                   var arr=["Aire comprimido", "V??lvula de Regulaci??n corrida", "V??lvula de Regulaci??n paro"];
                }
                else if(a==="Fileta B")
                {
                var arr=["Aire comprimido", "V??lvula de Regulaci??n corrida", "V??lvula de Regulaci??n paro"];
                }
				
				
				 var a=document.getElementById("input").value;
                if(a==="Fileta C")
                {
                    var arr=["Aire comprimido", "V??lvula de Regulaci??n corrida", "V??lvula de Regulaci??n paro"];
                }
                else if(a==="Peine")
                {
                     var arr=["Motor vaiv??n", "Acorde??n", "Secci??n de peine", "Drive"];
                }
				
				 var a=document.getElementById("input").value;
                if(a==="Control")
                {
                      var arr=["Reveladores de control", "PLC", "Interruptores de Presi??n", "Falso contacto"];
                }
                else if(a==="Enfriamiento")
                {
               var arr=["Manguera Agua","Manguera aceite","Bomba enfriador","Intercambiador de calor","Agua caliente" ];
                }
					
				else if(a==="Circuito Neum??tico")
                {
           var arr=["Mangueras/Conexiones", "Fuga", "V??lvula/Mon??metro", "Motor Neum??tico" ];  
                }
                
				else if(a==="Circuito Hidr??ulico Gatos")
                {
               var arr=["Pist??n de gato 1", "Pist??n de gato 2", "Pist??n de gato 3", "Pist??n de gato 4","Pist??n de Subir/Bajar plegadores","Pist??n de Acercar/Alejar bases","V??lvula de gato 1", "V??lvula de gato 2", "V??lvula de gato 3", "V??lvula de gato 4","V??lvula de gao Subir/Bajar plegador","V??lvula de gato Acercar/Alejar bases","Manguera desgastada","Conexiones","Base con da??o de gato 1", "Base con da??o de gato 2","Base con da??o de gato 3","Base con da??o de gato 4"];
                }
				
				 var a=document.getElementById("input").value;
                if(a==="Circuito Hidr??ulico Motor")
                {
                   var arr=["Motor hidr??ulico", "Bomba Sanstrand", "Actuados Lineal","Motor actuador lineal","Switches de limite","Coplee bomba-Motor el??ctrico","Arrancador suave","Mangueras","Filtro","Drive actuador"];
                }
                else if(a==="Lubricaci??n de Plegadores")
                {
                 var arr=["Motor empapador", "Drive empapador", "Bomba de lubricante" ];
                }
				 else if(a==="Lubricaci??n Urdidor")
                {
            var arr=["Reponer aceite", "MP9", "Lubricaci??n general"];
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
                string="<select name='falla_u'>"+string+"</select>";
                document.getElementById("output").innerHTML=string;
            }
        </script>
									 
	       <div class="form-group">
		  <td><label><B>SISTEMA:</B></label></td>
							<select  id="input" name="sistema_u" onchange="random_function()">
							    <option value=""></option>
								<option value="Fileta A">Fileta A</option>
								<option value="Fileta B">Fileta B</option>
								<option value="Fileta C">Fileta C</option>
								<option value="Peine">Peine</option>
								<option value="Control">Control</option>
								<option value="Enfriamiento">Enfriamiento</option>
								<option value="Circuito Neum??tico">Circuito Neum??tico</option>
							    <option value="Circuito Hidr??ulico Gatos">Circuito Hidr??ulico Gatos</option>
								<option value="Circuito Hidr??ulico Motor">Circuito Hidr??ulico Motor</option>
								<option value="Lubricaci??n de Plegadores">Lubricaci??n de plegadores</option>
							    <option value="Lubricaci??n Urdidor">Lubricaci??n Urdidor</option>
									<option value="Trabajando">Trabajando</option>
								<option value="Otros">Otros</option>
							
							         </select></div>
									 
			
				  <td><label><B>FALLA:</B></label></td>					 
			 <div class="form-group" id="output"  name="falla_u">
							</div>
									
							
							
		 	<div class="form-group">
		  <td><label><B>REFACCI??N</B></label></td>
							<select name="refa_u">
							    <option value=""></option>
								<option value="Almac??n/Nueva">Almac??n/Nueva</option>
								<option value="Reportada/Maquina">Reportada/Maquina Extra</option>
								<option value="Acondicionada">Acondicionada</option>
								<option value="No necesaria">No necesaria</option>
							         </select></div>
			
			<div class="form-group">
		  <td><label><B>ESTADO:</B></label></td>
							<select name="estado_u">
							     <option value=""></option>
								<option value="Pendiente">	Pendiente</option>
								<option value="Terminado">Terminado</option>
							         </select></div>
									 
									 <div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_u">
							     <option value=""></option>
								<option value="El??ctrica">El??ctrica</option>
								<option value="Mec??nica">Mec??nica</option>
								<option value="El??ctrica y Mec??nica">El??ctrica y Mec??nica</option>
							         </select></div>

		   <div class="form-group">
		    <td><label><b>COMENTARIO</B></label></td><td>
            <textarea type="text" name="com_u" class="form-control" placeholder="Escriba un comentario" autofocus></textarea>
          </div>
		 	     <button class="btn btn-info btn-block"   name="gu"  value="Guardar">
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
				  <th>REFACCI??N</th>
			    <th>ESTADO</th>
				<th>TIPO DE FALLA</th>
			   <th>COMENTARIO</th>
			   <th>ACCIONES</th>
          </tr>
        </thead>
		<!--buscador-->
<form action="busc_u.php" method="get" class="form_search">
<div class="right">
<input type="text" name="busqueda" id="busqueda" placeholder="buscar por estado.." >
<button type="submit" class="search"><span class="icon-search" ></span>
</form></button></div>
<!--termina el buscador-->
<?php 
				if($_SESSION['rol'] ==2){
			 ?>
<a href="../repo/u2.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>
<?php 
				if($_SESSION['rol'] ==3){
			 ?>
<a href="../repo/u3.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>

<?php 
				if($_SESSION['rol'] ==4){
			 ?>
<a href="../repo/u4.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>
	
<!--<a href="graficas6.php" class="btn_r" ><span class="icon-cancel"> Incidencias</a></span><!--botton del pdf-->  
 <tbody>
		<br>
<!--mostrar datos en tabla-->
          <?php
//paginador 
$sql_registe= mysqli_query($conection,"SELECT COUNT(*) as total FROM urdidor WHERE DATE_FORMAT(fecha_u, '%Y-%m-%d') = CURDATE()");
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

         $query = "SELECT * FROM urdidor WHERE DATE_FORMAT(fecha_u, '%Y-%m-%d') = CURDATE() LIMIT $desde, $por_pagina";
          $result_urdidor= mysqli_query($conection, $query);    

          while($row = mysqli_fetch_assoc($result_urdidor)){ 
		  
		    $estado_color = array(
           'Terminado' => "#E7E0B2"

   ) ?>
          <tr>
            <td><?php echo $row['id_u']; ?></td>
            <td><?php echo $row['turno_u']; ?></td>
            <td><?php echo $row['fecha_u']; ?></td>
			<td><?php echo $row['equipo_u']; ?></td>
            <td><?php echo $row['sistema_u']; ?></td>
            <td><?php echo $row['falla_u']; ?></td>
			<td><?php echo $row['refa_u']; ?></td>
			<td bgcolor="<?php $estado_color[$row['estado_u']] ?>"><?php echo $row['estado_u']; ?></td>
			<td><?php echo $row['tipofalla_u'];?></td>
            <td><?php echo $row['com_u']; ?></td>
            <td>
              <a href="editeu.php?id_u=<?php echo $row['id_u']?>" class="link_edit"><h6>Editar
                <i class="icon-edit"></i> 
              </a>
			     <a href="../registros/urdidor.php"class="ver"><h6>Ver..
                <i class="icon-eye"></i> </h6>
              </a>
             
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
	     </table>
    </div>
  </div>
</main>

<!--paginador-->
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
		</div>

<?php include('../includes/footer.php'); ?>



		

  <!-- Empieza pie de pagina -->
<footer>
		
<h5>??BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
<html>
