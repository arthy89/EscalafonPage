<?php
  require_once '../modelo/modelo_conexion.php';

  $db = new conexionBD();
  $con = $db->conexionPDO();
  $sql = $con->prepare("CALL SP_LISTAR_COMUNICADO()");
  $sql->execute();
  $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
  require_once '../modelo/modelo_conexion.php';

  $db = new conexionBD();
  $con = $db->conexionPDO();
  $sql = $con->prepare("CALL SP_LISTAR_USUARIO()"); //procedimiento almacenado 
  $sql->execute();
  $resultado_usuario = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>ESCALAFÓN | DRE PUNO</title>
    <link rel="shortcut icon" href="https://escalafon-ayni.minedu.gob.pe/minedu.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../plantilla2/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../plantilla2/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../plantilla2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../plantilla2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../plantilla2/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="m-0">Escalafón - DRE Puno</h1>
                    <!-- <img src="../plantilla2/img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Inicio</a>
                        <a href="links/secciones.php" class="nav-item nav-link">Secciones</a>
                        <a href="links/apertura.php" class="nav-item nav-link">Apertura</a>
                        <a href="links/marco.php" class="nav-item nav-link">Normas</a>
                        <a href="links/formatos.php" class="nav-item nav-link">Formatos</a>
                        <a href="links/informe.php" class="nav-item nav-link">Informe</a>
                        <a href="links/contacto.php" class="nav-item nav-link">Contactos</a>
                    </div>
                    <a href="../login.php" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Ingresar</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <!-- titulo inicial -->
                    <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <h2 class="text-white mb-5">Comunicados</h2>
                    </div>


                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

                        <?php foreach ($resultado as $row) { ?>
                        <!-- PARA ALMACENAR EN VARIABLE -->
                        <?php 
                          $icon = $row['ico_svg'];
                          $titulo = $row['com_title'];
                          $contenido = $row['com_cont'];
                          $tlink = $row['com_tlink'];
                          $link = $row['com_link'];
                          $fecha = $row['com_f'];
                          $hora = $row['com_h'];
                        ?>

                        <div class="testimonial-item rounded p-4" style="background-color:#F3F6F8;">
                            <div class="row g-5 align-items-left">
                                <div class="col-3">
                                    <i class="fa <?php echo $icon ?> fa-2x text-primary mb-3"></i>
                                </div>
                                <div class="col-9 align-items-left" >
                                    <h5 class="mb-3 text-primary"><?php echo $titulo ?></h5>
                                </div>
                            </div>
                            
                            <p><?php echo $contenido ?></p>
                            <div class="d-flex align-items-center">
                                <div class="col-12">
                                    <h6 class="mb-1"><a class="enlace" href="<?php echo $link ?>" target="_blank" rel="noopener noreferrer"><?php echo $tlink ?> </a></h6>
                                    <small><?php echo $hora ?> - <?php echo $fecha ?></small>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- CARRUSEL DE IMAGENES -->
        <div class="bd-example">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-label="Slide 1" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"
                        class=""></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"
                        class=""></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="../plantilla2/img/descripcion.png" class="d-block w-100" alt="..." height="500" >
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="../plantilla2/img/esca.png" class="d-block w-100" alt="..." height="500" >
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="../plantilla2/img/requisitos.png" class="d-block w-100" alt="..." height="500" >
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- END CARRUSEL DE IMAGEN-->

        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 900px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Escalafón</div>
                    <h2 class="mb-5">ESCALAFÓN DRE PUNO</h2>
                    <p>El Escalafón Magisterial es un registro nacional y descentralizado por el cual se documenta y publica la
                        trayectoria
                        laboral o vida profesional de los Profesores, Docentes de Educación superior y auxiliar de educación que prestan
                        servicios al Estado, así como el personal cesante o pensionista.</p>
                    <h6><b>Nota: </b></h6>
                    <p>Según establece la RVM. N° 092-2020-MINEDU. En <b>Disposiciones Transitorias</b> numeral 7.5. <u>Del personal de
                            otros regímenes laborales</u>, “En tanto SERVIR regule lo concerniente al escalafón para el personal
                        administrativo, las DRE/UGEL podrán utilizar el sistema informático de escalafón para tal fin.</p>
                </div>
            </div>
        </div>
        

        <!-- INICIO DE ESCALAFON -->
        <div class="container-xl py-1">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="../plantilla2/img/about.png">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-3 mb-4">
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-user-tie text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>LEGAJO PERSONAL:</h6>
                                    <span><ol>
                                        <li>Es una carpeta oficial e individual (documentación físico y digital), donde se archivan los documentos
                                            personales y administrativos del servidor y ex servidor, debidamente clasificados y ordenados de acuerdo a la
                                            estructura vigente. (<a href="https://cdn.www.gob.pe/uploads/document/file/582443/RVM_N__092-2020-MINEDU.pdf"
                                                target="_blank" rel="noopener noreferrer"><i>RVM N° 092-2020-MINEDU</i></a>).</li>
                                        <li>Es una carpeta que contiene secciones específicas donde se archivan los documentos personales, profesionales,
                                            producción intelectual, cultural, social y otros, cuyo manejo es descentralizado para el ordenamiento y
                                            conservación de los documentos de los docentes nombrados, contratados, cesantes y pensionistas de una
                                            institución. (<a
                                                href="https://cdn.www.gob.pe/uploads/document/file/1577954/RVM%20N%C2%B0%20016-2021-MINEDU.pdf.pdf"
                                                target="_blank" rel="noopener noreferrer"><i>RVM N° 016-2021-MINEDU</i></a>).</li>
                                    </ol></span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-chart-line text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>TIPO DE LEGAJO PERSONAL:</h6>
                                    <span><ol>
                                        <li><b><u>Físico</u>: </b>Es el conjunto de documentos personales, trayectoria académica y laboral del docente, que
                                            se incorporan en forma ordenada de acuerdo a la estructura señalada en el presente documento normativo. Los
                                            documentos del legajo se van incrementando a lo largo de la vida laboral hasta el cese.</li>
                                        <li><b><u>Digital</u>: </b>Es el registro sistematizado de la información y los documentos digitalizados contenidos
                                            en el legajo personal físico.</li>
                                    </ol></span>
                                </div>
                            </div>

                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-chart-pie text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>CLASIFICACIÓN DEL LEGAJO PERSONAL:</h6>
                                    <span>
                                        <ol>
                                            <li><b><u>Físico</u>: </b>Es el conjunto de documentos personales, trayectoria académica y laboral del
                                                docente, que
                                                se incorporan en forma ordenada de acuerdo a la estructura señalada en el presente documento
                                                normativo. Los
                                                documentos del legajo se van incrementando a lo largo de la vida laboral hasta el cese.</li>
                                            <li><b><u>Digital</u>: </b>Es el registro sistematizado de la información y los documentos digitalizados
                                                contenidos
                                                en el legajo personal físico.</li>
                                        </ol>
                                        <p>Según establece la RVM. N° 016-2021-MINEDU. Clases de legajo personal: <b>Legajo Personal del Docente nombrado de la
                                                CPD, Legajo de Personal Contratado, Legajo de Personal Cesante y Legajo del Personal Pensionista.</b></p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- INICIO DE ESCALAFON -->
        
        <!-- SECCIONES Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Secciones del Legajo Personal</div>
                    <h2 class="mb-5">ESTRUCTURA DEL LEGAJO PERSONAL</h2>
                    <p>El legajo personal se organiza y divide en diez (10) secciones que contienen la documentación clasificada y ordenada
                    cronológicamente según el siguiente orden:</p>
                </div>
                <div class="row g-4">

                    <!-- SECCION I -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-user-tie fa-2x"></i>
                                    
                                </div>
                                <div class="service-icon" style="width: 150px;">
                                    <h5 class="text-white">Sección I</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Filiación e identificación Personal</h5>
                                <span>Se registran los datos personales del servidor, así como datos familiares, dirección, dominio de lengua indígena u
                                originaria, declaraciones juradas, etc.</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- SECCION II -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-user-graduate fa-2x"></i>
                    
                                </div>
                                <div class="service-icon" style="width: 150px;">
                                    <h5 class="text-white">Sección II</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Situación académica (Formación)</h5>
                                <span>Se registran el grado de bachiller, título profesional y de segunda especialidad, estudios de posgrado (maestrías y
                                doctorados) y especializaciones, actualizaciones o capacitaciones.</span>
                            </div>
                        </div>
                    </div>

                    <!-- SECCION III -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-file fa-2x"></i>
                    
                                </div>
                                <div class="service-icon" style="width: 150px;">
                                    <h5 class="text-white">Sección III</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Ingreso o reingreso</h5>
                                <span>Se registran los actos resolutivos de contratos, de nombramiento o de reingreso.</span>
                            </div>
                        </div>
                    </div>

                    <!-- SECCION IV -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-file-import fa-2x"></i>
                    
                                </div>
                                <div class="service-icon" style="width: 150px;">
                                    <h5 class="text-white">Sección IV</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Trayectoria labora</h5>
                                <span>Se registran actos resolutivos de desplazamientos definitivos por reasignación o permuta y desplazamientos temporales
                                por destaque o encargatura, así como de la designación en cargos de mayor responsabilidad y de ascensos de escala
                                magisterial.</span>
                            </div>
                        </div>
                    </div>

                    <!-- SECCION V -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-file-invoice-dollar fa-2x"></i>
                    
                                </div>
                                <div class="service-icon" style="width: 150px;">
                                    <h5 class="text-white">Sección V</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Asignaciones e incentivos temporales, retenciones judiciales y pagos indebidos</h5>
                                <span>Se registran, las resoluciones que otorgan el subsidio por luto y sepelio ante el fallecimiento de un familiar del
                                servidor; así como resoluciones de asignación por tiempo de servicios (ATS), entre otros.</span>
                            </div>
                        </div>
                    </div>

                    <!-- SECCION VI -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-coins fa-2x"></i>
                    
                                </div>
                                <div class="service-icon" style="width: 150px;">
                                    <h5 class="text-white">Sección VI</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Retiro y régimen pensionario</h5>
                                <span>Se registran resoluciones que reconocen la asignación por tiempo de servicios (ATS), resolución de cese y otorgamiento
                                de compensación por tiempo de servicios (CTS), así como de otorgamiento de pensión.</span>
                            </div>
                        </div>
                    </div>

                    <!-- SECCION VII -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-gift fa-2x"></i>
                    
                                </div>
                                <div class="service-icon" style="width: 150px;">
                                    <h5 class="text-white">Sección VII</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Premios y estímulos</h5>
                                <span>Se registran los reconocimientos o felicitaciones que haya recibido el servidor, a través de actos resolutivos u otros
                                documentos. Asimismo, aquellas resoluciones que conceden la Palmas Magisteriales.</span>
                            </div>
                        </div>
                    </div>

                    <!-- SECCION VIII -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-balance-scale fa-2x"></i>
                    
                                </div>
                                <div class="service-icon" style="width: 150px;">
                                    <h5 class="text-white">Sección VIII</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Sanciones</h5>
                                <span>Se registran las sanciones impuestas al servidor como la suspensión, el cese temporal o la destitución.</span>
                            </div>
                        </div>
                    </div>

                    <!-- SECCION IX -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-plane-departure fa-2x"></i>
                    
                                </div>
                                <div class="service-icon" style="width: 150px;">
                                    <h5 class="text-white">Sección IX</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Licencias y vacaciones</h5>
                                <span>Se registran las resoluciones que otorgan licencias con goce de remuneraciones, por los siguientes motivos: incapacidad
                                temporal, maternidad, adopción, entre otras; y licencias sin goce de remuneraciones por motivos particulares, estudios,
                                entre otras razones.</span>
                            </div>
                        </div>
                    </div>

                    <!-- SECCION X -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-folder-open fa-2x"></i>
                    
                                </div>
                                <div class="service-icon" style="width: 150px;">
                                    <h5 class="text-white">Sección X</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Otros</h5>
                                <span>Se registra aquella documentación que no pueda ser ubicada en las secciones anteriores y se anexa la ficha personal
                                (ficha escalafonaria).</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- SECCIONES End -->

        <!-- APERTURA Start -->
        <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 100%;">
                    <div class="col-12 col-md-6">
                        <br>
                        <h3 class="text-white">APERTURA DE LEGAJO PERSONAL</h3>
                        <small class="text-white">La apertura del legajo personal se encuentra a cargo del equipo de escalafón y legajos (ESLE), y se realiza de oficio
                        con la resolución de nombramiento o de contrato que da inicio a la relación laboral. El servidor que inicia el vínculo
                        con la IGED y que ha sido notificado con su resolución, debe presentar ante mesa de partes de la DRE o UGEL de su
                        jurisdicción, la documentación correspondiente dentro de los diez (10) días hábiles desde la notificación. En caso de
                        que la documentación se encuentre incompleta, deteriorada o tenga enmendaduras, la DRE o UGEL observará dichos
                        documentos y otorgará un plazo adicional de cinco (5) días hábiles para que el servidor realice la subsanación
                        correspondiente. (Ver Instructivo).</small>
                        <br>
                        <br>
                        <h3 class="text-white">BENEFICIOS DE MANTENER ACTUALIZADO EL LEGAJO PERSONAL:</h3>
                        <small class="text-white">La actualización del legajo personal facilitará al docente de educación superior y administrativo que través de los
                        informes escalafonarios que se expidan se puedan:</small>
                        <small class="text-white">
                            <ul>
                                <li>Gestionar diversas acciones de personal como: reasignaciones, permutas, destaques, licencias y encargos, así
                                    como en procesos disciplinarios.</li>
                                <li>El otorgamiento de beneficios como: asignación por tiempo de servicios (ATS), compensación por tiempo de
                                    servicios (CTS) y subsidio por luto y sepelio.</li>
                                <li>Acreditar requisitos para los procesos de concursos o de evaluaciones como la institución educativa donde
                                    labora, nivel y modalidad educativa, cargo, jornada laboral, grado de instrucción, experiencia y trayectoria
                                    profesional para el caso de acceso a cargos de mayor responsabilidad, entre otros, así como el tiempo de
                                    servicios oficiales en la última escala, en el último cargo, en la institución educativa u otros.</li>
                                <li>Sustentar los años de servicios para el otorgamiento de pensiones.</li>
                            </ul>
                            <p><strong>Resumen: </strong> La documentación contenida en el legajo personal constituye la única fuente oficial de
                                información para todos los procesos de evaluación, de la trayectoria docente pública y profesional dentro de la CPD
                                y para el reconocimiento de beneficios, asignaciones, subsidios y otros derechos que le pudiera corresponder de
                                acuerdo a lo que establece la Ley N° 30512.</p>
                        </small>
                        
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="max-height: 250px;" src="../plantilla2/img/newsletter.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- APERTURA End -->

        <!-- MARCO NORMATIVO -->
        <div class="container-xxl">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 1000px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Marco</div>
                    <h2 class="mb-5">Marco Normativo</h2>
                    <a class="btn btn-primary rounded-pill py-2 px-5 mt-2" href="https://cdn.www.gob.pe/uploads/document/file/582443/RVM_N__092-2020-MINEDU.pdf" id="RVM_092" target="_blank" rel="noopener noreferrer"><p><i class="fa fa-folder-open fa-2x mr-2"></i><br>RVM N° 092-2020-MINEDU</p></a>

                    <a class="btn btn-primary rounded-pill py-2 px-5 mt-2" href="https://cdn.www.gob.pe/uploads/document/file/1577954/RVM%20N%C2%B0%20016-2021-MINEDU.pdf.pdf" id="RVM_016" target="_blank" rel="noopener noreferrer"><p><i class="fa fa-copy fa-2x mr-2"></i> <br> RVM N° 016-2021-MINEDU</p></a>
                </div>
            </div>
        </div>

        <div class="container-xxl" style="max-width: 1200px;"">
            <div class="container">
                <div class="row g-6">
                    <p class="py-3">
                        <strong>N° 017-2020-MINEDU: </strong> Decreto Supremo que Crea y dispone el Uso Obligatorio del Sistema Integrado de
                        Gestión de Personal en el Sector Educación - Sistema AYNI, en las instancias de Gestión Educativa Descentralizada.
                    </p>
                    <div class="col-sm-4 wow fadeIn py-3" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h6 class="mb-0">Ley N.° 30512</h6>
                        </div>
                        <span>Ley de Institutos y Escuelas de Educación Superior y de la Carrera Pública del Docente</span>
                    </div>
                    <div class="col-sm-4 wow fadeIn py-3" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-percent text-white"></i>
                            </div>
                            <h6 class="mb-0">Ley N.° 28044</h6>
                        </div>
                        <span>Ley General de Educación</span>
                    </div>
                    <div class="col-sm-4 wow fadeIn py-3" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h6 class="mb-0">Ley N.° 29733</h6>
                        </div>
                        <span>Ley de Protección de Datos Personales</span>
                    </div>
                    <div class="col-sm-4 wow fadeIn py-3" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-smile-beam text-white"></i>
                            </div>
                            <h6 class="mb-0">Ley N.° 25323</h6>
                        </div>
                        <span>Ley del Sistema Nacional de Archivos</span>
                    </div>
                    <div class="col-sm-4 wow fadeIn py-3" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-user-tie text-white"></i>
                            </div>
                            <h6 class="mb-0">Ley N.° 27806</h6>
                        </div>
                        <span>Ley de Transparencia y Acceso a la Información Pública</span>
                    </div>
                    <div class="col-sm-4 wow fadeIn py-3" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-headset text-white"></i>
                            </div>
                            <h6 class="mb-0">Ley N.° 27815</h6>
                        </div>
                        <span>Código de Ética de la Función Pública</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- MARCO NORMATIVO END -->

        <!-- FORMATOS Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Formatos</div>
                    <h2 class="mb-5">FORMATOS QUE CORRESPONDEN AL LEGAJO PERSONAL</h2>
                </div>
                <div class="row g-4">
        
                    <!-- PERSONAL NOMBRADO -->
                    <a class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s" href="https://drive.google.com/drive/folders/16xZXJolpB1aRV5LoMzPAAoDqbYq-97Qo?usp=sharing" id="RVM_016" target="_blank" rel="noopener noreferrer">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-file-signature fa-2x"></i>
        
                                </div>
                                <div class="service-icon" style="width: 220px;">
                                    <h5 class="text-white">Personal Nombrado</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Formato para personal Nombrado</h5>
                                <p class="btn btn-primary rounded-pill py-2 px-4 mt-2"
                                    href="https://drive.google.com/drive/folders/16xZXJolpB1aRV5LoMzPAAoDqbYq-97Qo?usp=sharing">Descargar</p>
                            </div>
                        </div>
                    </a>

                    <!-- PERSONAL CONTRATADO -->
                    <a class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                        href="https://drive.google.com/drive/folders/1ekyRWTD1n-7Xtc9cg1v8zaW4GzrwtBDX?usp=sharing" id="RVM_016"
                        target="_blank" rel="noopener noreferrer">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-file fa-2x"></i>
                    
                                </div>
                                <div class="service-icon" style="width: 240px;">
                                    <h5 class="text-white">Personal Contratado</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Formato para personal Contratado</h5>
                                <p class="btn btn-primary rounded-pill py-2 px-4 mt-2" href="https://drive.google.com/drive/folders/1ekyRWTD1n-7Xtc9cg1v8zaW4GzrwtBDX?usp=sharing">Descargar</p>
                            </div>
                        </div>
                    </a>

                    <!-- Nueva Documentación -->
                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                        href="https://drive.google.com/drive/folders/1ekyRWTD1n-7Xtc9cg1v8zaW4GzrwtBDX?usp=sharing" id="RVM_016"
                        target="_blank" rel="noopener noreferrer">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-file fa-2x"></i>
                    
                                </div>
                                <div class="service-icon" style="width: 300px;">
                                    <h5 class="text-white">Nueva Documentación</h5>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Formatos para la presentación de nueva documentación</h5>

                                <a class="btn btn-primary rounded-pill py-2 px-4 mt-2"
                                    href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/FORMATO%20N%2001%20BOLETA%20PERSONAL.pdf" id="RVM_016" target="_blank" rel="noopener noreferrer">Formato Nº 01 - Boleta Personal
                                </a>

                                <a class="btn btn-primary rounded-pill py-2 px-4 mt-2"
                                    href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/FORMATO%20N%C2%BA%2002.pdf" id="RVM_016" target="_blank" rel="noopener noreferrer">Formato Nº 02 - Declaración Jurada
                                </a>

                                <a class="btn btn-primary rounded-pill py-2 px-4 mt-2"
                                    href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/FORMATO%20N%C2%BA%2003.pdf" id="RVM_016" target="_blank" rel="noopener noreferrer">Formato Nº 03 - Declaración Jurada de Régimen Pensionario
                                </a>

                                <a class="btn btn-primary rounded-pill py-2 px-4 mt-2"
                                    href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/FORMATO%20N%C2%BA%2004.pdf" id="RVM_016" target="_blank" rel="noopener noreferrer">Formato Nº 04 - Declaración Jurada de Datos Personales - Domicilio Actual
                                </a>

                                <a class="btn btn-primary rounded-pill py-2 px-4 mt-2"
                                    href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/ANEXO%20N%2001%20MODELO%20DE%20SOLICITUD%20ACTUALIZACI%C3%93N%20DE%20LEGAJO.docx" id="RVM_016" target="_blank" rel="noopener noreferrer">Anexo Nº 01 - Modelo de solicitud de actualizaciones de Legajo
                                </a>

                                <a class="btn btn-primary rounded-pill py-2 px-4 mt-2"
                                    href="http://www.drepuno.gob.pe/web/archivos/2020/PERSONAL/ANEXO%20N%2002%20MODELO%20DE%20SOLICITUD%20APERTURA%20DE%20LEGAJO%20PERSONAL.docx" id="RVM_016" target="_blank" rel="noopener noreferrer">Anexo Nº 02 Modelo de solicitud de apertura de legajo
                                </a>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
        <!-- FORMATOS End -->

        <!-- INFORME Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Informe</div>
                        <h2 class="mb-4">EL INFORME ESCALAFONARIO</h2>
                        <p>Es un documento de carácter interno que contiene información del legajo personal del servidor y ex servidor y es
                        expedido por las DRE y UGEL a través del módulo de escalafón del sistema AYNI. Este documento es relevante para
                        participar en concursos públicos del MINEDU, gestionar situaciones administrativas y el reconocimiento de beneficios,
                        entre otros. El informe Escalafonario constituye el único documento oficial que acredita la formación académica, la
                        trayectoria laboral, méritos, deméritos, incentivos, asignaciones, licencias y vacaciones a largo de la vida profesional
                        del Docente y Administrativo de educación, que determina y asu vez puede sustentar:</p>
                        <h5>Nota:</h5>
                        <p>Los Informes Escalafonarios tendrán una <b>vigencia no mayor de seis (6) meses</b> para trámites en general, salvo
                            disposición específica del MINEDU que establezca un plazo diferente.</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="https://cdn.www.gob.pe/uploads/document/file/1577954/RVM%20N%C2%B0%20016-2021-MINEDU.pdf.pdf" target="_blank"
                            rel="noopener noreferrer">RVM N° 016-2021-MINEDU</a>
                    </div>
                    <div class="col-lg-7 py-5">
                        <div class="row g-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Pago de su remuneración, bonificaciones y asignaciones</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-percent text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Constituye la única fuente oficial de información para todos los procesos de evaluación, de la trayectoria docente
                                    pública y profesional dentro de la CPD</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Participar en procesos de ascenso de escala magisterial.</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-smile-beam text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Participar en procesos de acceso a cargos de mayor responsabilidad</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-user-tie text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Reconocimiento de beneficios sociales</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-headset text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Pago de pensiones</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- INFORME End -->

        
        <!-- CONTACTOS Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Equipo</div>
                    <h2 class="mb-5">Nuestro Equipo de Trabajo</h2>
                </div>
                <div class="row g-4">

                    <!-- PHP AQUI -->
                    <?php foreach ($resultado_usuario as $row_2) { ?>
                    <!-- PARA ALMACENAR EN VARIABLE -->
                    <?php 
                      $foto = $row_2['usu_foto'];
                      $nombre = $row_2['usu_nombre'];
                      $apepaterno = $row_2['usu_apaterno'];
                      $apematerno = $row_2['usu_amaterno'];
                    ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <h5><?php echo $nombre, " ", $apepaterno," ", $apematerno; ?></h5>
                            <p class="mb-4"><?php echo $row_2['rol_nombre']; ?></p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="../<?php echo $foto ?>" alt="">
                            <p class="mb-4">
                                <b>
                                    Detalles:
                                </b>
                                <?php echo $row_2['usu_detalle']; ?>
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1" href="mailto:<?php echo $row_2['usu_email']; ?>"><i class="fab fa-google"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <!-- CONTACTOS End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Quick Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../plantilla2/lib/wow/wow.min.js"></script>
    <script src="../plantilla2/lib/easing/easing.min.js"></script>
    <script src="../plantilla2/lib/waypoints/waypoints.min.js"></script>
    <script src="../plantilla2/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../plantilla2/js/main.js"></script>
</body>

</html>