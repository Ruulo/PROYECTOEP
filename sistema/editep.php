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

	  
   <title> Transporte de Plegadores</title>
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


  <h2><center><span class="fi-clipboard-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> ACTUALIZAR DATOS DEL TRANSPORTE DE PLEGADORES</h2></center></b>
        <hr>


<?php
include("../conexion.php");
$turno_p = '';
$equipo_p= '';
$sistema_p = '';
$falla_p= '';
$refa_p= '';
$estado_p='';
$com_p='';

if  (isset($_GET['id_p'])) {
  $id_p = $_GET['id_p'];
  $query = "SELECT * FROM plegadores WHERE id_p=$id_p";
  $result = mysqli_query($conection, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $turno_p = $row['turno_p'];
    $equipo_p = $row['equipo_p'];
	$sistema_p= $row['sistema_p'];
    $falla_p= $row['falla_p'];
    $refa_p = $row['refa_p'];
	$estado_p= $row['estado_p'];
	$tipofalla_p=$row['tipofalla_p'];
    $com_p = $row['com_p'];
  }
}


?>
<?php include('../includes/header.php'); ?>
<div class="container p-6">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
      <form action="editep1.php?id_p=<?php echo $_GET['id_p']; ?>" method="POST">
        
		<div class="form-group">
		    <td><label><b>	TURNO:</b></label></td><td>
          <input type="numeric" name="turno_p" class="form-control" value="<?php echo $turno_p;?>" placeholder=""></input>
        </div>
		
		
		  <div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_p" id="equipo_p">
							    <option value=""></option>
								<option value="Transporte de Plegador 1" <?php if($row['equipo_p']==' Transporte de Plegador 1') echo 'selected'; ?>>Transporte de Plegador 1</option>
								<option  value="Transporte de Plegador 2" <?php if($row['equipo_p']=='Transporte de Plegador 2') echo 'selected'; ?>>Transporte de Plegador 2</option>
								  </select></div>
									 
									 
			<!--<script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="Llantas")
                {
                    var arr=["Llanta loca da??ada","Balero da??ado", "Llanta motriz", "Motor hidr??ulico lado llave", "Motor hidr??ulico lado contrario llave"];
                }
                else if(a==="90??")
                {
                    var arr=["Motor","Bomba hidr??ulico","Motor hidr??ulico llanta lado llave","Motor hidr??ulico llanta lado contrario llave","Mangueras hidr??ulico a motor","Conexiones","Cadenas de movimiento"];
                }
				
				
				 var a=document.getElementById("input").value;
                if(a==="Control")
                {
                    var arr=["PLC", "Relevadores", "Cableado", "Botoneras","Solenoides"];
                }
                else if(a==="Lubricaci??n")
                {
                    var arr=["Reponer aceite", "Lubricaci??n general", "MP9"];
                }
				 else if(a==="Gato/Avanza")
                {
                    var arr=["Motor", "Potenci??metro", "Mangueras", "Conexiones"];
                }
				
				 
                
                var string="";
                
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option>"+arr[i]+"</option>";
                }
                string="<select name='falla_p'>"+string+"</select>";
                document.getElementById("output").innerHTML=string;
            }
        </script>-->
		
			  <div class="form-group">
		    <td><label><b>SISTEMA:</b></label></td><td>
          <input type="numeric"  readonly=??readonly?? name="sistema_p" class="form-control"  value="<?php echo $sistema_p;?>"></input>
          </div>
		 
			
			 <div class="form-group">
		    <td><label><b>FALLA:</b></label></td><td>
          <input type="numeric"  readonly=??readonly?? name="falla_p" class="form-control"  value="<?php echo $falla_p;?>"></input>
          </div>
		  
		  
		  

				  <div class="form-group">
		  <td><label><B>REFACCI??N:</B></label></td>
							<select name="refa_p"  id="refa_p">
							       <option value=""></option>
								<option value="Almac??n/Nueva" <?php if($row['refa_p']=='Almac??n/Nueva') echo 'selected'; ?>>Almac??n/Nueva</option>
								<option value="Reparada/Maquina Extra" <?php if($row['refa_p']=='Reparada/Maquina Extra') echo 'selected'; ?>>Reparada/Maquina Extra</option>
								<option value="Acondicionado" <?php if($row['refa_p']=='Acondicionado') echo 'selected'; ?>>Acondicionado</option>
								<option value="No necesaria" <?php if($row['refa_p']=='No necesaria') echo 'selected'; ?>>No necesaria</option>
							         </select></div>
			
			<div class="form-group">
		  <td><label><B>ESTADO:</B></label></td>
							<select name="estado_p" id="estado_p">
							     <option value=""></option>
								<option value="Pendiente" <?php if($row['estado_p']=='Pendiente') echo 'selected'; ?>>Pendiente</option>
								<option value="Terminado" <?php if($row['estado_p']=='Terminado') echo 'selected'; ?>>Terminado</option>
							         </select></div>
									 
									 						 <div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_p" required>
							     <option value=""></option>
								<option value="El??ctrica"<?php if($row['tipofalla_p']=='El??ctrica') echo 'selected'; ?>>El??ctrica</option>
								<option value="Mec??nica"<?php if($row['tipofalla_p']=='Mec??nica') echo 'selected'; ?>>Mec??nica</option>
								<option value="El??ctrica y Mec??nica"<?php if($row['tipofalla_p']=='El??ctrica y Mec??nica') echo 'selected'; ?>>El??ctrica y Mec??nica</option>
							         </select></div>
			
			 <div class="form-group">
		    <td><label><B>COMENTARIO</B></label></td><td>
            <input type="text" name="com_p" class="form-control" value="<?php echo $com_p;?>" placeholder=""></input>
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
		 
		  
									 

									 
