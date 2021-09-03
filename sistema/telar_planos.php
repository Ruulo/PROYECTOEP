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
  
<style type="text/css">
h1 {
	color:#4c4c4c;
}
.search{
	background:#4cb6ea;
	color: #fff;
	border: none;
}
.right{
    float: right;
}
.btn_new{
	display: inline-block;
	background:#036dff;
	color: #FFF;
	padding: 5px 25px;
	border-radius: 4px;
	margin: 20px;
}
.left{
	float:left;
}
.btn_r{
	display: inline-block;
	background:#ff0101;
	color: #FFF;
	padding: 5px 25px;
	border-radius: 4px;
	margin: 20px;
}

.btn_r{
	display: inline-block;
	background:#ff0101;
	color: #FFF;
	padding: 5px 25px;
	border-radius: 4px;
	margin: 20px;
}
	.ver{
	color: #1f7e00;
}
</style>
	  
   <title>Telares Planos</title>
</head>

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
<br> 
        <h1><center><span class="icon-doc-text-inv" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span>
<b>TELARES PLANOS</h1></center></b>
        <hr>
        <main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->


      <!-- Formulario de insertar -->
      <div class="card card-body">
        <form action="gtp.php" method="POST">
       
		 
          <div class="form-group">
		    <td><label><b>TURNO:</b> </label></td><td>
          <input type="numeric" name="turno_tp" class="form-control" placeholder="Ingrese el turno" autofocus required></input>
          </div>
		 
	     	<div class="form-group">
		  <td><label><b>TELAR:  </b></label></td>
						<select name="telar_tp" id="Input" onchange="Random_FUuNCTION()" >
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
									 
			
									 
			             <div class="form-group">
		                 <td><label><b>ESTILO:</b></label></td>
							<select name="estilo_tp">
							     <option value=""></option>
								<option value="3Oz Conductivo">3Oz Conductivo</option>
								<option value="6Oz Conductivo">6Oz Conductivo</option>
								<option value="ActionBac">ActionBac</option>
								<option value="Arpilla">Arpilla</option>
								<option value="Bag 3Oz">Bag 3Oz</option>
								<option value="Base 5Oz">Base 5Oz</option>
								<option value="Base 6Oz">Base 6Oz</option>
								<option value="Base 8Oz">Base 8Oz</option>
								<option value="carbòn 3Oz">Carbòn 3Oz</option>
								<option value="Carbòn 6Oz">Carbòn 6Oz</option>
								<option value="Cotton">Cotton</option>
								<option value="Ground Cover">Ground Cover</option>
								<option value="Langostionos">Langostionos</option>
								<option value="Polioles 6Oz">Polioles 6Oz</option>
							    <option value="Polybac">Polybac</option>
								<option value="Top">Top</option>
								<option value="Ventilada">Ventilada</option>
							         </select></div>
									 
									 
			 <script>
