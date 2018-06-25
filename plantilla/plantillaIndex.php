<?php
class plantilla{
    
    private $user;
    private $dir;

    function __construct($user,$dir){
        $this->user = $user;
        $this->dir  = $dir;
    }

    function header(){

        print '<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Servicel El Salvador</title>

        <!-- Icono tab -->
        <link rel="icon" href="../img/svg/logoTab.png">
    
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    
        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    
        <!-- Custom styles for this template -->
        <link href="css/freelancer.min.css" rel="stylesheet">
        <link href="css/imgModal.css" rel="stylesheet">
    
        </head>';

    }//Final function header

    function body($rol){//Usuario autenticado como admin o rrhh
        if ($rol == 1){
            $disabled = '';
            if ($this->user == 'Iniciar Sesión'){ $disabled = ' disabled="true" '; }
            print '<body id="page-top">

                <!-- Navigation -->
                <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="#page-top">Servicel El Salvador</a>
                    <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Opciones</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="forms/tblUsuario.php">Mantenimientos</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">'.$this->user.'</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="procesos/cerrarSesion.php">Salir</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
            
                <!-- Header -->
                <header class="masthead bg-primary text-white text-center">
                <div class="container">
                    <img class="img-fluid mb-5 d-block mx-auto" src="img/svg/logo2.jpg" alt="" style="height: 250px">
                    <h1 class="text-uppercase mb-0">Intranet El Salvador</h1>
                    <hr class="star-light">
                    <h2 class="font-weight-light mb-0">Servicel Corporation</h2>
                </div>
                </header>

                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <center>
                                <img src="img/svg/mision.png" width="600px" height="450px">
                            </center>  
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="img/svg/vision.png" width="600px" height="450px">
                            </center>
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="img/svg/valores.png" width="600px" height="450px">
                            </center>
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="img/svg/organigrama.png" width="800px" height="450px">
                            </center>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>

                <!-- Portfolio Grid Section -->
                <section class="portfolio" id="portfolio">
                    <div id="accordion">
                        <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Recursos Humanos
                                    </a>
                                </div><!--end class card-header-->
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmSolicitud.php">
                                                        <button style="width:98%;" type="button" title="Solicitud de documentos" '.$disabled.'>
                                                            <img src="img/svg/impresor.svg">
                                                                <br>
                                                                <b>Solicitud de documentos</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                            
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/tblSolicitud.php">
                                                        <button style="width:98%;" type="button" title="Resumen de solicitudes" '.$disabled.'>
                                                            <img src="img/svg/listado.svg">
                                                                <br>
                                                                <b>Resumen de solicitudes</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmCita.php">
                                                        <button style="width:98%;" type="button" title="Cita con RRHH" '.$disabled.'>
                                                            <img src="img/svg/reunion.svg">
                                                                <br>
                                                                <b>Cita con RRHH</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/tblCita.php">
                                                        <button style="width:98%;" type="button" title="Resumen de citas" '.$disabled.'>
                                                            <img src="img/svg/calendario.svg">
                                                                <br>
                                                                <b>Resumen de citas</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                        </div><!--end class row-->
                                        
                                        <br>

                                        <div class="row">
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmMaterial.php">
                                                        <button style="width:98%;" type="button" title="Solicitud de suplementos de oficina" '.$disabled.'>
                                                            <img src="img/svg/clips.svg">
                                                                <br>
                                                                <b>Solicitud material de oficina</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/tblSolSup.php">
                                                        <button style="width:98%;" type="button" title="Resumen solicitud suplementos" '.$disabled.'>
                                                            <img src="img/svg/tareas.svg">
                                                                <br>
                                                                <b>Resumen solicitud suplementos</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmBoleta.php">
                                                        <button style="width:98%;" type="button" title="Subir boleta de pago" '.$disabled.'>
                                                            <img src="img/svg/subir.svg">
                                                                <br>
                                                                <b>Subir boleta de pago</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/tblBoleta.php">
                                                        <button style="width:98%;" type="button" title="Ver boletas de pago" '.$disabled.'>
                                                            <img src="img/svg/pago.svg">
                                                                <br>
                                                                <b>Ver boletas de pago</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                            
                                        </div><!--end class row-->

                                        <br>

                                        <div class="row">

                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/tblUsuario.php">
                                                        <button style="width:98%;" type="button" title="Mantenimientos usuarios" '.$disabled.'>
                                                            <img src="img/svg/usuarios.svg">
                                                                <br>
                                                                <b>Mantenimiento usuarios</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->

                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmSlcReporte.php">
                                                        <button style="width:98%;" type="button" title="Reportes" '.$disabled.'>
                                                            <img src="img/svg/reporte.svg">
                                                                <br>
                                                                <b>Reportes</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->

                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmSlcPolitica.php">
                                                        <button style="width:98%;" type="button" title="Políticas" '.$disabled.'>
                                                            <img src="img/svg/contrato.svg">
                                                                <br>
                                                                <b>Políticas</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->    
                                            
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmSlcManual.php">
                                                        <button style="width:98%;" type="button" title="Manuales" '.$disabled.'>
                                                            <img src="img/svg/papers.svg">
                                                                <br>
                                                                <b>Manuales</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size--> 
                                
                                        </div><!--end class row-->
                                        
                                    </div><!--end class card-body -->
                                </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                            Collapsible Group Item #3
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                </div><!--end class card-->
                        </div>
                    </div>
                </section>
            
                <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
                <div class="scroll-to-top d-lg-none position-fixed ">
                <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
                    <i class="fa fa-chevron-up"></i>
                </a>
                </div>
            
                <!-- Bootstrap core JavaScript -->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            
                <!-- Plugin JavaScript -->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
            
                <!-- Contact Form JavaScript -->
                <script src="js/jqBootstrapValidation.js"></script>
                <script src="js/contact_me.js"></script>
            
                <!-- Custom scripts for this template -->
                <script src="js/freelancer.min.js"></script>
            
            </body>';
        }else if($rol == 2){
            $disabled = '';
            if ($this->user == 'Iniciar Sesión'){ $disabled = ' disabled="true" '; }
            print '<body id="page-top">

                <!-- Navigation -->
                <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="#page-top">Servicel El Salvador</a>
                    <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Opciones</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">'.$this->user.'</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="procesos/cerrarSesion.php">Salir</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
            
                <!-- Header -->
                <header class="masthead bg-primary text-white text-center">
                <div class="container">
                    <img class="img-fluid mb-5 d-block mx-auto" src="img/svg/logo2.jpg" alt="" style="height: 250px">
                    <h1 class="text-uppercase mb-0">Intranet El Salvador</h1>
                    <hr class="star-light">
                    <h2 class="font-weight-light mb-0">Servicel Corporation</h2>
                </div>
                </header>

                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <center>
                                <img src="img/svg/mision.png" width="600px" height="450px">
                            </center>  
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="img/svg/vision.png" width="600px" height="450px">
                            </center>
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="img/svg/valores.png" width="600px" height="450px">
                            </center>
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="img/svg/organigrama.png" width="800px" height="450px">
                            </center>
                        </div>
                </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
                
                <!-- Portfolio Grid Section -->
                <section class="portfolio" id="portfolio">
                    <div id="accordion">
                        <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Recursos Humanos
                                    </a>
                                </div><!--end class card-header-->
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmSolicitud.php">
                                                        <button style="width:98%;" type="button" title="Solicitud de documentos" '.$disabled.'>
                                                            <img src="img/svg/impresor.svg">
                                                                <br>
                                                                <b>Solicitud de documentos</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                            
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/tblSolicitud.php">
                                                        <button style="width:98%;" type="button" title="Resumen de solicitudes" '.$disabled.'>
                                                            <img src="img/svg/listado.svg">
                                                                <br>
                                                                <b>Resumen de solicitudes</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmCita.php">
                                                        <button style="width:98%;" type="button" title="Cita con RRHH" '.$disabled.'>
                                                            <img src="img/svg/reunion.svg">
                                                                <br>
                                                                <b>Cita con RRHH</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/tblCita.php">
                                                        <button style="width:98%;" type="button" title="Resumen de citas" '.$disabled.'>
                                                            <img src="img/svg/calendario.svg">
                                                                <br>
                                                                <b>Resumen de citas</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                        </div><!--end class row-->
                                        
                                        <br>

                                        <div class="row">
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmMaterial.php">
                                                        <button style="width:98%;" type="button" title="Solicitud de suplementos de oficina" '.$disabled.'>
                                                            <img src="img/svg/clips.svg">
                                                                <br>
                                                                <b>Solicitud material de oficina</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/tblSolSup.php">
                                                        <button style="width:98%;" type="button" title="Resumen solicitud suplementos" '.$disabled.'>
                                                            <img src="img/svg/tareas.svg">
                                                                <br>
                                                                <b>Resumen solicitud suplementos</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmBoleta.php">
                                                        <button style="width:98%;" type="button" title="Subir boleta de pago" '.$disabled.'>
                                                            <img src="img/svg/subir.svg">
                                                                <br>
                                                                <b>Subir boleta de pago</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/tblBoleta.php">
                                                        <button style="width:98%;" type="button" title="Ver boletas de pago" '.$disabled.'>
                                                            <img src="img/svg/pago.svg">
                                                                <br>
                                                                <b>Ver boletas de pago</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->
                                            
                                        </div><!--end class row-->

                                        <br>

                                        <div class="row">

                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmSlcReporte.php">
                                                        <button style="width:98%;" type="button" title="Reportes" '.$disabled.'>
                                                            <img src="img/svg/reporte.svg">
                                                                <br>
                                                                <b>Reportes</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size-->

                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmSlcPolitica.php">
                                                        <button style="width:98%;" type="button" title="Políticas" '.$disabled.'>
                                                            <img src="img/svg/contrato.svg">
                                                                <br>
                                                                <b>Políticas</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size--> 
                                            
                                            <div class="col-sm-4 col-lg-3 col-md-3">
                                                <div class="thumbnail">
                                                    <a href="forms/frmSlcManual.php">
                                                        <button style="width:98%;" type="button" title="Manuales" '.$disabled.'>
                                                            <img src="img/svg/papers.svg">
                                                                <br>
                                                                <b>Manuales</b>
                                                        </button>
                                                    </a>
                                                </div><!--end class thumbnail-->
                                            </div><!--end size--> 
                                
                                        </div><!--end class row-->
                                        
                                    </div><!--end class card-body -->
                                </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                            Collapsible Group Item #3
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                </div><!--end class card-->
                        </div>
                    </div>
                </section>

                <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
                <div class="scroll-to-top d-lg-none position-fixed ">
                <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
                    <i class="fa fa-chevron-up"></i>
                </a>
                </div>
            
                <!-- Bootstrap core JavaScript -->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            
                <!-- Plugin JavaScript -->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
            
                <!-- Contact Form JavaScript -->
                <script src="js/jqBootstrapValidation.js"></script>
                <script src="js/contact_me.js"></script>
            
                <!-- Custom scripts for this template -->
                <script src="js/freelancer.min.js"></script>
            
            </body>';
        }else if($rol == 3 || $rol == 4 || $rol == 5 || $rol == 6 || $rol == 7 || $rol == 8 || $rol == 9 
        || $rol == 10 || $rol == 11 || $rol == 12 || $rol == 13){
            $disabled = '';
            if ($this->user == 'Iniciar Sesión'){ $disabled = ' disabled="true" '; }
            print '<body id="page-top">

                    <!-- Navigation -->
                    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand js-scroll-trigger" href="#page-top">Servicel El Salvador</a>
                        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Opciones</a>
                            </li>
                            <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">'.$this->user.'</a>
                            </li>
                            <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="procesos/cerrarSesion.php">Salir</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </nav>
                
                    <!-- Header -->
                    <header class="masthead bg-primary text-white text-center">
                    <div class="container">
                        <img class="img-fluid mb-5 d-block mx-auto" src="img/svg/logo2.jpg" alt="" style="height: 250px">
                        <h1 class="text-uppercase mb-0">Intranet El Salvador</h1>
                        <hr class="star-light">
                        <h2 class="font-weight-light mb-0">Servicel Corporation</h2>
                    </div>
                    </header>

                    <!-- Carousel -->
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <center>
                                <img src="img/svg/mision.png" width="600px" height="450px">
                            </center>  
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="img/svg/vision.png" width="600px" height="450px">
                            </center>
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="img/svg/valores.png" width="600px" height="450px">
                            </center>
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="img/svg/organigrama.png" width="800px" height="450px">
                            </center>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
                
                    <!-- Portfolio Grid Section -->
                    <section class="portfolio" id="portfolio">
                        <div id="accordion">
                            <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                            Recursos Humanos
                                        </a>
                                    </div><!--end class card-header-->
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4 col-lg-3 col-md-3">
                                                    <div class="thumbnail">
                                                        <a href="forms/frmSolicitud.php">
                                                            <button style="width:98%;" type="button" title="Solicitud de documentos" '.$disabled.'>
                                                                <img src="img/svg/impresor.svg">
                                                                    <br>
                                                                    <b>Solicitud de documentos</b>
                                                            </button>
                                                        </a>
                                                    </div><!--end class thumbnail-->
                                                </div><!--end size-->
                                    
                                                <div class="col-sm-4 col-lg-3 col-md-3">
                                                    <div class="thumbnail">
                                                        <a href="forms/frmCita.php">
                                                            <button style="width:98%;" type="button" title="Cita con RRHH" '.$disabled.'>
                                                                <img src="img/svg/reunion.svg">
                                                                    <br>
                                                                    <b>Cita con RRHH</b>
                                                            </button>
                                                        </a>
                                                    </div><!--end class thumbnail-->
                                                </div><!--end size-->
                                    
                                                <div class="col-sm-4 col-lg-3 col-md-3">
                                                    <div class="thumbnail">
                                                        <a href="forms/tblCita.php">
                                                            <button style="width:98%;" type="button" title="Resumen de citas" '.$disabled.'>
                                                                <img src="img/svg/calendario.svg">
                                                                    <br>
                                                                    <b>Resumen de citas</b>
                                                            </button>
                                                        </a>
                                                    </div><!--end class thumbnail-->

                                                </div><!--end size-->

                                                    <div class="col-sm-4 col-lg-3 col-md-3">
                                                        <div class="thumbnail">
                                                            <a href="forms/frmMaterial.php">
                                                                <button style="width:98%;" type="button" title="Solicitud de suplementos de oficina" '.$disabled.'>
                                                                    <img src="img/svg/clips.svg">
                                                                        <br>
                                                                        <b>Solicitud material de oficina</b>
                                                                </button>
                                                            </a>
                                                        </div><!--end class thumbnail-->
                                                    </div><!--end size-->

                                            </div><!--end class row-->
                                     
                                            <br>
    
                                            <div class="row">
                                    
                                                <div class="col-sm-4 col-lg-3 col-md-3">
                                                    <div class="thumbnail">
                                                        <a href="forms/tblBoleta.php">
                                                            <button style="width:98%;" type="button" title="Ver boletas de pago" '.$disabled.'>
                                                                <img src="img/svg/pago.svg">
                                                                    <br>
                                                                    <b>Ver boletas de pago</b>
                                                            </button>
                                                        </a>
                                                    </div><!--end class thumbnail-->

                                                </div><!--end size-->

                                                <div class="col-sm-4 col-lg-3 col-md-3">
                                                        <div class="thumbnail">
                                                            <a href="forms/frmSlcPolitica.php">
                                                                <button style="width:98%;" type="button" title="Políticas" '.$disabled.'>
                                                                    <img src="img/svg/contrato.svg">
                                                                        <br>
                                                                        <b>Políticas</b>
                                                                </button>
                                                            </a>
                                                        </div><!--end class thumbnail-->

                                                </div><!--end size-->

                                                <div class="col-sm-4 col-lg-3 col-md-3">
                                                        <div class="thumbnail">
                                                            <a href="forms/frmSlcManual.php">
                                                                <button style="width:98%;" type="button" title="Manuales" '.$disabled.'>
                                                                    <img src="img/svg/papers.svg">
                                                                        <br>
                                                                        <b>Manuales</b>
                                                                </button>
                                                            </a>
                                                        </div><!--end class thumbnail-->

                                                </div><!--end size--> 
                                                
                                            </div><!--end class row-->
                                            
                                        </div><!--end class card-body -->
                                    </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                                Collapsible Group Item #2
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                                Collapsible Group Item #3
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                        </div>
                                    </div><!--end class card-->
                            </div>
                        </div>
                    </section>
                
                    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
                    <div class="scroll-to-top d-lg-none position-fixed ">
                    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    </div>
                
                    <!-- Bootstrap core JavaScript -->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                
                    <!-- Plugin JavaScript -->
                    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
                
                    <!-- Contact Form JavaScript -->
                    <script src="js/jqBootstrapValidation.js"></script>
                    <script src="js/contact_me.js"></script>
                
                    <!-- Custom scripts for this template -->
                    <script src="js/freelancer.min.js"></script>
                
                </body>';    
        }else{
            $disabled = '';
            if ($this->user == 'Iniciar Sesión'){ $disabled = 'disabled="false"'; }
            print '<body id="page-top">

                <!-- Navigation -->
                <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="#page-top">Servicel El Salvador</a>
                    <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Opciones</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="forms/frmLogin.php">Iniciar sesión</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
            
                <!-- Header -->
                <header class="masthead bg-primary text-white text-center">
                <div class="container">
                    <img class="img-fluid mb-5 d-block mx-auto" src="img/svg/logo2.jpg" alt="" style="height: 250px">
                    <h1 class="text-uppercase mb-0">Intranet El Salvador</h1>
                    <hr class="star-light">
                    <h2 class="font-weight-light mb-0">Servicel Corporation</h2>
                </div>
                </header>
                
                <!-- Portfolio Grid Section -->
                <section class="portfolio" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-lg-3 col-md-3">
                            <div class="thumbnail">
                                <a href="forms/frmLogin.php">
                                    <button style="width:98%;" type="button" title="Iniciar sesión" '.$disabled.'>
                                        <img src="img/svg/usuarios.svg">
                                            <br>
                                            <b>Iniciar sesión</b>
                                    </button>
                                </a>
                            </div><!--end class thumbnail-->
                        </div><!--end size-->   
                    </div><!--end class row-->
                </div><!--end class container-->
            </section>
        
            <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
            <div class="scroll-to-top d-lg-none position-fixed ">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
            </div>
        
            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
            <!-- Plugin JavaScript -->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
            <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        
            <!-- Contact Form JavaScript -->
            <script src="js/jqBootstrapValidation.js"></script>
            <script src="js/contact_me.js"></script>
        
            <!-- Custom scripts for this template -->
            <script src="js/freelancer.min.js"></script>
        
        </body>';
        }
    }//Final function body

    function footer(){

        $userfooter = "USTED NO SE HA IDENTIFICADO";
        if ($this->user != 'Iniciar Sesión')
        {
            $userfooter = $this->user;
        }

        if($this->user == 'Iniciar Sesión'){

            print '<!-- Footer -->
            <div class="copyright py-4 text-center text-white">
                <div class="container">
                    <a>'.$userfooter.'</a>
                    <br>
                    <small>Navegadores recomendados: Opera 50 ó superior, Chrome 60 ó superior</small>
                    <br>
                    <small>Derechos reservados &copy; Servicel Corporation S.A de C.V</small>
                </div>
            </div>';
        }else{
            print '<!-- Footer -->
            <div class="copyright py-4 text-center text-white">
                <div class="container">
                    <a>Usted ha iniciado sesión como '.$userfooter.'</a>
                    <br>
                    <a href="procesos/cerrarSesion.php">Cerrar Sesión</a>
                    <br>
                    <small>Navegadores recomendados: Opera 50 ó superior, Chrome 60 ó superior</small>
                    <br>
                    <small>Derechos reservados &copy; Servicel Corporation S.A de C.V</small>                    
                    </div>
                </div>';
        }

    }//Final function footer
    
}

?>