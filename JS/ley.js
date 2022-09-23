//! ('mn_id','mn_title','mn_text','mn_ico_name','mn_ico_svg','usu_id','usu_nombre')
var tbl_ley;
function listar_usuario_ss(){
  tbl_ley = $("#tabla_ley_simple").DataTable({
    "pageLength": 10,
    "destroy": true,
    "bProcessing": true,
    "bDeferRender": true,
    "bServerSide": true,
    "sAjaxSource": "../controlador/usuario/serverside/serverLey.php",
    "columns": [
      {"defaultContent": ""},
      {"data":4, //? icono
        render: function (data, type, row) {
          return '<i class="fas fa-lg '+ data+'"></i>';
        }
      }, 
      {"data":1}, //? titulo ley
      {"data":2,  //? texto
        render: function (data, type, row) {
          return '<div style="text-overflow: ellipsis; width: 230px; white-space: nowrap; overflow:hidden;">'+data+'</div>';
        }
      },
      {"data":6}, //? Usuario
      {"data":null,
        render: function (data, type, row) {
          return "<button id='editar' class='editar btn btn-warning btn-sm'><i class='fa fa-pen'></i></button>&nbsp;<button id='editarx' class='borrar btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>"
        }
      },
    ],

    "language": idioma_espanol,
    select: true
  });

 tbl_ley.on('draw.td',function(){
   var PageInfo=$("#tabla_ley_simple").DataTable().page.info();
   tbl_ley.column(0,{page:'current'}).nodes().each(function(cell,i){
    cell.innerHTML=i+1+PageInfo.start;
   });
 });
}

//! MODAL
function modal_abrir(){
  $("#modal_registrar_ley").modal('show');
  $('.form-control').removeClass("is-invalid").removeClass("is-valid");

  //? cargar el icono para la bd 
  var icon1 = document.getElementById('ley_ico_new_val');
  function onChange(){
    var icon_svg = icon1.value;
    var icon_name = icon1.options[icon1.selectedIndex].text;
    document.getElementById('ley_ico_svg_new').value =icon_svg;
    document.getElementById('ley_ico_name_new').value =icon_name;
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

// todo: PARA ABRIR MODAL EDICION
$('#tabla_ley_simple').on('click','.editar',function(){
  var data = tbl_ley.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_ley.row(this).child.isShown()){
    var data = tbl_ley.row(this).data();
  }
  $("#modal_editar_ley").modal('show');
  document.getElementById('ley_id_act').value =data[0]
  document.getElementById('ley_titulo_edit').value = data[1];
  document.getElementById('ley_contenido_edit').value = data[2];
  document.getElementById('ley_ico_act_name').value = data[3];
  document.getElementById('ley_ico_act').className = 'fas ' +data[4];

  var icon = document.getElementById('ley_ico_edit_val');
  function onChange(){
    var icon_svg = icon.value;
    var icon_name = icon.options[icon.selectedIndex].text;
    document.getElementById('ley_ico_svg_edit').value =icon_svg;
    document.getElementById('ley_ico_name_edit').value =icon_name;
  }
  icon.onchange = onChange;
  onChange();
})

// todo: PARA ABRIR MODAL BORRAR
$('#tabla_ley_simple').on('click','.borrar',function(){
  var data = tbl_ley.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_ley.row(this).child.isShown()){
    var data = tbl_ley.row(this).data();
  }
  Swal.fire({
        title: '¿Estás seguro de eliminar la Ley '+data[1] +'?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
            // Eliminar_Comunicado(data[0]);
        }
      })
})

function validaInput(title,text){
  Boolean(document.getElementById(title).value.length > 0) ? $("#"+title).removeClass("is-invalid").addClass("is-valid"): $("#"+title).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(text).value.length > 0) ? $("#"+text).removeClass("is-invalid").addClass("is-valid"): $("#"+text).removeClass("is-valid").addClass("is-invalid");
}

// ! PARA REGISTRAR BENEFICIO
function Registrar_Ley() {
  const ley = document.getElementById("ley_titulo").value,
        texto = document.getElementById("ley_contenido").value;
  if(ley.length == 0 || texto.length == 0) {
    validaInput("ley_titulo","ley_contenido");
    return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
  }
}

// ! PARA EDITAR BENEFICIO
function Editar_Ley() {
  const ley = document.getElementById("ley_titulo_edit").value,
        texto = document.getElementById("ley_contenido_edit").value;
  if(ley.length == 0 || texto.length == 0) {
    validaInput("ley_titulo_edit","ley_contenido_edit");
    return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
  }
}