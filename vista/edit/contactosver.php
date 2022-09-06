<?php
  require_once '../../modelo/modelo_conexion.php';

  $db = new conexionBD();
  $con = $db->conexionPDO();
  $sql = $con->prepare("CALL SP_LISTAR_USUARIO()"); //procedimiento almacenado 
  $sql->execute();
  $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Comunicados</h1>
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
        <h3>Listado de Usuarios</h3>
      </div>
      <div class="card-body pb-0">
        <div class="row">

        <?php foreach ($resultado as $row) { ?>
          <!-- PARA ALMACENAR EN VARIABLE -->
            <?php 
              $foto = $row['usu_foto'];
              $nombre = $row['usu_nombre'];
              $apepaterno = $row['usu_apaterno'];
              $apematerno = $row['usu_amaterno'];
            ?>
        <!-- PRUEBA DE RELLENADO -->
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
              <div class="card-header text-muted border-bottom-0">
                <!-- NOMBRE DE ROL -->
                <?php echo $row['rol_nombre']; ?>
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <!-- NOMBRE -->
                    <h2 class="lead"><b><?php echo $nombre, " ", $apepaterno," ", $apematerno; ?></b></h2>
                    <p class="text-muted text-sm"><b>Detalles: </b> <?php echo $row['usu_detalle']; ?></p>
                  </div>
                  <div class="col-5 text-center">
                    <img src="../<?php echo $foto; ?>" alt="user-avatar" class="img-circle img-fluid">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-12">
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <?php echo $row['usu_direccion']; ?> </li>
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> Correo: <?php echo $row['usu_email']; ?></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- FIN PRUEBA -->
          <?php } ?>



          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
              <div class="card-header text-muted border-bottom-0">
                Técnico Administrativo II
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>Romero Ortiz Elba María</b></h2>
                    <p class="text-muted text-sm"><b>Detalles: </b> Jefe de Escalafón / DRE Puno / OAD./ Escafón</p>
                  </div>
                  <div class="col-5 text-center">
                    <img src="../plantilla/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-12">
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Jr. Bustamante Dueñas 881 - Chanu chanu II - 2do piso</li>
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> Correo: elbaromero@gmail.com</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="#" class="btn btn-sm bg-danger">
                    <i class="fas fa-trash"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Editar Perfil
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--  -->

          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
              <div class="card-header text-muted border-bottom-0">
                Técnico Administrativo II
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>Fernandez Candia Alan Max</b></h2>
                    <p class="text-muted text-sm"><b>Detalles: </b> Administrativo de Escalafón / DRE Puno / OAD./ Escafón</p>
                  </div>
                  <div class="col-5 text-center">
                    <img src="../plantilla/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-12">
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Jr. Bustamante Dueñas 881 - Chanu chanu II - 2do piso</li>
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> Correo: elbaromero@gmail.com</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="#" class="btn btn-sm bg-danger">
                    <i class="fas fa-trash"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> Editar Perfil
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--  -->
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer text-center">
        <a href="#" class="btn btn-sm bg-teal">
          <i class="fas fa-plus"></i> Añadir nuevo contacto
        </a>
      </div>
      <!-- /.card-footer -->
    </div>
  </div>
  <!-- /.card -->
</div>