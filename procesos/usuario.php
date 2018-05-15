<?php
include('../clases/conexion.php');
$hCodigo        = (isset($_REQUEST['hCodigo'])?$_REQUEST['hCodigo']:null);
$accion         = (isset($_REQUEST['accion'])?$_REQUEST['accion']:'insert');
$idpersona      = (isset($_REQUEST['idpersona'])?$_REQUEST['idpersona']:null);
$idusuario      = (isset($_REQUEST['idusuario'])?$_REQUEST['idusuario']:null);
$txtnombre      = (isset($_REQUEST['txtnombre'])?$_REQUEST['txtnombre']:null);
$txtuser        = (isset($_REQUEST['txtuser'])?$_REQUEST['txtuser']:null);
$txtactivo      = (isset($_REQUEST['txtactivo'])?$_REQUEST['txtactivo']:null);
$slcTipo        = (isset($_REQUEST['slcTipo'])?$_REQUEST['slcTipo']:null);
$txtpass        = (isset($_REQUEST['txtpass'])?$_REQUEST['txtpass']:null);
///////////////////////////////////////////////////////////////////////////////////////////
$hCodigoEmpleado= (isset($_REQUEST['hCodigoEmpleado'])?$_REQUEST['hCodigoEmpleado']:null);
$txtNombre      = (isset($_REQUEST['txtNombre'])?$_REQUEST['txtNombre']:null);
$txtDui         = (isset($_REQUEST['txtDui'])?$_REQUEST['txtDui']:null);
$txtNit         = (isset($_REQUEST['txtNit'])?$_REQUEST['txtNit']:null);
$desac          = '';

if (isset($_REQUEST['btnGuardar'])){
    if ($accion=='update'){
        $tabla      = "tblusuario";
        $campos     = "idpersona = '$idpersona', idtipo = '$slcTipo', user = '$txtuser', pass = '$txtpass', activo = '$txtactivo'";
        $condicion	= "idusuario = $hCodigo";
        $resultado  = $bdConexion->actualizarDB($tabla,$campos,$condicion);
        if($resultado==1){
            $desac = 'disabled';
            print "<br><br><br><div class='container'>
                        <div class='alert alert-success alert-dismissable'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>¡Éxito!</strong> Registro modificado de forma exitosa.
                        </div>
                        </div>";
            
        }
    }else if($accion=='insert'){
        $tabla      = "tblusuario";
        $campos     = "idpersona, idtipo, user, pass, activo";
        $valores	= "$idpersona, $slcTipo, '$txtuser', '$txtpass', $txtactivo";
        $resultado  = $bdConexion->insertarDB($tabla,$campos,$valores);
        $hCodigo = $bdConexion->retornarId();
        if($resultado==1){
            $desac = 'disabled';
            print "<br><br><br><div class='container'>
                        <div class='alert alert-success alert-dismissable'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>¡Éxito!</strong> Registro ingresado de forma exitosa.
                        </div>
                        </div>";            
        }
    }
}//Fin de boton Guardar

if (isset($_REQUEST['btnGuardarEmpleado'])){
    if ($accion=='insert'){
        $tabla      = "tblpersona";
        $campos     = "nombre, dui, nit";
        $valores    = "'$txtNombre', '$txtDui', '$txtNit'";
        $resultado  = $bdConexion->insertarDB($tabla,$campos,$valores);
        $hCodigo = $bdConexion->retornarId();
        if($resultado==1){
            $desac = 'disabled';
            print "<br><br><div class='container'>
                        <div class='alert alert-success alert-dismissable'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>¡Éxito!</strong> Registro guardado de forma exitosa.
                        </div>
                        </div>";
            
        }
    }
}//Fin de boton GuardarEmpleado

if (isset($_REQUEST['accion']) and $_REQUEST['accion']=='desactivar'){
    $tabla		= "tblusuario";
    $campos		= "activo = 0";
    $condicion	= "idusuario = $hCodigo";
    $resultado  = $bdConexion->actualizarDB($tabla,$campos,$condicion);
}//Fin boton marcar como desactivar

if (isset($_REQUEST['accion']) and $_REQUEST['accion']=='reactivar'){
    $tabla		= "tblusuario";
    $campos		= "activo = 1";
    $condicion	= "idusuario = $hCodigo";
    $resultado  = $bdConexion->actualizarDB($tabla,$campos,$condicion);
}//Fin boton marcar como reactivar

if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>