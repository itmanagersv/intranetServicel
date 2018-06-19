<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('../clases/sesion.php');
include('../procesos/validarAfk.php');
include ('../plantilla/plantillaLogin.php');
include('../procesos/primerAcceso.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header($rol);
$interfaz->body();
?>
<body>
<script Language="JavaScript">
        function validate(){
            var pass = document.getElementById("txtpass").value;
            var pass2 = document.getElementById("txtpass2").value;
            if(pass==0 || pass2==0){
                alert("Por favor completar los campos requeridos");
                return false;
            }
            if(pass != pass2){
                alert("La contraseñas no coinciden");
                return false;
            }
        }
</script>
<br>
<div class="container">
    <div class="row3">
        <br>
        <h3 class="text-center text-muted">
            <strong>CAMBIO DE CONTRASEÑA</strong>
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
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="nombrePersona" name="nombrePersona" placeholder="" readonly="true" value="<?=$user?>">
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
                <br>
                    <button type="submit" class="btn btn-primary btnGuardar" name="btnGuardar" onclick="return validate()">Guardar</button>
            </form>
        </div>
    </div><!--Fin row3-->
</div><!--Fin Container-->
</body>
<?php
//$interfaz->footer();
?>
</html>