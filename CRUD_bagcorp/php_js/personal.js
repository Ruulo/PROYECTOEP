var table = $('#myTable').DataTable();
var tablaNom;
var operacion;
var id_reg;

$(document).ready(function() {
  var id_pe, opcion;
  var idrepo_pe = 0;
  Personal();
  var fila;//las variables almacenan lo que hay en cada input del modal alta o edicion

  $('#formfechasPer').submit(function(e){
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, no queremos que recarge la página, queremos que todo sea sobre la misma pagina

    fecha_de=$.trim($("#fecha_de").val());
    fecha_a=$.trim($("#fecha_a").val());

    if(fecha_de > fecha_a){
      alert("CONSULTA INVALIDA");
      return false;
    }
    $.ajax({
      url: "../bd/cruds/" + tablaNom + "/query_fechas.php",
      type: "POST",
      datatype:"json",
      data:  {fecha_de:fecha_de, fecha_a:fecha_a},
      success: function(data) {
        var cambio = JSON.parse(data);
        console.log("Entrando a cambios");
        console.log(cambio);
        table.clear();
        table.rows.add(cambio);
        table.draw();
      }
    });
  });

  $(document).on("click", ".btnBorrar", function(){
    fila = $(this);
    id = parseInt($(this).closest('tr').find('td:eq(0)').text());//SE GUARDA EL ID que esta en el campo id EN la variable --> id
    Swal.fire({
      title: 'Quiere eliminar el Registro '+id+"?",
      icon: 'warning',
      background: '#1a1a1a',
      toast: true,
      showCancelButton: true,
      confirmButtonColor: '#7cf726',
      cancelButtonColor: '#929493',
      confirmButtonText: 'Si!'
    }).then((result) => {
      if (result.isConfirmed) {

        $.ajax({
          url: "../bd/cruds/" + tablaNom + "/eliminar.php",
          type: "POST",
          dataType: "json",
          data: {id:id},
          success: function(){
            table.row(fila.parents('tr')).remove().draw();

            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Registro eliminado con Exito!',
              background: '#1a1a1a',
              toast: true,
              showConfirmButton: false,
              timer: 1500 });// esta llave cierra la llave del Sweetalert
            }// esta llave cierra succes: function
          });//esta llave cierra la llave del ajax
        }
      })
    });// esta llave cierra esta ultima funcion de Eliminar
  $('#formPersonal').submit(function(e){
      e.preventDefault(); //evita el comportambiento normal del submit, es decir, no queremos que recarge la página, queremos que todo sea sobre la misma pagina
      id_next = $.trim($('#id_pe').val());
      nom_pe = $.trim($('#nom_pe').val());//trim para obtener los inputs sin espacios
      ap_pa = $.trim($('#ap_pa').val());//trim para obtener los inputs sin espacios
      ap_ma = $.trim($('#ap_ma').val());//trim para obtener los inputs sin espacios
      fecha_reg = $.trim($('#fecha_reg').val());///trim para obtener los inputs sin espacios
      status = $.trim($('#status').val());//trim para obtener los inputs sin espacios

      url = "../bd/cruds/personal/" + operacion + ".php";
      msg = "";
      if(operacion == "editar"){
        msg = "Modificación realizada";
      }
      if(operacion == "agregar"){
        msg = "Registro exitoso";
      }

      llamarCRUD(url,msg,{id_next:id_next, id_pe:id_reg, nom_pe:nom_pe, ap_pa:ap_pa, ap_ma:ap_ma, fecha_reg:fecha_reg, status:status});
      $('#modalCRUD').modal('hide');

      });

  $(document).on("click", ".btnEditar", function (){
        operacion = "editar"; //editar
        fila = $(this).closest("tr");
        switch (tablaNom) {
          case "personal":
            EditarPersonal(fila);
            break;
          case "repo_per":
            EditarReportes(fila);
            break;
          default:
        }
        });

  $("#btnNuevo").click(function(){
          operacion = "agregar";

          var ocultar_select = document.getElementById('status');
          ocultar_select.style.display = 'none';
          $("#formPersonal").trigger("reset");//RESET LIMPIA LOS CAMPOS
          $(".modal-header").css("background-color", "#4cb6ea");
          $(".modal-header").css("color", "white");
          $(".modal-title").text("ALTA PERSONAL");
          $(".modal-title").css("align", "center");
          $("#modalCRUD").modal("show");
        });

  $('#formRepoPersonal').submit(function(e){
          e.preventDefault(); //evita el comportambiento normal del submit, es decir, no queremos que recarge la página, queremos que todo sea sobre la misma pagina
          idrepo_pe = $.trim($('#idrepo_pe').val());
          idusuario9 = $.trim($('#idusuario9').val());
          id_reportado = $.trim($('#id_reportado').val());//trim para obtener los inputs sin espacios
          turno_pe = $.trim($('#turno_pe').val());//trim para obtener los inputs sin espacios
          fecharepo_per = $.trim($('#fecharepo_per').val());//trim para obtener los inputs sin espacios
          comrepo_pe = $.trim($('#comrepo_pe').val());///trim para obtener los inputs sin espacios

          url = "../bd/cruds/repo_per/" + operacion + ".php";
          msg = "";
          if(operacion == "editar"){
            msg = "Modificación realizada";
          }
          if(operacion == "agregar"){
            msg = "Registro exitoso";
          }

          llamarCRUD(url,msg,{idrepo_pe:idrepo_pe, idusuario9:idusuario9, id_reportado:id_reportado, turno_pe:turno_pe, fecharepo_per:fecharepo_per, comrepo_pe:comrepo_pe});
          $('#modalCRUD2').modal('hide');
          });


  $("#btnAddRepo").click(function(){
              /*opcion = 7;*/
              operacion = "agregar";
              var ocultar_evento = document.getElementById('divEvento');
              ocultar_evento.style.display = 'none';
              $("#formRepoPersonal").trigger("reset");//RESET LIMPIA LOS CAMPOS
              $(".modal-header").css("background-color", "#90ff2e");
              $(".modal-header").css("color", "white");
              $(".modal-title").text("ALTA REPORTES");
              $(".modal-title").css("align", "center");
              $("#modalCRUD2").modal("show");
            });
});

