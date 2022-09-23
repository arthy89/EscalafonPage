
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edición de los Beneficios</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="admin.php">Inicio</a></li>
          <li class="breadcrumb-item active">Edición Beneficios</li>
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
        <h1 class="card-title"><strong>Lista de Beneficios</strong></h1>
        <button onclick="modal_abrir();" type="button" class="btn btn-success float-right"><i class="fa fa-plus-circle mr-2"></i>Nuevo Beneficio</button>
      </div>
      <div class="card-body pb-0">
        <div class="row">
          <div class="col-12 table-responsive">
            <table id="tabla_beneficio_simple" class="display" width="100%">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Beneficio Texto</th>
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

<!-- Modal Registrar Beneficio -->
<div class="modal fade" id="modal_registro_bene" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Beneficio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="">Contenido del Beneficio</label>
              <textarea type="text" id="bene_text" class="form-control" style="height: 150px;"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button onclick="Registrar_Beneficio();" type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL -->

<!-- Modal EDITAR Beneficio -->
<div class="modal fade" id="modal_bene_editar" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Beneficio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="">ID Beneficio</label>
              <input type="text" id="bene_id" class="form-control"></input>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label for="">Contenido del Beneficio para Editar</label>
              <textarea type="text" id="bene_text_edit" class="form-control" style="height: 250px;"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button onclick="Editar_Beneficio();" type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL -->

<script src="../JS/bene.js?rev=<?php echo time();?>"></script>

<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
listar_usuario_ss();
</script>