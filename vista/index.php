<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../plantilla/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../plantilla/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../plantilla/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../plantilla/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../plantilla/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../plantilla/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alan Fernandez</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline"> 
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Logo_del_Ministerio_de_Educaci%C3%B3n_del_Per%C3%BA_-_MINEDU.png" alt="" style="width: 300px; height: 70px;" class="img-fluid">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <h1>ESCALAFÓN DRE - PUNO</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- CARRUSEL -->
          <div class="col-lg-9">
            <!-- AQUIIIII -->
            <!-- CONTENEDOR -->
            <div class="card">
              <div class="card-body">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item">
                  <img class="d-block w-100" src="../recursos/img/descripcion.png" alt="PRIMEROOO">
                </div>
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://i2.wp.com/www.repositorioeducacion.com/wp-content/uploads/2021/01/Escalafon-institutos.jpg?fit=975%2C546&ssl=1" alt="SEGUNDOOO">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../recursos/img/requisitos.png" alt="TERCEROOO">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-custom-icon" aria-hidden="true">
                  <i class="fas fa-chevron-left"></i>
                </span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-custom-icon" aria-hidden="true">
                  <i class="fas fa-chevron-right"></i>
                </span>
                <span class="sr-only">Next</span>
              </a>
            </div>
              </div>
            </div>
            <!-- CONTENEDOR -->
            
            <!-- GAAAAAAAAAA -->
          </div>
          <div class="col-lg-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>

              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>
                  <p class="text-muted">
                    B.S. in Computer Science from the University of Tennessee at Knoxville
                  </p>
                  <hr>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                    <p class="text-muted">Malibu, California</p>
                      <hr>
                      <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                      <p class="text-muted">
                      <span class="tag tag-danger">UI Design</span>
                      <span class="tag tag-success">Coding</span>
                      <span class="tag tag-info">Javascript</span>
                      <span class="tag tag-warning">PHP</span>
                      <span class="tag tag-primary">Node.js</span>
                    </p>
                  <hr>
                  <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Marco Normativo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Formatos</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Settings</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                    <h3>BENEFICIOS DE MANTENER ACTUALIZADO EL LEGAJO PERSONAL</h3>
                    <p>La actualización del legajo personal facilitará al docente de educación superior y administrativo que través de los informes escalafonarios que se expidan se puedan:</p>
                    <ul>
                      <li>Gestionar diversas acciones de personal como: reasignaciones, permutas, destaques, licencias y encargos, así como en procesos disciplinarios.</li>
                      <li>El otorgamiento de beneficios como: asignación por tiempo de servicios (ATS), compensación por tiempo de servicios (CTS) y subsidio por luto y sepelio.</li>
                      <li>Acreditar requisitos para los procesos de concursos o de evaluaciones como la institución educativa donde labora, nivel y modalidad educativa, cargo, jornada laboral, grado de instrucción, experiencia y trayectoria profesional para el caso de acceso a cargos de mayor responsabilidad, entre otros, así como el tiempo de servicios oficiales en la última escala, en el último cargo, en la institución educativa u otros.</li>
                      <li>Sustentar los años de servicios para el otorgamiento de pensiones.</li>
                    </ul>
                    <p><strong>Resumen: </strong> La documentación contenida en el legajo personal constituye la única fuente oficial de información para todos los procesos de evaluación, de la trayectoria docente pública y profesional dentro de la CPD y para el reconocimiento de beneficios, asignaciones, subsidios y otros derechos que le pudiera corresponder de acuerdo a lo que establece la Ley N° 30512.</p>
                  </div>
                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                  <a href="https://cdn.www.gob.pe/uploads/document/file/582443/RVM_N__092-2020-MINEDU.pdf">RVM N° 092-2020-MINEDU</a>
                  <br>
                  <hr>
                  <a href="https://cdn.www.gob.pe/uploads/document/file/1577954/RVM%20N%C2%B0%20016-2021-MINEDU.pdf.pdf">RVM N° 016-2021-MINEDU</a>
                  <hr>
                  <p>
                    <strong>N° 017-2020-MINEDU: </strong> Decreto Supremo que Crea y dispone el Uso Obligatorio del Sistema Integrado de Gestión de Personal en el Sector Educación - Sistema AYNI, en las instancias de Gestión Educativa Descentralizada.
                  </p>
                  <ul>
                    <li>Ley N.° 30512, Ley de Institutos y Escuelas de Educación Superior y de la Carrera Pública del Docente</li>
                    <li>Ley N.° 28044, Ley General de Educación</li>
                    <li>Ley N.° 29733, Ley de Protección de Datos Personales</li>
                    <li>Ley N.° 25323, Ley del Sistema Nacional de Archivos</li>
                    <li>Ley N.° 27806, Ley de Transparencia y Acceso a la Información Pública</li>
                    <li>Ley N.° 27815, Código de Ética de la Función Pública</li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                  <div id="accordion">
                  <div class="card card-primary">
                  <div class="card-header">
                  <h4 class="card-title w-100">
                  <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                  Collapsible Group Item #1
                  </a>
                  </h4>
                  </div>
                  <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                  <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                  3
                  wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                  laborum
                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                  nulla
                  assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                  nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                  beer
                  farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                  labore sustainable VHS.
                  </div>
                  </div>
                  </div>
                  <div class="card card-danger">
                  <div class="card-header">
                  <h4 class="card-title w-100">
                  <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                  Collapsible Group Danger
                  </a>
                  </h4>
                  </div>
                  <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                  <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                  3
                  wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                  laborum
                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                  nulla
                  assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                  nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                  beer
                  farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                  labore sustainable VHS.
                  </div>
                  </div>
                  </div>
                  <div class="card card-success">
                  <div class="card-header">
                  <h4 class="card-title w-100">
                  <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                  Collapsible Group Success
                  </a>
                  </h4>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                  <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                  3
                  wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                  laborum
                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                  nulla
                  assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                  nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                  beer
                  farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                  labore sustainable VHS.
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                  Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>

              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>
                  <p class="text-muted">
                    B.S. in Computer Science from the University of Tennessee at Knoxville
                  </p>
                  <hr>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                    <p class="text-muted">Malibu, California</p>
                      <hr>
                      <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                      <p class="text-muted">
                      <span class="tag tag-danger">UI Design</span>
                      <span class="tag tag-success">Coding</span>
                      <span class="tag tag-info">Javascript</span>
                      <span class="tag tag-warning">PHP</span>
                      <span class="tag tag-primary">Node.js</span>
                    </p>
                  <hr>
                  <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>

            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../plantilla/dist/js/adminlte.min.js"></script>
</body>
</html>
