<?php
$sqlConsulta = "SELECT us.idusuario, per.idpersona, per.nombre, us.user, us.pass, us.idtipo, us.activo FROM tblusuario us INNER JOIN 
tblpersona per ON per.idpersona = us.idpersona WHERE nombre ='$user' AND activo!='0'";
$rsMostrar =  $bdConexion->ejecutarSql($sqlConsulta);
$fila = mysqli_fetch_array($rsMostrar);
$activo = $fila["activo"];
            if ($activo == 0 ){
                session_destroy();                        
                header("location:../forms/frmLogin.php");
            }
?>