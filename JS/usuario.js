function Iniciar_Sesion() {
    let usu = document.getElementById("text_usuario").value;
    let pass = document.getElementById("text_contrasena").value;
    if (usu.lenght == 0 || pass.length == 0) {
       return Swal.fire(
         "Campos incompletos",
         "Debe llenar los campos requeridos",
         "warning"
       );
    }
    $.ajax({
        url: 'controlador/usuario/iniciar_sesion.php',
        type: 'POST',
        data: {
            u: usu,
            p: pass
        }
    }).done(function(resp){
        let data = JSON.parse(resp);
        if (data.length > 0) {
            
            $.ajax({
              url: "controlador/usuario/crear_sesion.php",
              type: "POST",
              data: {
                idusuario: data[0][0],
                eusuario: data[0][1],
                usuario: data[0][3],
                apusuario: data[0][4],
                amusuario: data[0][5],
                dusuario: data[0][7],
                fusuario: data[0][8],
                detalleusu: data[0][9],
                rol: data[0][10],
              },
            }).done(function (r) {
              Swal.fire({
                icon: "success",
                title: "Acceso Correcto",
                text: "Bienvenido " + data[0][10] + " " + data[0][3],
                timer: 2000,
                allowOutsideClick: false,
                heightAuto: false,
                didOpen: () => {
                  Swal.showLoading();
                  const b = Swal.getHtmlContainer().querySelector("b");
                  timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft();
                  }, 100);
                },
                willClose: () => {
                  clearInterval(timerInterval);
                },
              }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                  location.reload();
                }
              });
            });


            Swal.fire(
              "Sesión exitosa",
              "Bienvenido al sistema de Escalafón",
              "success"
            );
        } else {
            Swal.fire(
              "Error de sesión",
              "Usuario o clave incorrectos",
              "error"
            );
        }
    })
}

// var tbl_usuarios;
// function listar_usuario_simple(){
//   tbl_usuarios = $("#tabla_usuario_simple").DataTable({
//     "ordering": false,
//     "bLengthChange": true,
//     "searching": { "regex": false},
//     "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
//     "pageLength": 10,
//     "destroy": true,
//     "async": false,
//     "processing": true,
//     "ajax": {
//       "url": "../controlador/usuario/control_usuario_listar.php",
//       type: 'POST'
//     },
//     "columns": [
//       {"defaultContent": ""},
//       {"data":"usu_nombre"},
//       {"data":"usu_apaterno"},
//       {"data":"usu_amaterno"},
//       {"data":"usu_email"},
//       {"data":"usu_foto",
//         render: function (data, type, row) {
//           return '<img class="img-responsive" style="width: 60px;" src="../'+ data+'">';
//         }
//       },
//       {"data":"usu_detalle"},
//       {"data":"usu_direccion"},
//       {"data":"rol_nombre"},
//       {"data":null,
//         render: function (data, type, row) {
//           return "<button onclick='modal_edit();' id='editar' class='editar btn btn-warning'><i class='fa fa-edit'></i></button>"
//         }
//       },
//       // {"defaultContent":"<button class='editar btn btn-warning'><i class='fa fa-edit'></i></button>"}
//     ],

//     "language": idioma_espanol,
//     select: true
//   });

//  tbl_usuarios.on('draw.td',function(){
//    var PageInfo=$("#tabla_usuario_simple").DataTable().page.info();
//    tbl_usuarios.column(0,{page:'current'}).nodes().each(function(cell,i){
//     cell.innerHTML=i+1+PageInfo.start;
//    });
//  });
// }

var tbl_usuarios;
function listar_usuario_ss(){
  tbl_usuarios = $("#tabla_usuario_simple").DataTable({
    "pageLength": 10,
    "destroy": true,
    "bProcessing": true,
    "bDeferRender": true,
    "bServerSide": true,
    "sAjaxSource": "../controlador/usuario/serverside/serverUsuario.php",
    "columns": [
      {"defaultContent": ""},
      {"data":1}, //? nombre
      {"data":2}, //? apaterno
      {"data":3}, //? amaterno
      {"data":5}, //? email
      {"data":6, //? foto
        render: function (data, type, row) {
          return '<img class="img-responsive" style="width: 60px;" src="../'+ data+'">';
        }
      },
      {"data":7}, //? detalle
      {"data":8}, //? direccion
      {"data":10}, //? rol_nombre
      {"data":null,
        render: function (data, type, row) {
          return "<button id='editar' class='editar btn btn-warning'><i class='fa fa-edit'></i></button>"
        }
      },
      // {"defaultContent":"<button class='editar btn btn-warning'><i class='fa fa-edit'></i></button>"}
    ],

    "language": idioma_espanol,
    select: true
  });

 tbl_usuarios.on('draw.td',function(){
   var PageInfo=$("#tabla_usuario_simple").DataTable().page.info();
   tbl_usuarios.column(0,{page:'current'}).nodes().each(function(cell,i){
    cell.innerHTML=i+1+PageInfo.start;
   });
 });
}

