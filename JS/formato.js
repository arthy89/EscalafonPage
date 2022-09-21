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