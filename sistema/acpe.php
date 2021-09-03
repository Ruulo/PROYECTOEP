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


<title>Personal</title>
</head>
<style type="text/css">
h2{
	color:#4c4c4c;
}
</style>

<script type="text/javascript">
function ConfirmDelete()
{
var respuesta = confirm("Esta seguro que decea efectuar los cambios?");
if (respuesta == true)
{
return true;
}
else {
return false;
}
}

</script>
<body>
  <!--logo--><div class="logo logo_main"></div> <img src="../img/baner_admin.png" width="100%" height="100%"  /></div>

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
</br>
  <h2><center><span class="fi fi-torsos-all" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> ACTUALIZAR DATOS DEL PERSONAL</h2></center></b>
  <hr>


<?php
include("../conexion.php");
$turno_pe = '';
$nombre_pe = '';
$apellido_pe= '';
$com_pe = '';


if  (isset($_GET['id_pe'])) {
  $id_pe = $_GET['id_pe'];
  $query = "SELECT * FROM personal WHERE id_pe=$id_pe";
  $result = mysqli_query($conection, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
	$turno_pe = $row['turno_pe'];
    $nombre_pe = $row['nombre_pe'];
    $apellido_pe = $row['apellido_pe'];
    $com_pe = $row['com_pe'];
  }
}


?>
<?php include('../includes/header.php'); ?>
<div class="container p-6">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
	  			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
      <form action="acpe1.php?id_pe=<?php echo $_GET['id_pe']; ?>" method="POST">

		 <div class="form-group">
		    <td><label><b>TURNO:</b></label></td><td>
          <input type="numeric"  name="turno_pe" class="form-control"  value="<?php echo $turno_pe;?>"></input>
          </div>

		<div class="form-group">
		    <td><label><b>NOMBRE:</b></label></td><td>
          <input type="text" name="nombre_pe" class="form-control" value="<?php echo $nombre_pe;?>"></input>
        </div>
        <div class="form-group">
		    <td><label><B>APELLIDO:</B></label></td><td>
       <input type="text" name="apellido_pe" class="form-control" value="<?php echo $apellido_pe;?>" placeholder="">
        </div>


         <div class="form-group">
		    <td><label><B>COMENTARIO:</B></label></td><td>
            <input type="text" name="com_pe" class="form-control" value="<?php echo $com_pe;?>" placeholder=""></input>
			</div>


  	 <Center>  <button class="btn btn-primary tn-lg"  name="update" onclick="return ConfirmDelete()">
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
  <!-- Empieza pie de pagina -->
<br></br>
<footer>

<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->
</body>
</html>





































<!-->
