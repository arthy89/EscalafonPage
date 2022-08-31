
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edición de los Usuarios</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="admin.php">Inicio</a></li>
          <li class="breadcrumb-item active">Edición contacto</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>

<!-- Main content -->
<div class="content">
  <div class="container">
    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-header">
        <h5 class="card-title"><strong>Listado de Usuarios</strong></h5>
        <button onclick="modal_abrir();" type="button" class="btn btn-success float-right"><i class="fa fa-plus-circle mr-2"></i> Nuevo Usuario</button>
      </div>
      <div class="card-body pb-0">
        <div class="row">
          <div class="col-12 table-responsive">
            <table id="tabla_usuario_simple" class="display" width="100%">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Nombres</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th>Email</th>
                      <th>Foto</th>
                      <th>Detalles</th>
                      <th>Dirección</th>
                      <th>Rol</th>
                      <th>Acción</th>
                  </tr>
              </thead>
          </table>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  <!-- /.card -->
</div>

<!-- Modal Registrar Usuario -->
<div class="modal fade" id="modal_registro" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            <label for="">Usuario para inicio de sesión</label>
            <input type="text" id="usu_log" class="form-control">
          </div>
          <div class="col-6">
            <label for="">Contraseña</label>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Contraseña" id="usu_contrasena">
              <div class="input-group-append" id="ojo" style="opacity: 0.7;">
                <div class="input-group-text">
                  <span class="fas fa-eye" id="ojoico" style="opacity: 0.2;"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <label for="">Nombres</label>
            <input type="text" id="usu_nombre" class="form-control">
          </div>
          <div class="col-4">
            <label for="">Apellido Paterno</label>
            <input type="text" id="usu_apaterno" class="form-control">
          </div>
          <div class="col-4">
            <label for="">Apellido Materno</label>
            <input type="text" id="usu_amaterno" class="form-control">
          </div>
          <div class="col-12">
            <label for="">Email</label>
            <input type="text" id="usu_email" class="form-control" >
          </div>
          <div class="col-12">
            <label for="">Detalles</label>
            <input type="text" id="usu_detalle" class="form-control">
          </div>
          <div class="col-6">
            <label for="">Dirección</label>
            <input type="text" id="usu_direccion" class="form-control">
          </div>
          <div class="col-6">
            <label for="">Rol</label>
            <select class="js-example-basic-single" id="usu_rol" style="width: 100%; margin-top: -10px;">
            </select>
          </div>
          <div class="col-6 arch">
            <label for="">Foto</label>
            <label for="usu_foto" id="archivo"><span class="fas fa-image mr-1"></span> Elegir Foto</label>
            <input type="file" id="usu_foto">
          </div>
          <div class="col-6">
            <label for="">Nombre de la foto</label>
            <input type="text" id="foto_name" class="form-control" disabled>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button onclick="registrar_usuario();" type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL -->

<!-- Modal EDITAR -->
<div class="modal fade" id="modal_editar_registro" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" hidden>
          <div class="col-4">
            <label for="">Usuario ID</label>
            <input type="text" id="usu_id_edit" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <label for="">Nombres</label>
            <input type="text" id="usu_nombre_edit" class="form-control">
          </div>
          <div class="col-4">
            <label for="">Apellido Paterno</label>
            <input type="text" id="usu_apaterno_edit" class="form-control">
          </div>
          <div class="col-4">
            <label for="">Apellido Materno</label>
            <input type="text" id="usu_amaterno_edit" class="form-control">
          </div>
          <div class="col-12">
            <label for="">Email</label>
            <input type="text" id="usu_email_edit" class="form-control" >
          </div>
          <div class="col-12">
            <label for="">Detalles</label>
            <input type="text" id="usu_detalle_edit" class="form-control">
          </div>
          <div class="col-6">
            <label for="">Dirección</label>
            <input type="text" id="usu_direccion_edit" class="form-control">
          </div>
          <div class="col-6">
            <label for="">Rol</label>
            <select class="js-example-basic-single" id="usu_rol_edit" style="width: 100%; margin-top: -10px;">
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button onclick="Modificar_Usuario();" type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL -->

<!-- Modal EDITAR FOTO-->
<div class="modal fade" id="modal_editar_foto" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Foto de Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" hidden>
          <div class="col-4">
            <label for="">Usuario ID</label>
            <input type="text" id="usu_id_foto" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <label for="">Nombre de Usuario</label>
            <input type="text" id="usu_nombre_foto" class="form-control" disabled>
          </div>
          <div class="col-4 arch">
            <label for="">Foto</label>
            <label for="usu_foto_nueva" id="archivo"><span class="fas fa-image mr-1"></span> Nueva  Foto</label>
            <input type="file" id="usu_foto_nueva">
          </div>
          <div class="col-4">
            <label for="">Nombre de la foto</label>
            <input type="text" id="foto_name_nueva" class="form-control" disabled>
            
            <input type="text" id="usu_foto_actual" hidden>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button onclick="Modificar_Foto();" type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL EDITAR FOTO-->