function Random_FUuNCTION()
            {
                var a=document.getElementById("Input").value;
                if(a==="100")
                {
                    var arr=["TW-11 130│ Batería A │Batería 1"];
                }
                else if(a==="101")
                {
                    var arr=["TW-11 130│ Batería A │Batería 1"];
                }
				///////////////////////////////////////////////////////
					 var a=document.getElementById("Input").value;
                if(a==="102")
                {
                    var arr=["TW-11 130│ Batería A│ Batería 1"];
                }
                else if(a==="103")
                {
                    var arr=["PS│ Batería A│ Batería 1"];
                }
				//////////////////////////////////////////////////7
			  var a=document.getElementById("Input").value;
                if(a==="104")
                {
             var arr=["PS│ Batería A│ Batería 1"];
                }
                else  if(a==="105")
                {
           var arr=["PS│ Batería A │Batería 2"];
                }
			
			///////////////////////////////////////////7	
				  var a=document.getElementById("Input").value;
                if(a==="106")
                {
             var arr=["P7300│ Batería A│ Batería 2"];
                }
                else  if(a==="107")
                {
           var arr=["PS│ Batería A│Batería 2"];
                }
				//////////////////////////////////////////////
				
	           var a=document.getElementById("Input").value;
                if(a==="108")
                {
             var arr=["PS│ Batería B│ Batería 2"];
                }
                else  if(a==="109")
                {
           var arr=["PS│ Batería B│Batería 2"];
                }
				//////////////////////////////////////////////
							
				
	           var a=document.getElementById("Input").value;
                if(a==="110")
                {
             var arr=["PS│ Batería B│ Batería 2"];
                }
                else  if(a==="200")
                {
           var arr=["TW-11 130│ Batería A│ Batería 2"];
                }
				//////////////////////////////////////////////
							
				
	           var a=document.getElementById("Input").value;
                if(a==="201")
                {
             var arr=["TW-11 130│ Batería A│ Batería 1"];
                }
                else  if(a==="202")
                {
           var arr=["PS│ Batería A│ Batería 1"];
                }
				//////////////////////////////////////////////	
				
				 var a=document.getElementById("Input").value;
                if(a==="203")
                {
             var arr=["PS│ Batería A│ Batería 1"];
                }
                else  if(a==="204")
                {
           var arr=["PS│ Batería A│ Batería 1"];
                }
				//////////////////////////////////////////////
				
					 var a=document.getElementById("Input").value;
                if(a==="205")
                {
             var arr=["PS│ Batería A│ Batería 2"];
                }
                else  if(a==="206")
                {
           var arr=["PS│ Batería A│ Batería 2"];
                }
				//////////////////////////////////////////////
				
				
					 var a=document.getElementById("Input").value;
                if(a==="207")
                {
             var arr=["PS│ Batería A│ Batería 2"];
                }
                else  if(a==="208")
                {
           var arr=["PS│ Batería B│ Batería 2"];
                }
				//////////////////////////////////////////////
				
				 var a=document.getElementById("Input").value;
                if(a==="209")
                {
             var arr=["PS│ Batería B│ Batería 2"];
                }
                else  if(a==="210")
                {
           var arr=["TW-11 153│ Batería B│ Batería 2"];
                }
				//////////////////////////////////////////////
				
				 var a=document.getElementById("Input").value;
                if(a==="300")
                {
             var arr=["TW-11 130│ Batería C│ Batería 1"];
                }
                else  if(a==="301")
                {
           var arr=["TW-11 130│ Batería C│ Batería 1"];
                }
				//////////////////////////////////////////////
					 var a=document.getElementById("Input").value;
                if(a==="302")
                {
             var arr=["PS│ Batería C│ Batería 1"];
                }
                else  if(a==="303")
                {
           var arr=["TW-11 153│ Batería C│ Batería 1"];
                }
				//////////////////////////////////////////////
				
				 var a=document.getElementById("Input").value;
                if(a==="304")
                {
             var arr=["PS│ Batería C│ Batería 1"];
                }
                else  if(a==="305")
                {
           var arr=["PS│ Batería C│ Batería 2"];
                }
				//////////////////////////////////////////////
				
				
				 var a=document.getElementById("Input").value;
                if(a==="306")
                {
             var arr=["PS│ Batería B│ Batería 2"];
                }
                else  if(a==="307")
                {
           var arr=["PS│ Batería B│ Batería 2"];
                }
				//////////////////////////////////////////////
				
				 var a=document.getElementById("Input").value;
                if(a==="308")
                {
             var arr=["PS│ Batería B│ Batería 2"];
                }
                else  if(a==="309")
                {
           var arr=["PS│ Batería B│ Batería 2"];
                }
				//////////////////////////////////////////////
				
						
				 var a=document.getElementById("Input").value;
                if(a==="310")
                {
             var arr=["PS│ Batería B│ Batería 2"];
                }
                else  if(a==="400")
                {
           var arr=["TW-11 130│ Batería C│ Batería 1"];
                }
				//////////////////////////////////////////////
				
							
				 var a=document.getElementById("Input").value;
                if(a==="401")
                {
             var arr=["TW-11 130│ Batería C│ Batería 1"];
                }
                else  if(a==="402")
                {
           var arr=["PS│ Batería C│ Batería 1"];
                }
				//////////////////////////////////////////////
				
				 var a=document.getElementById("Input").value;
                if(a==="403")
                {
             var arr=["PS│ Batería C│ Batería 1"];
                }
                else  if(a==="404")
                {
           var arr=["PS│ Batería C│ Batería 1"];
                }
				//////////////////////////////////////////////
				
					 var a=document.getElementById("Input").value;
                if(a==="405")
                {
             var arr=["PS│ Batería C│ Batería 2"];
                }
                else  if(a==="406")
                {
           var arr=["PS│ Batería B│ Batería 2"];
                }
				//////////////////////////////////////////////
				
					 var a=document.getElementById("Input").value;
                if(a==="407")
                {
             var arr=["PS│ Batería B│ Batería 2"];
                }
                else  if(a==="408")
                {
           var arr=["PS│ Batería B│ Batería 2"];
                }
				//////////////////////////////////////////////
				
				
					 var a=document.getElementById("Input").value;
                if(a==="409")
                {
             var arr=["PS│ Batería B│ Batería 2"];
                }
                else  if(a==="410")
                {
           var arr=["PS│ Batería B│ Batería 2"];
                }
				//////////////////////////////////////////////
				
				
					 var a=document.getElementById("Input").value;
                if(a==="500")
                {
             var arr=["P7100│ Batería C│ Batería 1"];
                }
                else  if(a==="501")
                {
           var arr=["P7100│ Batería C│ Batería 1"];
                }
				//////////////////////////////////////////////
				
				
				 var a=document.getElementById("Input").value;
                if(a==="502")
                {
             var arr=["P7100│ Batería D│ Batería 1"];
                }
                else  if(a==="503")
                {
           var arr=["P7100│ Batería D│ Batería 1"];
                }
				//////////////////////////////////////////////
				
					
				 var a=document.getElementById("Input").value;
                if(a==="504")
                {
             var arr=["P7100│ Batería D│ Batería 1"];
                }
                else  if(a==="505")
                {
           var arr=["P7100│ Batería D│ Batería 2"];
                }
				//////////////////////////////////////////////
				
				
					
				 var a=document.getElementById("Input").value;
                if(a==="506")
                {
             var arr=["P7100│ Batería D│ Batería 2"];
                }
                else  if(a==="507")
                {
           var arr=["TW 220│ Batería D│ Batería 2"];
                }
				//////////////////////////////////////////////
				
						
				 var a=document.getElementById("Input").value;
                if(a==="508")
                {
             var arr=["TW 220│ Batería D│ Batería 2"];
                }
                else  if(a==="600")
                {
           var arr=["P7100│ Batería C│ Batería 1"];
                }
				//////////////////////////////////////////////
				
				
				 var a=document.getElementById("Input").value;
                if(a==="601")
                {
             var arr=["P7100│ Batería C│ Batería 2"];
                }
                else  if(a==="602")
                {
           var arr=["P7100│ Batería D│ Batería 1"];
                }
				//////////////////////////////////////////////
				
				
				 var a=document.getElementById("Input").value;
                if(a==="603")
                {
             var arr=["P7100│ Batería C│ Batería 1"];
                }
                else  if(a==="604")
                {
           var arr=["P7100│ Batería D│ Batería 1"];
                }
				//////////////////////////////////////////////
				
				 var a=document.getElementById("Input").value;
                if(a==="605")
                {
             var arr=["P7100│ Batería D│ Batería 2"];
                }
                else  if(a==="606")
                {
           var arr=["P7100│ Batería D│ Batería 2"];
                }
				//////////////////////////////////////////////
				
				
				 var a=document.getElementById("Input").value;
                if(a==="607")
                {
             var arr=["TW 220│ Batería D│ Batería 2"];
                }
                else  if(a==="608")
                {
           var arr=["TW 220│ Batería D│ Batería 2"];
                }
				//////////////////////////////////////////////
				
				
				
					 var a=document.getElementById("Input").value;
                if(a==="700")
                {
             var arr=["P7100│ Batería E│ Batería 1"];
                }
                else  if(a==="701")
                {
           var arr=["P7100│ Batería E│ Batería 1"];
                }
				//////////////////////////////////////////////
				
				
				
					 var a=document.getElementById("Input").value;
                if(a==="702")
                {
             var arr=["P7100│ Batería E│ Batería 1"];
                }
                else  if(a==="703")
                {
           var arr=["P7100│ Batería E│ Batería 1"];
                }
				//////////////////////////////////////////////
				
				
				
					 var a=document.getElementById("Input").value;
                if(a==="704")
                {
             var arr=["P7100│ Batería E│ Batería 1"];
                }
                else  if(a==="705")
                {
           var arr=["P7100│ Batería E│ Batería 2"];
                }
				//////////////////////////////////////////////
				
				
				 var a=document.getElementById("Input").value;
                if(a==="706")
                {
             var arr=["P7100│ Batería E│ Batería 2"];
                }
                else  if(a==="707")
                {
           var arr=["P7100│ Batería E│ Batería 2"];
                }
				//////////////////////////////////////////////
				
					
				 var a=document.getElementById("Input").value;
                if(a==="708")
                {
             var arr=["P7100│ Batería D│ Batería 2"];
                }
                else  if(a==="800")
                {
           var arr=["P7100│ Batería E│ Batería 1"];
                }
				//////////////////////////////////////////////
				
				
					 var a=document.getElementById("Input").value;
                if(a==="801")
                {
             var arr=["P7100│ Batería D│ Batería 1"];
                }
                else  if(a==="802")
                {
           var arr=["P7100│ Batería E│ Batería 1"];
                }
				//////////////////////////////////////////////
				
				
					 var a=document.getElementById("Input").value;
                if(a==="803")
                {
             var arr=["P7100│ Batería D│ Batería 1"];
                }
                else  if(a==="804")
                {
           var arr=["P7100│ Batería E│ Batería 1"];
                }
				//////////////////////////////////////////////
				
				
					 var a=document.getElementById("Input").value;
                if(a==="805")
                {
             var arr=["P7100│ Batería D│ Batería 2"];
                }
                else  if(a==="806")
                {
           var arr=["P7100│ Batería E│ Batería 2"];
                }
				//////////////////////////////////////////////
				
								
					 var a=document.getElementById("Input").value;
                if(a==="807")
                {
             var arr=["P7100│ Batería D│ Batería 2"];
                }
                else  if(a==="808")
                {
           var arr=["P7100│ Batería D│ Batería 2"];
                }
				//////////////////////////////////////////////
				
				
						 var a=document.getElementById("Input").value;
                if(a==="900")
                {
             var arr=["TW-11 153│ Batería F│ Batería 3"];
                }
                else  if(a==="901")
                {
           var arr=["TW-11 110│ Batería F│ Batería 3"];
                }
				//////////////////////////////////////////////
				
				
				
						 var a=document.getElementById("Input").value;
                if(a==="902")
                {
             var arr=["PU│ Batería F│ Batería 3"];
                }
                else  if(a==="903")
                {
           var arr=["TW-11 153│ Batería F│ Batería 3"];
                }
				//////////////////////////////////////////////
				
				
				
						 var a=document.getElementById("Input").value;
                if(a==="904")
                {
             var arr=["TW-11 153│ Batería F│ Batería 3"];
                }
                else  if(a==="906")
                {
           var arr=["PU│ Batería F│ Batería 3"];
                }
				//////////////////////////////////////////////
				
				
						 var a=document.getElementById("Input").value;
                if(a==="907")
                {
             var arr=["TW-11 130│ Batería F│ Batería 3"];
                }
                else  if(a==="908")
                {
           var arr=["PU│ Batería F│ Batería 3"];
                }
				//////////////////////////////////////////////
				
				
					
				
						 var a=document.getElementById("Input").value;
                if(a==="909")
                {
             var arr=["P7100│ Batería F│ Batería 3"];
                }
                else  if(a==="910")
                {
           var arr=["P7100│ Batería F│ Batería 3"];
                }
				//////////////////////////////////////////////
				
				
						
				
						 var a=document.getElementById("Input").value;
                if(a==="912")
                {
             var arr=["TW-11 153│ Batería F│ Batería 3"];
                }
                else  if(a==="913")
                {
           var arr=["TW-11 153│ Batería F│ Batería 3"];
                }
				//////////////////////////////////////////////
				
				
				
				
						 var a=document.getElementById("Input").value;
                if(a==="914")
                {
             var arr=["TW-11 153│ Batería F│ Batería 3"];
                }
                else  if(a==="915")
                {
           var arr=["TW-11 153│ Batería F│ Batería 3"];
                }
				
				 else  if(a==="916")
                {
           var arr=["TW-11 153│ Batería F│ Batería 3"];
                }
				//////////////////////////////////////////////
				
				
				
				
				
				
				
                var string="";
                
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option>"+arr[i]+"</option>";
                }
                string="<select name='tipotelar_tp'>"+string+"</select>";
                document.getElementById("OuuUtput").innerHTML=string;
            }
			
			
			
			
			
			
			
			
			
			
			
		///////////////////////////////////////////////////////////////////////////////////////////////////7
			////////////////////////SISTEMA Y FALLA ///////////////////////////////////////////
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="Accionamiento/Frenado de Máquina")
                {
                    var arr=["Motor Principal","Embrague", " Cinta de freno", "Barra telescopica", "Paro en falso", "Coplees de barra telescopica","Bandas","Interruptor final", "Eje de accionamiento", "Disco de angulo"];
                }
                else if(a==="Armario de Mando")
                {
                    var arr=["PFR","BRA","MEC","WISS","PRP","EGS","PSD","PBR","PNB"];
                }
				//
					 var a=document.getElementById("input").value;
                if(a==="Dispositivo de vigilancia")
                {
                    var arr=["Intsalción de control", "Paraurdimbre", " Paratrama Lopfe","Paratrama mecanico"];
                }
                else if(a==="Desenrrollador de Plegador")
                {
                    var arr=["Transmisión", "Ajustes del plegador", "Engrane del plegador","Regulador de urdimbre"];
                }
				//
				
					 var a=document.getElementById("input").value;
                if(a==="Formación de la Calada")
                {
             var arr=["Tiralizos", "Máquina de excentricas", "Marcos", "Maquinilla de papel picado","Comprensores", "Hilo pie","Hilos flotantes", "Buscapasadas"];
                }
                else  if(a==="Regulador de Tejido")
                {
           var arr=["Cilindro de mando", "Cabeza de cabello", "Recubrimiento", "Rodillo de presión", "Tela enredada", "cambio de cuenta", "Regulador de tejido"];
                }
				//
				var a=document.getElementById("input").value;
                if(a==="Alimentación de Trama")
                {
               var arr=["Porta bobinas","Acumulador de trama", "Palpador de trama", "Paro de trama", "Freno de trama","Transcaladas", "Hilo trama" ];
                }
				
                else  if(a==="Disparo")
                {
               var arr=["Elevador de proyectil", "Abrigor de proyectil SU", "Pieza de expulsión taco", "Placa de disparo", "Dador de trama", "Riel guía", "Eclipsa", "Barra de torsión", "Tijera","Punto de disparo","Hidraulico","Eje transversal","Insercion de guía", "Transporte de retorno", "Atoramiento de proyectil"];
                }	
                //	

               var a=document.getElementById("input").value;
                if(a==="Batán")
                {
                  var arr=["Diente de guías","Cinchos", "Carter de batán", "Peine", "Calibración de batán" ];
                }
				
                else   if(a==="Recepción")
                {
                 var arr=["Guarniciones", "Retrocesor", "Abridor de proyectil FA", "Mecanismo general", "Acoplamiento", "Cadena de transporte", "Atoramiento de proyectil", "Sensor de proyectil", "Expulsador de proyectiles"];
                }
              //
				var a=document.getElementById("input").value;
                if(a==="Formación de Orillos")
                {
                    var arr=["Remedios","Barra de mecanismo", "Orillo FA", "Hilo timón","Chapa", "Pinza de Orillo" , "Aguja de Orillo"];
                }
				
                else   if(a==="Sistema de Lubricación")
                {
                     var arr=["Lub.Cerrojo","Lub.proyectil"];
                }
				//
				
				 var a=document.getElementById("input").value;
                 if(a==="Enrollador")
                {
                    var arr=["Rodillos","Rodillo de presión", "Cadena", "Motor de enrrollador", "Reductor","Sproket","Napper"];
                }
				
                else   if(a==="2 Colores")
                {
                     var arr=["Comentario"];
                }
				//
				
				 var a=document.getElementById("input").value;
                 if(a==="Calidad")
                {
                    var arr=["Comentario","contaminación", "Hilo flotante","Mal repasado","Monos de la trama"];
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
        </script>						 						 
	       <div class="form-group">
		  <td><label><b>SISTEMA:</b></label></td>
							<select name="sistema_tp" id="input" onchange="random_function()">
							     <option value=""></option>
								<option value="Accionamiento/Frenado de Máquina">Accionamiento/Frenado de Máquina</option>
								<option value="Armario de Mando">Armario de Mando</option>
								<option value="Dispositivo de vigilancia">Dispositivo de Vigilancia</option>
								<option value="Desenrrollador de Plegador">Desenrrollador de Plegador</option>
							    <option value="Formación de la Calada">Formación de la Calada</option>
								<option value="Regulador de Tejido">Regulador de Tejido</option>
								<option value="Alimentación de Trama">Alimentación de Trama</option>
								<option value="Disparo">Disparo</option>
								<option value="Batán">Batán</option>
								<option value="Recepción">Recepción</option>
								<option value="Formación de Orillos">Formación de Orillos</option>
								<option value="Sistema de Lubricación">Sistema de Lubricación</option>
								<option value="Enrollador">Enrollador</option>
								<option value="2 Colores">2 Colores</option>
						        <option value="Calidad">Calidad</option>
								<option value="Otro">Otro</option>
							         </select></div>
									 
			
									 
					  <td><label><b>FALLA:</b></label></td>	 
			 <div class="form-group" id="output"  name="falla_tp" >
							</div>
				
	  <div class="form-group">
		  <td><label><b>REFACCIÒN:</b></label></td>
							<select name="refa_tp">
							     <option value=""></option>
								<option value="Almacén/Nueva">Almacén/Nueva</option>
								<option value="Reparada/Máquina Extra">Reparada/Máquina Extra</option>
								<option value="Acondicionado">Acondicionado</option>
								<option value="No necesaria">No necesaria</option>
							         </select></div>
			
			
			<div class="form-group">
		  <td><label><b>ESTADO:</b></label></td>
							<select name="estado_tp" >
							     <option value=""></option>
								<option value="Pendiente">Pendiente</option>
								<option value="Terminado">Terminado</option>
							         </select></div>
									 
			<div class="form-group">
		  <td><label><b>TIPO DE FALLA:</b></label></td>
							<select name="tipofalla_tp">
							     <option value=""></option>
								<option value="Eléctrica">Eléctrica</option>
								<option value="Mecánica">Mecánica</option>
								<option value="Eléctrica y Mecánica">Eléctrica y Mecánica</option>
							         </select></div>
			
			<div class="form-group">
		    <td><label><b>COMENTARIO: </b></label></td><td>
          <textarea type="text" name="com_tp" class="form-control" placeholder="Escribe un comentario" autofocus></textarea>
          </div>
				
  <td><label><b>TIPO TELAR│ BATERÌA MATENIMIENTO│ BATERÌA PRODUCCIÒN:</b></label></td>				 
		<div class="form-group" id="OuuUtput"  name="tipotelar_tp" >
							</div>				
					
	     <button class="btn btn-info btn-block"   name="gtp"  value="Guardar">
         <span class="fi fi-save"> Guardar </span> 
</button>


     <button class="btn btn-secondary btn-block"   type="reset"  value="Restaurar">
         <span class="fi fi-clipboard"> Restaurar </span> 
</button>
  </form>
      </div>
    </div>
    <div class="col-md-8">
	 <div class="table-responsive" style="overflow-x:auto;">
	   <table class="table table-striped">
        <thead>
          <tr>
           <th>ID</th>
            <th>TURNO</th>
            <th>FECHA</th>
            <th>TELAR</th>
		   <th>ESTILO</th>
			 <th>SISTEMA</th>
			 <th>FALLA</th>
			  <th>REFACCIÒN</th>
			   <th>ESTADO</th>
			    <th>TIPO DE FALLA</th>
			    <th>COMENTARIO</th>
				<th>TIPO TELAR/BATERÌA MANTENIMIENTO Y PRODUCCIÒN</th>
				<th>ACCIONES</th>
          </tr>
        </thead>
			<!--buscador-->
<form action="buscar_planos.php" method="get" class="form_search">
<div class="right">
<center><input type="text" name="busqueda" id="busqueda" placeholder="buscar por telar.." >
<button type="submit" class="search"><span class="icon-search" ></span>
</form></button></div>

<?php 
				if($_SESSION['rol'] ==2){
			 ?>
<a href="../repo/tp2.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>
<?php 
				if($_SESSION['rol'] ==3){
			 ?>
<a href="../repo/tp3.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>

<?php 
				if($_SESSION['rol'] ==4){
			 ?>
<a href="../repo/tp4.php" class="btn_new"><span class="icon-download-alt">Reporte</a></span><!--botton del pdf-->
     <?php } ?>
	
<!--<a href="graficas.php" class="btn_r" ><span class="icon-cancel"> Incidencias</a></span><!--botton del pdf-->

<!--mostrar datos en tabla-->
          <?php
//paginador 
$sql_registe= mysqli_query($conection,"SELECT COUNT(*) as total FROM telar_planos WHERE DATE_FORMAT(fecha_tp, '%Y-%m-%d') = CURDATE()");
$result_register=mysqli_fetch_array($sql_registe);
$total= $result_register['total'];
$por_pagina= 5;//numero de paginas que se dese mostrar 
if(empty($_GET['pagina']))
{
$pagina=1;
}else{
$pagina=$_GET['pagina'];
}
$desde=($pagina-1)*$por_pagina;
$total_paginas =ceil($total /$por_pagina);

          $query = "SELECT * FROM telar_planos WHERE DATE_FORMAT(fecha_tp, '%Y-%m-%d') = CURDATE() LIMIT $desde,$por_pagina";
          $result_telar_planos = mysqli_query($conection, $query); 
	   mysqli_close($conection);		  

          while($row = mysqli_fetch_assoc($result_telar_planos)) {
  $estado_color = array(
        'Terminado' => "#E7E0B2"

   ) ?>			
          <tr>
            <td><?php echo $row['id_tp']; ?></td>
            <td><?php echo $row['turno_tp']; ?></td>
            <td><?php echo $row['fecha_tp']; ?></td>
		    <td><?php echo $row['telar_tp']; ?></td>
			<td><?php echo $row['estilo_tp']; ?></td>
			<td><?php echo $row['sistema_tp']; ?></td>
            <td><?php echo $row['falla_tp']; ?></td>
            <td><?php echo $row['refa_tp']; ?></td>
		 <td bgcolor="<?php $estado_color[$row['estado_tp']] ?>"><?php echo $row['estado_tp']; ?></td>
			<td><?php echo $row['tipofalla_tp']; ?></td>
			<td><?php echo $row['com_tp']; ?></td>
			<td><?php echo $row['tipotelar_tp']; ?></td>
            <td>
              <a href="editetp.php?id_tp=<?php echo $row['id_tp']?>"class="link_edit"><h6>Editar
                <i class="icon-edit"></i> 
              </a>
			   <a href="../registros/telar_planos.php" class="ver"><h6>Ver..
                <i class="icon-eye"></i> 
              </a>
		
			  
             
             
            </td>
          </tr>
          <?php } ?>
      </tbody>
      </table>
    </div>
  </div>
</main>
<!--paginador-->
	<div class="paginador">
			<ul>
			<?php 
				if($pagina != 1)
				{
			 ?>
				<li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
			<?php 
				}
				for ($i=1; $i <= $total_paginas; $i++) { 
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div>
<?php include('../includes/footer.php'); ?>

		

  <!-- Empieza pie de pagina -->
<footer>
		
<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
</html>