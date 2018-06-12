<?php

$usuario	= (isset($_REQUEST['usuario'])?$_REQUEST['usuario']:null);
$clave  	= (isset($_REQUEST['clave'])?$_REQUEST['clave']:null); 


//CUANDO INICIE SESION YA NO PODRA TENER HABILITADO EL REGISTRARSE
if (isset($_REQUEST['btnIngresar']))
{
		$sqlConsulta = "SELECT us.idusuario, per.idpersona, per.nombre, us.user, us.pass, us.idtipo, us.activo FROM tblusuario us INNER JOIN 
        tblpersona per ON per.idpersona = us.idpersona WHERE nombre ='$user' AND activo!='0' AND cambio!='0'";
        $rsMostrar =  $bdConexion->ejecutarSql($sqlConsulta);
        $fila = mysqli_fetch_array($rsMostrar);
        $cambio = $fila["cambio"];
                    if ($cambio != 0 )
                    {                        
                        header("location:acceder.php");
                    }else{
                        header("location:../forms/frmPrimerAcceso.php");
                    }
}//Fin de boton Registrar

?>
