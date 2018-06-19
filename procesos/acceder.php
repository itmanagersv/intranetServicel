<?php
if(!isset($_SESSION)){
    session_start();
}
include('../clases/conexion.php');
$hCodigo	= (isset($_REQUEST['hCodigo'])?$_REQUEST['hCodigo']:null);
$usuario	= (isset($_REQUEST['usuario'])?$_REQUEST['usuario']:null);
$clave  	= (isset($_REQUEST['clave'])?$_REQUEST['clave']:null); 

$user= 'Iniciar Sesión';
$dir = '#';

//CUANDO INICIE SESION YA NO PODRA TENER HABILITADO EL REGISTRARSE
if (isset($_REQUEST['btnIngresar']))
{
        $rol = 0;
		$sqlConsulta = "SELECT us.idusuario, per.idpersona, per.nombre, us.user, us.pass, us.idtipo, us.activo, us.cambio FROM tblusuario us INNER JOIN 
        tblpersona per ON per.idpersona = us.idpersona WHERE user ='$usuario' AND pass='$clave' AND activo!='0'";
		$resultado =  $bdConexion->ejecutarSql($sqlConsulta);
                    while($fila = mysqli_fetch_array($resultado))
                    {
                            $rol                 = $fila['idtipo'];
                            $idUsuario           = $fila['idusuario'];
                            $idPersona           = $fila['idpersona'];
                            $cambio              = $fila['cambio'];
                            $_SESSION['usuario'] = $usuario;
                            $_SESSION['id']      = $idUsuario;
                            $_SESSION['rol']     = $rol;
                            $_SESSION['persona'] = $idPersona;
                    }
                    if ($rol == 0){                        
                        print "<br><br><div class='container'>
                        <div class='alert alert-danger alert-dismissable'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>¡Error!</strong> Usuario y/o contraseña no son válidos.
                        </div>
                       </div>";

                    }else if($rol != 0){
                        
                        $sqlConsulta = "SELECT nombre FROM tblpersona WHERE idpersona =$idPersona";
            			$resultado =  $bdConexion->ejecutarSql($sqlConsulta);
            			while($fila = mysqli_fetch_array($resultado)){
            				$nombre = $fila['nombre'];
            				$_SESSION['nombre'] = $nombre;
            		    }

                        if (($rol == 1 || $rol == 2 || $rol == 3 || $rol == 4 || $rol == 5 || $rol == 6 || $rol == 7 || $rol == 8 || $rol == 9 
                        || $rol == 10 || $rol == 11 || $rol == 12 || $rol == 13) && $cambio != 0){

                                header("location:../index.php");

                        }else{
                            header("location:../forms/frmPrimerAcceso.php");
                        }
                    }

		
}//Fin de boton Registrar

?>
