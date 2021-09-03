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

	  
   <title>Vaporizador</title>
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


  <h2><center><span class="fi fi-clipboard-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> ACTUALIZAR DATOS DEL VAPORIZADOR/SISTEMA GAS</h2></center></b>
        <hr>


<?php
include("../conexion.php");
$turno_v = '';
$equipo_v= '';
$sistema_v = '';
$falla_v= '';
$refa_v= '';
$estado_v='';
$tipofalla_v='';
$com_v='';

if  (isset($_GET['id_v'])) {
  $id_v = $_GET['id_v'];
  $query = "SELECT * FROM vaporizador WHERE id_v=$id_v";
  $result = mysqli_query($conection, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $turno_v = $row['turno_v'];
    $equipo_v = $row['equipo_v'];
	$sistema_v= $row['sistema_v'];
    $falla_v= $row['falla_v'];
    $refa_v = $row['refa_v'];
	$estado_v= $row['estado_v'];
	$tipofalla_v= $row['tipofalla_v'];
    $com_v = $row['com_v'];
  }
}


?>
<?php include('../includes/header.php'); ?>
<div class="container p-6">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
      <form action="editev1.php?id_v=<?php echo $_GET['id_v']; ?>" method="POST">
        <div class="form-group">
		    <td><label><b>	TURNO:</b></label></td><td>
          <input type="numeric" name="turno_v" class="form-control" value="<?php echo $turno_v;?>" placeholder=""></input>
        </div>
        <div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_v" id="equipo_v">
							    <option value=""></option>
								<option value="Vaporizador" <?php if($row['equipo_v']=='Vaporizador') echo 'selected'; ?>>Vaporizador</option>
								<option value="Suministro" <?php if($row['equipo_v']=='Suministro') echo 'selected'; ?>>Suministro</option>
							         </select></div>
									 
											 
									 <!-- <script>
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
        </script>-->
		
					  <div class="form-group">
		    <td><label><b>SISTEMA:</b></label></td><td>
          <input type="numeric"  readonly=»readonly» name="sistema_v" class="form-control"  value="<?php echo $sistema_v;?>"></input>
          </div>
		 
			
			 <div class="form-group">
		    <td><label><b>FALLA:</b></label></td><td>
          <input type="numeric"  readonly=»readonly» name="falla_v" class="form-control"  value="<?php echo $falla_v;?>"></input>
          </div>
		  
		  
		  
		  
				  <div class="form-group">
		  <td><label><B>REFACCIÒN:</B></label></td>
							<select name="refa_v" id="refa_v">
							       <option value=""></option>
								<option value="Almacèn/Nueva" <?php if($row['refa_v']=='Almacèn/Nueva') echo 'selected'; ?>>Almacèn/Nueva</option>
								<option value="Reparada/Maquina Extra" <?php if($row['refa_v']=='Reparada/Maquina Extra') echo 'selected'; ?>>Reparada/Maquina Extra</option>
								<option value="Acondicionado" <?php if($row['refa_v']=='Acondicionado') echo 'selected'; ?>>Acondicionado</option>
								<option value="No necesaria" <?php if($row['refa_v']=='No necesaria') echo 'selected'; ?>>No necesaria</option>
							         </select></div>
			
			<div class="form-group">
		  <td><label><B>ESTADO:</B></label></td>
							<select name="estado_v" id="estado_v">
							       <option value=""></option>
								<option value="Pendiente" <?php if($row['estado_v']=='Pendiente') echo 'selected'; ?>>Pendiente</option>
								<option value="Terminado" <?php if($row['estado_v']=='Terminado') echo 'selected'; ?>>Terminado</option>
							         </select></div>
					
											 <div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_v" id="tipofalla_v">
							     <option value=""></option>
								<option value="Eléctrica"<?php if($row['tipofalla_v']=='Eléctrica') echo 'selected'; ?>>Eléctrica</option>
								<option value="Mecánica"<?php if($row['tipofalla_v']=='Mecánica') echo 'selected'; ?>>Mecánica</option>
								<option value="Eléctrica y Mecánica"<?php if($row['tipofalla_v']=='Eléctrica y Mecánica') echo 'selected'; ?>>Eléctrica y Mecánica</option>
							         </select></div>
			
			  
         <div class="form-group">
		    <td><label><B>COMENTARIO:</B></label></td><td>
            <input type="text" name="com_v" class="form-control" value="<?php echo $com_v;?>" placeholder=""></input>
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
		 
		  
									 

									 
