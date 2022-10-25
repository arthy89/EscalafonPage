
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edición de las Imágenes</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="admin.php">Inicio</a></li>
          <li class="breadcrumb-item active">Edición imágenes</li>
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
        <h1 class="card-title"><strong>Lista de Imágenes</strong></h1>
        <button onclick="modal_abrir();" type="button" class="btn btn-success float-right"><i class="fa fa-plus-circle mr-2"></i>Nueva Imagen</button>
      </div>
      <div class="card-body pb-0">
        <div class="row">
          <div class="col-12 table-responsive">
            <table id="tabla_img_simple" class="display" width="100%">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Imagen</th>
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

<!-- Modal nueva FOTO-->
<div class="modal fade" id="modal_registro_foto" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nueva Imagen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-4">
            <label for="">Nombre de Usuario</label>
            <input type="text" id="usu_nombre_foto_new" class="form-control" disabled>
          </div>
          <div class="col-4 arch">
            <label for="usu_foto_new" id="archivo"><span class="fas fa-image mr-1"></span> Nueva  Foto</label>
            <input type="file" id="usu_foto_new">
          </div>
          <div class="col-4">
            <label for="">Foto seleccionada</label>
            <input type="text" id="foto_name_new" class="form-control" disabled>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <label for="">Nombre de la Foto</label>
            <input type="text" id="img_file_new" class="form-control" >
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button onclick="Registrar_Img();" type="button" class="btn btn-primary">Guardar Imagen</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL EDITAR FOTO-->

<!-- Modal EDITAR FOTO-->
<div class="modal fade" id="modal_editar_foto" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Imagen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" hidden>
          <div class="col-4">
            <label for="">IMG ID</label>
            <input type="text" id="id_img_act" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <label for="">Nombre de Usuario</label>
            <input type="text" id="usu_nombre_foto" class="form-control" disabled>
          </div>
          <div class="col-4 arch">
            <label for="usu_foto_nueva" id="archivo"><span class="fas fa-image mr-1"></span> Nueva  Foto</label>
            <input type="file" id="usu_foto_nueva">
          </div>
          <div class="col-4">
            <label for="">Foto seleccionada</label>
            <input type="text" id="foto_name" class="form-control" disabled>
            <input type="text" id="usu_foto_actual" hidden>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <label for="">Nombre de la Foto</label>
            <input type="text" id="img_file_act" class="form-control" >
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button onclick="Modificar_Img();" type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL EDITAR FOTO-->

<script src="../JS/img.js?rev=<?php echo time();?>"></script>

<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
listar_usuario_ss();
</script>

<script type="text/javascript">
  var archivo = document.querySelector("#usu_foto_nueva");
  archivo.addEventListener('change',() => {
    document.querySelector('#foto_name').value = archivo.files[0].name;
  })

  var archivo_nuevo = document.querySelector("#usu_foto_new");
  archivo_nuevo.addEventListener('change',() => {
    document.querySelector('#foto_name_new').value = archivo_nuevo.files[0].name;
  })
</script>

<script>
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
    document.getElementById('foto_name').value ="";
  }
});
</script>

<script>
  document.getElementById('usu_foto_new').addEventListener("change", () => {
  var fileName = document.getElementById('usu_foto_new').value;
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
    document.getElementById('usu_foto_new').value ="";
    document.getElementById('foto_name_new').value ="";
  }
});
</script>