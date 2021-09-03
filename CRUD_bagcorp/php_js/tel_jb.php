<?php
include("../bd/conexion.php");
 ?>
<!DOCTYPE html>
<html lang="en">
  <HEAD>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--HEAD--><link rel="shortcut icon" href="#" />
<!--HEAD--><title>TEL JUMBO</title>
<!--HEAD--><link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<!--HEAD-->          <!-- CSS personalizado -->
<!--HEAD--><link rel="stylesheet" href="../css/estilosTJ.css">
<!--HEAD-->          <!--datables CSS básico-->
<!--HEAD--><link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css"/>
<!--HEAD-->          <!--datables estilo bootstrap 4 CSS-->
<!--HEAD--><link rel="stylesheet"  type="text/css" href="../assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
<!--HEAD--><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--HEAD--><script src="https://kit.fontawesome.com/85f04a4f91.js" crossorigin="anonymous"></script>
<!--HEAD--><link rel='stylesheet' href='../css/fontper.css'>
<!--HEAD--><link rel='stylesheet' href='../../css/foundation-icons.css'>
<!--HEAD--><script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </HEAD>

  <BODY>
    <!----><div class="">
    <!----><h2 id="letras_personal"><center><p><span >
    <!----><img src="../img/telar_img.png" width="50px" height="50px"/>
    <!----><b>TELARES JUMBO</h2></b></center></p></span>
    <!----></div>
    <br>


<MAIN class="container"><!--container es una clase de boostrap-->
<!----><div class="row col-lg-30">
<!----><div class="table-responsive" style="overflow-x:auto; bgcolor:red">
<!----><table class="table table-striped">

<div class="BARRA_DE_BOTONES">

  <div class="flotarizquierda">
  <button id="btnAddrepo" class="azulitos flotarizquierda"  type="button"><i class="fas fa-plus-square"></i> AÑADIR</button>
  </div>

  <div id="divfechas"class="flotarizquierda">
  <form id="formfechasPer">
     <input type="date" name="fecha_de" id="fecha_de" class="" value="" required>
     <input type="date" name="fecha_a"  id="fecha_a"  class="" value="" required>
     <button type="submit" id="btnSubmit" value="" class="azulitos"> Buscar</button>
  </form>
  </div>

  <div id="divturno" class="flotarizquierda">
  <select name="busqueda"class="custom-select custom-select-sm" id="busquedaTurno">
    <option value="" disabled selected>Turno...</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select>
  </div>

  <div class="flotarizquierda">
  <a id="lupita" type="button" onclick="Reportes_TJ()" class='btn-small'><i class='fas fa-search'></i></a>
  </div>

<div  id="divExcel" class="flotarizquierda">
<a href="../../EXCEL/per.php"><button id="btnExcel" type="button"> Excel
<i class="fas fa-file-download"></i></button></a>
</div>
</div><!--BARRA DE BOTONES-->

