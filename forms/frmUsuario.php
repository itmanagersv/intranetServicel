<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('../clases/sesion.php');
include ('../plantilla/plantilla.php');
include('../procesos/usuario.php');
include('../procesos/validarActivo.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header($rol);
$interfaz->body();
?>
<body>
<br>
<script Language="JavaScript">
        function validate(){
            var p1 = document.getElementById("txtpass").value;
            var p2 = document.getElementById("txtpass2").value;
            if(p1!=p2){
                alert("Las contraseñas no coinciden");
                return false;
            }
        }
</script>
<div class="container">
    <div class="row3">
        <br>
        <h3 class="text-center text-muted">
            <strong>MANTENIMIENTO A USUARIOS DE SISTEMA</strong>
        </h3>
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form-wrap">
            <form  action="#" method="GET" name="frm" id="frm">
                <div class="input-group">
                    <input type="hidden" class="form-control" id="idusuario" name="idusuario" readonly="true" value="<?=$hCodigo?>">
                </div>
                <div class="input-group">
                    <input type="hidden" class="form-control" id="idpersona" name="idpersona" readonly="true" value="<?=$idpersona?>">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="Empleado" readonly="true" value="<?=$txtnombre?>">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="txtuser" name="txtuser" placeholder="Nombre de usuario" readonly="true" value="<?=$txtuser?>">
                </div>
                <div class="input-group">
                    <input type="hidden" class="form-control" id="txtactivo" name="txtactivo" placeholder="" readonly="true" value="1">
                </div>
                <br>
                <div class="input-group" id="combobox">
                    <?php
                            $bdConexion->llenarSelect("slcTipo","SELECT idtipo, nombretipo FROM tbltipousuario ORDER BY idtipo ",$slcTipo,$tbl="tipo de usuario");
                    ?>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" id="txtpass" name="txtpass" placeholder="Contraseña" value="<?=$txtpass?>">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" id="txtpass2" name="txtpass2" placeholder="Confirmar contraseña" value="<?=$txtpass?>">
                </div>
                <div class="input-group">
                    <input type="hidden" class="form-control" id="hCodigo" name="hCodigo" placeholder="" readonly="true" value="<?=$hCodigo?>">
                </div>
                <br>
                    <button type="submit" class="btn btn-primary btnGuardar" name="btnGuardar" <?=$desac?> onclick="return validate()">Guardar</button>
                    <a href="../forms/tblUsuario.php" id="btnCancelar" class="btn btn-warning">Cancelar</a>    
            </form>
        </div>
    </div><!--Fin row3-->
</div><!--Fin Container-->
</body>
<?php
//$interfaz->footer();
?>
</html>