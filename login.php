<?php
    session_start();
    if(isset($_SESSION['S_IDUSUARIO'])){
        header('Location: vista/admin.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Escafón | Login</title>
  <link rel="shortcut icon" href="https://escalafon-ayni.minedu.gob.pe/minedu.ico">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="plantilla/dist/css/adminlte.min.css">
    <style>
      body {
          /* Ruta relativa o completa a la imagen */

          background-image: url(recursos/img/fondo.jpg);
          
          background-position: center center;
          /* El fonde no se repite */
          background-repeat: no-repeat;
          /* Fijamos la imagen a la ventana para que no supere el alto de la ventana */
          background-attachment: fixed;
          /* Color de fondo si la imagen no se encuentra o mientras se está cargando */
          background-color: #FFF;

          background-size: 1920px 1080px;

          

      }
      .card, .card-body {
        border-radius: 15px;
        box-shadow: 0 5px 10px rgba(0,0,0,.5);
      }
    </style>
</head>
<body class="hold-transition login-page">
<!-- gaaaaaaaa -->
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    
    <div class="card-body login-card-body">
      
    <div class="login-logo" style="color:#343a40">
      <a><i class="fas fa-folder-open mr-2"></i><b>Escalafón </b>- Admin</a>
    </div>
      <p class="login-box-msg">Ingrese sus datos para iniciar sesion</p>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Correo electronico" id="text_usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" id="text_contrasena">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-eye" id="ojo"></span>
            </div>
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <div class="icheck-primary">
              <input type="checkbox" id="rememberMe" checked="checked">
              <label for="rememberMe">
                Recordarme
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-3">
            <a href="vista/index.php" class="btn btn-primary btn-block" >Volver</a>
          </div>
          <!-- ./col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block" onclick="Iniciar_Sesion()">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="plantilla/dist/js/adminlte.min.js"></script>
<!-- ALERTAS -->
<script src="recursos/sweetalert2@11.js"></script>
<!-- INICIAR SESION -->
<script src="JS/usuario.js?rev=<?php echo time();?>"></script>
<script src="JS/contra_mos.js?rev=<?php echo time();?>"></script>
</body>
</html>