function Personal(){
  tablaNom = "personal";
  var divAñadir = document.getElementById('divbtnAñadir');
  divAñadir.style.display='inline-block';
  var turno_div = document.getElementById('divTurno');
  turno_div.style.display = 'none';
  var divbtnAddrepo = document.getElementById('divbtnAddRepo');
  divbtnAddrepo.style.display ='none';

  opcion = 1;

  table.destroy();
  $("#DataTable").empty();
  table = $("#DataTable").DataTable({
    // "destroy":true,
    "ajax":{
      "url": "../bd/consultas_inicio_de_tablas.php",// de a qui enviamos datos a crud.php
      "method": 'POST', //usamos el metodo POST
      "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT y se rellenen los campos de la tabla
      "dataSrc":"",
    },
    "columns":[
      {"data": "id_pe", title: "ID", className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
      {"data": "nom_pe", title: "Nombre", "sWidth": "170px", className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
      {"data": "ap_pa", title: "A.Paterno", "sWidth": "150px", className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
      {"data": "ap_ma", title: "A.Materno", "sWidth": "150px", className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
      {"data": "fecha_reg", title: "Fecha Registro", "sWidth": "150px", className: "text-center"}, // CAMPOS QUE nos ENVIA LA BASE DE DATOS
      {"data": "status", title: "status", className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
      {"defaultContent": "<div>&nbsp;&nbsp;&nbsp;<div class='btn-group'><a class='btn1 btn-floating btn-small waves-effect waves-light red btnEditar'><i class='material-icons'>mode_edit</i></a>&nbsp;&nbsp;&nbsp<a class='btn2 tn-floating btn-small waves-effect waves-light red btnBorrar'><i class='material-icons'>delete</i></a></div></div>", title: "Acciones", className: "text-center"}
       ]
     });
  }

function Reportes(){
    tablaNom = "repo_per";

    var añadir = document.getElementById('divbtnAñadir');
    añadir.style.display = 'none';
    var turno_div = document.getElementById('divTurno');
    turno_div.style.display = 'inline-block';
    var divbtnAddRepo = document.getElementById('divbtnAddRepo');
    divbtnAddRepo.style.display = 'inline-block';

    turno = document.getElementById('busquedaTurno').value;

    opcion = 2;
    table.destroy();
    $("#DataTable").empty();

    table = $("#DataTable").DataTable({
      "ajax":{
        "url": "../bd/consultas_inicio_de_tablas.php",// de a qui enviamos datos a crud.php
        "method": 'POST', //usamos el metodo POST
        "data":{opcion:opcion, turno:turno}, //enviamos opcion 4 para que haga un SELECT y se rellenen los campos de la tabla
        "dataSrc":"",
      },
      "columns":[
        {"data": "idrepo_pe", title: "Evento", className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
        {"data": "idusuario9", title: "Reportador", className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
        {"data": "id_reportado", title: "Reportado", className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
        {"data": "nom_pe", title: "Nombre", className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
        {"data": "ap_pa", title: "A.Paterno",className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
        {"data": "ap_ma", title: "A.Materno",className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
        {"data": "turno_pe", title: "Turno", className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
        {"data": "fecharepo_per",  title: "Fecha", className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
        {"data": "comrepo_pe", title: "Comentario",  className: "text-center"},// CAMPOS QUE nos ENVIA LA BASE DE DATOS
        {"defaultContent": "<div><div class='btn-group2'><a class='btn3 btn-floating btn-small waves-effect waves-light red btnEditar'><i class='material-icons'>mode_edit</i></a>&nbsp;&nbsp;&nbsp<a class='btn4 tn-floating btn-small waves-effect waves-light red btnBorrar'><i class='material-icons'>delete</i></a></div></div>", title: "Acciones", className: "text-center"}
      ],
    });   /////////////////////////////////////////////////////////
  }
function switchModo(){
    modo = document.getElementById('modo');

    switch (modo.selectedIndex) {
      case 0:
      Personal();
      break;
      case 1:
      Reportes();
      break;

      default:
    }
  }

function EditarPersonal(fila){
  id_pe = parseInt(fila.find('td:eq(0)').text());
  id_reg = id_pe;
  console.log(id_pe);
  nom_pe = fila.find('td:eq(1)').text();
  ap_pa = fila.find('td:eq(2)').text();
  ap_ma = fila.find('td:eq(3)').text();
  fecha_reg = fila.find('td:eq(4)').text();
  status = fila.find('td:eq(5)').text();
  /*console.log(fila);*/
  // Obtengo l valor obtenido de la DB
  $("#id_pe").val(id_pe);
  $("#nom_pe").val(nom_pe);
  $("#ap_pa").val(ap_pa);
  $("#ap_ma").val(ap_ma);
  $("#fecha_reg").val(fecha_reg);
  $("#status").val(status);

  var ocultar_select = document.getElementById('status');
  ocultar_select.style.display = 'inline';

  $(".modal-header").css("background-color", "#454d52");
  $(".modal-header").css("color", "white" );
  $(".modal-title").text("Editar Personal");
  $('#modalCRUD').modal('show');
}

function EditarReportes(fila){
  idrepo_pe = parseInt(fila.find('td:eq(0)').text());
  console.log(idrepo_pe);
  idusuario9 = fila.find('td:eq(1)').text();
  id_reportado = fila.find('td:eq(2)').text();
  turno_pe = fila.find('td:eq(6)').text();
  fecharepo_per = fila.find('td:eq(7)').text();
  comrepo_pe = fila.find('td:eq(8)').text();

  // Obtengo l valor obtenido de la DB
  $("#idrepo_pe").val(idrepo_pe);
  $("#idusuario9").val(idusuario9);
  $("#id_reportado").val(id_reportado);
  $("#turno_pe").val(turno_pe);
  $("#fecharepo_per").val(fecharepo_per);
  $("#comrepo_pe").val(comrepo_pe);

  var ocultar_evento = document.getElementById('divEvento');
  ocultar_evento.style.display = 'inline';

  $(".modal-header").css("background-color", "#e4ff0e");
  $(".modal-header").css("color", "white" );
  $(".modal-title").text("Edicion de Reporte");
  $('#modalCRUD2').modal('show');

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