<script>
  var ojo = document.getElementById('ojo');
  var ojoico = document.getElementById("ojoico");
  var input_contra = document.getElementById('usu_contrasena');
  ojo.addEventListener('click', function(){
    if (input_contra.type == 'password'){
        input_contra.type = 'text';
        ojo.style.opacity = 1;
        ojoico.style.opacity = 0.8;
    }else{
        input_contra.type = 'password';
        ojo.style.opacity = 0.7;
        ojoico.style.opacity = 0.2;
    }
})
</script>

<script type="text/javascript">
  var archivo = document.querySelector("#usu_foto");
  archivo.addEventListener('change',() => {
    document.querySelector('#foto_name').value = archivo.files[0].name;
  })

  var archivo_nuevo = document.querySelector("#usu_foto_nueva");
  archivo_nuevo.addEventListener('change',() => {
    document.querySelector('#foto_name_nueva').value = archivo_nuevo.files[0].name;
  })
</script>

<script>
$('#tabla_usuario_simple').on('click','.editar',function(){
  var data = tbl_usuarios.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_usuarios.row(this).child.isShown()){
    var data = tbl_usuarios.row(this).data();
  }
  $('.form-control').removeClass("is-invalid").removeClass("is-valid");
  $("#modal_editar_registro").modal('show');
  // ('usu_id','usu_nombre','usu_apaterno','usu_amaterno','usu_contrasena','usu_email','usu_foto','usu_detalle','usu_direccion','rol_id','rol_nombre')
  document.getElementById('usu_id_edit').value =data[0];
  document.getElementById('usu_nombre_edit').value =data[1];
  document.getElementById('usu_apaterno_edit').value =data[2];
  document.getElementById('usu_amaterno_edit').value =data[3];
  document.getElementById('usu_email_edit').value =data[5];
  document.getElementById('usu_detalle_edit').value =data[7];
  document.getElementById('usu_direccion_edit').value =data[8];
  $('#usu_rol_edit').select2().val(data[9]).trigger('change.select2');
})
</script>

<script>
$('#tabla_usuario_simple').on('click','.editar_foto',function(){
  var data = tbl_usuarios.row($(this).parents('tr')).data(); //tamaño escritorio
  if(tbl_usuarios.row(this).child.isShown()){
    var data = tbl_usuarios.row(this).data();
  }
  $('.form-control').removeClass("is-invalid").removeClass("is-valid");
  $("#modal_editar_foto").modal('show');
  // ('usu_id','usu_nombre','usu_apaterno','usu_amaterno','usu_contrasena','usu_email','usu_foto','usu_detalle','usu_direccion','rol_id','rol_nombre')
  document.getElementById('usu_id_foto').value =data[0];
  document.getElementById('usu_nombre_foto').value =data[1];
  document.getElementById('usu_foto_actual').value =data[6];
})
</script>

<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
listar_usuario_ss();
cargar_rol();

// ! PARA VALIDAR LA EXTENSION DE LA FOTO
document.getElementById('usu_foto').addEventListener("change", () => {
  var fileName = document.getElementById('usu_foto').value;
  var idxDot = fileName.lastIndexOf(".") + 1;
  var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
  if (extFile == "jpg" || extFile == "png" || extFile == "jpeg"){
    // todo 
  }else{
    Swal.fire(
      "Mensaje de Advertencia",
      "Solo se aceptan imágenes. Usted subió un archivo de tipo: "+extFile,
      "warning"
    );
    document.getElementById('usu_foto').value ="";
    document.getElementById('foto_name').value ="";
  }
});

document.getElementById('usu_foto_nueva').addEventListener("change", () => {
  var fileName = document.getElementById('usu_foto_nueva').value;
  var idxDot = fileName.lastIndexOf(".") + 1;
  var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
  if (extFile == "jpg" || extFile == "png" || extFile == "jpeg"){
    // todo 
  }else{
    Swal.fire(
      "Mensaje de Advertencia",
      "Solo se aceptan imágenes. Usted subió un archivo de tipo: "+extFile,
      "warning"
    );
    document.getElementById('usu_foto_nueva').value ="";
    document.getElementById('foto_name_nueva').value ="";
  }
});
</script>