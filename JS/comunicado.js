var fhActual = new Date();
var dia, mes_name, mes, ano, hor, min, name_h; 
dia = fhActual.getDate();
mes_name = fhActual.toLocaleString('default', { month: 'short' });
mes = fhActual.getMonth() + 1;
ano = fhActual.getFullYear();
hor = ((fhActual.getHours() < 10) ? "0" : "") + fhActual.getHours();
min = ((fhActual.getMinutes() < 10) ? "0" : "") + fhActual.getMinutes();
name_h = fhActual.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });



var fecha_act = document.getElementById('fecha_act');
var hora_act = document.getElementById('hora_act');
var fecha_edit = document.getElementById('com_fecha_edit');
var hora_edit = document.getElementById('com_hora_edit');

var fecha_act1 = document.getElementById('fecha_act_new');
var hora_act1 = document.getElementById('hora_act_new');
var fecha_edit1 = document.getElementById('com_fecha_new');
var hora_edit1 = document.getElementById('com_hora_new');

var cont = 1;
var con2 = 1;

fecha_act.addEventListener('click', function(){
  cont = cont + 1;
  if (cont % 2 == 0){
    fecha_act.style.opacity = 0.8;
  } else {
    fecha_act.style.opacity = 1;
  }
  fecha_edit.value = dia + ' ' + mes_name + ' ' + ano;
})

hora_act.addEventListener('click', function(){
  con2 = con2 + 1;
  if (con2 % 2 == 0){
    hora_act.style.opacity = 0.8;
  } else {
    hora_act.style.opacity = 1;
  }
  hora_edit.value =name_h;
})

// ! REGISTRAR COMUNIDACO
function Registrar_Comunicado(){
  const     titulo    = document.getElementById('com_titulo').value,
            contenido = document.getElementById('com_contenido').value,
            tlink     = document.getElementById('com_tenlace').value,
            link      = document.getElementById('com_enlace').value,
            // mandar
            font_ico  = document.getElementById('com_ico_svg_new').value,
            font_name = document.getElementById('com_ico_name_new').value,
            fecha     = document.getElementById('com_fecha_new').value,
            hora      = document.getElementById('com_hora_new').value;

  if(titulo.length == 0 || contenido.length == 0 || tlink.length == 0 || link.length == 0){
      validaInput("com_titulo","com_contenido", "com_tenlace", "com_enlace");
      return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
  }

  let formData = new FormData();
  formData.append('t',titulo);
  formData.append('c',contenido);
  formData.append('tl',tlink);
  formData.append('l',link);
  formData.append('f',fecha);
  formData.append('h',hora);
  formData.append('fn',font_name);
  formData.append('fi',font_ico);
  formData.append('iu',id_usuario);
  $.ajax({
    url: '../controlador/usuario/comunicado/control_comunicado_registrar.php',
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(resp) {
      if(resp>0){
        if(resp==1){
          validaInput("com_titulo","com_contenido", "com_tenlace", "com_enlace");
          // limpiarModalUsu();
          Swal.fire(
          "Mensaje de Confirmación",
          "Comunicado registrado exitosamente",
          "success"
          ).then((value)=>{
            $("#modal_registrar_comunicado").modal('hide');
            limpiarModalCom();
            tbl_comunicados.ajax.reload();
          });
        }else{
          Swal.fire(
          "Mensaje de Advertencia",
          "El comunicado registrado ya se encuentra en la BD",
          "warning"
          );
        }
      }else{
        Swal.fire(
        "Mensaje de Error",
        "No se pudo registrar el comunicado",
        "error"
        );
      }
    }
  });
  return false;
}

function Eliminar_Comunicado(id){
  $.ajax({
        url:'../controlador/usuario/comunicado/control_eliminar_comunicado.php',
        type:'POST',
        data:{
            id:id,
        }
    }).done(function(resp){
        if(resp>0){
                Swal.fire(
                  "Mensaje de Confirmacion",
                  "Comunicado eliminado exitosamente",
                  "success"
                  ).then((value)=>{
                    tbl_comunicados.ajax.reload();
                });

        }else{
            Swal.fire("Mensaje de Error", "No se pudo eliminar el comunicado","error")
        }
    })
}

