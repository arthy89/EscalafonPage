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
  document.getElementById('usu_foto_actual').value =data[2];
  
})

// ! [PARA ELIMINAR FOTO]
$('#tabla_img_simple').on('click','.borrar',function(){
  var data = tbl_img.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_img.row(this).child.isShown()){
    var data = tbl_img.row(this).data();
  }
  Swal.fire({
        title: '¿Estás seguro de eliminar la Imagen '+data[0] +'?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
            Eliminar_Img(data[0],data[2]);
        }
      })
})

function limpiarModalImg() {
  document.getElementById('usu_foto_new').value = "";
  document.getElementById('foto_name_new').value = "";
  document.getElementById('img_file_new').value = "";
}

function limpiarModalImg2() {
  document.getElementById('usu_foto_nueva').value = "";
  document.getElementById('foto_name').value = "";
}

function validaInput(fselect,nafoto) {
  Boolean(document.getElementById(fselect).value.length > 0) ? $("#"+fselect).removeClass("is-invalid").addClass("is-valid"): $("#"+fselect).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(nafoto).value.length > 0) ? $("#"+nafoto).removeClass("is-invalid").addClass("is-valid"): $("#"+nafoto).removeClass("is-valid").addClass("is-invalid");
}

function Registrar_Img() {
  let usu_id = id_usuario;
  let axfoto = document.getElementById("foto_name_new").value;
  let nombrefoto = document.getElementById("img_file_new").value;
  let foto = document.getElementById("usu_foto_new").value;

  if(axfoto.length == 0 || nombrefoto.length == 0){
      validaInput("foto_name_new","img_file_new");
      return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
    }
  
  let extension = foto.split('.').pop();
  let nomfoto = "";
  let f = new Date();
  if(foto.length>0){
    nomfoto = "IMG"+f.getDate()+""+(f.getMonth()+1)+""+f.getFullYear()+""+f.getHours()+""+f.getMinutes()+""+f.getMilliseconds()+"."+extension;
  }

  let formData = new FormData();
  let fotoobject = $('#usu_foto_new')[0].files[0]; //todo foto adjuntada
  formData.append('uid',usu_id);
  formData.append('fnom',nombrefoto);
  formData.append('fn',nomfoto);
  formData.append('f',fotoobject);
  $.ajax({
    url: '../controlador/usuario/imagenes/control_registrar_img.php',
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(resp) {
      if(resp>0){
        if(resp==1){
          validaInput("foto_name_new","img_file_new");
          Swal.fire(
          "Mensaje de Confirmación",
          "Imagen subida exitosamente",
          "success"
          ).then((value)=>{
            $("#modal_registro_foto").modal('hide');
            limpiarModalImg();
            tbl_img.ajax.reload();
          });
        }else{
          Swal.fire(
          "Mensaje de Advertencia",
          "La imagen ya se encuentra en la BD",
          "warning"
          );
        }
      }else{
        Swal.fire(
        "Mensaje de Error",
        "No se pudo registrar la imagen",
        "error"
        );
      }
    }
  });
  return false;
}

function Modificar_Img() {
  const usu_id = id_usuario,
        iid = document.getElementById("id_img_act").value,
        axfoto = document.getElementById("foto_name").value,
        nombrefoto = document.getElementById("img_file_act").value,
        foto_actual = document.getElementById("usu_foto_actual").value,
        foto = document.getElementById("usu_foto_nueva").value;

  if(axfoto.length == 0 || nombrefoto.length == 0){
      validaInput("foto_name","img_file_act");
      return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
    }
  
  let extension = foto.split('.').pop();
  let nomfoto = "";
  let f = new Date();
  if(foto.length>0){
    nomfoto = "IMG"+f.getDate()+""+(f.getMonth()+1)+""+f.getFullYear()+""+f.getHours()+""+f.getMinutes()+""+f.getMilliseconds()+"."+extension;
  }

  let formData = new FormData();
  let fotoobject = $('#usu_foto_nueva')[0].files[0]; //todo foto adjuntada
  formData.append('id',iid);
  formData.append('uid',usu_id);
  formData.append('fnom',nombrefoto);
  formData.append('fotoactual',foto_actual);
  formData.append('fn',nomfoto);
  formData.append('f',fotoobject);
  $.ajax({
    url: '../controlador/usuario/imagenes/control_modificar_img.php',
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(resp) {
      if(resp>0){
        if(resp==1){
          validaInput("foto_name","img_file_act");
          Swal.fire(
          "Mensaje de Confirmación",
          "Imagen modificada y subida exitosamente",
          "success"
          ).then((value)=>{
            $("#modal_editar_foto").modal('hide');
            limpiarModalImg2();
            tbl_img.ajax.reload();
          });
        }else{
          Swal.fire(
          "Mensaje de Advertencia",
          "La Imagen ya se encuentra en la BD",
          "warning"
          );
        }
      }else{
        Swal.fire(
        "Mensaje de Error",
        "No se pudo modificar la Imagen",
        "error"
        );
      }
    }
  });
  return false;

}

function Eliminar_Img(id,factual){
    $.ajax({
        url:'../controlador/usuario/imagenes/control_eliminar_img.php',
        type:'POST',
        data:{
            id:id,
            foto:factual,
        }
    }).done(function(resp){
        if(resp>0){
                Swal.fire(
                  "Mensaje de Confirmacion",
                  "Imagen eliminada exitosamente",
                  "success"
                  ).then((value)=>{
                    tbl_img.ajax.reload();
                });

        }else{
            Swal.fire("Mensaje de Error", "No se pudo eliminar la Imagen","error")
        }
    })
}