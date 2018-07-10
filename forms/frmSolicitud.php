<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('../clases/sesion.php');
include ('../plantilla/plantilla.php');
include('../procesos/solicitud.php');
include('../procesos/validarActivo.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header($rol);
$interfaz->body();
?>
<body>
<script Language="JavaScript">
        function validate(){
            var cmb1 = document.getElementById("slcTipo").value;
            var cmb2 = document.getElementById("slcMotivo").value;
            if(cmb1==0 || cmb2==0){
                alert("Por favor completar los campos requeridos");
                return false;
            }
        }
</script>
<br>
<div class="container">
    <div class="row3">
        <br>
        <h3 class="text-center text-muted">
            <strong>SOLICITUD DE DOCUMENTO</strong>
            <!--OJO no colocar span a inputs hidden-->
        </h3>
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form-wrap">
            <form  action="#" method="GET" name="frm" id="frm">
                <div class="input-group" id="combobox">
                    <?php
                            $bdConexion->llenarText("idPersona","SELECT per.idpersona FROM tblusuario us INNER JOIN 
                            tblpersona per ON per.idpersona = us.idpersona WHERE nombre = '$user'");
                    ?>
                </div>
                <br>
                <div class="input-group">
                    <input type="hidden" class="form-control" id="txtestado" name="txtestado" placeholder="" readonly="true" value="1">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="nombrePersona" name="nombrePersona" placeholder="" readonly="true" value="<?=$user?>">
                </div>
                <br>
                <div class="input-group" id="combobox">
                    <?php
                            $bdConexion->llenarSelect("slcTipo","SELECT idTipo, nombreTipo FROM tbltiposolicitud ORDER BY nombreTipo ",$slcTipo,$tbl="tipo de solicitud");
                    ?>
                </div>
                <br>
                <div class="input-group" id="combobox">
                    <?php
                            $bdConexion->llenarSelect("slcMotivo","SELECT idmotivo, motivo FROM tblmotivo ORDER BY motivo ",$slcMotivo,$tbl="motivo de la solicitud");
                    ?>
                </div>
                <div class="input-group">
                    <input type="hidden" class="form-control" id="txtFecha" name="txtFecha"  placeholder="Fecha" required="true" readonly="true" value="<?=date("Y-m-d")?>">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                    <input type="textarea" class="form-control" id="txtComentario" name="txtComentario"  placeholder="Comentario" required="false" value="<?=$txtComentario?>">
                </div>
                <div class="input-group">
                    <input type="hidden" class="form-control" id="hCodigo" name="hCodigo" placeholder="" readonly="true" value="<?=$hCodigo?>">
                </div>
                <br>
                    <button type="submit" class="btn btn-primary btnGuardar" name="btnGuardar" <?=$desac?> onclick="validate()">Guardar</button>
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