function Modificar_Comunicado(){
  const     titulo    = document.getElementById('com_titulo_edit').value,
            orden     = document.getElementById('com_id_act').value,
            ordenew   = document.getElementById('com_id_edit').value,
            contenido = document.getElementById('com_contenido_edit').value,
            tlink     = document.getElementById('com_tenlace_edit').value,
            link      = document.getElementById('com_enlace_edit').value,
            fecha     = document.getElementById('com_fecha_edit').value,
            hora      = document.getElementById('com_hora_edit').value,
            font_ico  = document.getElementById('com_ico_edit_svg').value,
            font_name = document.getElementById('com_ico_edit_name').value;

  if(orden.length == 0 || titulo.length == 0 || contenido.length == 0 || tlink.length == 0 || link.length == 0){
      validaInputEdit("com_id_edit","com_titulo_edit","com_contenido_edit", "com_tenlace_edit", "com_enlace_edit");
      return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
  }

  let formData = new FormData();
  formData.append('ic',orden);
  formData.append('in',ordenew);
  formData.append('t',titulo);
  formData.append('c',contenido);
  formData.append('tl',tlink);
  formData.append('l',link);
  formData.append('f',fecha);
  formData.append('h',hora);
  formData.append('fn',font_name);
  formData.append('fi',font_ico);
  formData.append('iu',id_usuario);
  $.ajax({
    url: '../controlador/usuario/comunicado/control_comunicado_editar.php',
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(resp) {
      if(resp>0){
        if(resp==1){
          Swal.fire(
          "Mensaje de Confirmación",
          "Comunicado editado exitosamente",
          "success"
          ).then((value)=>{
            $("#modal_editar_comunicado").modal('hide');
            limpiarModalCom();
            tbl_comunicados.ajax.reload();
          });
        }else{
          Swal.fire(
          "Mensaje de Advertencia",
          "No se puede editar el comunicado, el ORDEN ingresado no es válido",
          "error"
          );
        }
      }else{
        Swal.fire(
        "Mensaje de Error",
        "No se pudo editar el comunicado",
        "error"
        );
      }
    }
  });
  return false;

}

$('#tabla_comunicado_simple').on('click','.borrar',function(){
  var data = tbl_comunicados.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_comunicados.row(this).child.isShown()){
    var data = tbl_comunicados.row(this).data();
  }
  Swal.fire({
        title: '¿Estás seguro de eliminar el Comunicado '+data[1] +'?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
            Eliminar_Comunicado(data[0]);
        }
      })
})

function limpiarModalCom(){
  document.getElementById("com_titulo").value = "";
  document.getElementById("com_contenido").value = "";
  document.getElementById("com_tenlace").value = "";
  document.getElementById("com_enlace").value = "";
}

// ! VALIDAR INPUT DE NUEVO COMUNICADO
function validaInput(titulo,contenido,tlink,link){
  Boolean(document.getElementById(titulo).value.length > 0) ? $("#"+titulo).removeClass("is-invalid").addClass("is-valid"): $("#"+titulo).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(contenido).value.length > 0) ? $("#"+contenido).removeClass("is-invalid").addClass("is-valid"): $("#"+contenido).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(tlink).value.length > 0) ? $("#"+tlink).removeClass("is-invalid").addClass("is-valid"): $("#"+tlink).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(link).value.length > 0) ? $("#"+link).removeClass("is-invalid").addClass("is-valid"): $("#"+link).removeClass("is-valid").addClass("is-invalid");
}
// ! VALIDAR INPUT DE NUEVO COMUNICADO EDITAR
function validaInputEdit(orden,titulo,contenido,tlink,link){
  Boolean(document.getElementById(orden).value.length > 0) ? $("#"+orden).removeClass("is-invalid").addClass("is-valid"): $("#"+orden).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(titulo).value.length > 0) ? $("#"+titulo).removeClass("is-invalid").addClass("is-valid"): $("#"+titulo).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(contenido).value.length > 0) ? $("#"+contenido).removeClass("is-invalid").addClass("is-valid"): $("#"+contenido).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(tlink).value.length > 0) ? $("#"+tlink).removeClass("is-invalid").addClass("is-valid"): $("#"+tlink).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(link).value.length > 0) ? $("#"+link).removeClass("is-invalid").addClass("is-valid"): $("#"+link).removeClass("is-valid").addClass("is-invalid");
}

