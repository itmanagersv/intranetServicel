<?php
include('../clases/conexion.php');
$slcPolitica      = (isset($_REQUEST['slcPolitica'])?$_REQUEST['slcPolitica']:null);
$desac          = '';

if (isset($_REQUEST['btnSeleccionar'])){

    switch ($slcPolitica){

        case '1':
            echo '<script type="text/javascript" language="Javascript">window.open("../pdf/politicas/La Chica del Tren.pdf");</script>
            ';
            break;

        default:
            break;

    }

}//Fin de boton Guardar

if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>