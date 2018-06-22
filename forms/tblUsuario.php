<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ('../plantilla/plantilla.php');
include('../clases/sesion.php');
include('../procesos/usuario.php');
include('../procesos/validarActivo.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header($rol);
$interfaz->body();
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br>
            <h3 class="text-center text-muted pull-left">
                <strong>MANTENIMIENTO A USUARIOS DEL SISTEMA</strong>
            </h3>
            <table class="tbl">
                <tr>
                    <td>
                        <form action="frmUsuarioNvo.php" method="GET">
                            <button type="submit" class="btn btn-primary pull-left">Agregar Usuario</button>
                            <input type="hidden" id="tabla" name="tabla" value="tblusuario">
                            <input type="hidden" id="id" value="0">
                        </form>
                    </td>
                </tr>
            </table>
            <article id="contenido"></article>
        </div><!--Fin col-md-12-->
    </div><!--Fin row-->   
</div><!--Fin Container-->
<?php  
$bdConexion->desconectar();
?>
</body>
</html>