<?php
      header("Content-Type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=Urdidor.xls");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

  <div class="container">
  
    <center><h2 class='center'>BAGCORP"</h2></center>
	<br>
    <center> <h3 class='center'>Lista de Urdidor</h3></center>
     <center><table border="1" bgcolor="">
        <thead>
				<tr bgcolor="#8bdbf2">
      	                	<th>ID</th>
							<th>TURNO</th>
							<th>FECHA</th>
							<th>EQUIPO</th>
							<th>SISTEMA</th>
							<th>FALLA</th>
							<th>REFACCION</th>
							<th>ESTADO</th>
							<th>TIPO DE FALLA</th>
							<th>COMENTARIO</th>
                     </thead>
		 </tr>
		
		    <tbody>
 <center>
    <?php
	$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";
			
			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");
			
      error_reporting(0);
        $sql = "SELECT 
		*   from urdidor";
        $ejecutar = $conexion->query($sql);

        
        while ($filas = $ejecutar->fetch_row()) {
         echo "<tr>  
              <td>$filas[0]</td>
               <td>$filas[1]</td>
               <td>$filas[2]</td>
               <td>$filas[3]</td>
               <td>$filas[4]</td>
			   <td>$filas[5]</td>
			     <td>$filas[6]</td>
               <td>$filas[7]</td>
               <td>$filas[8]</td>
               <td>$filas[9]</td>
		
		
               </tr>"  ;
        }
       
      ?>
      </tbody>
      </table>
</center>
  
  </div>
 
</body>
</html>
        