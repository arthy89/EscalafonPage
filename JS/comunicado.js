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
      {"data":3}, //? Link
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
  $("#modal_registrar_comunicado").modal('show');
  $('.form-control').removeClass("is-invalid").removeClass("is-valid");
}

function formatText (icon) {
    return $('<span><i class="fas ' + $(icon.element).data('icon') + '"></i> ' + icon.text + '</span>');
};

$('.select2-icon').select2({
    width: "100%",
    templateSelection: formatText,
    templateResult: formatText
});


function registrar_usuario(){
  let usulog = document.getElementById("usu_log").value;
  let usuario = document.getElementById("usu_nombre").value;
  let apaterno = document.getElementById("usu_apaterno").value;
  let amaterno = document.getElementById("usu_amaterno").value;
  let email = document.getElementById("usu_email").value;
  let contra = document.getElementById("usu_contrasena").value;
  let detalle = document.getElementById("usu_detalle").value;
  let direccion = document.getElementById("usu_direccion").value;
  let foto = document.getElementById("usu_foto").value;
  let rol = document.getElementById("usu_rol").value;

  if(usulog.length == 0 || usuario.length == 0 || apaterno.length == 0 || amaterno.length == 0 || 
    email.length == 0 || contra.length == 0 || detalle.length == 0 || 
    direccion.length == 0){
      validaInput("usu_log","usu_nombre", "usu_apaterno", "usu_amaterno", "usu_email", "usu_contrasena", "usu_detalle", "usu_direccion");
      return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
    }

  if(validar_emailR(email)){

  }else{
    return Swal.fire(
      "Mensaje de advertencia",
      "Email invalido",
      "error"
    );
  }
  
  let extension = foto.split('.').pop();
  let nomfoto = "";
  let f = new Date();
  if(foto.length>0){
    nomfoto = "IMG"+f.getDate()+""+(f.getMonth()+1)+""+f.getFullYear()+""+f.getHours()+""+f.getMinutes()+""+f.getMilliseconds()+"."+extension;
  }

  let formData = new FormData();
  let fotoobject = $('#usu_foto')[0].files[0]; //todo foto adjuntada
  formData.append('ul',usulog);
  formData.append('u',usuario);
  formData.append('p',apaterno);
  formData.append('m',amaterno);
  formData.append('e',email);
  formData.append('c',contra);
  formData.append('de',detalle);
  formData.append('di',direccion);
  formData.append('fn',nomfoto);
  formData.append('f',fotoobject);
  formData.append('r',rol);
  $.ajax({
    url: '../controlador/usuario/control_usuario_registrar.php',
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(resp) {
      if(resp>0){
        if(resp==1){
          validaInput("usu_log", "usu_nombre", "usu_apaterno", "usu_amaterno", "usu_email", "usu_contrasena", "usu_detalle", "usu_direccion");
          // limpiarModalUsu();
          Swal.fire(
          "Mensaje de Confirmación",
          "Usuario registrado exitosamente",
          "success"
          ).then((value)=>{
            $("#modal_registro").modal('hide');
            limpiarModalUsu();
            tbl_comunicados.ajax.reload();
          });
        }else{
          Swal.fire(
          "Mensaje de Advertencia",
          "El correo registrado ya se encuentra en la BD",
          "warning"
          );
        }
      }else{
        Swal.fire(
        "Mensaje de Error",
        "No se pudo registrar el usuario",
        "error"
        );
      }
    }
  });
  return false;
}

function validaInput(usuario,nombre,paterno,materno,email,contrasena,detalle,direccion){
  Boolean(document.getElementById(usuario).value.length > 0) ? $("#"+usuario).removeClass("is-invalid").addClass("is-valid"): $("#"+usuario).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(nombre).value.length > 0) ? $("#"+nombre).removeClass("is-invalid").addClass("is-valid"): $("#"+nombre).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(paterno).value.length > 0) ? $("#"+paterno).removeClass("is-invalid").addClass("is-valid"): $("#"+paterno).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(materno).value.length > 0) ? $("#"+materno).removeClass("is-invalid").addClass("is-valid"): $("#"+materno).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(email).value.length > 0) ? $("#"+email).removeClass("is-invalid").addClass("is-valid"): $("#"+email).removeClass("is-valid").addClass("is-invalid");

  if(contrasena !=""){
  Boolean(document.getElementById(contrasena).value.length > 0) ? $("#"+contrasena).removeClass("is-invalid").addClass("is-valid"): $("#"+contrasena).removeClass("is-valid").addClass("is-invalid");
  }
  
  Boolean(document.getElementById(detalle).value.length > 0) ? $("#"+detalle).removeClass("is-invalid").addClass("is-valid"): $("#"+detalle).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(direccion).value.length > 0) ? $("#"+direccion).removeClass("is-invalid").addClass("is-valid"): $("#"+direccion).removeClass("is-valid").addClass("is-invalid");
}

function validaInputContra(contra_n,contra_r){
  Boolean(document.getElementById(contra_n).value.length > 0) ? $("#"+contra_n).removeClass("is-invalid").addClass("is-valid"): $("#"+contra_n).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(contra_r).value.length > 0) ? $("#"+contra_r).removeClass("is-invalid").addClass("is-valid"): $("#"+contra_r).removeClass("is-valid").addClass("is-invalid");
}

function validar_emailR(email){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}

