<?php
include('../clases/conexion.php');
$slcManual    = (isset($_REQUEST['slcManual'])?$_REQUEST['slcManual']:null);
$desac          = '';

if (isset($_REQUEST['btnSeleccionar'])){

    switch ($slcManual){

        case '1':
            //echo '<script type="text/javascript" language="Javascript">window.open("../pdf/politicas/La Chica 
            //del Tren.pdf");</script>';
            echo '<script type="text/javascript" language="Javascript">window.open("https://goo.gl/kPNhcA");
            </script>'; 
            break;

        default:
            break;

    }

}//Fin de boton Guardar

if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>