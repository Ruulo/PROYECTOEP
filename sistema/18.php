<?php 
session_start();
if(empty($_SESSION['active']))
	
	?>
<?php include("../conexion.php"); ?>

<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>	
	
     <!--iconos-->
     <link rel='stylesheet' href='../css/fontello.css'>
	  <link rel='stylesheet' href='../css/foundation-icons.css'>
		<!--crud-->
<link rel="stylesheet" href="../css/bootstrap.minc.css">
    <link rel="stylesheet" href="../css/all.css">
  </head>
  
<style type="text/css">

1{
	color:red;
}
p{
	color:#4cb6ea;
}
img{
max-width:100%;
}
</style>

   <title>Reporte</title>
</head>

   
<body>

 <img src="../img/12.png" width="15%" height="10%"  />

</body>

	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <b><th scope="col"><?php
			include_once("date1.php"); //$Today = date('y:m:d',time());
			//$new = date('l, F d, Y', strtotime($Today));
			//echo $new;
			?></th></b>
  
        	 <b> <td align="left" style="color:#000">
            <?php
			$date_time=date("h:i:sa");
			
			echo $date_time;
			?> </b>
    <h4><center><!--<span class="icon-doc-text-inv"></span>--><b>REPORTE DIARIO DE TOTALES PENDIENTES Y TERMINADOS</center></h4></b>
<center><?php
echo 'Realizado por el supervisor: ';
echo '<b>'.$_SESSION['user'];'</b>';
?></center>
<!--Empieza el contenido-->
<br>

