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