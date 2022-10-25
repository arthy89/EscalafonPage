<?php
  session_start();
  if(!isset($_SESSION['S_IDUSUARIO'])){
      header('Location: ../login.php');
  }
?>

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <br>
            <div class="image">
            <img src="../<?php echo $_SESSION['S_FUSUARIO']; ?>" alt=""  class="img-fluid">
            </div>
          </div><!-- /.col -->
          <div class="col-8">
            <br>
            <h1 style="font-size: 50px;">Bienvenido </h1>
            <h2><i><?php echo $_SESSION['S_USUARIO']; ?> <?php echo $_SESSION['S_APUSUARIO']; ?></i></h2>
            <h5><?php echo $_SESSION['S_ROL']; ?></h5>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card-info">
            <div class="card-header">
                <h3>Página principal de edición de ESCALAFÓN</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12">
                        
                        <a href="#"  onclick="cargar_contenido('contenido_principal','edit/contactoedit.php')">
                            <div class="info-box refl" >
                                <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-number">Contactos</span>
                                    <span class="info-box-text">Editar, agregar usuarios</span>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12">
                        <a href="#" class="refl" onclick="cargar_contenido('contenido_principal','edit/comunicadosedit.php')">
                            <div class="info-box refl">
                                <span class="info-box-icon bg-success"><i class="fa fa-bullhorn"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-number">Comunicados</span>
                                    <span class="info-box-text">Agregar o editar comunicados</span>
                                </div>

                            </div>
                        </a>
                        

                    </div>

                    <div class="col-md-4 col-sm-6 col-12">
                        <a href="#" class="refl" onclick="cargar_contenido('contenido_principal','edit/imgedit.php')">
                            <div class="info-box refl">
                                <span class="info-box-icon bg-warning"><i class="far fa-images"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-number">Imágenes</span>
                                    <span class="info-box-text">Agregar, editar o eliminar imágenes</span>
                                </div>

                            </div>
                        </a>
                        

                    </div>

                    <div class="col-md-4 col-sm-6 col-12">
                        <a href="#" class="refl" onclick="cargar_contenido('contenido_principal','edit/formatoedit.php')">
                            <div class="info-box refl">
                                <span class="info-box-icon bg-danger"><i class="far fa-folder-open"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-number">Formatos</span>
                                    <span class="info-box-text">Editar o agregar formatos</span>
                                </div>

                            </div>

                        </a>
                        

                    </div>

                    <div class="col-md-4 col-sm-6 col-12">
                        <a href="#" class="refl" onclick="cargar_contenido('contenido_principal','edit/leyedit.php')">
                            <div class="info-box refl">
                                <span class="info-box-icon bg-info"><i class="fa fa-balance-scale"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-number">Leyes</span>
                                    <span class="info-box-text">Agregar o editar las leyes</span>
                                </div>

                            </div>
                        </a>

                    </div>

                    <div class="col-md-4 col-sm-6 col-12">
                        <a href="#" class="refl" onclick="cargar_contenido('contenido_principal','edit/beneficioedit.php')">
                            <div class="info-box refl">
                                <span class="info-box-icon bg-success"><i class="fa fa-gift"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-number">Beneficios</span>
                                    <span class="info-box-text">Beneficios de la <b>Apertura de Legajo</b></span>
                                </div>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
            
        </div>
    </div>