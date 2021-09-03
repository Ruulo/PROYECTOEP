var table = $('#myTable').DataTable();
var tablaNom;
var operacion;
var id_reg;

$(document).ready(function() {
  var id_tj, opcion;
  var idrepo_tj = 0;
  ReportesTJ();
var fila;

  $('#formREPO_TJ').submit(function(e){
          e.preventDefault(); //evita el comportambiento normal del submit, es decir, no queremos que recarge la página, queremos que todo sea sobre la misma pagina
          /*idrepo_tj - idusuario1 - id_tj1 - idsis_tj1 - idfalla_tj1
          idrefa1 - idestado1 - tipofalla_tj - turno_tj - fecharepo_tj - com_tj*/
          idrepo_tj     = $.trim($('#idrepo_tj').val());
          idusuario1   = $.trim($('#idusuario1').val());
          id_tj1        = $ .trim($('#id_tj1').val());//trim para obtener los inputs sin espacios
          idsis_tj1     =  $.trim($('#idsis_tj1').val());//trim para obtener los inputs sin espacios
          idfalla_tj1  = $.trim($('#idfalla_tj1').val());//trim para obtener los inputs sin espacios
          idrefa1       =  $.trim($('#idrefa1').val());
          idestado1     =  $.trim($('#idestado1').val());
          tipofalla_tj = $.trim($('#tipofalla_tj').val());
          turno_tj      = $ .trim($('#turno_tj').val());
          fecharepo_tj = $.trim($('#fecharepo_tj').val());
          com_tj        = $.trim($('#com_tj').val());

          url = "../bd/cruds/repotel_JB/" + operacion + ".php";
          msg = "";
          if(operacion == "editar"){
            msg = "Modificación realizada";
          }
          if(operacion == "agregar"){
            msg = "Registro exitoso";
          }

          llamarCRUD(url,msg,{idrepo_tj:idrepo_tj, idusuario1:idusuario1, id_tj1:id_tj1, idsis_tj1:idsis_tj1, idfalla_tj1:idfalla_tj1, idrefa1:idrefa1, idestado1:idestado1, tipofalla_tj:tipofalla_tj, turno_tj:turno_tj, fecharepo_tj:fecharepo_tj, com_tj:com_tj});
          $('#modalREPO_TJ').modal('hide');
          });

  $("#btnAddrepo").click(function(){
          operacion = "agregar";
          var ocultar_evento = document.getElementById('divEvento');
          ocultar_evento.style.display = 'none';

          $("#formREPO_TJ").trigger("reset");//RESET LIMPIA LOS CAMPOS
          $(".modal-header").css("background-color", "#d866fa");
          $(".modal-header").css("color", "white");
          $(".modal-title").text("ALTA REPORTE");
          $(".modal-title").css("align", "center");
          $(".modal-title").css("height", "12px")
          $("#modalREPO_TJ").modal("show");
          alert("pero");
        });


});

function ReportesTJ(){
  opcion = 3;
  tablaNom = "repotel_JB";
  turno = document.getElementById('busquedaTurno').value;

  table.destroy();
  $("#DataTable_TJ").empty();
  table = $("#DataTable_TJ").DataTable({
    // "destroy":true,
    "ajax":{
      "url": "../bd/consultas_inicio_de_tablas.php",// de a qui enviamos datos a crud.php
      "method": 'POST', //usamos el metodo POST
      "data":{opcion:opcion, turno:turno}, //enviamos opcion 4 para que haga un SELECT y se rellenen los campos de la tabla
      "dataSrc":"",
    },
    "columns":[
      {"data": "idrepo_tj", title: "Evento",          className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
      {"data": "idusuario1", title: "Reportador",     className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
      {"data": "id_tj1", title: "Telar",              className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
      {"data": "sis_tj", title: "Sistema",            className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
      {"data": "falla_tj", title: "Falla",            className: "text-center"}, // CAMPOS QUE nos ENVIA LA BASE DE DATOS
      {"data": "tipofalla_tj", title: "Tipo Falla",             className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
      {"data": "idrefa1", title: "Refaccion",             className: "text-center"},//
      {"data": "idestado1", title: "Estado",             className: "text-center"},//
      {"data": "turno_tj", title: "Turno",             className: "text-center"},//
      {"data": "fecharepo_tj", title: "Fecha",             className: "text-center"},//
      {"data": "com_tj", title: "Comentario",             className: "text-center"},//
      {"defaultContent": "<div>&nbsp;&nbsp;&nbsp;<div class='btn-group'><a class='btn1 btn-floating btn-small waves-effect waves-light red btnEditar'><i class='material-icons'>mode_edit</i></a>&nbsp;&nbsp;&nbsp<a class='btn2 tn-floating btn-small waves-effect waves-light red btnBorrar'><i class='material-icons'>delete</i></a></div></div>", title: "Acciones", className: "text-center"}
    ],
     });
  }

  function llamarCRUD(url_arg, msg, data){

    $.ajax({
      url: url_arg,
      type: "POST",
      datatype:"json",
      data: data,
      success: function(data) {
        table.ajax.reload(null, false);
      /*  console.log(url);*/
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: msg,
          background: '#1a1a1a',
          toast: true,
          showConfirmButton: false,
          timer: 1500 });// esta llave cierra la llave del Sweetalert
        }
      });
  }
