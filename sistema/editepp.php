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

	  
   <title>Telar en Proceso</title>
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


  <h2><center><span class="fi fi-clipboard-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> ACTUALIZAR DATOS TELARES EN PROCESO </h2></center></b>
        <hr>

<?php
include("../conexion.php");
$turno_pp = '';
$telar_pp= '';
$estilo_pp = '';
$sistema_pp= '';
$falla_pp= '';
$tipofalla_pp='';
$com_pp='';
$tipotelar_pp='';


if  (isset($_GET['id_pp'])) {
  $id_pp = $_GET['id_pp'];
  $query = "SELECT * FROM telar_proceso WHERE id_pp=$id_pp";
  $result = mysqli_query($conection, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $turno_pp = $row['turno_pp'];
    $telar_pp = $row['telar_pp'];
	$estilo_pp= $row['estilo_pp'];
    $sistema_pp= $row['sistema_pp'];
    $falla_pp = $row['falla_pp'];
	$tipofalla_pp = $row['tipofalla_pp'];
	$com_pp= $row['com_pp'];
    $tipotelar_pp = $row['tipotelar_pp'];
  }
}


?>
<?php include('../includes/header.php'); ?>
<div class="container p-6">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
      <form action="editepp1.php?id_pp=<?php echo $_GET['id_pp']; ?>" method="POST">
       
	   <div class="form-group">
		    <td><label><b>	TURNO:</b></label></td><td>
          <input type="numeric" name="turno_pp" class="form-control" value="<?php echo $turno_pp;?>"></input>
        </div>
		
		
			  <div class="form-group">
		    <td><label><b>TELAR:</b></label></td><td>
          <input type="numeric"  readonly=??readonly?? name="telar_pp" class="form-control"  value="<?php echo $telar_pp;?>"></input>
          </div>
		
									 
                   							 
	  				   <div class="form-group">
		                 <td><label><b>ESTILO:</b></label></td>
							<select name="estilo_pp"  id="estilo_tp">
							   <option value=""></option>
								<option value="Arpilla" <?php if($row['estilo_pp']=='Arpilla') echo 'selected'; ?>>Arpilla</option>
								<option value="Base 6Oz" <?php if($row['estilo_pp']=='Base 5Oz') echo 'selected'; ?>>Base 5Oz</option>
								<option value="Base 6Oz" <?php if($row['estilo_pp']=='Base 6Oz') echo 'selected'; ?>>Base 6Oz</option>
								<option value="Base 8Oz" <?php if($row['estilo_pp']=='Base 8Oz') echo 'selected'; ?>>Base 8Oz</option>
								<option value="Carb??n 3Oz" <?php if($row['estilo_pp']=='carb??n 3Oz') echo 'selected'; ?>>Carb??n 3Oz</option>
								<option value="Carb??n 6Oz" <?php if($row['estilo_pp']=='Carb??n 6Oz') echo 'selected'; ?>>Carb??n 6Oz</option>
								<option value="Cotton" <?php if($row['estilo_pp']=='Cotton') echo 'selected'; ?>>Cotton</option>
								<option value="Ground Cover" <?php if($row['estilo_pp']=='Ground Cover') echo 'selected'; ?>>Ground Cover</option>
								<option value="Langostionos"<?php if($row['estilo_pp']=='Langostionos') echo 'selected'; ?>>Langostionos</option>
								<option value="Polioles 6Oz" <?php if($row['estilo_pp']=='Polioles 6Oz') echo 'selected'; ?>>Polioles 6Oz</option>
								<option value="Top" <?php if($row['estilo_pp']=='Top') echo 'selected'; ?>>Top</option>
							         </select></div>
	
		
											 
			 <div class="form-group">
		  <td><label><B>SISTEMA:</B></label></td>
							<select name="sistema_pp" id="sistema_pp">
							    <option value=""></option>
								<option value="Urdimbre" <?php if($row['sistema_pp']=='Urdimbre') echo 'selected'; ?>>Urdimbre</option>
								<option value="Trama" <?php if($row['sistema_pp']=='Trama') echo 'selected'; ?>>Trama</option>
							         </select></div>
			
		  
	 <div class="form-group">
		  <td><label><B>FALLA:</B></label></td>
							<select name="falla_pp"  id="falla_pp">
							    <option value=""></option>
								<option value="Cambio de estilo" <?php if($row['falla_pp']=='Cambio de estilo') echo 'selected'; ?>>Cambio de estilo</option>
								<option value="En espera de trama" <?php if($row['falla_pp']=='En espera de trama') echo 'selected'; ?>>En espera de trama</option>
								<option value="Fuera de programa" <?php if($row['falla_pp']=='Fuera de programa') echo 'selected'; ?>>Fuera de programa</option>
								<option value="Por atar"<?php if($row['falla_pp']=='Por atar') echo 'selected'; ?>>Por atar</option>
								<option value="Por terminar" <?php if($row['falla_pp']=='Por terminar') echo 'selected'; ?>>Por terminar</option>
							         </select></div>
		 
	 <div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_pp" required>
							     <option value=""></option>
								<option value="El??ctrica"<?php if($row['tipofalla_pp']=='El??ctrica') echo 'selected'; ?>>El??ctrica</option>
								<option value="Mec??nica"<?php if($row['tipofalla_pp']=='Mec??nica') echo 'selected'; ?>>Mec??nica</option>
								<option value="El??ctrica y Mec??nica"<?php if($row['tipofalla_pp']=='El??ctrica y Mec??nica') echo 'selected'; ?>>El??ctrica y Mec??nica</option>
							         </select></div>

	
			
			 <div class="form-group">
		    <td><label><B>COMENTARIO</B></label></td><td>
            <input type="text" name="com_pp" class="form-control" value="<?php echo $com_pp;?>"></input>
			</div>
			
			 
			  <div class="form-group">
		    <td><label><b>TIPO TELAR:</b></label></td><td>
          <input type="numeric"  readonly=??readonly?? name="tipotelar_pp" class="form-control"  value="<?php echo $tipotelar_pp;?>"></input>
          </div>
		  
        
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
  <!-- Empieza pie de pagina -->

<br></br>
<br></br>
<footer>
		
<h5> ??BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
<html>
		 
		  
									 

									 
