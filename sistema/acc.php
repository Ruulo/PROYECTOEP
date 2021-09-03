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

	  
   <title>Calentadores</title>
</head>
<style type="text/css">
h2{
	color:#4c4c4c;
}
</style>
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


  <h2><center><span class="fi fi-clipboard-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> ACTUALIZAR DATOS DE LOS CALENTADORES</h2></center></b>
        <hr>


<?php
include("../conexion.php");
$turno_c = '';
$equipo_c='';
$sistema_c = '';
$falla_c= '';
$refa_c= '';
$estado_c='';
$tipofalla_c='';
$com_tc='';

if  (isset($_GET['id_c'])) {
  $id_c= $_GET['id_c'];
  $query = "SELECT * FROM calentadores WHERE id_c=$id_c";
  $result = mysqli_query($conection, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $turno_c = $row['turno_c'];
	$equipo_c = $row['equipo_c'];
	$sistema_c= $row['sistema_c'];
    $falla_c= $row['falla_c'];
    $refa_c = $row['refa_c'];
	$estado_c= $row['estado_c'];
	$tipofalla_c=$row['tipofalla_c'];
    $com_c = $row['com_c'];
  }
}
?>
	 
<?php include('../includes/header.php'); ?>
<div class="container p-6">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
      <form action="acc1.php?id_c=<?php echo $_GET['id_c']; ?>" method="POST">
	  
        <div class="form-group">
		    <td><label><b>	TURNO:</b></label></td><td>
          <input type="numeric" name="turno_c" class="form-control" value="<?php echo $turno_c;?>" placeholder=""></input>
        </div>
     
 
		  	<div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_c" value="<?php echo $equipo_c;?>">
							    <option value=""></option>
								<option value="5"<?php if($row['equipo_c']=='5') echo 'selected'; ?>>5</option>
								<option value="6" <?php if($row['equipo_c']=='6') echo 'selected'; ?>>6</option>
								<option value="7" <?php if($row['equipo_c']=='7') echo 'selected'; ?>>7</option>
								<option value="8" <?php if($row['equipo_c']=='8') echo 'selected'; ?>>8</option>
								<option value="9" <?php if($row['equipo_c']=='9') echo 'selected'; ?>>9</option>
								<option value="19"<?php if($row['equipo_c']=='19') echo 'selected'; ?>>19</option>
								<option value="20"<?php if($row['equipo_c']=='20') echo 'selected'; ?>>20</option>
								<option value="21"<?php if($row['equipo_c']=='21') echo 'selected'; ?>>21</option>
								<option value="22"<?php if($row['equipo_c']=='22') echo 'selected'; ?>>22</option>
							         </select></div>
		  <!--<script>
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
					

                
                var string="";
                
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option>"+arr[i]+"</option>";
                }
                string="<select name='falla_c'>"+string+"</select>";
                document.getElementById("output").innerHTML=string;
            }
        </script>-->
					 

					 <div class="form-group">
		    <td><label><b>SISTEMA:</b></label></td><td>
          <input type="numeric"  readonly=»readonly» name="sistema_c" class="form-control"  value="<?php echo $sistema_c;?>"></input>
          </div>
		 
			
			 <div class="form-group">
		    <td><label><b>FALLA:</b></label></td><td>
          <input type="numeric"  readonly=»readonly» name="falla_c" class="form-control"  value="<?php echo $falla_c;?>"></input>
          </div>
		  
		  
		  
		  
				  <div class="form-group">
		  <td><label><B>REFACCIÒN:</B></label></td>
							<select name="refa_c"  id="refa_c">
							       <option value=""></option>
								<option value="Almacèn/Nueva" <?php if($row['refa_c']=='Almacèn/Nueva') echo 'selected'; ?>>Almacèn/Nueva</option>
								<option value="Reparada/Maquina Extra" <?php if($row['refa_c']=='Reparada/Maquina Extra') echo 'selected'; ?>>Reparada/Maquina Extra</option>
								<option value="Acondicionado" <?php if($row['refa_c']=='Acondicionado') echo 'selected'; ?>>Acondicionado</option>
								<option value="No necesaria" <?php if($row['refa_c']=='No necesaria') echo 'selected'; ?>>No necesaria</option>
							         </select></div>
			
			<div class="form-group">
		  <td><label><B>ESTADO:</B></label></td>
							<select name="estado_c" id="estado_c">
							       <option value=""></option>
								<option value="Pendiente" <?php if($row['estado_c']=='Pendiente') echo 'selected'; ?>>Pendiente</option>
								<option value="Terminado" <?php if($row['estado_c']=='Terminado') echo 'selected'; ?>>Terminado</option>
							         </select></div>
									 
									 	 <div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_c" required>
							     <option value=""></option>
								<option value="Eléctrica"<?php if($row['tipofalla_c']=='Eléctrica') echo 'selected'; ?>>Eléctrica</option>
								<option value="Mecánica"<?php if($row['tipofalla_c']=='Mecánica') echo 'selected'; ?>>Mecánica</option>
								<option value="Eléctrica y Mecánica"<?php if($row['tipofalla_c']=='Eléctrica y Mecánica') echo 'selected'; ?>>Eléctrica y Mecánica</option>
							         </select></div>

			
			 <div class="form-group">
		    <td><label><B>COMENTARIO</B></label></td><td>
            <input type="text" name="com_c" class="form-control" value="<?php echo $com_c;?>" placeholder=""></input>
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
<footer>
		
<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
<html>
		 
		  
									 

									 