$('#tabla_usuario_simple').on('click','.editar',function(){
  var data = tbl_usuarios.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_usuarios.row(this).child.isShown()){
    var data = tbl_usuarios.row(this).data();
  }
  $("#modal_editar_registro").modal('show');
  document.getElementById('usu_id_edit').value =data[0];
  document.getElementById('usu_nombre_edit').value =data[1];
  document.getElementById('usu_apaterno_edit').value =data[2];
  document.getElementById('usu_amaterno_edit').value =data[3];
  document.getElementById('usu_email_edit').value =data[4];
  document.getElementById('usu_contrasena_edit').value =data[5];
  document.getElementById('usu_detalle_edit').value =data[6];
  document.getElementById('usu_direccion_edit').value =data[7];
  document.getElementById('usu_rol_edit').value =data[8];
  document.getElementById('usu_foto_edit').value =data[9];
})

//! MODAL
function modal_abrir(){
  $("#modal_registro").modal('show');
  $('.form-control').removeClass("is-invalid").removeClass("is-valid");
}

function cargar_rol(){
  $.ajax({
    url: '../controlador/usuario/control_rol.php',
    type: 'POST'
  }).done(function(resp){
    let data = JSON.parse(resp);
    let llenardata = "";
    if(data.length > 0){
      for (let i = 0; i < data.length; i++) {
        llenardata+="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
      }
      document.getElementById('usu_rol').innerHTML= llenardata;
    }else{
      llenardata+="<option value=''>No se encuentran roles</option>";
      document.getElementById('usu_rol').innerHTML= llenardata;
    }
  })
}



function registrar_usuario(){
  let usuario = document.getElementById("usu_nombre").value;
  let apaterno = document.getElementById("usu_apaterno").value;
  let amaterno = document.getElementById("usu_amaterno").value;
  let email = document.getElementById("usu_email").value;
  let contra = document.getElementById("usu_contrasena").value;
  let detalle = document.getElementById("usu_detalle").value;
  let direccion = document.getElementById("usu_direccion").value;
  let foto = document.getElementById("usu_foto").value;
  let rol = document.getElementById("usu_rol").value;

  if(usuario.length == 0 || apaterno.length == 0 || amaterno.length == 0 || 
    email.length == 0 || contra.length == 0 || detalle.length == 0 || 
    direccion.length == 0){
      validaInput("usu_nombre", "usu_apaterno", "usu_amaterno", "usu_email", "usu_contrasena", "usu_detalle", "usu_direccion");
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
          validaInput("usu_nombre", "usu_apaterno", "usu_amaterno", "usu_email", "usu_contrasena", "usu_detalle", "usu_direccion");
          // limpiarModalUsu();
          Swal.fire(
          "Mensaje de Confirmación",
          "Usuario registrado exitosamente",
          "success"
          ).then((value)=>{
            $("#modal_registro").modal('hide');
            limpiarModalUsu();
            tbl_usuarios.ajax.reload();
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

function validaInput(nombre,paterno,materno,email,contrasena,detalle,direccion){
  Boolean(document.getElementById(nombre).value.length > 0) ? $("#"+nombre).removeClass("is-invalid").addClass("is-valid"): $("#"+nombre).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(paterno).value.length > 0) ? $("#"+paterno).removeClass("is-invalid").addClass("is-valid"): $("#"+paterno).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(materno).value.length > 0) ? $("#"+materno).removeClass("is-invalid").addClass("is-valid"): $("#"+materno).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(email).value.length > 0) ? $("#"+email).removeClass("is-invalid").addClass("is-valid"): $("#"+email).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(contrasena).value.length > 0) ? $("#"+contrasena).removeClass("is-invalid").addClass("is-valid"): $("#"+contrasena).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(detalle).value.length > 0) ? $("#"+detalle).removeClass("is-invalid").addClass("is-valid"): $("#"+detalle).removeClass("is-valid").addClass("is-invalid");
  Boolean(document.getElementById(direccion).value.length > 0) ? $("#"+direccion).removeClass("is-invalid").addClass("is-valid"): $("#"+direccion).removeClass("is-valid").addClass("is-invalid");
}

function validar_emailR(email){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}

function limpiarModalUsu(){
  document.getElementById("usu_nombre").value = "";
  document.getElementById("usu_apaterno").value = "";
  document.getElementById("usu_amaterno").value = "";
  document.getElementById("usu_email").value = "";
  document.getElementById("usu_contrasena").value = "";
  document.getElementById("usu_detalle").value = "";
  document.getElementById("usu_direccion").value = "";
  document.getElementById("usu_foto").value = "";
}