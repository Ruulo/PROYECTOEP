<!doctype html>
<html>
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="estilos.css" type="text/css"/>
  	<!--crud-->
<link rel="stylesheet" href="../css/bootstrap.minc.css">
 <!--iconos-->
     <link rel='stylesheet' href='../css/fontello.css'>
	  <link rel='stylesheet' href='../css/foundation-icons.css'>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
   <a id="download"  onclick="link.click();">Tomar screenshot y descargar</a>

</head>


   <title>REPORTE MANTENIMIENTO TEJIDO PLANO,CIRCULARES,JARETA Y URDIDO</title>

<style>

table {
   width: 95%;
  text-align:center;
}




th{
/*estilo de los elementos(th)*/
background-color: #b0d3f9;
color:#000;
}


**Aqui esta la magia ahora vamos usar el  nth-child()**

.tr:nth-child(odd){

/*para los colores de las filas impares*/
background-color: #ffffff;
}

tr:nth-child(even){

/*para los colores de las filas pares*/
background:#EDEDED;
}
#apDiv1 {
	position: absolute;
	width: 1200px;
	height: 134px;
	z-index: 1;
	left: 77px;
	top: 160px;
}
#apDiv2 {
	position: absolute;
	width: 175px;
	height: 75px;
	z-index: 1;
	left: -1px;
	top: 0px;
}
#apDiv3 {
	position: absolute;
	width: 843px;
	height: 115px;
	z-index: 2;
	left: 32px;
	top: 48px;
}
#apDiv4 {
	position: absolute;
	width: 164px;
	height: 72px;
	z-index: 2;
	left: 249px;
	top: 161px;
}
#apDiv5 {
	position: absolute;
	width: 221px;
	height: 119px;
	z-index: 3;
	left: 414px;
	top: 161px;
}
#apDiv6 {	position: absolute;
	width: 175px;
	height: 166px;
	z-index: 1;
}
#apDiv7 {
	position: absolute;
	width: 182px;
	height: 115px;
	z-index: 4;
	left: 638px;
	top: 161px;
}
#apDiv8 {
	position: absolute;
	width: 212px;
	height: 115px;
	z-index: 5;
	left: 822px;
	top: 162px;
}
#apDiv9 {
	position: absolute;
	width: 209px;
	height: 115px;
	z-index: 6;
	left: 1063px;
	top: 161px;
}
#apDiv10 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 7;
	left: 33px;
	top: 47px;
}

</style>

<body>
 &nbsp;<!--logo--><div class="logo logo_main"></div> <img src="../img/12.png" width="14%" height="10%"  /></div>

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
</tr>

 <center>
  <?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT nombre from usuario where idusuario=4")
				or die ("Error al observar los registros");


					echo '<table width="174" border="">';
			echo '<tr>';
		    echo '<th1 Jefe="nombre":>REALIZADO POR EL SUPERVISOR: </th>';
	        echo '</tr>';

     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<b>'.$mostrar['nombre'].'</b>';


			}


			mysqli_close($conexion);
			echo "</table>"
		?>

    </table>
  </center>

 <center>
  <?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT DISTINCT turno_pp FROM telar_proceso INNER JOIN usuario ON telar_proceso.usuario_id=usuario.idusuario where idusuario=4 AND  DATE_FORMAT(fecha_pp, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");


					echo '<table width="174" border="">';
			echo '<tr>';
		    echo '<th1 id="turno_pp":>REALIZADO EN EL TURNO: </th>';
	        echo '</tr>';

     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<b>'.$mostrar['turno_pp'].'</b>';


			}


			mysqli_close($conexion);
			echo "</table>"
		?>

    </table>
  </center>
<head>


<br>
<br>
<br>
<br>
<br>
<br>
<!--Empieza el contenido-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<article>

