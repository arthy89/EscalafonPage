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