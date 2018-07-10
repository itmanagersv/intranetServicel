<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('../clases/sesion.php');
include ('../plantilla/plantilla.php');
include('../procesos/empleado.php');
include('../procesos/validarActivo.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header($rol);
$interfaz->body();
?>
<body>
<br>
<script Language="JavaScript">
        function validate(){
            var txt1 = document.getElementById("txtNombre").value;
            var txt2 = document.getElementById("txtDui").value;
            var txt3 = document.getElementById("txtNit").value;
            if(txt1=='' || txt2=='' || txt3==''){
                alert("Por favor completar los campos requeridos");
                return false;
            }
        }
</script>
<div class="container">
    <div class="row3">
        <br>
        <h3 class="text-center text-muted">
            <strong>NUEVO EMPLEADO</strong>
        </h3>
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form-wrap">
            <form  action="#" method="GET" name="frm" id="frm">
                <div class="input-group">
                    <input type="hidden" class="form-control" id="hCodigoEmpleado" name="hCodigoEmpleado" placeholder="Código" value="<?=$hCodigoEmpleado?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" required="true" value="<?=$txtNombre?>">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                    <input type="text" class="form-control dui" id="txtDui" name="txtDui" placeholder="Número de DUI sin guiones" required="true" value="<?=$txtDui?>">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                    <input type="text" class="form-control nit" id="txtNit" name="txtNit" placeholder="Número de NIT sin guiones" required="true" value="<?=$txtNit?>">
                </div>
                <div class="input-group">
                    <input type="hidden" class="form-control" id="hCodigo" name="hCodigo" placeholder="" readonly="true" value="<?=$hCodigo?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary btnGuardar" name="btnGuardar" <?=$desac?> onclick="return validate()">Guardar</button>
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