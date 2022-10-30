<!-- LISTAR LOS FORMATOS -->
<?php
  require_once '../../modelo/modelo_conexion.php';

  $db = new conexionBD();
  $con = $db->conexionPDO();
  $sql = $con->prepare("CALL SP_LISTAR_FORMATO()"); //procedimiento almacenado 
  $sql->execute();
  $res_for = $sql->fetchAll(PDO::FETCH_ASSOC);
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
                        <a href="apertura.php" class="nav-item nav-link">Apertura</a>
                        <a href="marco.php" class="nav-item nav-link">Normas</a>
                        <a href="formatos.php" class="nav-item nav-link active">Formatos</a>
                        <a href="informe.php" class="nav-item nav-link">Informe</a>
                        <a href="contacto.php" class="nav-item nav-link">Contactos</a>
                    </div>
                    <a href="../../login.php" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Ingresar</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">Formatos</h1>
                    <nav aria-label="breadcrumb">
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- FORMATOS Start -->
        <div class="container-xxl py-0">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Formatos</div>
                    <h2 class="mb-5">FORMATOS - LEGAJO PERSONAL</h2>
                </div>
                <div class="row g-4">
                        
                    <?php foreach ($res_for as $data_for) { ?>
                        <!-- PARA ALMACENAR EN VARIABLE -->
                        <?php 
                            $title = $data_for['for_title'];
                            $text = $data_for['for_text'];
                            $tlink = $data_for['for_tlink'];
                            $link = $data_for['for_link'];
                            $ico = $data_for['for_ico_svg'];
                        ?>

                        <a class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s" href="<?php echo $link ?>" id="RVM_016" target="_blank" rel="noopener noreferrer">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fa <?php echo $ico ?> fa-2x"></i>
            
                                    </div>
                                    <div class="service-icon" style="width: 250px;">
                                        <h5 class="text-white"><?php echo $title ?></h5>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3"><?php echo $text ?></h5>
                                    <p class="btn btn-primary rounded-pill py-2 px-4 mt-2"
                                        href="<?php echo $link ?>"><?php echo $tlink ?></p>
                                </div>
                            </div>
                        </a>

                    <?php } ?>
        
                </div>
            </div>
        </div>
        <!-- FORMATOS End -->


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