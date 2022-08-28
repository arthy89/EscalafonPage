<?php
  session_start();
  if(!isset($_SESSION['S_IDUSUARIO'])){
      header('Location: ../login.php');
  }
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Escalafón | Edición</title>
  <link rel="shortcut icon" href="https://escalafon-ayni.minedu.gob.pe/minedu.ico">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../plantilla/dist/css/adminlte.min.css">
  <!-- DATA TABLE -->
  <link rel="stylesheet" type="text/css" href="../recursos/datatable/datatables.min.css"/>
  <!-- SELECT STYLE -->
  <link rel="stylesheet" type="text/css" href="../recursos/select2.min.css"/>
  
</head>
<body class="hold-transition sidebar-mini" onload="cargar_contenido('contenido_principal','edit/edicion.php')">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../plantilla/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Escalafón - Edición</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../<?php echo $_SESSION['S_FUSUARIO']; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php echo $_SESSION['S_USUARIO']; ?>
            <?php echo $_SESSION['S_APUSUARIO']; ?>
          </a>
        </div>
      </div>

      <!-- Menu de admin-->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- principal -->
          <li class="nav-item">
            <a href="#" id="pagina_principal" class="nav-link" onclick="cargar_contenido('contenido_principal','edit/edicion.php')">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Página Principal
              </p>
            </a>
          </li>
          <!-- ./principal -->

          <!-- contactos -->
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="cargar_contenido('contenido_principal','edit/contactoedit.php')">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Contactos
              </p>
            </a>
          </li>
          <!-- ./contactos -->

          <!-- contactos -->
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="cargar_contenido('contenido_principal','edit/comunicados.php')">
              <i class="nav-icon fa fa-bullhorn"></i>
              <p>
                Editar Comunicados
              </p>
            </a>
          </li>
          <!-- ./contactos -->

          <!-- VER PAGINA -->
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a href="#" class="nav-link" >
              <i class="nav-icon fa fa-eye"></i>
              <p>Ver página</p>
            </a>
          </li>
          <!-- ./VER PAGINA -->

          <!-- CERRAR SESION -->
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <button onclick='destruir_sesion();' class="btn btn-block bg-gradient-danger btn-sm" >
              <i class="nav-icon fa fa-arrow-circle-left"></i>Cerrar Sesión</button>
          </li>
          <!-- ./CERRAR SESION-->
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="contenido_principal">

    <!-- SE JALA EL CONTENIDO CON LA FUNCION -->

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
      Escalafón Dirección Regional de Educación Puno - Edición - Oficial
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021-2022 <a href="index.php">Escalafón</a>.</strong> All rights reserved.
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
<script src="../JS/cerrar_sesion.js"></script>
<script src="../JS/usuario.js?rev=<?php echo time();?>"></script>
<script src="../recursos/select2.min.js"></script>
<script type="text/javascript" src="../recursos/datatable/datatables.min.js"></script>
<script src="../recursos/sweetalert2@11.js"></script>
<script>
  function cargar_contenido(id,vista){
    $("#"+id).load(vista);
  }
  var idioma_espanol= {
    select: {
    rows: "%d fila seleccionada"
    },
    "sProcessing":    "Procesando...",
    "sLengthMenu":    "Mostrar _MENU_ registros",
    "sZeroRecords":   "No se encontraron resultados",
    "sEmpty Table":   "Ning&uacute;ndato disponible en esta tabla",
    "sInfo":          "Registros del(_START_ al _END_) total de _TOTAL_ registros",
    "sInfoEmpty":     "Registros del(0 al 0)total de0registros",
    "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":   "",
    "sSearch":        "Buscar:",
    "sUrl":           "",
    "sInfoThousands": ",",
    "sLoadingRecords":"<b>No se encontraron datos</b>",
    "oPaginate": {
      "sFirst":     "Primero",
      "sLast":      "Último",
      "sNext":      "Siguiente",
      "sPrevious":  "Anterior",
    },
    "oAria": {
      "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
  }

  $(function(){
    var menues=$(".nav-link");
       menues.click(function(){
       menues.removeClass("active");
        $(this).addClass("active");
      });
  });
</script>
</body>
</html>
