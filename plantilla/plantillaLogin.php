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
            <link rel="stylesheet" href="../css/bootstrap.min.css">
        
            <!-- Custom fonts for this template -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
            
            <!--Datatables icons -->
            <link href="https://cdn.datatables.net/plug-ins/1.10.16/integration/font-awesome/dataTables.fontAwesome.css" rel="stylesheet" type="text/css">
            
            <script src="../js/jquery.js"></script>
            <script src="../js/funciones.js"></script>
            <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
            <link rel="stylesheet" href="../libs/bootstrap-datepicker/css/bootstrap-datepicker.css">
            
            <!-- Bootstrap -->
            <script src="../js/bootstrap.min.js"></script>
        
            <!-- CSS -->
            <link href="../css/estilo.css" rel="stylesheet">
        
            </head>';
            
            

    }//Final function header

    function body(){

        print '<body id="page-top">

        <!-- Header -->

        <!-- Librería confirmation, datepicker y jquerymask -->
        <script src="../libs/bootstrap-confirmation/bootstrap-confirmation.js"></script>
        <script src="../js/confirmation.js"></script>
        <script src="../libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="../libs/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script>
        <script src="../js/datepicker.js"></script>
        <script src="../libs/jquery.mask/jquery.mask.js"></script>
        <script src="../js/mask.js"></script>

        <!-- Librerias para DataTables -->
        <script src="../js/jquery.dataTables.js" ></script>   
        <script type="text/javascript" src="../js/dataTables.bootstrap.min.js"></script>

      </body>
      
      ';

    }//Final function body
    
    function footer(){

        $userfooter = "USTED NO SE HA IDENTIFICADO";
        if ($this->user != 'Iniciar Sesión ')
        {
            $userfooter = $this->user;
        }

        print '<!-- Footer -->
        <div class="copyright py-4 text-center text-white">
          <div class="container">
            <a>'. $userfooter.'</a>
            <br>
            <small>Derechos reservados &copy; Servicel Corporation S.A de C.V</small>
            
          </div>
        </div>';

    }
}

?>