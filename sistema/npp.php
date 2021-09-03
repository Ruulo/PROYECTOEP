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
	  
   <title>Telares en proceso</title>
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
        <h2><center><span class="fi-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b></span> REGISTRO TELARES EN PROCESO</h2></center></b>
        <hr>
        <main class="container p-5">
  <div class="row">
    <div class="col-md-5 mx-auto">
      <!-- MESSAGES -->

  
	  
	

      <!-- Formulario de insertar -->
	
<div class="card card-body">
        <form action="ngpp.php" method="POST">
         
         <div class="form-group">
		    <td><label><B>TURNO:</B> </label></td><td>
          <input type="numeric" name="turno_pp" class="form-control" placeholder="Ingrese el turno" autofocus required></input>
          </div>
		 
		   	<div class="form-group">
		  <td><label><b>TELAR:  </b></label></td>
						<select name="telar_pp" id="Input" onchange="Random_FUuNCTION()">
							    <option value=""></option>
								<option value="100">100</option>
								<option value="101">101</option>
								<option value="102">102</option>
								<option value="103">103</option>
								<option value="104">104</option>
								<option value="105">105</option>
								<option value="106">106</option>
								<option value="107">107</option>
								<option value="108">108</option>
								<option value="109">109</option>
								<option value="110">110</option>
								<option value="200">200</option>
								<option value="201">201</option>
								<option value="202">202</option>
								<option value="203">203</option>
								<option value="204">204</option>
								<option value="205">205</option>
								<option value="206">206</option>
								<option value="207">207</option>
								<option value="208">208</option>
								<option value="209">209</option>
								<option value="210">210</option>
								<option value="300">300</option>
								<option value="301">301</option>
								<option value="302">302</option>
								<option value="303">303</option>
								<option value="304">304</option>
								<option value="305">305</option>
								<option value="306">306</option>
								<option value="307">307</option>
								<option value="308">308</option>
								<option value="309">309</option>
								<option value="310">310</option>
								<option value="400">400</option>
								<option value="401">401</option>
								<option value="402">402</option>
								<option value="403">403</option>
								<option value="404">404</option>
								<option value="405">405</option>
								<option value="406">406</option>
								<option value="407">407</option>
								<option value="408">408</option>
								<option value="409">409</option>
								<option value="410">410</option>
							    <option value="500">500</option>
								<option value="501">501</option>
								<option value="502">502</option>
								<option value="503">503</option>
								<option value="504">504</option>
								<option value="505">505</option>
								<option value="506">506</option>
								<option value="507">507</option>
								<option value="508">508</option>
								<option value="600">600</option>
								<option value="601">601</option>
								<option value="602">602</option>
								<option value="603">603</option>
								<option value="604">604</option>
								<option value="605">605</option>
								<option value="606">606</option>
								<option value="607">607</option>
								<option value="608">608</option>
								<option value="700">700</option>
								<option value="701">701</option>
								<option value="702">702</option>
								<option value="703">703</option>
								<option value="704">704</option>
								<option value="705">705</option>
								<option value="706">706</option>
								<option value="707">707</option>
								<option value="708">708</option>
								<option value="800">800</option>
								<option value="801">801</option>
								<option value="802">802</option>
								<option value="803">803</option>
								<option value="804">804</option>
								<option value="805">805</option>
								<option value="806">806</option>
								<option value="807">807</option>
								<option value="808">808</option>
								<option value="900">900</option>
								<option value="901">901</option>
								<option value="902">902</option>
								<option value="903">903</option>
								<option value="904">904</option>
						    <!--<option value="905">905</option>-->
								<option value="906">906</option>
								<option value="907">907</option>
								<option value="908">908</option>
								<option value="909">909</option>
								<option value="910">910</option>
						    <!--<option value="911">911</option>-->
								<option value="912">912</option>
								<option value="913">913</option>
								<option value="914">914</option>
								<option value="915">915</option>
								<option value="916">916</option>
							         </select></div>
				<script>
				
				function Random_FUuNCTION()
            {
                var a=document.getElementById("Input").value;
                if(a==="100")
                {
                    var arr=["TW-11 130"];
                }
                else if(a==="101")
                {
                    var arr=["TW-11 130"];
                }
				///////////////////////////////////////////////////////
					 var a=document.getElementById("Input").value;
                if(a==="102")
                {
                    var arr=["TW-11 130"];
                }
                else if(a==="103")
                {
                    var arr=["PS"];
                }
				//////////////////////////////////////////////////7
			  var a=document.getElementById("Input").value;
                if(a==="104")
                {
             var arr=["PS"];
                }
                else  if(a==="105")
                {
           var arr=["PS"];
                }
			
			///////////////////////////////////////////7	
				  var a=document.getElementById("Input").value;
                if(a==="106")
                {
             var arr=["P7300"];
                }
                else  if(a==="107")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
				
	           var a=document.getElementById("Input").value;
                if(a==="108")
                {
             var arr=["PS"];
                }
                else  if(a==="109")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
							
				
	           var a=document.getElementById("Input").value;
                if(a==="110")
                {
             var arr=["PS"];
                }
                else  if(a==="200")
                {
           var arr=["TW-11 130"];
                }
				//////////////////////////////////////////////
							
				
	           var a=document.getElementById("Input").value;
                if(a==="201")
                {
             var arr=["TW-11 130"];
                }
                else  if(a==="202")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////	
				
				 var a=document.getElementById("Input").value;
                if(a==="203")
                {
             var arr=["PS"];
                }
                else  if(a==="204")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
				
					 var a=document.getElementById("Input").value;
                if(a==="205")
                {
             var arr=["PS"];
                }
                else  if(a==="206")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
				
				
					 var a=document.getElementById("Input").value;
                if(a==="207")
                {
             var arr=["PS"];
                }
                else  if(a==="208")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
				
				 var a=document.getElementById("Input").value;
                if(a==="209")
                {
             var arr=["PS"];
                }
                else  if(a==="210")
                {
           var arr=["TW-11 153"];
                }
				//////////////////////////////////////////////
				
				 var a=document.getElementById("Input").value;
                if(a==="300")
                {
             var arr=["TW-11 130"];
                }
                else  if(a==="301")
                {
           var arr=["TW-11 130"];
                }
				//////////////////////////////////////////////
					 var a=document.getElementById("Input").value;
                if(a==="302")
                {
             var arr=["PS"];
                }
                else  if(a==="303")
                {
           var arr=["TW-11 153"];
                }
				//////////////////////////////////////////////
				
				 var a=document.getElementById("Input").value;
                if(a==="304")
                {
             var arr=["PS"];
                }
                else  if(a==="305")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
				
				
				 var a=document.getElementById("Input").value;
                if(a==="306")
                {
             var arr=["PS"];
                }
                else  if(a==="307")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
				
				 var a=document.getElementById("Input").value;
                if(a==="308")
                {
             var arr=["PS"];
                }
                else  if(a==="309")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
				
						
				 var a=document.getElementById("Input").value;
                if(a==="310")
                {
             var arr=["PS"];
                }
                else  if(a==="400")
                {
           var arr=["TW-11 130"];
                }
				//////////////////////////////////////////////
				
							
				 var a=document.getElementById("Input").value;
                if(a==="401")
                {
             var arr=["TW-11 130"];
                }
                else  if(a==="402")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
				
				 var a=document.getElementById("Input").value;
                if(a==="403")
                {
             var arr=["PS"];
                }
                else  if(a==="404")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
				
					 var a=document.getElementById("Input").value;
                if(a==="405")
                {
             var arr=["PS"];
                }
                else  if(a==="406")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
				
					 var a=document.getElementById("Input").value;
                if(a==="407")
                {
             var arr=["PS"];
                }
                else  if(a==="408")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
				
				
					 var a=document.getElementById("Input").value;
                if(a==="409")
                {
             var arr=["PS"];
                }
                else  if(a==="410")
                {
           var arr=["PS"];
                }
				//////////////////////////////////////////////
				
				
					 var a=document.getElementById("Input").value;
                if(a==="500")
                {
             var arr=["P7100"];
                }
                else  if(a==="501")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
				 var a=document.getElementById("Input").value;
                if(a==="502")
                {
             var arr=["P7100"];
                }
                else  if(a==="503")
                {
           var arr=["P7100│ Batería D│ Batería 1"];
                }
				//////////////////////////////////////////////
				
					
				 var a=document.getElementById("Input").value;
                if(a==="504")
                {
             var arr=["P7100"];
                }
                else  if(a==="505")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
					
				 var a=document.getElementById("Input").value;
                if(a==="506")
                {
             var arr=["P7100"];
                }
                else  if(a==="507")
                {
           var arr=["TW 220"];
                }
				//////////////////////////////////////////////
				
						
				 var a=document.getElementById("Input").value;
                if(a==="508")
                {
             var arr=["TW 220"];
                }
                else  if(a==="600")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
				 var a=document.getElementById("Input").value;
                if(a==="601")
                {
             var arr=["P7100"];
                }
                else  if(a==="602")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
				 var a=document.getElementById("Input").value;
                if(a==="603")
                {
             var arr=["P7100"];
                }
                else  if(a==="604")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				 var a=document.getElementById("Input").value;
                if(a==="605")
                {
             var arr=["P7100"];
                }
                else  if(a==="606")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
				 var a=document.getElementById("Input").value;
                if(a==="607")
                {
             var arr=["TW 220"];
                }
                else  if(a==="608")
                {
           var arr=["TW 220"];
                }
				//////////////////////////////////////////////
				
				
				
					 var a=document.getElementById("Input").value;
                if(a==="700")
                {
             var arr=["P7100"];
                }
                else  if(a==="701")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
				
					 var a=document.getElementById("Input").value;
                if(a==="702")
                {
             var arr=["P7100"];
                }
                else  if(a==="703")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
				
					 var a=document.getElementById("Input").value;
                if(a==="704")
                {
             var arr=["P7100"];
                }
                else  if(a==="705")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
				 var a=document.getElementById("Input").value;
                if(a==="706")
                {
             var arr=["P7100"];
                }
                else  if(a==="707")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
					
				 var a=document.getElementById("Input").value;
                if(a==="708")
                {
             var arr=["P7100"];
                }
                else  if(a==="800")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
					 var a=document.getElementById("Input").value;
                if(a==="801")
                {
             var arr=["P7100"];
                }
                else  if(a==="802")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
					 var a=document.getElementById("Input").value;
                if(a==="803")
                {
             var arr=["P7100"];
                }
                else  if(a==="804")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
					 var a=document.getElementById("Input").value;
                if(a==="805")
                {
             var arr=["P7100"];
                }
                else  if(a==="806")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
								
					 var a=document.getElementById("Input").value;
                if(a==="807")
                {
             var arr=["P7100"];
                }
                else  if(a==="808")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
						 var a=document.getElementById("Input").value;
                if(a==="900")
                {
             var arr=["TW-11 153"];
                }
                else  if(a==="901")
                {
           var arr=["TW-11 110"];
                }
				//////////////////////////////////////////////
				
				
				
						 var a=document.getElementById("Input").value;
                if(a==="902")
                {
             var arr=["PU"];
                }
                else  if(a==="903")
                {
           var arr=["TW-11 153"];
                }
				//////////////////////////////////////////////
				
				
				
						 var a=document.getElementById("Input").value;
                if(a==="904")
                {
             var arr=["TW-11 153"];
                }
                else  if(a==="906")
                {
           var arr=["PU"];
                }
				//////////////////////////////////////////////
				
				
						 var a=document.getElementById("Input").value;
                if(a==="907")
                {
             var arr=["TW-11 130"];
                }
                else  if(a==="908")
                {
           var arr=["PU"];
                }
				//////////////////////////////////////////////
				
				
					
				
						 var a=document.getElementById("Input").value;
                if(a==="909")
                {
             var arr=["P7100"];
                }
                else  if(a==="910")
                {
           var arr=["P7100"];
                }
				//////////////////////////////////////////////
				
				
						
				
						 var a=document.getElementById("Input").value;
                if(a==="912")
                {
             var arr=["TW-11 153"];
                }
                else  if(a==="913")
                {
           var arr=["TW-11 153│"];
                }
				//////////////////////////////////////////////
				
				
				
				
						 var a=document.getElementById("Input").value;
                if(a==="914")
                {
             var arr=["TW-11 153"];
                }
                else  if(a==="915")
                {
           var arr=["TW-11 153"];
                }
				
				 else  if(a==="916")
                {
           var arr=["TW-11 153"];
                }
				//////////////////////////////////////////////
				
				
				
				
				
				
				
                var string="";
                
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option>"+arr[i]+"</option>";
                }
                string="<select name='tipotelar_pp'>"+string+"</select>";
                document.getElementById("Output").innerHTML=string;
            }
			
			
			