<div id="apDiv1">
  <div id="apDiv2">
  <?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT id_tp , telar_tp FROM telar_planos INNER JOIN usuario ON telar_planos.usuario_id=usuario.idusuario where estado_tp='Pendiente' AND idusuario=4 AND  DATE_FORMAT(fecha_tp, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");


					echo '<table width="174" border="1">';
			echo '<tr>';
		    echo '<th id="id_tp":>Equipo Evento</th>';
			echo '<th id="telar_tp":> Estado "Pendiente"</th>';
	        echo '</tr>';

     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td  width="63">'.$mostrar['id_tp'].'</td>';
				echo '<td width="95">'.$mostrar['telar_tp'].'</td>';

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



			$constulta = mysqli_query($conexion, "SELECT id_pp , telar_pp FROM telar_proceso INNER JOIN usuario ON telar_proceso.usuario_id=usuario.idusuario where falla_pp='Por atar' AND idusuario=4 AND  DATE_FORMAT(fecha_pp, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");


					echo '<table width="163" border="1">';
			echo '<tr>';
		    echo '<th id="id_pp":> Poducto Evento</th>';
			echo '<th id="telar_pp":> Porceso "Por atar"</th>';
	        echo '</tr>';

     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td  width="78">'.$mostrar['id_pp'].'</td>';
				echo '<td width="106">'.$mostrar['telar_pp'].'</td>';

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



			$constulta = mysqli_query($conexion, "SELECT id_pp , telar_pp FROM telar_proceso INNER JOIN usuario ON telar_proceso.usuario_id=usuario.idusuario where falla_pp='Cambio de estilo'AND idusuario=4 AND  DATE_FORMAT(fecha_pp, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");


					echo '<table width="223" border="1">';
			echo '<tr>';
		    echo '<th id="id_pp":>Producto Evento</th>';
			echo '<th id="telar_pp":>Proceso &nbsp; &nbsp;&nbsp; &nbsp;"Cambio de estilo"</th>';
	        echo '</tr>';

     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td  width="78">'.$mostrar['id_pp'].'</td>';
				echo '<td width="151">'.$mostrar['telar_pp'].'</td>';

			}


			mysqli_close($conexion);
			echo "</table>"
		?>
  </table>
</div>
<div id="apDiv7">
<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT id_pp , telar_pp FROM telar_proceso INNER JOIN usuario ON telar_proceso.usuario_id=usuario.idusuario where falla_pp='Por terminar' AND idusuario=4 AND DATE_FORMAT(fecha_pp, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");


					echo '<table width="181" border="1">';
			echo '<tr>';
		    echo '<th id="id_pp":>Producto Evento</th>';
			echo '<th id="telar_pp":>Proceso &nbsp; &nbsp; "Por terminar"</th>';
	        echo '</tr>';

     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td  width="71">'.$mostrar['id_pp'].'</td>';
				echo '<td width="113">'.$mostrar['telar_pp'].'</td>';

			}


			mysqli_close($conexion);
			echo "</table>"
		?>
  </table>
</div>
<div id="apDiv8">
<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT id_pp , telar_pp FROM telar_proceso INNER JOIN usuario ON telar_proceso.usuario_id=usuario.idusuario where falla_pp='Fuera de programa' AND idusuario=4 AND DATE_FORMAT(fecha_pp, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");


					echo '<table width="243" border="1">';
			echo '<tr>';
		    echo '<th id="id_pp":>Producto Evento</th>';
			echo '<th id="telar_pp":>Proceso &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; "Fuera de programa"</th>';
	        echo '</tr>';

     	while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td  width="71">'.$mostrar['id_pp'].'</td>';
				echo '<td width="113">'.$mostrar['telar_pp'].'</td>';

			}


			mysqli_close($conexion);
			echo "</table>"
		?>
