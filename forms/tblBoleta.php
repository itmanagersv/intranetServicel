<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ('../plantilla/plantilla.php');
include('../clases/sesion.php');
include('../procesos/validarAfk.php');
include('../procesos/subirBoleta.php');
include('../procesos/validarActivo.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header($rol);
$interfaz->body();
$desac = '';
if($rol != 1 || $rol != 2){
    $desac = 'disabled';
}
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br>
            <h3 class="text-center text-muted pull-left">
                <strong>VER BOLETAS DE PAGO</strong>
            </h3>   
            <table class="tbl">
                <tr>
                    <td>
                        <form action="frmBoleta.php" method="POST">
                            <?php 
                                if($rol == 1 || $rol == 2){
                                    print '<button type="submit" class="btn btn-primary pull-left">Agregar Boleta</button>';
                                }
                            ?>
                            
                            <input type="hidden" id="tabla" name="tabla" value="tblboleta">
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