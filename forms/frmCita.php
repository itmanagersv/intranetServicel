<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('../clases/sesion.php');
include ('../plantilla/plantilla.php');
include('../procesos/cita.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header($rol);
$interfaz->body();
?>
<body>
<br>
<script Language="JavaScript">
        function validate(){
            var cmb1 = document.getElementById("slcHora").value;
            var txt1 = document.getElementById("txtFechaCita").value;
            if(cmb1==0 || txt1==''){
                alert("Por favor completar los campos requeridos");
                return false;
            }
        }
</script>
<div class="container">
    <div class="row3">
        <br>
        <h3 class="text-center text-muted">
            <strong>PROGRAMACIÓN DE CITA CON RECURSOS HUMANOS</strong>
        </h3>
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form-wrap">
            <form  action="#" method="GET" name="frm" id="frm">
                <div class="input-group" id="combobox">
                    <?php
                            $bdConexion->llenarText("idPersona","SELECT per.idpersona FROM tblusuario us INNER JOIN 
                            tblpersona per ON per.idpersona = us.idpersona WHERE nombre = '$user'");
                    ?>
                </div>
                <div class="input-group">
                    <input type="hidden" class="form-control" id="txtestado" name="txtestado" placeholder="" readonly="true" value="1">
                </div>
                <div class="input-group">
                    <input type="hidden" class="form-control" id="txtvisible" name="txtvisible" placeholder="" readonly="true" value="1">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="nombrePersona" name="nombrePersona" placeholder="" readonly="true" value="<?=$user?>">
                </div>
                <div class="input-group">
                    <input type="hidden" class="form-control" id="txtFechaSol" name="txtFechaSol"  placeholder="Fecha" required="true" readonly="true" value="<?=date("Y-m-d")?>">
                </div>
                <br>
                <div class="input-group date al-date" data-provide="datepicker">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control" id="txtFechaCita" name="txtFechaCita"  min="<?=date("Y-m-d")?>" required="true" readonly="true" placeholder="Seleccione una fecha">
                </div>
                <br>
                <div class="input-group" id="combobox">
                    <?php
                            $bdConexion->llenarSelect("slcHora","SELECT idHora, hora FROM tblhora ORDER BY idhora ",$slcHora,$tbl="hora de cita");
                    ?>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                    <input type="textarea" class="form-control" id="txtComentario" name="txtComentario"  placeholder="Comentario" required="false" placeholder="Comentario">
                </div>
                <div class="input-group">
                    <input type="hidden" class="form-control" id="hCodigo" name="hCodigo" placeholder="" readonly="true" value="<?=$hCodigo?>">
                </div>
                <br>
                    <button type="submit" class="btn btn-primary btnGuardar" name="btnGuardar" <?=$desac?> onclick="return validate()">Guardar</button>
                    <a href="../index.php" id="btnCancelar" class="btn btn-warning">Cancelar</a>    
            </form>
        </div>
    </div><!--Fin row3-->
</div><!--Fin Container-->
</body>
<?php
//$interfaz->footer();
?>
</html>