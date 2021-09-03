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
	  
   <title>Telares Circulares</title>
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
        <h2><center><span class="fi-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b></span> REGISTRO TELARES CIRCULARES</h2></center></b>
        <hr>
        <main class="container p-5">
  <div class="row">
    <div class="col-md-5 mx-auto">
      <!-- MESSAGES -->

  
	  
	

      <!-- Formulario de insertar -->
	
<div class="card card-body">
        <form action="ngtc.php" method="POST">
         
     <div class="form-group">
		    <td><label><b>TURNO:</B></label></td><td>
          <input type="numeric" name="turno_tc" class="form-control" placeholder="Ingrese el turno" autofocus required></input>
          </div>
		  
		  <div class="form-group">
		  <td><label><B>EQUIPO:</B></label></td>
							<select name="equipo_tc">
							 <option value=""></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							         </select></div>
  <script>
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
					
				else if(a==="Panel general")
                {
                    var arr=["Rutinas MP9", "Cambio paràmetros", "Ajuste de cuenta" ];
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
                string="<select name='falla_tc'>"+string+"</select>";
                document.getElementById("output").innerHTML=string;
            }
        </script>
									 
	       <div class="form-group">
		  <td><label><B>SISTEMA:</B></label></td>
							<select  id="input" name="sistema_tc" onchange="random_function()">
							    <option value=""></option>
								<option value="Filetas">Filetas</option>
								<option value="Rodillo Arrastre Hilos">Rodillo Arrastre Hilos</option>
								<option value="Formaciòn Tejido">Formaciòn Tejido</option>
								<option value="Rodillo Arrastre Tela">Rodillo Arrastre Tela</option>
								<option value="Enrollador">Enrollador</option>
								<option value="Lubricaciòn">Lubricaciòn</option>
							    <option value="Panel general">Panel general</option>
								<option value="Trabajando">Trabajando</option>
									<option value="Otros">Otros</option>
								
							         </select></div>
									 
			
				  <td><label><b>FALLA:</b></label></td>	 					 
			 <div class="form-group" id="output"  name="falla_tc">
							</div>
									 
					             <div class="form-group">
		                        <td><label><B>REFACCIÒN</B></label></td>
							    <select name="refa_tc">
							    <option value=""></option>
								<option value="Almacèn/Nueva">Almacèn/Nueva</option>
								<option value="Reportada/Maquina">Reportada/Maquina Extra</option>
								<option value="Acondicionada">Acondicionada</option>
								<option value="No necesaria">No necesaria</option>
								<option value="Otras">Otras</option>
							         </select></div>
			
			<div class="form-group">
		  <td><label><B>ESTADO:</B></label></td>
							<select name="estado_tc">
							    <option value=""></option>
								<option value="Pendiente">	Pendiente</option>
								<option value="Terminado">Terminado</option>
							         </select></div>
									 
									 <div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_tc">
							     <option value=""></option>
								<option value="Eléctrica">Eléctrica</option>
								<option value="Mecánica">Mecánica</option>
								<option value="Eléctrica y Mecánica">Eléctrica y Mecánica</option>
								<option value="Otras">Otras</option>
							         </select></div>

		  
		  <div class="form-group">
		    <td><label><B>COMENTARIO:</B></label></td><td>
            <textarea type="text" name="com_tc" class="form-control" placeholder="Escribe un comentario" autofocus></textarea>
          </div>
		                  	 <div class="form-group">
						<td><label><B>Estilo:</B></label></td>
							<select name="estilo_tc">
							 <option value=""></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							         </select></div>
		  
        	  <center>   <button class="btn btn-primary"   name="ngtc"  value="Guardar">
         <span class="fi fi-save"> Guardar </span> 
</button></center>
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



		

  <!-- Empieza pie de pagina -->

<footer>
		
<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
</html>
