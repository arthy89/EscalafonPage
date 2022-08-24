
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
            <table id="tabla_usuario_simple" class="display">
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

<!-- Modal -->
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
          <div class="col-6">
            <label for="">Email</label>
            <input type="text" id="usu_email" class="form-control" >
          </div>
          <div class="col-6">
            <label for="">Contraseña</label>
            <input type="password" id="usu_contrasena" class="form-control">
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
          <div class="col-12">
            <label for="">Foto</label>
            <input type="file" id="usu_foto">
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

<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
listar_usuario_simple();
cargar_rol();
</script>