function limpiarModalUsu(){
  document.getElementById("usu_log").value = "";
  document.getElementById("usu_nombre").value = "";
  document.getElementById("usu_apaterno").value = "";
  document.getElementById("usu_amaterno").value = "";
  document.getElementById("usu_email").value = "";
  document.getElementById("usu_contrasena").value = "";
  document.getElementById("usu_detalle").value = "";
  document.getElementById("usu_direccion").value = "";
  document.getElementById("usu_foto").value = "";
}

function Modificar_Usuario(){
  let id = document.getElementById("usu_id_edit").value;
  let usuario = document.getElementById("usu_nombre_edit").value;
  let apaterno = document.getElementById("usu_apaterno_edit").value;
  let amaterno = document.getElementById("usu_amaterno_edit").value;
  let email = document.getElementById("usu_email_edit").value;
  let detalle = document.getElementById("usu_detalle_edit").value;
  let direccion = document.getElementById("usu_direccion_edit").value;
  let rol = document.getElementById("usu_rol_edit").value;

  if(usuario.length == 0 || apaterno.length == 0 || amaterno.length == 0 || 
    email.length == 0 || detalle.length == 0 || 
    direccion.length == 0){
      validaInput("usu_nombre_edit", "usu_apaterno_edit", "usu_amaterno_edit", "usu_email_edit", "","usu_detalle_edit", "usu_direccion_edit");
      return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
    }

  if(validar_emailR(email)){

  }else{
    return Swal.fire(
      "Mensaje de advertencia",
      "Email invalido",
      "error"
    );
  }
  $.ajax({
    url: '../controlador/usuario/control_modificar_usuario.php',
    type: 'POST',
    data:{
      id:id,
      usuario:usuario,
      apaterno:apaterno,
      amaterno:amaterno,
      email:email,
      detalle:detalle,
      direccion:direccion,
      rol:rol

    }
  }).done(function(resp){
      if(resp>0){
        if(resp==1){
          Swal.fire(
          "Mensaje de Confirmación",
          "Usuario Actualizado Exitosamente",
          "success"
          ).then((value)=>{
            $("#modal_editar_registro").modal('hide');
            limpiarModalUsu();
            tbl_comunicados.ajax.reload();
          });
        }else{
          Swal.fire(
          "Mensaje de Advertencia",
          "El correo registrado ya se encuentra en la BD",
          "warning"
          );
        }
      }else{
        Swal.fire(
        "Mensaje de Error",
        "No se pudo actualizar el usuario",
        "error"
        );
      }
  })
}

function Modificar_Foto(){
  let id = document.getElementById("usu_id_foto").value;
  let foto = document.getElementById("usu_foto_nueva").value;
  let fotoactual = document.getElementById("usu_foto_actual").value;

  if(id.length == 0 || foto.length == 0){
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
  let fotoobject = $('#usu_foto_nueva')[0].files[0]; //? foto adjuntada
  
  formData.append('id',id);
  formData.append('fn',nomfoto);
  formData.append('fotoactual',fotoactual);
  formData.append('f',fotoobject);
  $.ajax({
    url: '../controlador/usuario/control_usuario_modificar_foto.php',
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(resp) {
      if(resp>0){
          Swal.fire(
          "Mensaje de Confirmación",
          "Foto actualizada exitosamente",
          "success"
          ).then((value)=>{
            $("#modal_editar_foto").modal('hide');
            tbl_comunicados.ajax.reload();
            document.getElementById('usu_foto_nueva').value ="";
            document.getElementById('foto_name_nueva').value ="";
          });
      }else{
        Swal.fire(
        "Mensaje de Error",
        "No se pudo actualizar la foto",
        "error"
        );
      }
    }
  });
  return false;
}

function Modificar_Contra(){
  let id = document.getElementById("usu_id_contra").value;
  let contra_n = document.getElementById("usu_contrasena_nueva").value;
  let contra_r = document.getElementById("usu_contra_repe").value; 

  if(id.length == 0 || contra_n.length == 0 || contra_r.length == 0 ){
    validaInputContra("usu_contrasena_nueva", "usu_contra_repe");
      return Swal.fire(
        "Mensaje de Advertencia",
        "Campos incompletos",
        "warning");
    }
    
  if(contra_n != contra_r){
    return Swal.fire(
        "Mensaje de Advertencia",
        "Las contraseñas no coinciden",
        "error");
  }
  $.ajax({
    url: '../controlador/usuario/control_usuario_modificar_contra.php',
    type: "POST",
    data:{
            id:id,
            contranueva:contra_n,
        }
      }).done(function(resp) {
      if(resp>0){
          Swal.fire(
          "Mensaje de Confirmación",
          "Contraseña actualizada correctamente",
          "success"
          ).then((value)=>{
            $("#modal_editar_contra").modal('hide');
            tbl_comunicados.ajax.reload();
            document.getElementById('usu_id_contra').value ="";
            document.getElementById('usu_contrasena_nueva').value ="";
            document.getElementById('usu_contra_repe').value ="";
          });
      }else{
        Swal.fire(
        "Mensaje de Error",
        "No se pudo actualizar la contraseña",
        "error"
        );
      }
    })
}

function Eliminar_Usuario(id){
    $.ajax({
        url:'../controlador/usuario/control_eliminar_usuario.php',
        type:'POST',
        data:{
            id:id,
        }
    }).done(function(resp){
        if(resp>0){
                Swal.fire(
                  "Mensaje de Confirmacion",
                  "Usuario eliminado exitosamente",
                  "success"
                  ).then((value)=>{
                    tbl_comunicados.ajax.reload();
                });

        }else{
            Swal.fire("Mensaje de Error", "No se pudo eliminar a usuario","error")
        }
    })
}