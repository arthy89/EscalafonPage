<!-- LISTAR LOS BENEFICIOS -->
<?php
  require_once '../../modelo/modelo_conexion.php';

  $db = new conexionBD();
  $con = $db->conexionPDO();
  $sql = $con->prepare("CALL SP_LISTAR_BENE()"); //procedimiento almacenado 
  $sql->execute();
  $res_bene = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ESCALAFÓN | DRE PUNO</title>
    <link rel="shortcut icon" href="https://escalafon-ayni.minedu.gob.pe/minedu.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- MyCSS -->
    <link rel="stylesheet" href="../../css/2cssmy.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- ../libraries Stylesheet -->
    <link href="../../plantilla2/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../plantilla2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../plantilla2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../plantilla2/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="../../index.php" class="navbar-brand p-0">
                    <h1 class="m-0">ESCALAFÓN - DRE PUNO</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="../../index.php" class="nav-item nav-link">Inicio</a>
                        <a href="secciones.php" class="nav-item nav-link">Secciones</a>
                        <a href="apertura.php" class="nav-item nav-link active">Apertura</a>
                        <a href="marco.php" class="nav-item nav-link">Normas</a>
                        <a href="formatos.php" class="nav-item nav-link">Formatos</a>
                        <a href="informe.php" class="nav-item nav-link">Informe</a>
                        <a href="contacto.php" class="nav-item nav-link">Contactos</a>
                    </div>
                    <a href="../../login.php" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Ingresar</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">Apertura del Legajo Personal</h1>
                    <nav aria-label="breadcrumb">
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- APERTURA Start -->
        <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 100%;">
                    <div class="col-12 col-md-6">
                        <br>
                        <h3 class="text-white">APERTURA DE LEGAJO PERSONAL</h3>
                        <small class="text-white"><p>La apertura del legajo personal se encuentra a cargo del equipo de escalafón y legajos (ESLE), y se realiza de oficio
                        con la resolución de nombramiento o de contrato que da inicio a la relación laboral. El servidor que inicia el vínculo
                        con la IGED y que ha sido notificado con su resolución, debe presentar ante mesa de partes de la DRE o UGEL de su
                        jurisdicción, la documentación correspondiente dentro de los diez (10) días hábiles desde la notificación. En caso de
                        que la documentación se encuentre incompleta, deteriorada o tenga enmendaduras, la DRE o UGEL observará dichos
                        documentos y otorgará un plazo adicional de cinco (5) días hábiles para que el servidor realice la subsanación
                        correspondiente. (Ver Instructivo).</p></small>
                        <h3 class="text-white">BENEFICIOS DE MANTENER ACTUALIZADO EL LEGAJO PERSONAL:</h3>
                        <small class="text-white"><p>La actualización del legajo personal facilitará al docente de educación superior y administrativo que través de los
                        informes escalafonarios que se expidan se puedan:</p></small>
                        <small class="text-white">
                            <ul class="justificar">
                                <!-- PHP AQUI -->
                                <?php foreach ($res_bene as $data_bene) { ?>
                                    <!-- PARA ALMACENAR EN VARIABLE -->
                                    <?php 
                                        $text = $data_bene['bn_text'];
                                    ?>

                                    <li><?php echo $text; ?></li>
                                <?php } ?>
                            </ul>
                            <p><strong>Resumen: </strong> La documentación contenida en el legajo personal constituye la única fuente oficial de
                                información para todos los procesos de evaluación, de la trayectoria docente pública y profesional dentro de la CPD
                                y para el reconocimiento de beneficios, asignaciones, subsidios y otros derechos que le pudiera corresponder de
                                acuerdo a lo que establece la Ley N° 30512.</p>
                        </small>
                        
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="max-height: 250px;" src="../../plantilla2/img/newsletter.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- APERTURA End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6">
                        <h5 class="text-white mb-4">Encuéntranos En:</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Jr. Bustamante Dueñas 881 - Chanu chanu II - 2do piso - Puno</p>
                        <p><i class="fa fa-phone-alt me-3"></i>(51) 366170 - 357005</p>
                        <p><i class="fa fa-envelope me-3"></i>yachay@drepuno.gob.pe</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://twitter.com/drepuno" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/DREPuno/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/c/MinisteriodeEducacióndelPerú" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="http://www.drepuno.gob.pe/" target="_blank" rel="noopener noreferrer"><i class="fa fa-globe"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <h5 class="text-white mb-4">Ubícanos aquí</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1567.7043810777395!2d-70.01074918453399!3d-15.861455905793738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915d6a296aefc16d%3A0xbe20f3b1dcddbd21!2sDirecci%C3%B3n%20Regional%20de%20Educaci%C3%B3n%20Puno!5e0!3m2!1ses!2spe!4v1644341088001!5m2!1ses!2spe" width="100%" height="300" style="border:0;" class="position-sticky" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">ESCALAFÓN - DRE PUNO</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript ../libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../plantilla2/lib/wow/wow.min.js"></script>
    <script src="../../plantilla2/lib/easing/easing.min.js"></script>
    <script src="../../plantilla2/lib/waypoints/waypoints.min.js"></script>
    <script src="../../plantilla2/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../plantilla2/js/main.js"></script>
</body>

</html>