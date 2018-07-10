<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('../clases/sesion.php');
include ('../plantilla/plantilla.php');
include('../procesos/nvoMaterial.php');
include('../procesos/validarActivo.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header($rol);
$interfaz->body();
?>
<body>
<br>
<script Language="JavaScript">
        function validate(){
            var txt1 = document.getElementById("txtMaterial").value;
            var txt2 = document.getElementById("txtStock").value;
            if(txt1=='' || txt2==''){
                alert("Por favor completar los campos requeridos");
                return false;
            }
        }
</script>
<div class="container">
    <div class="row3">
        <br>
        <h3 class="text-center text-muted">
            <strong>SUPLEMENTOS DE OFICINA</strong>
        </h3>
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form-wrap">
            <form  action="#" method="GET" name="frm" id="frm">
                <div class="input-group">
                    <input type="hidden" class="form-control" id="hCodigo" name="hCodigo" placeholder="Código" value="<?=$hCodigo?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="txtMaterial" name="txtMaterial" placeholder="Nombre del material" required="true" value="<?=$txtMaterial?>">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                    <input type="number" class="form-control dui" id="txtStock" name="txtStock" min="1" max="100" required="true" value="<?=$txtStock?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary btnGuardar" name="btnGuardar" <?=$desac?> onclick="return validate()">Guardar</button>
                <a href="../forms/tblMaterial.php" id="btnCancelar" class="btn btn-warning">Cancelar</a>
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