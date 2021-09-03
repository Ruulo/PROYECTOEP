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
</br>


  <h2><center><span class="fi fi-clipboard-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> ACTUALIZAR DATOS TELARES CIRCULARES</h2></center></b>
        <hr>


<?php
include("../conexion.php");
$turno_tc= '';
$equipo_tc= '';
$sistema_tc= '';
$falla_tc= '';
$refa_tc= '';
$estado_tc='';
$com_tc='';
$estilo_tc='';

if  (isset($_GET['id_tc'])) {
  $id_tc = $_GET['id_tc'];
  $query = "SELECT * FROM telar_circular WHERE id_tc=$id_tc";
  $result = mysqli_query($conection, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $turno_tc = $row['turno_tc'];
    $equipo_tc = $row['equipo_tc'];
	$sistema_tc= $row['sistema_tc'];
    $falla_tc= $row['falla_tc'];
    $refa_tc = $row['refa_tc'];
	$estado_tc= $row['estado_tc'];
    $com_tc = $row['com_tc'];
	$estilo_tc = $row['estilo_tc'];
  }
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-6">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
      <form action="actc1.php?id_tc=<?php echo $_GET['id_tc']; ?>" method="POST">
        <div class="form-group">
		    <td><label><b>	TURNO:</b></label></td><td>
          <input type="numeric" name="turno_tc" class="form-control" value="<?php echo $turno_tc;?>" placeholder=""></input>
        </div>
        <div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_tc" id="equipo_tc">
							      <option value=""></option>
								<option value="1" <?php if($row['equipo_tc']=='1') echo 'selected'; ?>>1</option>
								<option value="2" <?php if($row['equipo_tc']=='2') echo 'selected'; ?>>2</option>
								<option value="3" <?php if($row['equipo_tc']=='3') echo 'selected'; ?>>3</option>
							         </select></div>
									 
			<!--<script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="Filetas")
                {
                    var arr=["Aire comprimido","Banqueta dañada", "Aro de freno", "Resortes", "Pistòn freno","Conexiones/Manguera"];
                }
                else if(a==="Formaciòn de Calada")
                {
                    var arr=["Marcos","Malla","Guìa de marcos","Excèntricos de marcos"];
                }
				
				
				 var a=document.getElementById("input").value;
                if(a==="Tejido")
                {
                    var arr=["Aguja", "Leva de aguja", "Soporte de aguja", "Engranajes"];
                }
                else if(a==="Accionamiento/Frenado")
                {
                    var arr=["Motor principal", "Motor joy", "Botanera", "Trajeta de control","Contactador"];
                }
				
				 var a=document.getElementById("input").value;
                if(a==="Enrolladores")
                {
                    var arr=["Motor", "Inversor/Drive", "Banda", "Mecanismo de huso"];
                }
                else if(a==="Lubricaciòn")
                {
                    var arr=["Rutinas Mpq","Reposiciòn aceite" ];
                }
					
				else if(a==="Otro")
                {
                    var arr=["Comentario" ];
                }
                
                var string="";
                
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option>"+arr[i]+"</option>";
                }
                string="<select name='falla_tj'>"+string+"</select>";
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
							<select name="refa_tc" id="refa_tc" >
							      <option value=""></option>
								<option value="Almacèn/Nueva" <?php if($row['refa_tc']=='Almacèn/Nueva') echo 'selected'; ?>>Almacèn/Nueva</option>
								<option value="Reparada/Maquina Extra" <?php if($row['refa_tc']=='Reparada/Maquina Extra') echo 'selected'; ?>>Reparada/Maquina Extra</option>
								<option value="Acondicionado" <?php if($row['refa_tc']=='Acondicionado') echo 'Acondicionado'; ?>>Acondicionado</option>
								<option value="No necesaria" <?php if($row['refa_tc']=='No necesaria') echo 'selected'; ?>>No necesaria</option>
								<option value="No necesaria" <?php if($row['refa_tc']=='Otras') echo 'selected'; ?>>Otras</option>
							         </select></div>
			
			<div class="form-group">
		  <td><label><B>ESTADO:</B></label></td>
							<select name="estado_tc"  id="estado_tc">
							     <option value=""></option>
								<option value="Pendiente" <?php if($row['estado_tc']=='Pendiente') echo 'selected'; ?>>Pendiente</option>
								<option value="Terminado" <?php if($row['estado_tc']=='Terminado') echo 'selected'; ?>>Terminado</option>
							         </select></div>
			
			 <div class="form-group">
		    <td><label><B>COMENTARIO</B></label></td><td>
            <input type="text" name="com_tc" class="form-control" value="<?php echo $com_tc;?>" placeholder=""></input>
			</div>
			
			          <div class="form-group">
		  <td><label><B>ESTILO:</B></label></td>
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
  <!-- Empieza pie de pagina -->

<br></br>
<br></br>
<footer>
		
<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
</html>
		 
		  
									 

									 
