<?php
include('../clases/conexion.php');
$hCodigo        = (isset($_REQUEST['hCodigo'])?$_REQUEST['hCodigo']:null);
$accion         = (isset($_REQUEST['accion'])?$_REQUEST['accion']:'insert');
$txtMaterial    = (isset($_REQUEST['txtMaterial'])?$_REQUEST['txtMaterial']:null);
$txtStock       = (isset($_REQUEST['txtStock'])?$_REQUEST['txtStock']:null);
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
                    if($_REQUEST['accion'] =='update'){
                        $tabla      = "tblmaterial";
                        $campos     = "material = '$txtMaterial', stock = '$txtStock'";
                        $condicion	= "idmaterial = $hCodigo";
                        $resultado  = $bdConexion->actualizarDB($tabla,$campos,$condicion);
                        if($resultado==1){
                            $desac = 'disabled';
                            print "<br><br><br><div class='container'>
                                        <div class='alert alert-success alert-dismissable'>
                                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                            <strong>¡Éxito!</strong> Registro modificado de forma exitosa.
                                        </div>
                                        </div>";
                                        header("Location: ../forms/tblMaterial.php");
                        }
                    }else if($_REQUEST['accion'] =='insert'){
                        $tabla      = "tblmaterial";
                        $campos     = "material, stock";
                        $valores    = "'$txtMaterial', '$txtStock'";
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

if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>