//('com_id','com_title','com_cont','com_link','com_tlink','com_f','com_h','ico_id','usu_id','ico_name','ico_svg','usu_nombre','usu_apaterno'));
var tbl_comunicados;
function listar_usuario_ss(){
  tbl_comunicados = $("#tabla_comunicado_simple").DataTable({
    "pageLength": 10,
    "destroy": true,
    "bProcessing": true,
    "bDeferRender": true,
    "bServerSide": true,
    "sAjaxSource": "../controlador/usuario/serverside/serverComunicado.php",
    "columns": [
      {"defaultContent": ""},
      {"data":11, 
        render: function (data, type, row) {
          return '<i class="fas fa-lg '+ data+'"></i>';
        }
      }, //? icono
      {"data":1}, //? titulo
      {"data":2}, //? Contenido
      {"data":4}, //? Título de Link
      {"data":3,  //? Link
        render: function (data, type, row) {
          return '<div style="text-overflow: ellipsis; width: 130px; white-space: nowrap; overflow:hidden;">'+data+'</div>';
        }
      }, 
      {"data":5}, //? Fecha
      {"data":6}, //? Hora
      {"data":8}, //? Usuario
      {"data":null,
        render: function (data, type, row) {
          return "<button id='editar' class='editar btn btn-warning btn-sm'><i class='fa fa-pen'></i></button>&nbsp;<button id='editarx' class='borrar btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>"
        }
      },
    ],

    "language": idioma_espanol,
    select: true
  });

 tbl_comunicados.on('draw.td',function(){
   var PageInfo=$("#tabla_comunicado_simple").DataTable().page.info();
   tbl_comunicados.column(0,{page:'current'}).nodes().each(function(cell,i){
    cell.innerHTML=i+1+PageInfo.start;
   });
 });
}

// todo: PARA ABRIR LOS MODALES
$('#tabla_comunicado_simple').on('click','.editar',function(){
  var data = tbl_comunicados.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_comunicados.row(this).child.isShown()){
    var data = tbl_comunicados.row(this).data();
  }
  $("#modal_editar_comunicado").modal('show');
  document.getElementById('com_id_act').value =data[0];
  document.getElementById('com_id_edit').value =data[0];
  document.getElementById('com_titulo_edit').value =data[1];
  document.getElementById('com_contenido_edit').value =data[2];
  document.getElementById('com_tenlace_edit').value =data[4];
  document.getElementById('com_enlace_edit').value =data[3];
  document.getElementById('com_usu_edit').value =data[8];
  document.getElementById('com_fecha_edit').value =data[5];
  document.getElementById('com_hora_edit').value =data[6];
  document.getElementById('com_ico_act_name').value = data[10];
  document.getElementById('com_ico_act').className = 'fas ' +data[11];

  var icon = document.getElementById('com_ico_edit_val');
  function onChange(){
    var icon_svg = icon.value;
    var icon_name = icon.options[icon.selectedIndex].text;
    document.getElementById('com_ico_edit_svg').value =icon_svg;
    document.getElementById('com_ico_edit_name').value =icon_name;
  }
  icon.onchange = onChange;
  onChange();
})

function verval(){
  var val1 = document.getElementById('com_ico_edit_svg').value;
  var val2 = document.getElementById('com_ico_edit_name').value;
  console.log(val1);
  console.log(val2);
}

//! MODAL
function modal_abrir(){
  // ? abrir el modal
  $("#modal_registrar_comunicado").modal('show');
  $('.form-control').removeClass("is-invalid").removeClass("is-valid");

  //? cargar el icono para la bd 
  var icon1 = document.getElementById('com_ico_new_val');
  function onChange(){
    var icon_svg = icon1.value;
    var icon_name = icon1.options[icon1.selectedIndex].text;
    document.getElementById('com_ico_svg_new').value =icon_svg;
    document.getElementById('com_ico_name_new').value =icon_name;
  }
  icon1.onchange = onChange;
  onChange();
  //? cargar el icono para la bd 

  //? cargar la fecha y hora
  fecha_edit1.value = dia + ' ' + mes_name + ' ' + ano;
  hora_edit1.value =name_h;
  //? cargar la fecha y hora

  // ? cargar usuario
  document.getElementById('com_usu').value =usu_names;
  // ? cargar usuario

  // TODO VARIABLES DEL USUARIO
  // console.log(id_usuario);
  // console.log(usu_names);
  // console.log(usu_apellido);
}

function formatText (icon) {
    return $('<span><i class="fas ' + $(icon.element).data('icon') + '"></i> ' + icon.text + '</span>');
};

$('.select2-icon').select2({
    width: "100%",
    templateSelection: formatText,
    templateResult: formatText
});