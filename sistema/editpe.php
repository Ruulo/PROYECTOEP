
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
h2 {
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


  <h2><center><span class="fi fi-clipboard-pencil" style=" font-size:0.9em; color:#000; text-shadow:1px 1px  #4cb6ea;"></span><b> ACTUALIZAR DATOS DEL PERSONAL</h2></center></b>
        <hr>



<?php
include("../conexion.php");
$nombre_pe = '';
$apellido_pe= '';
$com_pe = '';


if  (isset($_GET['id_pe'])) {
  $id_pe = $_GET['id_pe'];
  $query = "SELECT * FROM personal WHERE id_pe=$id_pe";
  $result = mysqli_query($conection, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
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
      <form action="editpe1.php?id_pe=<?php echo $_GET['id_pe']; ?>" method="POST">
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
  <!-- Empieza pie de pagina -->
<br></br>
<footer>
		
<h5> ©BAG CORP Integrity Delivered</h5>

	</footer>
<!-- Empieza pie de pagina -->	
</body>
<html>
		 
		  
									 
