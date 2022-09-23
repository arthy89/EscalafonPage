//! ('bn_id','bn_text','usu_id','usu_nombre')
var tbl_bene;
function listar_usuario_ss(){
  tbl_bene = $("#tabla_beneficio_simple").DataTable({
    "pageLength": 10,
    "destroy": true,
    "bProcessing": true,
    "bDeferRender": true,
    "bServerSide": true,
    "sAjaxSource": "../controlador/usuario/serverside/serverBene.php",
    "columns": [
      {"defaultContent": ""},
      {"data":1}, //? beneficio texto
      {"data":3}, //? usuario
      {"data":null,
        render: function (data, type, row) {
          return "<button id='editar' class='editar btn btn-warning btn-sm'><i class='fa fa-pen'></i></button>&nbsp;<button id='editarx' class='borrar btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>"
        }
      },
    ],

    "language": idioma_espanol,
    select: true
  });

 tbl_bene.on('draw.td',function(){
   var PageInfo=$("#tabla_beneficio_simple").DataTable().page.info();
   tbl_bene.column(0,{page:'current'}).nodes().each(function(cell,i){
    cell.innerHTML=i+1+PageInfo.start;
   });
 });
}

//! MODAL
function modal_abrir(){
  $("#modal_registro_bene").modal('show');
  $('.form-control').removeClass("is-invalid").removeClass("is-valid");
}

// todo: PARA ABRIR LOS MODALES EDICION
$('#tabla_beneficio_simple').on('click','.editar',function(){
  var data = tbl_bene.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_bene.row(this).child.isShown()){
    var data = tbl_bene.row(this).data();
  }
  $("#modal_bene_editar").modal('show');
  document.getElementById('bene_id').value =data[0];
  document.getElementById('bene_text_edit').value =data[1];
})

// todo: PARA ABRIR MODAL BORRAR
$('#tabla_beneficio_simple').on('click','.borrar',function(){
  var data = tbl_bene.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_bene.row(this).child.isShown()){
    var data = tbl_bene.row(this).data();
  }
  Swal.fire({
        title: '¿Estás seguro de eliminar el Beneficio '+data[0] +'?',
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


function validaInput(text){
  Boolean(document.getElementById(text).value.length > 0) ? $("#"+text).removeClass("is-invalid").addClass("is-valid"): $("#"+text).removeClass("is-valid").addClass("is-invalid");
}

// ! PARA REGISTRAR BENEFICIO
function Registrar_Beneficio() {
  const texto = document.getElementById("bene_text").value;
  if(texto.length == 0) {
    validaInput("bene_text");
    return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
  }
}

// ! PARA EDITAR BENEFICIO
function Editar_Beneficio() {
  const texto_e = document.getElementById("bene_text_edit").value;
  if(texto_e.length == 0) {
    validaInput("bene_text_edit");
    return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
  }
}