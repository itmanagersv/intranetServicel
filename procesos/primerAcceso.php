<?php
include('../clases/conexion.php');
$hCodigo        = (isset($_REQUEST['hCodigo'])?$_REQUEST['hCodigo']:null);
$accion         = (isset($_REQUEST['accion'])?$_REQUEST['accion']:'update');
$idpersona      = (isset($_REQUEST['idPersona'])?$_REQUEST['idPersona']:null);
$idusuario      = (isset($_REQUEST['idusuario'])?$_REQUEST['idusuario']:null);
$txtnombre      = (isset($_REQUEST['txtnombre'])?$_REQUEST['txtnombre']:null);
$txtuser        = (isset($_REQUEST['txtuser'])?$_REQUEST['txtuser']:null);
$txtpass        = (isset($_REQUEST['txtpass'])?$_REQUEST['txtpass']:null);

if (isset($_REQUEST['btnGuardar'])){
    if ($accion=='update'){
        $tabla      = "tblusuario";
        $campos     = "pass = '$txtpass', cambio = 1";
        $condicion	= "idpersona = $idpersona";
        $resultado  = $bdConexion->actualizarDB($tabla,$campos,$condicion);
        if($resultado==1){
            $desac = 'disabled';
            print "<br><br><br><div class='container'>
                        <div class='alert alert-success alert-dismissable'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>¡Éxito!</strong> Contraseña modificada de forma exitosa.
                        </div>
                        </div>";
                        header("Location: ../index.php");
            
        }
    }    
}//Fin de boton Guardar


if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>