<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ('../plantilla/plantilla.php');
include('../clases/sesion.php');
include('../procesos/subirboleta.php');
include('../procesos/validarActivo.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header($rol);
$interfaz->body();
?>
<body>
<br>
<div class="container">
    <div class="row3">
        <br>
        <h3 class="text-center text-muted">
            <strong>SUBIR BOLETA DE PAGO</strong>
        </h3>
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form-wrap">
            <form  action="#" method="POST" name="frm" id="frm" enctype="multipart/form-data">
                <div class="input-group" style="width: 100%;">
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <br>
                <div class="input-group" id="combobox">
                    <?php
                            $bdConexion->llenarSelect("slcEmpleado","SELECT idpersona, nombre FROM tblpersona ORDER BY nombre ",$slcEmpleado,$tbl="empleado");
                    ?>
                </div>
                <br>
                <div class="input-group" id="combobox">
                    <?php
                            $bdConexion->llenarSelect("slcMes","SELECT idmes, mes FROM tblmes ORDER BY idmes ",$slcMes,$tbl="mes");
                    ?>
                </div>
                <br>
                <label for="txtQuincena">Quincena</label>
                <div class="input-group" style="width: 100%;">
                    <input type="number" class="form-control quincena" id="txtQuincena" name="txtQuincena" required="true" min="1" max="2" maxlength="1">
                </div>
                <br>
                <label for="txtQuincena">Año</label>
                <div class="input-group" style="width: 100%;">
                    <input type="number" class="form-control anyo" id="txtAnyo" name="txtAnyo" required="true" min="2018" max="2030" maxlength="4">
                </div>
                <br>
                    <button type="submit" class="btn btn-primary btnGuardar" name="btnGuardar">Guardar</button>
                    <a href="../index.php" id="btnCancelar" class="btn btn-warning">Cancelar</a>
                    <input type="hidden" id="accion" name="accion" value="<?=$accion?>" > 
            </form>
        </div>
    </div><!--Fin row3-->
</div><!--Fin Container-->
</body>
<?php
//$interfaz->footer();
?>
</html>