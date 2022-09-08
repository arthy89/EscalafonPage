
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
            <table id="tabla_comunicado_simple" class="display" width="100%">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Ícono</th>
                      <th>Título</th>
                      <th>Contenido</th>
                      <th>Título de Link</th>
                      <th>Link</th>
                      <th>Fecha</th>
                      <th>Hora</th>
                      <th>Usuario</th>
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
            <select class="js-example-basic-single" id="com_ico" style="width: 100%; margin-top: -10px;">
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

<!-- Modal EDITAR COMINICADO-->
<div class="modal fade" id="modal_editar_comunicado" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Comunicado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-2">
            <label for="">Orden</label>
            <input type="text" id="com_id_edit" class="form-control">
          </div>
          <div class="col-4">
            <label for="">Ícono</label>
            <select class="js-example-basic-single" id="com_ico_edit" style="width: 100%; margin-top: -10px;">
            </select>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">Título</label>
              <input type="text" id="com_titulo_edit" class="form-control">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label for="">Contenido</label>
              <textarea type="text" id="com_contenido_edit" class="form-control"></textarea>
            </div>
            
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">Título del enlace</label>
              <input type="text" id="com_tenlace_edit" class="form-control" >
            </div>
          </div>
          <div class="col-6">
            <label for="">Enlace</label>
            <input type="text" id="com_enlace_edit" class="form-control">
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="">Usuario</label>
              <input type="text" id="com_usu_edit" class="form-control" disabled>
            </div>
          </div>
          <div class="col-4">
            <label for="">Fecha</label>
            <input type="text" id="com_fecha_edit" class="form-control">
          </div>
          <div class="col-4">
            <label for="">Hora</label>
            <input type="text" id="com_hora_edit" class="form-control">
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

<script src="../JS/comunicado.js?rev=<?php echo time();?>"></script>

<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
listar_usuario_ss();
cargar_ico();

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