<style type="text/css">
#tablas {
	position: absolute;
	width: 1090px;
	height: 190px;
	z-index: 1;
	left: 65px;
	top: 84px;
}
#apDiv2 {
	position: absolute;
	width: 142px;
	height: 189px;
	z-index: 1;
	left: 3px;
	top: 1px;
}
#apDiv3 {
	position: absolute;
	width: 142px;
	height: 189px;
	z-index: 1;
	left: 213px;
	top: 85px;
}
#apDiv4 {
	position: absolute;
	width: 178px;
	height: 189px;
	z-index: 1;
	left: 357px;
	top: 85px;
}
#apDiv5 {
	position: absolute;
	width: 159px;
	height: 189px;
	z-index: 1;
	left: 537px;
	top: 85px;
}
#apDiv6 {
	position: absolute;
	width: 224px;
	height: 189px;
	z-index: 1;
	left: 698px;
	top: 85px;
}
#apDiv7 {
	position: absolute;
	width: 218px;
	height: 189px;
	z-index: 1;
	left: 927px;
	top: 85px;
}
</style>
<div id="tablas">
  <div id="apDiv2">
  <?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";
			
			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");
			
			
			
			$constulta = mysqli_query($conexion, "SELECT id_tp , telar_tp FROM telar_planos where estado_tp='pendiente'")
				or die ("Error al observar los registros");
				
				
					echo '<table width="141" border="1">';
			echo '<tr>';
		    echo '<th id="id_tp":>Equipo Evento</th>';
			echo '<th id="telar_tp":> Estado Pendiente</th>';
	        echo '</tr>';
     
     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td  width="53">'.$mostrar['id_tp'].'</td>';
				echo '<td width="72">'.$mostrar['telar_tp'].'</td>';
				
			}
			
			
			mysqli_close($conexion);
			echo "</table>"
		?>
		
    </table>
  </div>
</div>
<div id="apDiv4">
  <?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";
			
			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");
			
			
			
			$constulta = mysqli_query($conexion, "SELECT id_pp , telar_pp FROM telar_proceso where falla_pp='Cambio de estilo'")
				or die ("Error al observar los registros");
				
				
					echo '<table width="178" border="1">';
			echo '<tr>';
		    echo '<th id="id_pp":>Producto Evento</th>';
			echo '<th id="telar_pp":>Proceso Cambio de estilo</th>';
	        echo '</tr>';
     
     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td  width="53">'.$mostrar['id_pp'].'</td>';
				echo '<td width="109">'.$mostrar['telar_pp'].'</td>';
				
			}
			
			
			mysqli_close($conexion);
			echo "</table>"
		?>

  </table>
</div>
<div id="apDiv3">
 <?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";
			
			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");
			
			
			
			$constulta = mysqli_query($conexion, "SELECT id_pp , telar_pp FROM telar_proceso where falla_pp='Por atar'")
				or die ("Error al observar los registros");
				
				
					echo '<table width="141" border="1">';
			echo '<tr>';
		    echo '<th id="id_pp":> Poducto Evento</th>';
			echo '<th id="telar_pp":> Porceso Por atar</th>';
	        echo '</tr>';
     
     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td  width="53">'.$mostrar['id_pp'].'</td>';
				echo '<td width="72">'.$mostrar['telar_pp'].'</td>';
				
			}
			
			
			mysqli_close($conexion);
			echo "</table>"
		?>
  </table>
</div>
<div id="apDiv5">
 <?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";
			
			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");
			
			
			
			$constulta = mysqli_query($conexion, "SELECT id_tp, telar_tp FROM telar_planos where estado_tp='por terminar'")
				or die ("Error al observar los registros");
				
				
					echo '<table width="158" border="1">';
			echo '<tr>';
		    echo '<th id="id_pp":>Producto Evento</th>';
			echo '<th id="telar_pp":>Evento Por terminar</th>';
	        echo '</tr>';
     
     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td  width="53">'.$mostrar['id_pp'].'</td>';
				echo '<td width="72">'.$mostrar['telar_pp'].'</td>';
				
			}
			
			
			mysqli_close($conexion);
			echo "</table>"
		?>
  </table>
</div>
<div id="apDiv6">
<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";
			
			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");
			
			
			
			$constulta = mysqli_query($conexion, "SELECT id_tp , telar_tp FROM telar_planos where estado_tp='Fuera de programa'")
				or die ("Error al observar los registros");
				
				
					echo '<table width="226" border="1">';
			echo '<tr>';
		    echo '<th id="id_pp":>Producto Evento</th>';
			echo '<th id="telar_pp":>Proceso  Fuera de progrma</th>';
	        echo '</tr>';
     
     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td  width="53">'.$mostrar['id_pp'].'</td>';
				echo '<td width="72">'.$mostrar['telar_pp'].'</td>';
				
			}
			
			
			mysqli_close($conexion);
			echo "</table>"
		?>
</div>
<div id="apDiv7">
<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";
			
			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");
			
			
			
			$constulta = mysqli_query($conexion, "SELECT id_tp o , telar_tp FROM telar_planos where estado_tp='Espera de trama'")
				or die ("Error al observar los registros");
				
				
					echo '<table width="219" border="1">';
			echo '<tr>';
		    echo '<th id="id_pp":>Evento</th>';
			echo '<th id="telar_pp":>Pendiente</th>';
	        echo '</tr>';
     
     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td  width="53">'.$mostrar['id_pp'].'</td>';
				echo '<td width="72">'.$mostrar['telar_pp'].'</td>';
	
			 }			 
						
			
			mysqli_close($conexion);
			echo "</table>"
			
		?>
</div>