</table>
</div>
</div>
</MAIN>

    <!--//EMPIEZA >>> /////////////////////ENCABEZADO DE LA TABLA//////////////////////////////////////////////////-->
    <!----><div class="container caja">
    <!---->   <div class="row">
    <!---->      <div class="col-lg-12"> <!--col-lg-12 hace referencia a el ancho de las columnas-->
    <!---->        <div class="table-responsive">
    <!---->              <table id="DataTable_TJ" class="table-bordered table-hover table-striped table-row-border dt-responsive" style="width:100%">
    <!---->              <thead class="" >
    <!---->               </thead>

     <!---->                  <tbody id="tbody">
    <!---->                   </tbody>
    <!---->               </table>
    <!---->           <span></span>
    <!---->        </div>
    <!---->      </div>
    <!---->   </div>
    <!----></div>
    <!--//////////////////////////################///////////////////////////////////////////////-->


    <!--###############################################-MODAL-############################################ -->
    <!--###############################################-MODAL-############################################ -->
    <!--###############################################-MODAL-############################################ -->
    <!--###############################################-MODAL-############################################ -->
      <div class="modal fade bd-example-modal-sm"  id="modalREPO_TJ" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header d-block">
            <h5 class="modal-title text-center"></h5>
          </div>
          <form id="formREPO_TJ">
          <div class="modal-body">
            <!--//-->             <div class="col-lg-12">
            <!--//-->             <div class="form-group">
            <!--//--><!--***********SELECT************SELECT************SELECT***********-->
            <!--//-->
    <div id="divEvento">
        <label id="lblevento" for="col-form-label">EVENTO:</label>
        <input type="text" class="form-control form-control-sm" id="idrepo_tj" style="width:50px" disabled>
    </div>



                              <center>
            <!--//-->         <select name="reportes" class="custom-select custom-select-sm separado" id="idusuario1" required>
                              <option value="" disabled selected>REPORTADOR</option>
                              <?php
                              $objeto = new Conexion();//objeto coneccion
                              $conexion = $objeto->Conectar();
                              $query = "select idusuario, nom_usuario  from usuarios";
                              $resultado = $conexion->prepare($query);
                              $resultado->execute();
                              while ($row = $resultado->fetch()) {
                                echo "<option value=" . $row['idusuario'] . ">" . $row['idusuario'] . " - " . $row['nom_usuario'] . "</option>";
                              }
                               ?>
                              </select>
                              </center>




            <!--//--><!--***********SELECT************SELECT************SELECT***********-->
                                <center>
              <!--//-->         <select name="id_tj" class="custom-select custom-select-sm separado" id="id_tj1" required>
                                <option value="" disabled selected>TELAR</option>
                                <?php

                                $objeto = new Conexion();//objeto coneccion
                                $conexion = $objeto->Conectar();
                                $query = "select id_tj, telar_jumbo from telares_jumbo";
                                $resultado = $conexion->prepare($query);
                                $resultado->execute();
                                while ($row = $resultado->fetch()) {
                                  echo "<option value=" . $row['id_tj'] . ">" . $row['id_tj'] ." - ". $row['telar_jumbo']. "</option>";
                                }
                                 ?>
                                </select>
                                </center>


                              <center>
              <!--//-->         <select name="idsis_tj" class="custom-select custom-select-sm separado" id="idsis_tj1" required>
                                <option value="" disabled selected>SISTEMA</option>
                                <?php

                                $objeto = new Conexion();//objeto coneccion
                                $conexion = $objeto->Conectar();
                                $query = "select idsis_tj, sis_tj from sistemas_tj";
                                $resultado = $conexion->prepare($query);
                                $resultado->execute();
                                while ($row = $resultado->fetch()) {
                                  echo "<option value=" . $row['idsis_tj'] . ">" . $row['idsis_tj'] ." - ". $row['sis_tj']. "</option>";
                                }
                                 ?>
                                </select>
                                </center>

                                            <!--a qui boy -->
                              <center>
                              <select name="idfalla_tj" class="custom-select custom-select-sm separado" id="idfalla_tj1" required>
                                <option value="" disabled selected>FALLA</option>
                                <?php

                                $objeto = new Conexion();//objeto coneccion
                                $conexion = $objeto->Conectar();
                                $query = "select idfalla_tj, falla_tj from fallas_tj";
                                $resultado = $conexion->prepare($query);
                                $resultado->execute();
                                while ($row = $resultado->fetch()) {
                                  echo "<option value=" . $row['idfalla_tj'] . ">" . $row['idfalla_tj'] ." - ". $row['falla_tj']. "</option>";
                                }
                                 ?>
                                </select>
                                </center>

              <!--//--><!--***********SELECT************SELECT************SELECT***********-->
                                <select name="refacciones" class="custom-select custom-select-sm separado" id="idrefa1" required>
                                  <option value="" disabled selected>REFACCION</option>
                                  <option value="A">Acondicionada</option>
                                    <option value="AN">Almacen/Nueva</option>
                                      <option value="NN">No Necesaria</option>
                                      <option value="RM">Reparada/Maquinada Externa</option>
                                </select>


                              <select name="estado" class="custom-select custom-select-sm separado" id="idestado1" required>
                                <option value="" disabled selected>ESTADO</option>
                                <option value="P">Pendiente</option>
                                <option value="PPR">Parado x Falta de Refaccion</option>
                                  <option value="T">Terminado</option>


                              </select>


                            <select name="tipofalla_tj" class="custom-select custom-select-sm separado" id="tipofalla_tj" required>
                              <option value="" disabled selected>TIPO FALLA?</option>
                              <option value="T">Tecnica</option>
                              <option value="F">Funcional</option>
                            </select>


                          <select name="turno_tj" class="custom-select custom-select-sm separado" id="turno_tj" required>
                            <option value="" disabled selected>TURNO</option>
                            <option value="1">1</option>
                              <option value="2">2</option>
                                <option value="3">3</option>
                          </select>

                              <center><label id="lblfecha" class="col-form-label"><h10>FECHA:</h10></label></center>
                                <input type="date" class="form-control form-control-sm" id="fecharepo_tj" required >

                                <textarea name="comentarios" maxlength="59" rows="2" cols="51" placeholder="Detalle ó Comentario" id="com_tj" class="form-control separado"  required></textarea>
            <!--//-->                    </div>
            <!--//-->                    </div>

          <div class="modal-footer">
           <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
           <button type="submit" id="btnGuardarRepo" class="btn btn-dark">Guardar</button>
           </div>
           </div>
           </form><!--######################################-MODAL-############################################ -->
        </div><!--#######################################-MODAL-############################################ -->
      </div><!--#######################################-MODAL-############################################ -->
    </div><!--#######################################-MODAL-############################################ -->




    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/popper/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- datatables JS -->
    <script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="tel_jb.js"></script>
  </BODY>
</html>
