<?php
include('../clases/conexion.php');
$hCodigo        = (isset($_REQUEST['hCodigo'])?$_REQUEST['hCodigo']:null);
$accion         = (isset($_REQUEST['accion'])?$_REQUEST['accion']:'insert');
$hCodigoEmpleado= (isset($_REQUEST['hCodigoEmpleado'])?$_REQUEST['hCodigoEmpleado']:null);
$txtNombre      = (isset($_REQUEST['txtNombre'])?$_REQUEST['txtNombre']:null);
$txtDui         = (isset($_REQUEST['txtDui'])?$_REQUEST['txtDui']:null);
$txtNit         = (isset($_REQUEST['txtNit'])?$_REQUEST['txtNit']:null);
$desac          = '';

if (isset($_REQUEST['btnGuardar'])){
    $sqlConsulta = "SELECT us.idusuario, per.idpersona, per.nombre, us.user, us.pass, us.idtipo, us.activo FROM tblusuario us INNER JOIN 
    tblpersona per ON per.idpersona = us.idpersona WHERE nombre ='$user' AND activo!='0'";
    $rsMostrar =  $bdConexion->ejecutarSql($sqlConsulta);
    $fila = mysqli_fetch_array($rsMostrar);
    $activo = $fila["activo"];
                if ($activo == 0 ){
                    session_destroy();                        
                    header("location:../forms/frmLogin.php");
                }else{
                    if ($accion=='insert'){
                        $tabla      = "tblpersona";
                        $campos     = "nombre, dui, nit";
                        $valores    = "'$txtNombre', '$txtDui', '$txtNit'";
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
                }
}//Fin de boton Guardar

if (isset($_REQUEST['accion']) and $_REQUEST['accion']=='resolver'){
    $tabla		= "tblsolicitud";
    $campos		= "estado = 0";
    $condicion	= "idsolicitud = $hCodigo";
    $resultado  = $bdConexion->actualizarDB($tabla,$campos,$condicion);
}//Fin boton Resolver

if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>