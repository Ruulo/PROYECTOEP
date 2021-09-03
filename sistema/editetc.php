<?php 
session_start();
if(empty($_SESSION['active']))
	
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
  </head>

	  
   <title>Telares Circulares</title>
</head>
<style type="text/css">
h2{
	color:#4c4c4c;
}
</style>
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
</br>


  <h2><center><span class="fi fi-clipboard-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> ACTUALIZAR DATOS TELARES CIRCULARES</h2></center></b>
        <hr>

<?php
include("../conexion.php");
$turno_tc = '';
$equipo_tc= '';
$sistema_tc = '';
$falla_tc= '';
$refa_tc = '';
$estado_tc='';
$tipofalla_tc='';
$com_tc='';
$estilo_tc='';


if  (isset($_GET['id_tc'])) {
  $id_tc = $_GET['id_tc'];
  $query = "SELECT * FROM telar_circular WHERE id_tc=$id_tc";
  $result = mysqli_query($conection, $query);
  if (mysqli_num_rows($result) == 1) {
    $row= mysqli_fetch_array($result);
    $turno_tc = $row['turno_tc'];
    $equipo_tc = $row['equipo_tc'];
	$sistema_tc = $row['sistema_tc'];
    $falla_tc = $row['falla_tc'];
	$refa_tc=$row['refa_tc'];
    $estado_tc = $row['estado_tc'];
	$tipofalla_tc=$row['tipofalla_tc'];
	$com_tc = $row['com_tc'];
	$estilo_tc =$row['estilo_tc'];
  }
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-6">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
      <form action="editetc1.php?id_tc=<?php echo $_GET['id_tc']; ?>" method="POST">
      
	  <div class="form-group">
		    <td><label><b>TURNO:</b></label></td><td>
          <input type="numeric" name="turno_tc" class="form-control"  value="<?php echo $turno_tc;?>"></input>
          </div>
		  
		    <div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_tc" id="equipo_tc">
							    <option value=""></option>
								<option value="1" <?php if($row['estilo_tc']=='1') echo 'selected'; ?>>1</option>
								<option value="2" <?php if($row['estilo_tc']=='2') echo 'selected'; ?>>2</option>
								<option value="3" <?php if($row['estilo_tc']=='3') echo 'selected'; ?>>3</option>
							         </select></div>

		  
		<!--<script>
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
					
				else if(a==="Panel Genral")
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
        </script>-->
				  <div class="form-group">
		    <td><label><b>SISTEMA:</b></label></td><td>
          <input type="numeric"  readonly=»readonly» name="sistema_tc" class="form-control"  value="<?php echo $sistema_tc;?>"></input>
          </div>
		 
			
			 <div class="form-group">
		    <td><label><b>FALLA:</b></label></td><td>
          <input type="numeric"  readonly=»readonly» name="falla_tc" class="form-control"  value="<?php echo $falla_tc;?>"></input>
          </div>
							 
		
		  
				  <div class="form-group">
		  <td><label><b>REFACCIÒN:</b></label></td>
							<select name="refa_tc" id="refa_tc">
							      <option value=""></option>
									<option value="Almacèn/Nueva" <?php if($row['refa_tc']=='Almacèn/Nueva') echo 'selected'; ?>>Almacèn/Nueva</option>
								<option value="Reportada/Maquina" <?php if($row['refa_tc']=='Reportada/Maquina') echo 'selected'; ?>>Reportada/Maquina Extra</option>
								<option value="Acondicionada" <?php if($row['refa_tc']=='Acondicionada') echo 'selected'; ?>>Acondicionada</option>
								<option value="No necesaria" <?php if($row['refa_tc']=='No necesaria') echo 'selected'; ?>>No necesaria</option>
							         </select></div>
			
			<div class="form-group">
		  <td><label><b>ESTADO:</b></label></td>
							<select name="estado_tc" id="estado_tc">
							    <option value=""></option>
								<option value="Pendiente" <?php if($row['estado_tc']=='Pendiente') echo 'selected'; ?> >Pendiente</option>
								<option value="Terminado" <?php if($row['estado_tc']=='Terminado') echo 'selected'; ?>>Terminado</option>
							         </select></div>
									 
									 	 <div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_tc" required>
							     <option value=""></option>
								<option value="Eléctrica"<?php if($row['tipofalla_tc']=='Eléctrica') echo 'selected'; ?>>Eléctrica</option>
								<option value="Mecánica"<?php if($row['tipofalla_tc']=='Mecánica') echo 'selected'; ?>>Mecánica</option>
								<option value="Eléctrica y Mecánica"<?php if($row['tipofalla_tc']=='Eléctrica y Mecánica') echo 'selected'; ?>>Eléctrica y Mecánica</option>
								<option value="Otras" <?php if($row['tipofalla_tc']=='Otras') echo 'selected'; ?>>Otras</option>
							         </select></div>

			
			 <div class="form-group">
		    <td><label><b>COMENTARIO:</b></label></td><td>
          <input type="text" name="com_tc" class="form-control"  value="<?php echo $com_tc;?>"></input>
         </div>
		 
		 
		   	
			                <div class="form-group">
						<td><label><B>Estilo:</B></label></td>
							<select name="estilo_tc" id="estilo_tc">
							    <option value=""></option>
								<option value="1" <?php if($row['estilo_tc']=='1') echo 'selected'; ?>>1</option>
								<option value="2" <?php if($row['estilo_tc']=='2') echo 'selected'; ?>>2</option>
								<option value="3" <?php if($row['estilo_tc']=='3') echo 'selected'; ?>>3</option>
							         </select></div>
		  
     <Center>  <button class="btn btn-primary tn-lg"  name="update" >
         <span class="icon-edit"> Actualizar </span> 
</button></center>
<br>
<center><button type="button" value="Regresar" class="btn btn-secondary tn-lg" id="regresar" onclick="history.back()" >
 <span class="fi fi-arrow-left"> Regresar</span></button></center>

      </form>
      </div>
    </div>
  </div>
</div>
</div>
  <!-- Empieza pie de pagina -->
<br></br>
<footer>
		
<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
<html>
		 
		  
									 
