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

	  
   <title>Telares Planos</title>
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


  <h2><center><span class="fi fi-clipboard-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> ACTUALIZAR DATOS TELARES PLANOS</h2></center></b>
        <hr>


<?php
include("../conexion.php");
$turno_tp = '';
$telar_tp= '';
$estilo_tp='';
$sistema_tp = '';
$falla_tp= '';
$refa_tp='';
$estado_tp = '';
$tipofalla_tp = '';
$com_tp='';
$tipotelar_tp='';



if  (isset($_GET['id_tp'])) {
  $id_tp = $_GET['id_tp'];
  $query = "SELECT * FROM telar_planos WHERE id_tp=$id_tp";
  $result = mysqli_query($conection, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $turno_tp = $row['turno_tp'];
    $telar_tp= $row['telar_tp'];
	$estilo_tp= $row['estado_tp'];
	$sistema_tp = $row['sistema_tp'];
    $falla_tp = $row['falla_tp'];
    $estado_tp = $row['estado_tp'];
	$tipofalla_tp = $row['tipofalla_tp'];
	$com_tp = $row['com_tp'];
	$tipotelar_tp=$row['tipotelar_tp'];
  }
}

?>
<?php include('../includes/header.php'); ?>
<div class="container p-6">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
      <form action="editetp1.php?id_tp=<?php echo $_GET['id_tp']; ?>" method="POST">
	  
	  <div class="form-group">
		    <td><label><b>TURNO:</b></label></td><td>
          <input type="numeric" name="turno_tp" class="form-control"  value="<?php echo $turno_tp;?>"></input>
          </div>
		 
		  
		  <div class="form-group">
		    <td><label><b>TELAR:</b></label></td><td>
          <input type="numeric"  readonly=??readonly?? name="telar_tp" class="form-control"  value="<?php echo $telar_tp;?>"></input>
          </div>
		 
								 
									 
									   <div class="form-group">
		                 <td><label><b>ESTILO:</b></label></td>
							<select name="estilo_tp"  id="estilo_tp">
							   <option value=""></option>
								<option value="3Oz Conductivo" <?php if($row['estilo_tp']=='3Oz Conductivo') echo 'selected'; ?>>3Oz Conductivo</option>
								<option value="6Oz Conductivo" <?php if($row['estilo_tp']=='6Oz Conductivo') echo 'selected'; ?>>6Oz Conductivo</option>
								<option value="ActionBac" <?php if($row['estilo_tp']=='ActionBac') echo 'selected'; ?>>ActionBac</option>
								<option value="Arpilla" <?php if($row['estilo_tp']=='Arpilla') echo 'selected'; ?>>Arpilla</option>
								<option value="Bag 3Oz" <?php if($row['estilo_tp']=='Bag 3Oz') echo 'selected'; ?>>Bag 3Oz</option>
								<option value="Base 5Oz" <?php if($row['estilo_tp']=='Base 5Oz') echo 'selected'; ?>>Base 5Oz</option>
								<option value="Base 6Oz" <?php if($row['estilo_tp']=='Base 6Oz') echo 'selected'; ?>>Base 6Oz</option>
								<option value="Base 8Oz" <?php if($row['estilo_tp']=='Base 8Oz') echo 'selected'; ?>>Base 8Oz</option>
								<option value="Carb??n 3Oz" <?php if($row['estilo_tp']=='carb??n 3Oz') echo 'selected'; ?>>Carb??n 3Oz</option>
								<option value="Carb??n 6Oz" <?php if($row['estilo_tp']=='Carb??n 6Oz') echo 'selected'; ?>>Carb??n 6Oz</option>
								<option value="Cotton" <?php if($row['estilo_tp']=='Cotton') echo 'selected'; ?>>Cotton</option>
								<option value="Ground Cover" <?php if($row['estilo_tp']=='Ground Cover') echo 'selected'; ?>>Ground Cover</option>
								<option value="Langostionos"<?php if($row['estilo_tp']=='Langostionos') echo 'selected'; ?>>Langostionos</option>
								<option value="Polioles 6Oz" <?php if($row['estilo_tp']=='Polioles 6Oz') echo 'selected'; ?>>Polioles 6Oz</option>
							    <option value="Polybac"<?php if($row['estilo_tp']=='Polybac') echo 'selected'; ?>>Polybac</option>
								<option value="Top" <?php if($row['estilo_tp']=='Top') echo 'selected'; ?>>Top</option>
								<option value="Ventilada"<?php if($row['estilo_tp']=='Ventilada') echo 'selected'; ?>>Ventilada</option>
							         </select></div>
							       
		<!--<script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="Accionamiento/Frenado de Maquina")
                {
                    var arr=["Motor Principal","Embrague", " Cinta de freno", "Barra telescopica", "Paro en falso", "Coplees de barra telescopica","Bandas","Interruptor final", "Eje de accionamiento", "Disco de angulo", ];
                }
                else if(a==="Armario de Mando")
                {
                    var arr=["PFR","BRA","MEC","WISS","PRP","EGS","PSD","PBR","PNB"];
                }
				//
					 var a=document.getElementById("input").value;
                if(a==="Dispositivo de vigilancia")
                {
                    var arr=["Intsalci??n de control", "Paraurdimbre", " Paratrama Lopfe","Paratrama mecanico"];
                }
                else if(a==="Desenrrollado de Plegadores")
                {
                    var arr=["Transmisi??n", "Ajustes del plegador", "Engrane del plegador"];
                }
				//
				
					 var a=document.getElementById("input").value;
                if(a==="Formaci??n de la Calada")
                {
             var arr=["Tiralizos", "Maquina de excentricas", "Marcos", "Maquinilla de papel picado","Comprensores", "Hilo pie","Hilos flotantes", "Buscapasadas"];
                }
                else  if(a==="Regulador de Tejido")
                {
           var arr=["Cilindro de mando", "Cabeza de cabello", "Recubrimiento", "Rodillo de presi??n", "Tela enredada", "cambio de cuenta", "Regulador de tejido"];
                }
				//
				var a=document.getElementById("input").value;
                if(a==="Alimentaci??n de Trama")
                {
               var arr=["Porta bocinas","Acumulador de trama", "Palpador de trama", "Paro de trama", "Freno de trama","Transcaladas", "Hilo trama" ];
                }
				
                else  if(a==="Disparo")
                {
               var arr=["Elevador de proyectil", "Abrigor de proyectil SU", "Pieza de expulsi??n taco", "Placa de disparo", "Dador de trama", "Riel gu??a", "Eclipsa", "Barra de torsi??n", "Tijera","Punto de disparo","Hidraulico","Eje transversal","Insercion de guia", "Transporte de retorno", "Atoramiento de proyectil"];
                }	
                //	

               var a=document.getElementById("input").value;
                if(a==="Bat??n")
                {
                  var arr=["Diente de gu??as","Cinchos", "Carter de bat??n", "Peine", "Calibraci??n de bat??n" ];
                }
				
                else   if(a==="Recepci??n")
                {
                 var arr=["Guarniciones", "Retrocesor", "Abridor de proyectil FA", "Mecanismo general", "Acoplamiento", "Cadena de transporte", "Atoramiento de proyectil", "Sensor de proyectil", "Expulsador de proyectiles"];
                }
              //
				  var a=document.getElementById("input").value;
                if(a==="Formaci??n de Orillos")
                {
                    var arr=["Remedios","Barra de mecanismo", "Orillo FA", "Hilo tim??n","Chapa", "Pinza de Orillo" , "Aguja de Orillo"];
                }
				
                else   if(a==="Sistema de Lubricaci??n")
                {
                     var arr=["Lub.Cerrojo","Lub.proyectil"];
                }
				//
				
				 var a=document.getElementById("input").value;
                 if(a==="Enrollador")
                {
                    var arr=["Rodillos","Rodillo de presi??n", "Cadena", "Motor de enrrollador", "Reductor","Sproket","Napper"];
                }
				
                else   if(a==="2 Colores")
                {
                     var arr=["Comentario"];
                }
				//
				
				 var a=document.getElementById("input").value;
                 if(a==="Calidad")
                {
                    var arr=["Comentario","contaminaci??n", "Hilo flotante","Mal repasado","Monos de la trama"];
                }
				
                else   if(a==="Otro")
                {
                     var arr=["Comentario"];
                }
				//
				
				
				
                var string="";
                
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option>"+arr[i]+"</option>";
                }
                string="<select name='falla_tp'>"+string+"</select>";
                document.getElementById("output").innerHTML=string;
            }
        </script>-->						 		
		
				  <div class="form-group">
		    <td><label><b>SISTEMA:</b></label></td><td>
          <input type="numeric"  readonly=??readonly?? name="sistema_tp" class="form-control"  value="<?php echo $sistema_tp;?>"></input>
          </div>
		 
			
			 <div class="form-group">
		    <td><label><b>FALLA:</b></label></td><td>
          <input type="numeric"  readonly=??readonly?? name="falla_tp" class="form-control"  value="<?php echo $falla_tp;?>"></input>
          </div>
		 
		  
		  
		  <div class="form-group">
		  <td><label><b>REFACCI??N:</b></label></td>
							<select name="refa_tp" id="refa_tp">
							     <option value=""></option>
								<option value="Almac??n/Nueva" <?php if($row['refa_tp']=='Almac??n/Nueva') echo 'selected'; ?>>Almac??n/Nueva</option>
								<option value="Reparada/M??quina Extra" <?php if($row['refa_tp']=='Reparada/M??quina Extra') echo 'selected'; ?>>Reparada/M??quina Extra</option>
								<option value="Acondicionado" <?php if($row['refa_tp']=='Acondicionado') echo 'selected'; ?>>Acondicionado</option>
								<option value="No necesaria" <?php if($row['refa_tp']=='No necesaria') echo 'selected'; ?>>No necesaria</option>
							         </select></div>
			
							

					
									 
			
			<div class="form-group">
		  <td><label><b>ESTADO:</b></label></td>
							<select name="estado_tp" id="estilo_tp">
							       <option value=""></option>
								<option value="Pendiente"  <?php if($row['estado_tp']=='Pendiente') echo 'selected'; ?>>Pendiente</option>
								<option value="Terminado"  <?php if($row['estado_tp']=='Terminado') echo 'selected'; ?>>Terminado</option>
							         </select></div>
	 <div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_tp" required>
							     <option value=""></option>
								<option value="El??ctrica"<?php if($row['tipofalla_tp']=='El??ctrica') echo 'selected'; ?>>El??ctrica</option>
								<option value="Mec??nica"<?php if($row['tipofalla_tp']=='Mec??nica') echo 'selected'; ?>>Mec??nica</option>
								<option value="El??ctrica y Mec??nica"<?php if($row['tipofalla_tp']=='El??ctrica y Mec??nica') echo 'selected'; ?>>El??ctrica y Mec??nica</option>
							         </select></div>

			
			
			
			 <div class="form-group">
		    <td><label><b>COMENTARIO:</b></label></td><td>
          <input type="text" name="com_tp" class="form-control"  value="<?php echo $com_tp;?>"></input>
         </div>
		 
		  <div class="form-group">
		    <td><label><b>TIPO TELAR??? BATER??A MATENIMIENTO??? BATER??A PRODUCCI??N:</b></label></td><td>
          <input type="numeric"  readonly=??readonly?? name="tipotelar_tp" class="form-control"  value="<?php echo $tipotelar_tp;?>"></input>
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
  <!-- Empieza pie de pagina -->
<br></br>
<footer>
		
<h5> ??BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
<html>
		 
		  
									 
