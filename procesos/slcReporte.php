<?php
include('../clases/conexion.php');
$slcReporte      = (isset($_REQUEST['slcReporte'])?$_REQUEST['slcReporte']:null);
$desac          = '';

if (isset($_REQUEST['btnSeleccionar'])){

    switch ($slcReporte){

        case '1':
            header("Location: ../forms/frmSolSupArea.php");
            break;

        default:
            break;

    }

}//Fin de boton Guardar

if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>