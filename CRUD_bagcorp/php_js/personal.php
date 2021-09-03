<?php
include("../bd/conexion.php");
 ?>
<!doctype html>
<html lang="en">
<!--HEAD////////////////////////////////////////////////////////////////////////////////////////-->
<!--HEAD--><HEAD>   <!--Required meta tags-->
<!--HEAD--><meta charset="utf-8">
<!--HEAD--><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--HEAD--><link rel="shortcut icon" href="#" />
<!--HEAD--><title>PERSONAL</title>
<!--HEAD--><link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<!--HEAD-->          <!-- CSS personalizado -->
<!--HEAD--><link rel="stylesheet" href="../css/estilos_Per.css">
<!--HEAD-->          <!--datables CSS básico-->
<!--HEAD--><link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css"/>
<!--HEAD-->          <!--datables estilo bootstrap 4 CSS-->
<!--HEAD--><link rel="stylesheet"  type="text/css" href="../assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
<!--HEAD--><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--HEAD--><script src="https://kit.fontawesome.com/85f04a4f91.js" crossorigin="anonymous"></script>
<!--HEAD--><link rel='stylesheet' href='../css/fontper.css'>
<!--HEAD--><link rel='stylesheet' href='../../css/foundation-icons.css'>
<!--HEAD--><script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--HEAD--></HEAD>
<!--HEAD//////////////////////###############///////////////////////////////////////////-->

<BODY>

<!--//EMPIEZA >>////ICONO PERSONAL Y LETRAS - (TITULO DE LA HOJA)///-->
<!----><div class="">
<!----><h2 id="letras_personal"><center><p><span >
<!----><img src="../img/u.png" width="50px" height="50px"/>
<!----><b>PERSONAL</h2></b></center></p></span>
<!----></div>
<!--/////////////////////////###############//////////////////////////////////-->
<div id="divmodo">
  <select id="modo" onchange="switchModo()">
    <option style="font-weight:bold" >&nbsp;&nbsp;LISTADO PERSONAL</option>
    <option style="font-weight:bold">&nbsp;&nbsp;REPORTES PERSONAL</option>
  </select>
</div>

<!--///Empieza >>>>//// BOTONES/////////////BOTONES//////////////////BOTONES/////////////////-->
<!----><MAIN class="container"><!--container es una clase de boostrap-->
<!----><div class="row col-lg-30">
<!----><div class="table-responsive" style="overflow-x:auto; bgcolor:red">
<!----><table class="table table-striped">
<!---->
<!----><div id="divbtnAñadir">
<!----><button id="btnNuevo" type="button"><i class="fas fa-plus-square"></i> AÑADIR</button>
<!----></div>
<!----><div id="divbtnAddRepo">
<!----><button id="btnAddRepo" type="button"><i class="fas fa-plus-square"></i> AÑADIR</button>
<!----></div>
<!---->           <!--////FORM FECHAS////-->
<!----><div id="divFechasPer">
<!----><form id="formfechasPer">
<!----> <input type="date" name="fecha_de" id="fecha_de" class="" value="" required>
<!----> <input type="date" name="fecha_a"  id="fecha_a"  class="" value="" required>
<!----><button type="submit" id="btnSubmit" value="" class="search"> Buscar</button>
<!----></form>
<!----></div>
<!---->            <!--BUSCADOR >>> TURNOS-->
<!----><div id="divTurno">
<select name="busqueda"class="custom-select custom-select-sm" id="busquedaTurno">
<!--//-->                         <option value="" disabled selected>Turno...</option>
<!--//-->                          <option value="1">1</option>
<!--//-->                          <option value="2">2</option>
                                   <option value="3">3</option>
                                   </select>
<div id="divlupita">
<a  id="lupita" type="button" onclick="Reportes()" class='btn-small'><i class='fas fa-search'></i></a>
</div>
</div>
<!---->         <!--BOTON DESCARGA DE LISTADO-->
<!----><div id="divDescarga">
<!----><a href="../../EXCEL/per.php"><button id="btnExcel" type="button"> Excel
<!----><i class="fas fa-file-download"></i></button></a>
<!----></div>
<!----></table>
<!----></div>
<!----></div>
<!----></MAIN>
<!--///////////////////////////##############/////////////////////////////////////////////////////-->

<!--//EMPIEZA >>> /////////////////////ENCABEZADO DE LA TABLA////////////////////////////////////////////////////////////////////////////////////////-->
<!----><div class="container caja">
<!---->   <div class="row">
<!---->      <div class="col-lg-12"> <!--col-lg-12 hace referencia a el ancho de las columnas-->
<!---->        <div class="table-responsive">
<!---->              <table id="DataTable" class="table-bordered table-hover table-striped table-row-border dt-responsive" style="width:100%">
<!---->              <thead class="" >
<!---->               </thead>
 <!----><!---->

<!---->               <tbody id="tbody">
<!---->               </tbody>
<!---->               </table>
<!---->           <span></span>
<!---->        </div>
<!---->      </div>
<!---->   </div>
<!----></div>
<!--//////////////////////////################///////////////////////////////////////////////-->



<!--/////////////////-MODAL CRUD 1-//////////////-MODAL CRUD 1-//////////////-MODAL CRUD 1-///////////////-->
<!--//--><div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

