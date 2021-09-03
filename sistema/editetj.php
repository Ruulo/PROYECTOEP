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

	  
   <title>Telar de Jareta</title>
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


  <h2><center><span class="fi fi-clipboard-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> ACTUALIZAR DATOS TELARES DE JARETA</h2></center></b>
        <hr>


<?php
include("../conexion.php");
$turno_tj= '';
$equipo_tj= '';
$sistema_tj = '';
$falla_tj= '';
$refa_tj= '';
$estado_tj='';
$tipofalla_tj='';
$com_tj='';

if  (isset($_GET['id_tj'])) {
  $id_tj = $_GET['id_tj'];
  $query = "SELECT * FROM telar_jareta WHERE id_tj=$id_tj";
  $result = mysqli_query($conection, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $turno_tj = $row['turno_tj'];
    $equipo_tj = $row['equipo_tj'];
	$sistema_tj= $row['sistema_tj'];
    $falla_tj= $row['falla_tj'];
    $refa_tj = $row['refa_tj'];
	$estado_tj= $row['estado_tj'];
	$tipofalla_tj=$row['tipofalla_tj'];
    $com_tj = $row['com_tj'];
  }
}


?>
<?php include('../includes/header.php'); ?>
<div class="container p-6">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
      <form action="editetj1.php?id_tj=<?php echo $_GET['id_tj']; ?>" method="POST">
        <div class="form-group">
		    <td><label><b>	TURNO:</b></label></td><td>
          <input type="numeric" name="turno_tj" class="form-control" value="<?php echo $turno_tj;?>" placeholder=""></input>
        </div>
        <div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_tj" id="equipo_tj">
							      <option value=""></option>
								<option value="1" <?php if($row['equipo_tj']=='1') echo 'selected'; ?>>1</option>
								<option value="2" <?php if($row['equipo_tj']=='2') echo 'selected'; ?>>2</option>
								<option value="3" <?php if($row['equipo_tj']=='3') echo 'selected'; ?>>3</option>
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
          <input type="numeric"  readonly=»readonly» name="sistema_tj" class="form-control"  value="<?php echo $sistema_tj;?>"></input>
          </div>
		 
			
			 <div class="form-group">
		    <td><label><b>FALLA:</b></label></td><td>
          <input type="numeric"  readonly=»readonly» name="falla_tj" class="form-control"  value="<?php echo $falla_tj;?>"></input>
          </div>
							
	
	
		  
		  
		  
		  
			  <div class="form-group">
		  <td><label><b>REFACCIÒN:</b></label></td>
							<select name="refa_tj" id="refa_tj" >
							      <option value=""></option>
								<option value="Almacèn/Nueva" <?php if($row['refa_tj']=='Almacèn/Nueva') echo 'selected'; ?>>Almacèn/Nueva</option>
								<option value="Reparada/Maquina Extra" <?php if($row['refa_tj']=='Reparada/Maquina Extra') echo 'selected'; ?>>Reparada/Maquina Extra</option>
								<option value="Acondicionado" <?php if($row['refa_tj']=='Acondicionado') echo 'Acondicionado'; ?>>Acondicionado</option>
								<option value="No necesaria" <?php if($row['refa_tj']=='No necesaria') echo 'selected'; ?>>No necesaria</option>
							         </select></div>
			
			<div class="form-group">
		  <td><label><B>ESTADO:</B></label></td>
							<select name="estado_tj"  id="estado_tj">
							     <option value=""></option>
								<option value="Pendiente" <?php if($row['estado_tj']=='Pendiente') echo 'selected'; ?>>Pendiente</option>
								<option value="Terminado" <?php if($row['estado_tj']=='Terminado') echo 'selected'; ?>>Terminado</option>
							         </select></div>
									 
									  <div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_tj" required>
							     <option value=""></option>
								<option value="Eléctrica"<?php if($row['tipofalla_tj']=='Eléctrica') echo 'selected'; ?>>Eléctrica</option>
								<option value="Mecánica"<?php if($row['tipofalla_tj']=='Mecánica') echo 'selected'; ?>>Mecánica</option>
								<option value="Eléctrica y Mecánica"<?php if($row['tipofalla_tj']=='Eléctrica y Mecánica') echo 'selected'; ?>>Eléctrica y Mecánica</option>
							         </select></div>

			
			 <div class="form-group">
		    <td><label><B>COMENTARIO</B></label></td><td>
            <input type="text" name="com_tj" class="form-control" value="<?php echo $com_tj;?>" placeholder=""></input>
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
		
<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
<html>
		 
		  
									 

									 
