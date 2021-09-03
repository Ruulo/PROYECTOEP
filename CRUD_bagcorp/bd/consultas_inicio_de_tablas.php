<?php
include_once '../bd/conexion.php';// include once se utilisa para traer el rchivo conexion, osea que se conecte a al base de datos
$objeto = new Conexion();//objeto coneccion
$conexion = $objeto->Conectar();

$opcion   = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$turno  = (isset($_POST['turno'])) ? $_POST['turno'] : NULL;


switch($opcion){
/*LISTADO PERSONAL*/
    case 1:
        $consulta = "SELECT * FROM personal";
        break;
/*LISTADO REPORTES DE PERSONAL*/
    case 2:
        $consulta = "SELECT * FROM `reporte_personal` inner JOIN personal ON reporte_personal.id_reportado = personal.id_pe";
        if($turno != ''){
        $consulta = $consulta . " WHERE turno_pe = $turno";
        } error_log($consulta); /*sirve para ver los errorres en el lado del servidor en el archivo Apache(error.log) en xampp*/
        break;
/*LISTADO REPORTES TELARES JUMBO*/
   case 3:
        $consulta = "SELECT * FROM reportes_tj inner join sistemas_tj on reportes_tj.idsis_tj1 = sistemas_tj.idsis_tj inner join fallas_tj on reportes_tj.idfalla_tj1 = fallas_tj.idfalla_tj";
        break;
  }
/*error_log($consulta); SIRVE PARA VER LOS ERORES EN XAMPP ALDO DEL SERVIDOR */
//SI ME MANDA EL RESULTADO DE LA CONSULTA EN FORMATO JASON PERO NO ME LO MUESTRA, AL PARECER RELISA LA OPCION 4 Y LA 5 AL MISMO
//TIEMPO UNA VEZ PRECIONANDO EL BOTON SUBMIT
error_log($consulta);
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);//fetchAll TRAE TODOS LOS DATOS DE GOLPE

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a ajax (archivo de javascript)
$conexion = NULL;
