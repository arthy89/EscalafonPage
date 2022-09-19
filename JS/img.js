var tbl_img;
function listar_usuario_ss(){
  tbl_img = $("#tabla_img_simple").DataTable({
    "pageLength": 10,
    "destroy": true,
    "bProcessing": true,
    "bDeferRender": true,
    "bServerSide": true,
    "sAjaxSource": "../controlador/usuario/serverside/serverImg.php",
    "columns": [
      {"defaultContent": ""},
      {"data":1}, //? Nombre
      {"data":2, //? Imagen
        render: function (data, type, row) {
          return '<img id="imgedit" class="img-responsive" style="width: 60px;" src="../'+ data+'">';
        }
      },
      {"data":4}, //? Usuario
      {"data":null,
        render: function (data, type, row) {
          return "<button id='editar' class='editar btn btn-warning btn-sm'><i class='fa fa-pen'></i></button>&nbsp;<button id='editarx' class='borrar btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>"
        }
      },
    ],

    "language": idioma_espanol,
    select: true
  });

 tbl_img.on('draw.td',function(){
   var PageInfo=$("#tabla_img_simple").DataTable().page.info();
   tbl_img.column(0,{page:'current'}).nodes().each(function(cell,i){
    cell.innerHTML=i+1+PageInfo.start;
   });
 });
}

function modal_abrir(){
  $("#modal_registro_foto").modal('show');
  $('.form-control').removeClass("is-invalid").removeClass("is-valid");
  var data = tbl_img.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_img.row(this).child.isShown()){
    var data = tbl_img.row(this).data();
  }
  document.getElementById("usu_nombre_foto_new").value = usu_names;
}

// ! EDITAR FOTO
$('#tabla_img_simple').on('click','.editar',function(){
  var data = tbl_img.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_img.row(this).child.isShown()){
    var data = tbl_img.row(this).data();
  }
  $('.form-control').removeClass("is-invalid").removeClass("is-valid");
  $("#modal_editar_foto").modal('show');

  document.getElementById('id_img_act').value =data[0];
  document.getElementById('usu_nombre_foto').value =data[4];
  document.getElementById('img_file_act').value =data[1];
  
})