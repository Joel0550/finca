<?php if (!$this->session->userdata("conectado")) : ?>
    <script type="text/javascript">
        window.location.href =
            "<?php echo site_url('welcome/login'); ?>";
    </script>
<?php endif; ?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>FINCA PILALO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('plantilla/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('plantilla/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('plantilla/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('plantilla/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('plantilla/css/style.css') ?>" rel="stylesheet">
    <!--Importacion de jquery framework-->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!--Importancion jquery validate-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Importancion jquery validate-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--importacion de datatables-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span>+012 345 6789</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="<?php echo site_url() ?>" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">FINCA PILALO</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Bovinos</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo site_url() ?>/bovinos/nuevo" class="dropdown-item">Bovinos</a>
                        <a href="<?php echo site_url() ?>/bovinos/index" class="dropdown-item">Listado de Bovinos</a>
                        <a href="<?php echo site_url() ?>/crias/nuevo" class="dropdown-item">Crias</a>
                        <a href="<?php echo site_url() ?>/crias/index" class="dropdown-item">Listado de Crias</a>
                        <a href="<?php echo site_url() ?>/corrales/nuevo" class="dropdown-item">Corrales</a>
                        <a href="<?php echo site_url() ?>/corrales/index" class="dropdown-item">Listado de Corrales</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Procesos</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo site_url() ?>/producciones/nuevo" class="dropdown-item">Producción</a>
                        <a href="<?php echo site_url() ?>/producciones/index" class="dropdown-item">Listado de Producción</a>
                        <a href="<?php echo site_url() ?>/pasteurizaciones/nuevo" class="dropdown-item">Pasteuración</a>
                        <a href="<?php echo site_url() ?>/pasteurizaciones/index" class="dropdown-item">Listado de Pasteuración</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cuidados</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo site_url() ?>/enfermedades/nuevo" class="dropdown-item">Enfermedades</a>
                        <a href="<?php echo site_url() ?>/enfermedades/index" class="dropdown-item">Listado de Enfermedades</a>
                        <a href="<?php echo site_url() ?>/partos/nuevo" class="dropdown-item">Partos</a>
                        <a href="<?php echo site_url() ?>/partos/index" class="dropdown-item">Listado de Partos</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Alimentacion</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo site_url() ?>/pastos/nuevo" class="dropdown-item">Pasto</a>
                        <a href="<?php echo site_url() ?>/pastos/index" class="dropdown-item">Listado de pasto</a>
                        <a href="<?php echo site_url() ?>/nutriciones/nuevo" class="dropdown-item">Nutricion</a>
                        <a href="<?php echo site_url() ?>/nutriciones/index" class="dropdown-item">Listado de nutricion</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Opciones</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#">&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata("conectado")->email_usu; ?>
                        </a>
                        <a href="#">&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata("conectado")->perfil_usu; ?>
                        </a>
                        <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1" onclick="cerrarSistema();">Salir</p>
                    <script type="text/javascript">
                      function cerrarSistema() {
                        window.location.href = "<?php echo site_url('welcome/cerrarSesion'); ?>"
                      }
                    </script>

                  </div>
                </a>
                    </div>
                </div>
            </div>
            <!--
            <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div> -->
        </div>
    </nav>
    <!-- Navbar End -->