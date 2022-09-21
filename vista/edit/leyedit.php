
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edición de las Leyes</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="admin.php">Inicio</a></li>
          <li class="breadcrumb-item active">Edición Leyes</li>
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
        <h1 class="card-title"><strong>Lista de Leyes</strong></h1>
        <button onclick="modal_abrir();" type="button" class="btn btn-success float-right"><i class="fa fa-plus-circle mr-2"></i>Nueva Ley</button>
      </div>
      <div class="card-body pb-0">
        <div class="row">
          <div class="col-12 table-responsive">
            <table id="tabla_ley_simple" class="display" width="100%">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Ícono</th>
                      <th>Ley</th>
                      <th>Texto</th>
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



<script src="../JS/ley.js?rev=<?php echo time();?>"></script>

<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
listar_usuario_ss();
</script>