</div>
<div id="apDiv9">
<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT id_pp , telar_pp FROM telar_proceso INNER JOIN usuario ON telar_proceso.usuario_id=usuario.idusuario where falla_pp='En espera de trama' AND idusuario=4 AND DATE_FORMAT(fecha_pp, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");


					echo '<table width="219" border="1">';
			echo '<tr>';
		    echo '<th id="id_pp":>Producto Evento</th>';
			echo '<th id="telar_pp":>Proceso&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; "Espera de trama"</th>';
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

</section>
<center><p>Telares planos</p></center>
	<center><!--primera tabla-->
		<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT id_tp, fecha_tp, turno_tp, telar_tp, estilo_tp, sistema_tp, falla_tp, refa_tp, estado_tp,tipofalla_tp, com_tp FROM telar_planos INNER JOIN usuario ON telar_planos.usuario_id=usuario.idusuario WHERE idusuario=4 AND  DATE_FORMAT(fecha_tp, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");

			echo '<table border="1">';
			echo '<tr>';
			echo '<th id="id_tp":>ID</th>';
			echo '<th id="fecha_tp":>FECHA</th>';
			echo '<th id="telar_tp":>TELAR</th>';
			echo '<th id="estilo_tp":>ESTILO</th>';
			echo '<th id="sistema_tp":>SISTEMA</th>';
			echo '<th id="falla_tp":>FALLA</th>';
			echo '<th id="refa_tp":>REFACCION</th>';
			echo '<th id="estado_tp":>ESTADO</th>';
			echo '<th id="tipofalla_tp":>TIPO DE FALLA</th>';
			echo '<th id="com_tp":>COMENTARIO</th>';
	        echo '</tr>';


		while($row = mysqli_fetch_array($constulta))
				 {
  $estado_color = array(
        'Terminado' => "#E7E0B2"

   ) ?>
          <tr>
            <td><?php echo $row['id_tp']; ?></td>
            <td><?php echo $row['fecha_tp']; ?></td>
		    <td><?php echo $row['telar_tp']; ?></td>
			<td><?php echo $row['estilo_tp']; ?></td>
			<td><?php echo $row['sistema_tp']; ?></td>
            <td><?php echo $row['falla_tp']; ?></td>
            <td><?php echo $row['refa_tp']; ?></td>
		 <td bgcolor="<?php $estado_color[$row['estado_tp']] ?>"><?php echo $row['estado_tp']; ?></td>
			<td><?php echo $row['tipofalla_tp']; ?></td>
			<td><?php echo $row['com_tp']; ?></td>

			    </td>
          </tr>
          <?php
		  }

		  mysqli_close($conexion);
			echo "</table>"
		    ?>


		<br>


		<center><!--segunda tabla-->
		<center><p>Telares en proceso</p></center>
		<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT id_pp,  fecha_pp, telar_pp, estilo_pp, sistema_pp, falla_pp,tipofalla_pp, com_pp FROM telar_proceso INNER JOIN usuario ON telar_proceso.usuario_id=usuario.idusuario WHERE idusuario=4 AND  DATE_FORMAT(fecha_pp, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");

			echo '<table border="1">';
			echo '<tr>';
			echo '<th id="id_pp":>ID</th>';
			echo '<th id="fecha_pp":>FECHA</th>';
			echo '<th id="telar_pp":>TELAR</th>';
			echo '<th id="estilo_pp":>ESTILO</th>';
			echo '<th id="sistema_pp":>SISTEMA</th>';
			echo '<th id="falla_pp":>FALLA</th>';
		    echo '<th id="tipofalla_pp":>TIPO DE FALLA</th>';
			echo '<th id="com_pp":>COMENTARIO</th>';
	        echo '</tr>';



			while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td width="1%">'.$mostrar['id_pp'].'</td>';
				echo '<td width="1%">'.$mostrar['fecha_pp'].'</td>';
				echo '<td width="1%">'.$mostrar['telar_pp'].'</td>';
				echo '<td width="3%">'.$mostrar['estilo_pp'].'</td>';
				echo '<td width="2%">'.$mostrar['sistema_pp'].'</td>';
				echo '<td width="4%">'.$mostrar['falla_pp'].'</td>';
					echo '<td width="2%">'.$mostrar['tipofalla_pp'].'</td>';
				echo '<td width="10%">'.$mostrar['com_pp'].'</td>';
			}


			mysqli_close($conexion);
			echo "</table>"
		?>


		<br>



	<center><!--tercera tabla-->
	<center><p>Telares Circulares</p></center>
		<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT id_tc,  fecha_tc, equipo_tc, sistema_tc, falla_tc, refa_tc, estado_tc, tipofalla_tc,com_tc 	FROM telar_circular INNER JOIN usuario ON telar_circular.usuario_id=usuario.idusuario WHERE  idusuario=4 AND  DATE_FORMAT(fecha_tc, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");

			echo '<table border="1">';
			echo '<tr>';
			echo '<th id="id_tc":>ID</th>';
			echo '<th id="fecha_tc":>FECHA</th>';
			echo '<th id="equipo_tc":>EQUIPO</th>';
			echo '<th id="sistema_tc":>SISTEMA</th>';
			echo '<th id="falla_tc":>FALLA</th>';
			echo '<th id="refa_tc":>REFACCION</th>';
			echo '<th id="estado_tc":>ESTADO</th>';
			echo '<th id="tipofalla_tc":>TIPO DE FALLA</th>';
			echo '<th id="com_tc":>COMENTARIO</th>';

		while($row = mysqli_fetch_array($constulta)) {
  $estado_color = array(
        'Terminado' => "#E7E0B2"

   ) ?>
          <tr>
            <td><?php echo $row['id_tc']; ?></td>
            <td><?php echo $row['fecha_tc']; ?></td>
			<td><?php echo $row['equipo_tc']; ?></td>
            <td><?php echo $row['sistema_tc']; ?></td>
            <td><?php echo $row['falla_tc']; ?></td>
			<td><?php echo $row['refa_tc']; ?></td>
			<td bgcolor="<?php $estado_color[$row['estado_tc']] ?>"><?php echo $row['estado_tc']; ?></td>
            <td><?php echo $row['tipofalla_tc'];?></td>
			<td><?php echo $row['com_tc']; ?></td>
	    </td>
          </tr>
          <?php
		  }

		  mysqli_close($conexion);
			echo "</table>"
		    ?>
        
		<br>

	<center><!--quinta tabla-->
		<center><p>Urdidor</p></center>
		<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT id_u, fecha_u, equipo_u, sistema_u,falla_u, refa_u, estado_u, tipofalla_u, com_u FROM urdidor INNER JOIN usuario ON urdidor.usuario_id=usuario.idusuario WHERE idusuario=4 AND DATE_FORMAT(fecha_u, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");

			echo '<table border="1">';
			echo '<tr>';
			echo '<th id="id_u":>ID</th>';
			echo '<th id="fecha_u":>FECHA</th>';
			echo '<th id="equipo_u":>EQUIPO</th>';
			echo '<th id="sistema_u":>SISTEMA</th>';
			echo '<th id="falla_u":>FALLA</th>';
			echo '<th id="refa_u":>REFACCION</th>';
			echo '<th id="estado_u":>ESTADO</th>';
			echo '<th id="tipofalla_u":>TIPO DE FALLA</th>';
			echo '<th id="com_u":>COMENTARIO</th>';
	        echo '</tr>';

				while($row = mysqli_fetch_array($constulta))
			{

		    $estado_color = array(
           'Terminado' => "#E7E0B2"

   ) ?>
          <tr>
            <td><?php echo $row['id_u']; ?></td>
            <td><?php echo $row['fecha_u']; ?></td>
			<td><?php echo $row['equipo_u']; ?></td>
            <td><?php echo $row['sistema_u']; ?></td>
            <td><?php echo $row['falla_u']; ?></td>
			<td><?php echo $row['refa_u']; ?></td>
			<td bgcolor="<?php $estado_color[$row['estado_u']] ?>"><?php echo $row['estado_u']; ?></td>
			<td><?php echo $row['tipofalla_u'];?></td>
            <td><?php echo $row['com_u']; ?></td>

				    </td>
          </tr>
          <?php
		  }

		  mysqli_close($conexion);
			echo "</table>"
		    ?>


		<br>

	<center><!--sexta tabla-->
		<center><p>Transporte de Plegadores</p></center>
		<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT id_p,fecha_p,equipo_p,sistema_p, falla_p,refa_p,estado_p,tipofalla_p,com_p FROM
plegadores INNER JOIN usuario ON plegadores.usuario_id=usuario.idusuario
 WHERE idusuario=4 AND DATE_FORMAT(fecha_p, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");

			echo '<table border="1">';
			echo '<tr>';
			echo '<th id="id_p":>ID</th>';
			echo '<th id="fecha_p":>FECHA</th>';
			echo '<th id="equipo_p":>EQUIPO</th>';
			echo '<th id="sistema_p":>SISTEMA</th>';
			echo '<th id="falla_p":>FALLA</th>';
			echo '<th id="refa_p":>REFACCION</th>';
			echo '<th id="estado_p":>ESTADO</th>';
			echo '<th id="tipofalla_p":>TIPO DE FALLA </th>';
			echo '<th id="com_p":>COMENTARIO</th>';
	        echo '</tr>';


					while($mostrar = mysqli_fetch_array($constulta))
				{
  $estado_color = array(
        'Terminado' => "red"

   ) ?>

   <tr>
            <td><?php echo $mostrar['id_p']; ?></td>
            <td><?php echo $mostrar['fecha_p']; ?></td>
			<td><?php echo $mostrar['equipo_p']; ?></td>
            <td><?php echo $mostrar['sistema_p']; ?></td>
            <td><?php echo $mostrar['falla_p']; ?></td>
			<td><?php echo $mostrar['refa_p']; ?></td>
			<td bgcolor="<?php $estado_color[$mostar['estado_p']] ?>"><?php echo $mostrar['estado_p']; ?></td>
			<td><?php echo $mostrar['tipofalla_p']; ?></td>
			<td><?php echo $mostrar['com_p']; ?></td>

			    </td>
          </tr>
          <?php
		  }

		  mysqli_close($conexion);
			echo "</table>"
		    ?>


		<br>

		<center><!--septima tabla-->
			<center><p>calentadores</p></center>
		<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT id_c,fecha_c,equipo_c,sistema_c,falla_c,refa_c,estado_c,tipofalla_c,com_c FROM
calentadores INNER JOIN usuario ON calentadores.usuario_id=usuario.idusuario
 WHERE idusuario=4 AND  DATE_FORMAT(fecha_c, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");

			echo '<table border="1">';
			echo '<tr>';
			echo '<th id="id_c":>ID</th>';
			echo '<th id="fecha_c":>FECHA</th>';
			echo '<th id="equipo_c":>EQUIPO</th>';
			echo '<th id="sistema_c":>SISTEMA</th>';
			echo '<th id="falla_c":>FALLA</th>';
			echo '<th id="refa_c":>REFACCION</th>';
			echo '<th id="estado_c":>ESTADO</th>';
			echo '<th id="tipofalla_c":>TIPO DE FALLA</th>';
			echo '<th id="com_c":>COMENTARIO</th>';
	        echo '</tr>';

					while($row = mysqli_fetch_array($constulta))
		 {

		    $estado_color = array(
        'Terminado' => "#E7E0B2"

   ) ?>
            <td><?php echo $row['id_c']; ?></td>
            <td><?php echo $row['fecha_c']; ?></td>
			<td><?php echo $row['equipo_c']; ?></td>
            <td><?php echo $row['sistema_c']; ?></td>
            <td><?php echo $row['falla_c']; ?></td>
			<td><?php echo $row['refa_c']; ?></td>
			<td bgcolor="<?php $estado_color[$row['estado_c']] ?>"><?php echo $row['estado_c']; ?></td>
		  <td><?php echo $row['tipofalla_c'];?></td>
			<td><?php echo $row['com_c']; ?></td>
			   </td>
          </tr>
          <?php
		  }

		  mysqli_close($conexion);
			echo "</table>"
		    ?>
			<br>

		<center><!--Octava tabla-->
<center><p>Vaporizador</p></center>
		<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");



			$constulta = mysqli_query($conexion, "SELECT id_v,fecha_v,equipo_v,sistema_v,falla_v,refa_v,estado_v,tipofalla_v,com_v FROM
vaporizador INNER JOIN usuario ON vaporizador.usuario_id=usuario.idusuario WHERE idusuario=4 AND  DATE_FORMAT(fecha_v, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");

			echo '<table border="1">';
			echo '<tr>';
			echo '<th id="id_v":>ID</th>';
			echo '<th id="fecha_v":>FECHA</th>';
			echo '<th id="equipo_v":>EQUIPO</th>';
			echo '<th id="sistema_v":>SISTEMA</th>';
			echo '<th id="falla_v":>FALLA</th>';
			echo '<th id="refa_v":>REFACCION</th>';
			echo '<th id="estado_v":>ESTADO</th>';
			echo '<th id="tipofalla_v":>TIPO DE FALLA</th>';
			echo '<th id="com_v":>COMENTARIO</th>';
	        echo '</tr>';
				while($row = mysqli_fetch_array($constulta))


				{
  $estado_color = array(
        'Terminado' => "#E7E0B2"

   ) ?>
          <tr>
            <td><?php echo $row['id_v']; ?></td>
            <td><?php echo $row['fecha_v']; ?></td>
			<td><?php echo $row['equipo_v']; ?></td>
            <td><?php echo $row['sistema_v']; ?></td>
            <td><?php echo $row['falla_v']; ?></td>
			<td><?php echo $row['refa_v']; ?></td>
			<td bgcolor="<?php $estado_color[$row['estado_v']] ?>"><?php echo $row['estado_v']; ?></td>
			<td><?php echo $row['tipofalla_v']; ?></td>
			<td><?php echo $row['com_v']; ?></td>

		    </td>
          </tr>
          <?php
		  }

		  mysqli_close($conexion);
			echo "</table>"
		    ?>
			<br>


				<center><!--novena tabla-->
			<center><p>Personal</p></center>
		<?php
			$server ="localhost";
			$usuario = "root";
			$pass = "";
			$bd = "equipos_p";

			$conexion = mysqli_connect($server,$usuario,$pass,$bd)
			or die ("Error en la conexion");


			$constulta = mysqli_query($conexion, "SELECT id_pe, turno_pe,nombre_pe,apellido_pe,fecha_pe,com_pe,(ELT(WEEKDAY(fecha_pe) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS DIA_SEMANA FROM personal INNER JOIN usuario ON personal.usuario_id=usuario.idusuario  WHERE idusuario=4 AND DATE_FORMAT(fecha_pe, '%Y-%m-%d') = CURDATE()")
				or die ("Error al observar los registros");


			echo '<table border="1">';
			echo '<tr>';
			echo '<th id="id_pe":>ID</th>';
			echo '<th id="nombre_pe":>Nombre</th>';
			echo '<th id="apellido_pe":>Apellido</th>';
			echo '<th id="fecha_pe":>FECHA</th>';
			echo '<th id="com_pe":>COMENTARIO</th>';
			echo '<th id="DIA_SEMANA":>DÌA DE LA SEMANA</th>';
	        echo '</tr>';

			while($mostrar = mysqli_fetch_array($constulta))
			{
				echo '<tr>';
				echo '<td width="1%">'.$mostrar['id_pe'].'</td>';
			    echo '<td width="4%">'.$mostrar['nombre_pe'].'</td>';
				echo '<td width="4%">'.$mostrar['apellido_pe'].'</td>';
				echo '<td width="2%">'.$mostrar['fecha_pe'].'</td>';
				echo '<td width="10%">'.$mostrar['com_pe'].'</td>';
				echo '<td width="3%">'.$mostrar['DIA_SEMANA'].'</td>';

			}


			mysqli_close($conexion);
			echo "</table>"

		?>

		<br>

		</section>


		<br>
		</br>

<center><button type="button" value="Regresar" class="btn btn-secondary tn-lg" id="regresar" onclick="history.back()" >
 <span class="fi fi-arrow-left">SALIR</span></button></center>
						<br>



		  <script src="html2canvas.min.js"></script>

     <script>
  html2canvas(document.body,{
  onrendered (canvas) {
    var link = document.getElementById('download');;
    var image = canvas.toDataURL();
    link.href = image;
    link.download = 'REPORTE MANTENIMIENTO TEJIDO PLANO,CIRCULARES,JARETA Y URDIDO.png';
  }
 });
 </script>



	</body>
</html>

</body>
