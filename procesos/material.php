<?php
include('../clases/conexion.php');
$hCodigo        = (isset($_REQUEST['hCodigo'])?$_REQUEST['hCodigo']:null);
$accion         = (isset($_REQUEST['accion'])?$_REQUEST['accion']:'insert');
$idPersona      = (isset($_REQUEST['idPersona'])?$_REQUEST['idPersona']:null);
$idTipo         = (isset($_REQUEST['idTipo'])?$_REQUEST['idTipo']:null);
$slcMaterial    = (isset($_REQUEST['slcMaterial'])?$_REQUEST['slcMaterial']:null);
$txtFecha       = (isset($_REQUEST['txtFecha'])?$_REQUEST['txtFecha']:null);
$txtCantidad    = (isset($_REQUEST['txtCantidad'])?$_REQUEST['txtCantidad']:null);
$txtestado      = (isset($_REQUEST['txtestado'])?$_REQUEST['txtestado']:null);
$desac          = '';

if (isset($_REQUEST['btnGuardar'])){
    $sqlConsulta = "SELECT us.idusuario, per.idpersona, per.nombre, us.user, us.pass, us.idtipo, us.activo FROM tblusuario us INNER JOIN 
    tblpersona per ON per.idpersona = us.idpersona WHERE nombre ='$user' AND activo!='0'";
    $rsMostrar =  $bdConexion->ejecutarSql($sqlConsulta);
    $fila = mysqli_fetch_array($rsMostrar);
    $activo = $fila["activo"];
                if ($activo == 0){
                    session_destroy();
                    header("location:../forms/frmLogin.php");
                }else{
                    if ($accion=='insert'){
                        $sqlConsulta = "SELECT * FROM tblmaterial";
                        $rsMostrar =  $bdConexion->ejecutarSql($sqlConsulta);
                        $fila = mysqli_fetch_array($rsMostrar);
                        $cantidad = $fila["stock"];
                        if($cantidad >= $txtCantidad){
                            //Inserta la solicitud a la tabla tblsolsuplemento
                            $tabla      = "tblsolsuplemento";
                            $campos     = "idpersona, idtipo, idmaterial, fecha, cantidad, estado";
                            $valores    = "$idPersona, $idTipo, $slcMaterial, '$txtFecha', '$txtCantidad', '$txtestado'";
                            $resultado  = $bdConexion->insertarDB($tabla,$campos,$valores);
                            $hCodigo = $bdConexion->retornarId();
                            
                            //Actualiza el stock en la tabla tblmaterial
                            $tabla		= "tblmaterial";
                            $campos		= "stock = ($cantidad-$txtCantidad)";
                            $condicion	= "idmaterial = $slcMaterial";
                            $resultado  = $bdConexion->actualizarDB($tabla,$campos,$condicion);

                            if($resultado==1){
                                $desac          = 'disabled';
                                print "<br><br><div class='container'>
                                            <div class='alert alert-success alert-dismissable'>
                                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                <strong>¡Éxito!</strong> Registro guardado de forma exitosa.
                                            </div>
                                            </div>";
                                
                            }
                        }else{
                            print "<br><br><div class='container'>
                                            <div class='alert alert-warning alert-dismissable'>
                                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                <strong>¡Error!</strong> Stock de suplemento insuficiente, stock actual es $cantidad.
                                            </div>
                                            </div>";
                        }  
                    }
                }  
}//Fin de boton Guardar

if (isset($_REQUEST['accion']) and $_REQUEST['accion']=='resolver'){
    $sqlConsulta = "SELECT us.idusuario, per.idpersona, per.nombre, us.user, us.pass, us.idtipo, us.activo FROM tblusuario us INNER JOIN 
    tblpersona per ON per.idpersona = us.idpersona WHERE nombre ='$user' AND activo!='0'";
    $rsMostrar =  $bdConexion->ejecutarSql($sqlConsulta);
    $fila = mysqli_fetch_array($rsMostrar);
    $activo = $fila["activo"];
                if ($activo == 0 ){
                    session_destroy();                        
                    header("location:../forms/frmLogin.php");
                }else{
                    $tabla		= "tblsolsuplemento";
                    $campos		= "estado = 0";
                    $condicion	= "idsolicitud = $hCodigo";
                    $resultado  = $bdConexion->actualizarDB($tabla,$campos,$condicion);
                }
}//Fin boton Resolver

if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>