<!--------1------------>
<center><p><b>Telares planos</p></center></b>
        <main class="container p-0">
  <div class="row">
    <div class="col-md-2">
      <!-- MESSAGES -->
      </div>
    </div>
    <div class="col-md-160">
	 <div class="table-responsive" style="overflow-x:auto;">
	   <table class="table table-bordered">
        <thead>
          <tr>
		     <th class="1">TURNO</th>
             <th>TELARES PENDIENTES</th>
			 <th>TELARES TERMINADOS</th>
           
				
          </tr>
        </thead>


          <?php


          $query =mysqli_query($conection, "SELECT turno_tp, SUM(IF(estado_tp= 'Pendiente', 1, 0)) Pendiente, SUM(IF(estado_tp = 'Terminado', 1, 0)) Terminado FROM telar_planos where DATE_FORMAT(fecha_tp, '%Y-%m-%d') = CURDATE()");
     

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)){
 ?>	
          <tr>
            <td><?php echo $data['turno_tp']; ?></td>
		   <td><?php echo $data['Pendiente']; ?></td>
            <td><?php echo $data['Terminado']; ?></td>
		    
			
            </td>
          </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<br>

<!-----------------2---------------------------->
<center><p><b>Telares proceso</b></p></center>
   <main class="container p-0">
  <div class="row">
    <div class="col-md-2">
      <!-- MESSAGES -->
      </div>
    </div>
    <div class="col-md-160">
	 <div class="table-responsive" style="overflow-x:auto;">
	     <table class="table table-bordered">
        <thead>
          <tr>
		     <th class="active">TURNO</th>
             <th class="success">TELARES POR ATAR</th>
			 <th class="warning">TELARES POR TERMINAR</th>
           
				
          </tr>
        </thead>
          <?php
      $query =mysqli_query($conection, "SELECT turno_pp, SUM(IF(falla_pp= 'Por atar', 1, 0)) P, SUM(IF(falla_pp = 'Por terminar', 1, 0)) T FROM telar_proceso where DATE_FORMAT(fecha_pp, '%Y-%m-%d') = CURDATE()");
   

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)){
 ?>	
          <tr>
            <td><?php echo $data['turno_pp']; ?></td>
		   <td><?php echo $data['P']; ?></td>
            <td><?php echo $data['T']; ?></td>
		    
			
            </td>
          </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<br>
<!----------3-------------->
<center><p><b>Telares Circulares</b></p></center>
   <main class="container p-0">
  <div class="row">
    <div class="col-md-2">
      <!-- MESSAGES -->
      </div>
    </div>
    <div class="col-md-160">
	 <div class="table-responsive" style="overflow-x:auto;">
	    <table class="table table-bordered">
        <thead>
          <tr>
		     <th>TURNO</th>
             <th>TELARES PENDIENTES</th>
			 <th>TELARES TERMINADOS</th>
           
				
          </tr>
        </thead>
          <?php
      $query =mysqli_query($conection, "SELECT turno_tc, SUM(IF(estado_tc= 'Pendiente', 1, 0)) P, SUM(IF(estado_tc= 'Terminado', 1, 0)) T FROM telar_circular where DATE_FORMAT(fecha_tc, '%Y-%m-%d') = CURDATE()");
   

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)){
 ?>	
          <tr>
            <td><?php echo $data['turno_tc']; ?></td>
		   <td><?php echo $data['P']; ?></td>
            <td><?php echo $data['T']; ?></td>
		    
			
            </td>
          </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<br>
<!-----------------4----------------->
<center><p><b>Telares de Jareta</b></p></center>
   <main class="container p-0">
  <div class="row">
    <div class="col-md-2">
      <!-- MESSAGES -->
      </div>
    </div>
    <div class="col-md-160">
	 <div class="table-responsive" style="overflow-x:auto;">
	    <table class="table table-bordered">
        <thead>
          <tr>
		     <th>TURNO</th>
             <th>TELARES PENDIENTES</th>
			 <th>TELARES TERMINADOS</th>
           
				
          </tr>
        </thead>
          <?php
      $query =mysqli_query($conection, "SELECT turno_tj, SUM(IF(estado_tj= 'Pendiente', 1, 0)) P, SUM(IF(estado_tj= 'Terminado', 1, 0)) T FROM telar_jareta where DATE_FORMAT(fecha_tj, '%Y-%m-%d') = CURDATE()");
   

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)){
 ?>	
          <tr>
            <td><?php echo $data['turno_tj']; ?></td>
		   <td><?php echo $data['P']; ?></td>
            <td><?php echo $data['T']; ?></td>
		    
			
            </td>
          </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<br>
<!--------------5------------------->
<center><p><b>Urdidor</b></p></center>
   <main class="container p-0">
  <div class="row">
    <div class="col-md-2">
      <!-- MESSAGES -->
      </div>
    </div>
    <div class="col-md-160">
	 <div class="table-responsive" style="overflow-x:auto;">
	     <table class="table table-bordered">
        <thead>
          <tr>
		     <th>TURNO</th>
             <th>TELARES PENDIENTES</th>
			 <th>TELARES TERMINADOS</th>
           
				
          </tr>
        </thead>
          <?php
      $query =mysqli_query($conection, "SELECT turno_u, SUM(IF(estado_u= 'Pendiente', 1, 0)) P, SUM(IF(estado_u= 'Terminado', 1, 0)) T FROM urdidor where DATE_FORMAT(fecha_u, '%Y-%m-%d') = CURDATE()");
   

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)){
 ?>	
          <tr>
            <td><?php echo $data['turno_u']; ?></td>
		   <td><?php echo $data['P']; ?></td>
            <td><?php echo $data['T']; ?></td>
		    
			
            </td>
          </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<br>
<!--------------6----------------------->
<center><p><b>Transporte de Plegadores</b></p></center>
   <main class="container p-0">
  <div class="row">
    <div class="col-md-2">
      <!-- MESSAGES -->
      </div>
    </div>
    <div class="col-md-160">
	 <div class="table-responsive" style="overflow-x:auto;">
	   <table class="table table-bordered">
        <thead>
          <tr>
		     <th>TURNO</th>
             <th>TELARES PENDIENTES</th>
			 <th>TELARES TERMINADOS</th>
           
				
          </tr>
        </thead>
          <?php
      $query =mysqli_query($conection, " SELECT turno_p, SUM(IF(estado_p= 'Pendiente', 1, 0)) P, SUM(IF(estado_p= 'Terminado', 1, 0)) T FROM plegadores where DATE_FORMAT(fecha_p, '%Y-%m-%d') = CURDATE()");
   

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)){
 ?>	
          <tr>
            <td><?php echo $data['turno_p']; ?></td>
		   <td><?php echo $data['P']; ?></td>
            <td><?php echo $data['T']; ?></td>
		    
			
            </td>
          </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<br>
<!---------------7------------------>
<center><p><b>Calentadores</b></p></center>
   <main class="container p-0">
  <div class="row">
    <div class="col-md-2">
      <!-- MESSAGES -->
      </div>
    </div>
    <div class="col-md-160">
	 <div class="table-responsive" style="overflow-x:auto;">
	     <table class="table table-bordered">
        <thead>
          <tr>
		     <th>TURNO</th>
             <th>TELARES PENDIENTES</th>
			 <th>TELARES TERMINADOS</th>
           
				
          </tr>
        </thead>
          <?php
      $query =mysqli_query($conection, "SELECT turno_c, SUM(IF(estado_c= 'Pendiente', 1, 0)) P, SUM(IF(estado_c= 'Terminado', 1, 0)) T FROM calentadores where DATE_FORMAT(fecha_c, '%Y-%m-%d') = CURDATE()");
   

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)){
 ?>	
          <tr>
            <td><?php echo $data['turno_c']; ?></td>
		   <td><?php echo $data['P']; ?></td>
            <td><?php echo $data['T']; ?></td>
		    
			
            </td>
          </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<br>
<!-------------8------------------>
<center><p><b>Vaporizador</b></p></center>
   <main class="container p-0">
  <div class="row">
    <div class="col-md-2">
      <!-- MESSAGES -->
      </div>
    </div>
    <div class="col-md-160">
	 <div class="table-responsive" style="overflow-x:auto;">
	     <table class="table table-bordered">
        <thead>
          <tr>
		     <th>TURNO</th>
             <th>TELARES PENDIENTES</th>
			 <th>TELARES TERMINADOS</th>
           
				
          </tr>
        </thead>
          <?php
      $query =mysqli_query($conection, "SELECT turno_v, SUM(IF(estado_v= 'Pendiente', 1, 0)) P, SUM(IF(estado_v= 'Terminado', 1, 0)) T FROM vaporizador where DATE_FORMAT(fecha_v, '%Y-%m-%d') = CURDATE()");
   

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)){
 ?>	
          <tr>
            <td><?php echo $data['turno_v']; ?></td>
		   <td><?php echo $data['P']; ?></td>
            <td><?php echo $data['T']; ?></td>
		    
			
            </td>
          </tr>
          <?php }} ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<br>
		
<center><button type="button" value="Imprime esta pagina" onclick="window.print()" class="btn btn-primary tn-lg">
	 <span class="icon-file-pdf">PDF</span></button></center>
						<br>
						<center><button type="button" value="Regresar" class="btn btn-secondary tn-lg" id="regresar" onclick="history.back()" >
 <span class="fi fi-arrow-left">Regresar</span></button></center>
						
 
</body>
</html>