<!--//--><div class="modal-dialog " role="document"><!--al parecer lo de role=document no afecta-->
<!--//--><div class="modal-content">
<!--//--><div class="modal-header d-block"><!--a qui se ingresa un color pero desde el main.js-->
<!--//--><h5 class="modal-title text-center" id="exampleModalLabel"></h5><!--a qui se ingresa un tituolo pero desde el main.js-->
<!--//--> <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
<!--//--></div>
<!--//-->      <form id="formPersonal">
<!--//-->          <div class="modal-body">
<!--//-->                <!--formulario btnNuevo-->
<!--//-->             <div class="col-lg-6">
<!--//-->             <div class="form-group">
<!--//-->
<!--//-->               <label for="" class="col-form-label">ID Nomina:</label>
<!--//-->               <input type="text" class="form-control form-control-sm" id="id_pe" required>
<!--//-->
<!--//-->               <label for="" class="col-form-label">Nombre:</label>
<!--//-->               <input type="text" class="form-control form-control-sm" id="nom_pe" required>
<!--//-->
<!--//-->               <label for="" class="col-form-label">A. paterno:</label>
<!--//-->               <input type="text" class="form-control form-control-sm" id="ap_pa" required>
<!--//-->
<!--//-->               <label for="" class="col-form-label">A. materno:</label>
<!--//-->               <input type="text" class="form-control form-control-sm" id="ap_ma" required>
<!--//--><!--en caso de que quiera que la fecha se capture actual, tomandose del sistema se oculta el label y el input.-->
<!--//--> <!--Las siguientes dos lineashacen eso hay que descomentarlas-->
<!--//--><!--<label for="" style="display:none;" class="col-form-label">Fecha:</label>-->
<!--//--><!--/<input type="hidden" class="form-control form-control-sm" id="fecha_pe"> /-->
<!--//-->                  <label for="" class="col-form-label">Fecha Registro:</label>
<!--//-->                  <input type="date" class="form-control form-control-sm" id="fecha_reg" required >
<!--//-->                  <br>
<!--//-->                        <select class="custom-select custom-select-sm" id="status" required>
<!--//-->                          <option value="" disabled selected>status</option>
<!--//-->                          <option value="0">0</option>
<!--//-->                          <option value="1" selected>1</option>
<!--//-->                        </select>
<!---->                      <br>
<!--//-->                    </div>
<!--//-->                    </div>
<!--//-->           <!--Button-------->
<!--//-->           <div class="modal-footer">
<!--//-->               <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
<!--//-->               <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
<!--//-->           </div>
                   </div>
<!--//-->         </form>
<!--//-->  </div>
<!--//--></div>
<!----></div>
<!--/////////////////-MODAL CRUD 1-//////////////-MODAL CRUD 1-//////////////-MODAL CRUD 1-///////////////-->






<!--/////////////////-MODAL CRUD 2-////////////-MODAL CRUD 2-////////////-MODAL CRUD 2-//////////////////-->
<!-- Button trigger modal -->
  <div class="modal fade" id="modalCRUD2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header d-block">
        <h5 class="modal-title text-center"></h5>
      </div>
      <form id="formRepoPersonal">
      <div class="modal-body">
        <!--//-->             <div class="col-lg-6">
        <!--//-->             <div class="form-group">
        <!--//--><!--***********SELECT************SELECT************SELECT***********-->
        <!--//-->
<div id="divEvento">
    <label id="lblevento" for="col-form-label">EVENTO:</label>
    <input type="text" class="form-control form-control-sm" id="idrepo_pe" style="width:70px" disabled>
</div><br>



                        <center>
        <!--//-->         <select name="reportes" class="custom-select custom-select-sm" id="idusuario9" required>
                          <option value="" disabled selected>REPORTADOR</option>
                          <?php
                          $objeto = new Conexion();//objeto coneccion
                          $conexion = $objeto->Conectar();
                          $query = "select nom_usuario, idusuario from usuarios";
                          $resultado = $conexion->prepare($query);
                          $resultado->execute();
                          while ($row = $resultado->fetch()) {
                            echo "<option value=" . $row['idusuario'] . ">" . $row['idusuario'] . " - " . $row['nom_usuario'] . "</option>";
                          }
                           ?>
                          </select>
                          </center>
                          <br>
        <!--//--><!--***********SELECT************SELECT************SELECT***********-->
                          <center>
          <!--//-->         <select name="idnomina" class="custom-select custom-select-sm" id="id_reportado" required>
                            <option value="" disabled selected>REPORTADO</option>
                            <?php

                            $objeto = new Conexion();//objeto coneccion
                            $conexion = $objeto->Conectar();
                            $query = "select id_pe, nom_pe from personal";
                            $resultado = $conexion->prepare($query);
                            $resultado->execute();
                            while ($row = $resultado->fetch()) {
                              echo "<option value=" . $row['id_pe'] . ">" . $row['id_pe'] ." - ". $row['nom_pe']. "</option>";
                            }
                             ?>
                            </select>
                            </center>
                          <br>
          <!--//--><!--***********SELECT************SELECT************SELECT***********-->
                            <select name="turno123" class="custom-select custom-select-sm" id="turno_pe" required>
                              <option value="" disabled selected>TURNO</option>
                              <option value="1">1</option>
                                <option value="2">2</option>
                                  <option value="3">3</option>
                            </select>
                          <br>


                            <label id="lblfecha" class="col-form-label"><h8>FECHA:</h8></label>
                            <input type="date" class="form-control form-control-sm" id="fecharepo_per" required >
                            <br>
                            <br>

                            <textarea name="comentarios" maxlength="59" rows="2" cols="51" placeholder="Detalle ó comentario" id="comrepo_pe" required></textarea>

        <!--//-->                    </div>
        <!--//-->                    </div>

      <div class="modal-footer">
       <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
       <button type="submit" id="btnGuardarRepo" class="btn btn-dark">Guardar</button>
       </div>
       </div>
       </form>
    </div>
  </div>
</div>
<!--/////////////////-MODAL CRUD 2-////////////-MODAL CRUD 2-////////////-MODAL CRUD 2-//////////////////-->

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/popper/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- datatables JS -->
    <script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="personal.js"></script>
  </BODY>
</html>
