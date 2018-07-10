<?php
include('../clases/conexion.php');
$hCodigo        = (isset($_REQUEST['hCodigo'])?$_REQUEST['hCodigo']:null);
$accion         = (isset($_REQUEST['accion'])?$_REQUEST['accion']:'insert');
$idPersona      = (isset($_REQUEST['idPersona'])?$_REQUEST['idPersona']:null);
$nombrePersona  = (isset($_REQUEST['nombrePersona'])?$_REQUEST['nombrePersona']:null);
$txtFechaSol    = (isset($_REQUEST['txtFechaSol'])?$_REQUEST['txtFechaSol']:null);
$txtFechaCita   = strtotime(isset($_REQUEST['txtFechaCita'])?$_REQUEST['txtFechaCita']:null);
$txtFechaCita	= date("Y-m-d",$txtFechaCita);
$slcHora        = (isset($_REQUEST['slcHora'])?$_REQUEST['slcHora']:null);
$txtComentario  = (isset($_REQUEST['txtComentario'])?$_REQUEST['txtComentario']:null);
$txtestado      = (isset($_REQUEST['txtestado'])?$_REQUEST['txtestado']:null);
$txtvisible      = (isset($_REQUEST['txtvisible'])?$_REQUEST['txtvisible']:null);
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
                        $sqlConsulta = "SELECT * FROM tblcita";
                        $rsMostrar =  $bdConexion->ejecutarSql($sqlConsulta);
                        $fila = mysqli_fetch_array($rsMostrar);
                        $hora = $fila["idhora"];
                        $fecha = $fila["fechacita"];
                        if(($hora != $slcHora) && ($fecha != $txtFechaCita)){
                            $tabla      = "tblcita";
                            $campos     = "idpersona, fechasolicitud, fechacita, idhora, comentarios, idestado, visible";
                            $valores    = "$idPersona, '$txtFechaSol', '$txtFechaCita', '$slcHora', '$txtComentario', $txtestado, $txtvisible";
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
                        }else{
                            print "<br><br><div class='container'>
                                            <div class='alert alert-warning alert-dismissable'>
                                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                <strong>¡Error!</strong> Ya existe una cita para la fecha/hora seleccionadas.
                                            </div>
                                            </div>";
                        }  
                    }
                }
}//Fin de boton Guardar

if (isset($_REQUEST['accion']) and $_REQUEST['accion']=='aprobar'){
    $sqlConsulta = "SELECT us.idusuario, per.idpersona, per.nombre, us.user, us.pass, us.idtipo, us.activo FROM tblusuario us INNER JOIN 
    tblpersona per ON per.idpersona = us.idpersona WHERE nombre ='$user' AND activo!='0'";
    $rsMostrar =  $bdConexion->ejecutarSql($sqlConsulta);
    $fila = mysqli_fetch_array($rsMostrar);
    $activo = $fila["activo"];
                if ($activo == 0 ){
                    session_destroy();                        
                    header("location:../forms/frmLogin.php");
                }else{
                    $tabla		= "tblcita";
                    $campos		= "idestado = 2";
                    $condicion	= "idcita = $hCodigo";
                    $resultado  = $bdConexion->actualizarDB($tabla,$campos,$condicion);
                }
}//Fin boton aprobar
if (isset($_REQUEST['accion']) and $_REQUEST['accion']=='denegar'){
    $sqlConsulta = "SELECT us.idusuario, per.idpersona, per.nombre, us.user, us.pass, us.idtipo, us.activo FROM tblusuario us INNER JOIN 
    tblpersona per ON per.idpersona = us.idpersona WHERE nombre ='$user' AND activo!='0'";
    $rsMostrar =  $bdConexion->ejecutarSql($sqlConsulta);
    $fila = mysqli_fetch_array($rsMostrar);
    $activo = $fila["activo"];
                if ($activo == 0 ){
                    session_destroy();                        
                    header("location:../forms/frmLogin.php");
                }else{
                    $tabla		= "tblcita";
                    $campos		= "idestado = 3";
                    $condicion	= "idcita = $hCodigo";
                    $resultado  = $bdConexion->actualizarDB($tabla,$campos,$condicion);
                }
}//Fin boton denegar
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
                    if($txtestado == 'Aprobado' OR $txtestado == 'Denegado'){
                        $tabla		= "tblcita";
                        $campos		= "visible = 0";
                        $condicion	= "idcita = $hCodigo";
                        $resultado  = $bdConexion->actualizarDB($tabla,$campos,$condicion);
                    }else{
                        print '<script>alert("Por favor marcar la cita como APROBADA o DENEGADA antes de ocultarla")</script>';
                    }
                }
}//Fin boton resolver

if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>