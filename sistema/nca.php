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
		<!--paginador-->
	 <link rel="stylesheet" href="../css/paginador.css">
  </head>
  <!--cerrar mensajes-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<style type="text/css">
h2{
	color:#4c4c4c;
}
.btn_new{
	display: inline-block;
	background:#4cb6ea;
	color: #FFF;
	padding: 5px 25px;
	border-radius: 4px;
	margin: 20px;
}
</style>
	  
   <title>Calentadores</title>
</head>
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
<br>	   
        <h2><center><span class="fi-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b></span> REGISTRO CALENTADORES</h2></center></b>
        <hr>
        <main class="container p-5">
  <div class="row">
    <div class="col-md-5 mx-auto">
      <!-- MESSAGES -->

  
	  
	

      <!-- Formulario de insertar -->
	
<div class="card card-body">
        <form action="ngc.php" method="POST">
         
          <div class="form-group">
		    <td><label><b>TURNO:</b></label></td><td>
          <input type="numeric" name="turno_c" class="form-control" placeholder="Ingrese el turno" autofocus></input>
          </div>
		 
		  
		  	<div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_c">
							    <option value=""></option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
							         </select></div>
		  <script>
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
                string="<select name='falla_c'>"+string+"</select>";
                document.getElementById("output").innerHTML=string;
            }
        </script>
				  <div class="form-group">
		  <td><label><b>SISTEMA:</b></label></td>
							<select id="input" name="sistema_c" onchange="random_function()">
								 <option value=""></option>
								<option value="Ventiladores">Ventiladores</option>
								<option value="Tuberìa Alimentaciòn">Tuberìa Alimentaciòn</option>
								<option value="Sistema Distribuciòn de Gas">Sistema Distribuciòn de Gas</option>
								<option value="Extracciòn de Vapores">Extracciòn de Vapores</option>
								<option value="Lubricaciòn">Lubricaciòn</option>
								<option value="Control">Control</option>
								<option value="Trabajando">Trabajando</option>
								<option value="Otros">Otros</option>
							         </select></div>
							 
			
		    <td><label><b>FALLA:</b></label></td>	 
		 <div class="form-group" id="output"  name="falla_c">
							</div>
		  
		  
		  
		  	  
				  <div class="form-group">
		  <td><label><B>REFACCIÒN:</B></label></td>
							<select name="refa_c">
							 <option value=""></option>
								<option value="Almacèn/Nueva">Almacèn/Nueva</option>
								<option value="Reparada/Maquina Extra">Reparada/Maquina Extra</option>
								<option value="Acondicionado">Acondicionado</option>
								<option value="No necesaria">No necesaria</option>
							         </select></div>
			
				<div class="form-group">
		  <td><label><B>ESTADO:</B></label></td>
							<select name="estado_c">
							 <option value=""></option>
								<option value="Pendiente">Pendiente</option>
								<option value="Terminado">Terminado</option>
							         </select></div>
					
			<div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_c">
							     <option value=""></option>
								<option value="Eléctrica">Eléctrica</option>
								<option value="Mecánica">Mecánica</option>
								<option value="Eléctrica y Mecánica">Eléctrica y Mecánica</option>
							         </select></div>

			
			
			 <div class="form-group">
		    <td><label><b>COMENTARIO:</b></label></td><td>
          <textarea type="text" name="com_c" class="form-control" placeholder="Escribe un comentario" autofocus></textarea>
		  </div>
<center><button class="btn btn-primary"   name="ngc"  value="Guardar"><span class="fi fi-save">  Guardar </span></button>
</center>
<br>
 <center><button type="button" value="Regresar" class="btn btn-secondary " id="regresar" onclick="history.back()" >
 <span class="fi fi-arrow-left">  Regresar</span></button></center>
        </form>
      </div>
    </div>
        </tbody>
      </table>
    </div>
  </div>
</main>
<!--paginador-->

</div>


<?php include('../includes/footer.php'); ?>

		

  <!-- Empieza pie de pagina -->

<footer>
		
<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
<html>
