<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ('../plantilla/plantilla.php');
include('../clases/sesion.php');
include('../procesos/material.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header();
$interfaz->body();
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br>
            <h3 class="text-center text-muted pull-left">
                <strong>RESUMEN DE SOLICITUDES (SUPLEMENTOS DE OFICINA)</strong>
            </h3>
            <table class="tbl">
                <tr>
                    <td>
                        <form action="frmSolSup.php" method="GET" >
                            <button type="submit" class="btn btn-primary pull-left">Crear Solicitud</button>
                            <input type="hidden" id="tabla" name="tabla" value="tblsolsuplemento">
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