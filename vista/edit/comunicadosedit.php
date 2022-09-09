
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
<div class="modal fade" id="modal_registrar_comunicado" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <input type="text" id="com_id" class="form-control">
          </div>
          <div class="col-4">
            <label for="">Ícono</label>
            <select class="js-example-basic-single" id="com_ico" style="width: 100%; margin-top: -10px;">
            </select>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">Título</label>
              <input type="text" id="com_titulo" class="form-control">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label for="">Contenido</label>
              <textarea type="text" id="com_contenido" class="form-control"></textarea>
            </div>
            
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">Título del enlace</label>
              <input type="text" id="com_tenlace" class="form-control" >
            </div>
          </div>
          <div class="col-6">
            <label for="">Enlace</label>
            <input type="text" id="com_enlace" class="form-control">
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="">Usuario</label>
              <input type="text" id="com_usu" class="form-control" disabled>
            </div>
          </div>
          <div class="col-4">
            <label for="">Fecha</label>
            <input type="text" id="com_fecha" class="form-control">
          </div>
          <div class="col-4">
            <label for="">Hora</label>
            <input type="text" id="com_hora" class="form-control">
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
            <div class="form-group">
              <label for="">XDDDD</label><br>
              <select class="select2-icon" id="com_ico_editja" name="icon">
                <option value="fa-building" data-icon="fa-building">Edificio</option>
                <option value="fa-tags" data-icon="fa-tags">Etiqueta</option>
                <option value="fa-address-card" data-icon="fa-address-card">DNI</option>
                <option value="fa-desktop" data-icon="fa-desktop">Pantalla</option>
                <option value="fa-calendar-week" data-icon="fa-calendar-week">Calendario</option>
                <option value="fa-file-word" data-icon="fa-file-word">Word</option>
                <option value="fa-file-import" data-icon="fa-file-import">Importar</option>
                <option value="fa-trophy" data-icon="fa-trophy">Trofeo</option>
                <option value="fa-file-pdf" data-icon="fa-file-pdf">PDF</option>
                <option value="fa-cube" data-icon="fa-cube">Cubo</option>
                <option value="fa-check-circle" data-icon="fa-check-circle">Check</option>
                <option value="fa-calculator" data-icon="fa-calculator">Calculadora</option>
                <option value="fa-fingerprint" data-icon="fa-fingerprint">Huella</option>
                <option value="fa-ruler" data-icon="fa-ruler">Regla</option>
                <option value="fa-scroll" data-icon="fa-scroll">Pergamino</option>
                <option value="fa-coins" data-icon="fa-coins">Monedas</option>
                <option value="fa-images" data-icon="fa-images">Imagen</option>
                <option value="fa-user" data-icon="fa-user">Usuario</option>
                <option value="fa-phone" data-icon="fa-phone">Teléfono</option>
                <option value="fa-comment" data-icon="fa-comment">Comentario</option>
                <option value="fa-music" data-icon="fa-music">Música</option>
                <option value="fa-heart" data-icon="fa-heart">Corazón</option>
                <option value="fa-envelope" data-icon="fa-envelope">Correo</option>
                <option value="fa-star" data-icon="fa-star">Estrella</option>
                <option value="fa-camera" data-icon="fa-camera">Cámara</option>
                <option value="fa-cloud" data-icon="fa-cloud">Nube</option>
                <option value="fa-calendar" data-icon="fa-calendar">Calendario 2</option>
                <option value="fa-file" data-icon="fa-file">Archivo</option>
                <option value="fa-bell" data-icon="fa-bell">Campana</option>
                <option value="fa-clipboard" data-icon="fa-clipboard">Clipboard</option>
                <option value="fa-gift" data-icon="fa-gift">Regalo</option>
                <option value="fa-book" data-icon="fa-book">Libro</option>
                <option value="fa-video" data-icon="fa-video">Video</option>
                <option value="fa-folder-open" data-icon="fa-folder-open">Folder abierto</option>
                <option value="fa-eye" data-icon="fa-eye">Ojo</option>
                <option value="fa-thumbs-up" data-icon="fa-thumbs-up">Like</option>
                <option value="fa-globe" data-icon="fa-globe">Globo</option>
                <option value="fa-paper-plane" data-icon="fa-paper-plane">Papel</option>
                <option value="fa-users" data-icon="fa-users">Usuarios</option>
                <option value="fa-home" data-icon="fa-home">Casa</option>
                <option value="fa-user-graduate" data-icon="fa-user-graduate">Graduado</option>
                <option value="fa-map" data-icon="fa-map">Mapa</option>
                <option value="fa-map-pin" data-icon="fa-map-pin">Pin</option>
                <option value="fa-graduation-cap" data-icon="fa-graduation-cap">Gorro graduado</option>
                <option value="fa-grin" data-icon="fa-grin">Sonrisa</option>
                <option value="fa-play-circle" data-icon="fa-play-circle">Play</option>
                <option value="fa-ban" data-icon="fa-ban">Bloquear</option>
                <option value="fa-at" data-icon="fa-at">Arroba</option>
                <option value="fa-search" data-icon="fa-search">Lupa</option>
                <option value="fa-download" data-icon="fa-download">Descargar</option>
                <option value="fa-paperclip" data-icon="fa-paperclip">Clip</option>
                <option value="fa-dollar-sign" data-icon="fa-dollar-sign">Dolar</option>
                <option value="fa-map-marker-alt" data-icon="fa-map-marker-alt">Marca</option>
              </select>
            </div>
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