</script>			
									 
	  							 
	       <div class="form-group">
		  <td><label><B>ESTILO:</B></label></td>
							<select name="estilo_pp">
							    <option value=""></option>
								<option value="Arpilla">Arpilla</option>
								<option value="Base 5 Oz">Base 5 Oz</option>
								<option value="Top">Top </option>
								<option value="Base 6 Oz">Base 6 Oz</option>
								<option value="Base 8 Oz">Base 8 Oz</option>
								<option value="Carbòn 3 Oz">Carbòn 3 Oz</option>
								<option value="Carbòn 6 Oz">Carbòn 6 Oz</option>
								<option value="Cotton">Cotton</option>
								<option value="Ground Cover">Ground Cover</option>
								<option value="Langostinas">Langostinas</option>
								<option value="Polioles 6Oz">Polioles 6 Oz</option>
							         </select></div>
			
									 
			 <div class="form-group">
		  <td><label><B>SISTEMA:</B></label></td>
							<select name="sistema_pp">
							    <option value=""></option>
								<option value="Urdimbre">Urdimbre</option>
								<option value="Trama">Trama</option>
							         </select></div>
		 
		  
		   <div class="form-group">
		  <td><label><B>FALLA:</B></label></td>
							<select name="falla_pp">
							     <option value=""></option>
								<option value="Cambio de estilo">Cambio de estilo</option>
								<option value="En espera de trama">En espera de trama</option>
								<option value="En espera de plegador">En espera de plegador</option>
								<option value="Fuera de programa">Fuera de programa</option>
								<option value="Por atar">Por atar</option>
								<option value="Por terminar">Por terminar</option>
							         </select></div>
									 
									 <div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_pp">
							     <option value=""></option>
								<option value="Eléctrica">Eléctrica</option>
								<option value="Mecánica">Mecánica</option>
								<option value="Eléctrica y Mecánica">Eléctrica y Mecánica</option>
							         </select></div>

									 
	 <div class="form-group">
		    <td><label><B>COMENTARIO: </B></label></td><td>
          <textarea type="text" name="com_pp" class="form-control" placeholder="Escribe un comentario" autofocus></textarea>
          </div> 
		  
		  	<div class="form-group" id="Output"  name="tipotelar_pp">
		  <td><label><b>TIPO TELAR:</b></label></td>
							</div>
<center><button class="btn btn-primary"    value="Guardar"><span class="fi fi-save" >  Guardar </span></button>
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




		

  <!-- Empieza pie de pagina -->

<footer>
		
<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
</html>
