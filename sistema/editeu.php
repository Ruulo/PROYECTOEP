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

	  
   <title>Urdidor</title>
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


  <h2><center><span class="fi fi-clipboard-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> ACTUALIZAR DATOS DE URDIDOR</h2></center></b>
        <hr>


<?php
include("../conexion.php");
$turno_u = '';
$equipo_u= '';
$sistema_u = '';
$falla_u= '';
$refa_u= '';
$estado_u='';
$tipofalla_u='';
$com_u='';

    

if  (isset($_GET['id_u'])) {
  $id_u = $_GET['id_u'];
  $query = "SELECT * FROM urdidor WHERE id_u=$id_u";
  $result = mysqli_query($conection, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $turno_u = $row['turno_u'];
    $equipo_u = $row['equipo_u'];
	$sistema_u = $row['sistema_u'];
    $falla_u = $row['falla_u'];
	$refa_u = $row['refa_u'];
    $estado_u = $row['estado_u'];
  $tipofalla_u=$row['tipofalla_u'];
	$com_u= $row['com_u'];
  }
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-6">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
      <form action="editeu1.php?id_u=<?php echo $_GET['id_u']; ?>" method="POST">
        <div class="form-group">
	  <div class="form-group">
		          <div class="form-group">
		    <td><label><b>TURNO:</b></label></td><td>
          <input type="numeric" name="turno_u" class="form-control" value="<?php echo $turno_u;?>"></input>
          </div>
			  <div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_u" id="equipo_u">
							    <option value=""></option>
								<option value="Urdidor" <?php if($row['equipo_u']=='Urdidor') echo 'selected'; ?>>Urdidor</option>
								   </select></div>
					   
		<!--  <script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="Fileta A")
                {
                   var arr=["Aire comprimido", "Vàlvula de Regulaciòn corrida", "Vàlvula de Regulaciòn paro"];
                }
                else if(a==="Fileta B")
                {
                var arr=["Aire comprimido", "Vàlvula de Regulaciòn corrida", "Vàlvula de Regulaciòn paro"];
                }
				
				
				 var a=document.getElementById("input").value;
                if(a==="Fileta C")
                {
                    var arr=["Aire comprimido", "Vàlvula de Regulaciòn corrida", "Vàlvula de Regulaciòn paro"];
                }
                else if(a==="Peine")
                {
                     var arr=["Motor vaivèn", "Acordeòn", "Secciòn de peine", "Drive"];
                }
				
				 var a=document.getElementById("input").value;
                if(a==="Control")
                {
                      var arr=["Reveladores de control", "PLC", "Interruptores de Presiòn", "Flaso contacto"];
                }
                else if(a==="Enfriamiento")
                {
               var arr=["Manguera Agua","Manguera aceite","Bomba enfriador","Intercambiador de calor","Agua caliente" ];
                }
					
				else if(a==="Circuito Neumàtico")
                {
           var arr=["Mangueras/Conexiones", "Fuga", "Vàlvula/Monòmetro", "Motor Neumàtico" ];  
                }
                
				else if(a==="Circuito Hidràulico Gatos")
                {
               var arr=["Pistòn de gato 1", "Pistòn de gato 2", "Pistòn de gato 3", "Pistòn de gato 4","Pistòn de Subir/Bajar plegadores","Pistòn de Acercar/Alejar bases","Vàlvula de gato 1", "Vàlvula de gato 2", "Vàlvula de gato 3", "Vàlvula de gato 4","Vàlvula de gao Subir/Bajar plegador","Vàlvula de gato Acercar/Alejar bases","Manguera desgastada","Conexiones","Base con daño de gato 1", "Base con daño de gato 2","Base con daño de gato 3","Base con daño de gato 4"];
                }
				
				 var a=document.getElementById("input").value;
                if(a==="Circuito Hidràulico Motor")
                {
                   var arr=["Motor hidràulico", "Bomba Sanstrand", "Actuados Lineal","Motor actuador lineal","Switches de limite","Coplee bomba-Motor elèctrico","Arrancador suave","Mangueras","Filtro","Drive actuador"];
                }
                else if(a==="Lubricaciòn de Plegadores")
                {
                 var arr=["Motor empapador", "Drive empapador", "Bomba de lubricante" ];
                }
				 else if(a==="Lubricaciòn Urdidor")
                {
            var arr=["Reponer aceite", "MP9", "Lubricaciòn general"];
                }
				
				
				
                var string="";
                
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option>"+arr[i]+"</option>";
                }
                string="<select name='falla_u'>"+string+"</select>";
                document.getElementById("output").innerHTML=string;
            }
        </script>-->
									 
	      
									 
			
									 
			 	  <div class="form-group">
		    <td><label><b>SISTEMA:</b></label></td><td>
          <input type="numeric"  readonly=»readonly» name="sistema_u" class="form-control"  value="<?php echo $sistema_u;?>"></input>
          </div>
		 
			
			 <div class="form-group">
		    <td><label><b>FALLA:</b></label></td><td>
          <input type="numeric"  readonly=»readonly» name="falla_u" class="form-control"  value="<?php echo $falla_u;?>"></input>
          </div>
									
							
							
		 	<div class="form-group">
		  <td><label><B>REFACCIÒN</B></label></td>
							<select name="refa_u" id="refa_u">
							      <option value=""></option>
								<option value="Almacèn/Nueva" <?php if($row['refa_u']=='Almacèn/Nueva') echo 'selected'; ?>>Almacèn/Nueva</option>
								<option value="Reportada/Maquina" <?php if($row['refa_u']=='Reportada/Maquina') echo 'selected'; ?>>Reportada/Maquina Extra</option>
								<option value="Acondicionada" <?php if($row['refa_u']=='Acondicionada') echo 'selected'; ?>>Acondicionada</option>
								<option value="No necesaria" <?php if($row['refa_u']=='No necesaria') echo 'selected'; ?>>No necesaria</option>
							         </select></div>
			
			<div class="form-group">
		  <td><label><B>ESTADO:</B></label></td>
							<select name="estado_u" id="estado_u">
							    <option value=""></option>
								<option value="Pendiente" <?php if($row['estado_u']=='Pendiente') echo 'selected'; ?> >	Pendiente</option>
								<option value="Terminado" <?php if($row['estado_u']=='Terminado') echo 'selected'; ?>>Terminado</option>
							         </select></div>
									 
									 <div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_u" required>
							     <option value=""></option>
								<option value="Eléctrica"<?php if($row['tipofalla_u']=='Eléctrica') echo 'selected'; ?>>Eléctrica</option>
								<option value="Mecánica"<?php if($row['tipofalla_u']=='Mecánica') echo 'selected'; ?>>Mecánica</option>
								<option value="Eléctrica y Mecánica"<?php if($row['tipofalla_u']=='Eléctrica y Mecánica') echo 'selected'; ?>>Eléctrica y Mecánica</option>
							         </select></div>

		  
		    <div class="form-group">
		    <td><label><B>COMENTARIO:</B></label></td><td>
          <input type="text" name="com_u" class="form-control" value="<?php echo $com_u;?>" placeholder=""></input>
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
		 
		  
									 
