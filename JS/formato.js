//! ('for_id','for_title','for_text','for_tlink','for_link','for_ico_name','for_ico_svg','usu_id','usu_nombre')
var tbl_formato;
function listar_usuario_ss(){
  tbl_formato = $("#tabla_formato_simple").DataTable({
    "pageLength": 10,
    "destroy": true,
    "bProcessing": true,
    "bDeferRender": true,
    "bServerSide": true,
    "sAjaxSource": "../controlador/usuario/serverside/serverFormato.php",
    "columns": [
      {"defaultContent": ""},
      {"data":6, //? icono
        render: function (data, type, row) {
          return '<i class="fas fa-lg '+ data+'"></i>';
        }
      }, 
      {"data":1}, //? titulo
      {"data":2}, //? text
      {"data":3}, //? Título de Link
      {"data":4,  //? Link
        render: function (data, type, row) {
          return '<div style="text-overflow: ellipsis; width: 130px; white-space: nowrap; overflow:hidden;">'+data+'</div>';
        }
      },
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

 tbl_formato.on('draw.td',function(){
   var PageInfo=$("#tabla_formato_simple").DataTable().page.info();
   tbl_formato.column(0,{page:'current'}).nodes().each(function(cell,i){
    cell.innerHTML=i+1+PageInfo.start;
   });
 });
}

//! MODAL
function modal_abrir(){
  $("#modal_registrar_formato").modal('show');
  $('.form-control').removeClass("is-invalid").removeClass("is-valid");

  //? cargar el icono para la bd 
  var icon1 = document.getElementById('for_ico_new_val');
  function onChange(){
    var icon_svg = icon1.value;
    var icon_name = icon1.options[icon1.selectedIndex].text;
    document.getElementById('for_ico_svg_new').value =icon_svg;
    document.getElementById('for_ico_name_new').value =icon_name;
  }
  icon1.onchange = onChange;
  onChange();
  //? cargar el icono para la bd

}

// ? PARA CARGAR EL ICONO EN INPUT
function formatText (icon) {
    return $('<span><i class="fas ' + $(icon.element).data('icon') + '"></i> ' + icon.text + '</span>');
};

$('.select2-icon').select2({
    width: "100%",
    templateSelection: formatText,
    templateResult: formatText
});
// ? PARA CARGAR EL ICONO EN INPUT

function limpiarModalFor() {
  document.getElementById('for_titulo').value = "";
  document.getElementById('for_contenido').value = "";
  document.getElementById('for_tlink').value = "";
  document.getElementById('for_link').value = "";
}

// todo: PARA ABRIR MODAL EDICION
$('#tabla_formato_simple').on('click','.editar',function(){
  var data = tbl_formato.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_formato.row(this).child.isShown()){
    var data = tbl_formato.row(this).data();
  }
  $("#modal_editar_formato").modal('show');
  document.getElementById('for_id_act').value =data[0]
  document.getElementById('for_titulo_edit').value = data[1];
  document.getElementById('for_contenido_edit').value = data[2];
  document.getElementById('for_tlink_edit').value = data[3];
  document.getElementById('for_link_edit').value = data[4];
  document.getElementById('for_ico_act_name').value = data[5];
  document.getElementById('for_ico_act').className = 'fas ' +data[6];

  var icon = document.getElementById('for_ico_edit_val');
  function onChange(){
    var icon_svg = icon.value;
    var icon_name = icon.options[icon.selectedIndex].text;
    document.getElementById('for_ico_svg_edit').value =icon_svg;
    document.getElementById('for_ico_name_edit').value =icon_name;
  }
  icon.onchange = onChange;
  onChange();
})

// todo: PARA ABRIR MODAL BORRAR
$('#tabla_formato_simple').on('click','.borrar',function(){
  var data = tbl_formato.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_formato.row(this).child.isShown()){
    var data = tbl_formato.row(this).data();
  }
  Swal.fire({
        title: '¿Estás seguro de eliminar el Formato '+data[1] +'?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
            Eliminar_Formato(data[0]);
        }
      })
})

function validaInput(title,text,tlink,link){
  Boolean(document.getElementById(title).value.length > 0) ? $("#"+title).removeClass("is-invalid").addClass("is-valid"): $("#"+title).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(text).value.length > 0) ? $("#"+text).removeClass("is-invalid").addClass("is-valid"): $("#"+text).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(tlink).value.length > 0) ? $("#"+tlink).removeClass("is-invalid").addClass("is-valid"): $("#"+tlink).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(link).value.length > 0) ? $("#"+link).removeClass("is-invalid").addClass("is-valid"): $("#"+link).removeClass("is-valid").addClass("is-invalid");
}

