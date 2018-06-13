<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ('../plantilla/plantilla.php');
include('../clases/sesion.php');
include('../procesos/slcManual.php');
include('../procesos/validarActivo.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header($rol);
$interfaz->body();
?>
<body>
<br>
<script Language="JavaScript">
        function validate(){
            var cmb1 = document.getElementById("slcManual").value;
            if(cmb1==0){
                alert("Por favor seleccionar manual a visualizar");
                return false;
            }
        }
</script>
<div class="container">
    <div class="row3">
        <br>
        <h3 class="text-center text-muted">
            <strong>SELECCIÓN DE MANUAL</strong>
        </h3>
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form-wrap">
            <form  action="#" method="GET" name="frm" id="frm">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <select name="slcManual" id="slcManual" class="form-control">
					    <option value="0">Selecccionar manual a visualizar</option>
                        <option value="1">Manual de envió de repuestos malos SAMSUNG</option>
                        <option value="2">Proceso de compra General SV</option>
                        <option value="3">Proceso de compras marca Huawei</option>
                        <option value="4">Proceso ingreso de clientes por atencion al cliente en  CYS</option>
                        <option value="5">Proceso tecnico para etiquetar repuestos malos Samsung</option>

                    </select>
                </div>
                <br>
                    <button type="submit" class="btn btn-primary btnGuardar" name="btnSeleccionar" onclick="return validate()">Seleccionar</button>
                    <a href="../index.php" id="btnCancelar" class="btn btn-warning">Cancelar</a>    
            </form>
        </div>
    </div><!--Fin row3-->
</div><!--Fin Container-->
</body>
</html>