<?php
include('../clases/conexion.php');
$hCodigo        = (isset($_REQUEST['hCodigo'])?$_REQUEST['hCodigo']:null);
$accion         = (isset($_REQUEST['accion'])?$_REQUEST['accion']:'insert');
$idPersona      = (isset($_REQUEST['idPersona'])?$_REQUEST['idPersona']:null);
$slcMaterial    = (isset($_REQUEST['slcMaterial'])?$_REQUEST['slcMaterial']:null);
$txtFecha       = (isset($_REQUEST['txtFecha'])?$_REQUEST['txtFecha']:null);
$txtCantidad    = (isset($_REQUEST['txtCantidad'])?$_REQUEST['txtCantidad']:null);
$txtestado      = (isset($_REQUEST['txtestado'])?$_REQUEST['txtestado']:null);
$desac          = '';

if (isset($_REQUEST['btnGuardar'])){
    if ($accion=='insert'){
        $tabla      = "tblsolsuplemento";
        $campos     = "idpersona, idmaterial, fecha, cantidad, estado";
        $valores    = "$idPersona, $slcMaterial, '$txtFecha', '$txtCantidad', '$txtestado'";
        $resultado  = $bdConexion->insertarDB($tabla,$campos,$valores);
        $hCodigo = $bdConexion->retornarId();
        if($resultado==1){
            $desac          = 'disabled';
            print "<br><br><div class='container'>
                        <div class='alert alert-success alert-dismissable'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>¡Éxito!</strong> Registro guardado de forma exitosa.
                        </div>
                        </div>";
            
        }
    }
}//Fin de boton Guardar

if (isset($_REQUEST['accion']) and $_REQUEST['accion']=='resolver'){
    $tabla		= "tblsolsuplemento";
    $campos		= "estado = 0";
    $condicion	= "idsolicitud = $hCodigo";
    $resultado  = $bdConexion->actualizarDB($tabla,$campos,$condicion);
}//Fin boton Resolver

if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>