// ! PARA REGISTRAR FORMATO
function Registrar_Formato() {
  const titulo = document.getElementById("for_titulo").value,
        texto = document.getElementById("for_contenido").value,
        tlink = document.getElementById("for_tlink").value,
        link = document.getElementById("for_link").value,
        // mandar
        font_ico  = document.getElementById('for_ico_svg_new').value,
        font_name = document.getElementById('for_ico_name_new').value;

  if(titulo.length == 0 || texto.length == 0 || tlink.length == 0 || link.length == 0) {
    validaInput("for_titulo","for_contenido","for_tlink","for_link");
    return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
  }

  let formData = new FormData();
  formData.append('t',titulo);
  formData.append('tx',texto);
  formData.append('tl',tlink);
  formData.append('l',link);
  formData.append('fn',font_name);
  formData.append('fi',font_ico);
  formData.append('iu',id_usuario);
  $.ajax({
    url: '../controlador/usuario/formatos/control_formato_registrar.php',
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(resp) {
      if(resp>0){
        if(resp==1){
          validaInput("for_titulo","for_contenido","for_tlink","for_link");
          Swal.fire(
          "Mensaje de Confirmación",
          "Formato registrado exitosamente",
          "success"
          ).then((value)=>{
            $("#modal_registrar_formato").modal('hide');
            limpiarModalFor();
            tbl_formato.ajax.reload();
          });
        }else{
          Swal.fire(
          "Mensaje de Advertencia",
          "El formato registrado ya se encuentra en la BD",
          "warning"
          );
        }
      }else{
        Swal.fire(
        "Mensaje de Error",
        "No se pudo registrar el formato",
        "error"
        );
      }
    }
  });
  return false;
}

// ! PARA EDITAR FORMATO
function Editar_Formato() {
  const id_formato = document.getElementById("for_id_act").value;
        titulo = document.getElementById("for_titulo_edit").value,
        texto = document.getElementById("for_contenido_edit").value,
        tlink = document.getElementById("for_tlink_edit").value,
        link = document.getElementById("for_link_edit").value,
        // mandar
        font_ico  = document.getElementById('for_ico_svg_edit').value,
        font_name = document.getElementById('for_ico_name_edit').value;
  if(titulo.length == 0 || texto.length == 0 || tlink.length == 0 || link.length == 0) {
    validaInput("for_titulo_edit","for_contenido_edit","for_tlink_edit","for_link_edit");
    return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
  }

  let formData = new FormData();
  formData.append('id',id_formato);
  formData.append('t',titulo);
  formData.append('tx',texto);
  formData.append('tl',tlink);
  formData.append('l',link);
  formData.append('fn',font_name);
  formData.append('fi',font_ico);
  formData.append('iu',id_usuario);
  $.ajax({
    url: '../controlador/usuario/formatos/control_formato_modificar.php',
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(resp) {
      if(resp>0){
        if(resp==1){
          validaInput("for_titulo_edit","for_contenido_edit","for_tlink_edit","for_link_edit");
          Swal.fire(
          "Mensaje de Confirmación",
          "Formato modificado exitosamente",
          "success"
          ).then((value)=>{
            $("#modal_editar_formato").modal('hide');
            limpiarModalFor();
            tbl_formato.ajax.reload();
          });
        }else{
          Swal.fire(
          "Mensaje de Advertencia",
          "El formato registrado ya se encuentra en la BD",
          "warning"
          );
        }
      }else{
        Swal.fire(
        "Mensaje de Error",
        "No se pudo modificar el formato",
        "error"
        );
      }
    }
  });
  return false;
}

function Eliminar_Formato(id) {
  $.ajax({
        url:'../controlador/usuario/formatos/control_formato_eliminar.php',
        type:'POST',
        data:{
            id:id,
        }
    }).done(function(resp){
        if(resp>0){
                Swal.fire(
                  "Mensaje de Confirmacion",
                  "Formato eliminado exitosamente",
                  "success"
                  ).then((value)=>{
                    tbl_formato.ajax.reload();
                });

        }else{
            Swal.fire("Mensaje de Error", "No se pudo eliminar el formato","error")
        }
    })
}