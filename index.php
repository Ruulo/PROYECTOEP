<?php

$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
	header('location:./sistema');
}else{

	if(!empty($_POST))
	{
		if(empty($_POST['usuario']) || empty($_POST['clave']))
		{
			$alert = 'Ingrese su usuario y su clave';
		}else{

			require_once "conexion.php";

			$user = mysqli_real_escape_string($conection,$_POST['usuario']);
			$pass = md5(mysqli_real_escape_string($conection,$_POST['clave']));

				//echo $pass;exit;

			$query=mysqli_query($conection,"SELECT * FROM usuario WHERE usuario= '$user' AND clave = '$pass'");
			mysqli_close($conection);

			$result=mysqli_num_rows($query);

			if($result > 0)
			{
				$data = mysqli_fetch_array($query);
				$_SESSION['active'] = true;
				$_SESSION['idUser'] = $data['idusuario'];
				$_SESSION['nombre'] = $data['nombre'];
				$_SESSION['email']  = $data['email'];
				$_SESSION['user']   = $data['usuario'];
				$_SESSION['rol']    = $data['rol'];

				header('location:./sistema');
			}else{
				$alert = 'El Usuario ó clave incorrectos';
				session_destroy();
			}
		}
	}
}
 ?>


<html lang="en">
<head>
<meta charset="utf-8">
	<title>Index</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--icono de la pagina web-->
	<link rel="icon"  type="image/00.png"  href="img/00.png">
<!--nav-->
  <link rel="stylesheet" href="bootstrap/bootstrap.min1.css">
  <!--css de inicio (index)-->
  <link rel="stylesheet" href="css/inicio.css">
	<!-- CSS  de carrusel-->
   <link rel="stylesheet" href="css/supersized.css">
	 <link rel="stylesheet" href="css/fontper.css">

   <!-- ///////Javascript de carrusel///////-->
   <!--<script src="js/jquery-1.8.2.min.js"></script>-->
   <!--<script src="js/supersized.3.2.7.min.js"></script>-->
	 <!--//////////////////////////////////////-->
   <!--login-->
  <link rel="stylesheet" href="css/login.css">
  <!--iconos-->
  <link rel='stylesheet' href='css/fontello.css'>
	<link rel='stylesheet' href='css/foundation-icons.css'>
</head>
<!--///////////////////////////////////////////////////////-->
<style>
body {
  background-image: url('img/mejoraun.png');
   background-size: 100%;
}
</style>
<!--//////////////////////-BANER-/////////////////////-->
<!--<nav class="navbar navbar-default navbar-expand-lg navbar-light">-->
<!--<div class="navbar-header d-flex col">-->
<!--<a class="navbar-brand" href="#"><b></b></a>-->
<div id="apDiv1"><img src="img/12claro.png" width="185" height="58" alt="1"/></div>
<!--</div>-->
<body>
<br>
<br>
<br>
<br>
<br>


<div class="overlay">
<!--////////////////////FORM DE LOGIN////////////////////////-->
<!-- LOGN IN FORM by Omar Dsoky -->
<form action="" method="POST">
<!--   con = Container  for items in the form-->
<div class="con">
<!--     Start  header Content  -->
<header><h4 id="fuente-personalisada">INICIO DE SESION</h4></header>
<!--///////////////ACAMPOS DE USUARIO Y CONTRASEÑA//////-->
  <div class="field-set">
	<input class="form-input" id="name"  type="name"   name="usuario" placeholder="Usuario">
	<span><i class="icon-user-o" id="mono"></i></span>
      <br><br><!--   Password -->
  <input class="form-input"   id="pwd" type="password" name="clave"  placeholder="Contraseña">
    <!--      Show/hide password  -->
  <span><i class="icon-eye"   aria-hidden="true"  type="button" id="eye"></i></span>

  <div class="alert"><?php echo isset($alert) ? $alert : ' '; ?></div>
  <button  class="icon-login" > Iniciar </button>
  </div>
	<!--//////////////STYLE PARA EL CAMpO CONTRASEÑA QUE NO SE AMONTONE///////////////////////////-->
       <script  src="js/index.js"></script>
   <!--   End Conrainer  -->
  </div>
   <!-- End Form -->
</form>
<!--////////////////////FORM DE LOGIN////////////////////////-->
</div>
 </br>
  </br>
    </br>
</br>
</body>
</html>
