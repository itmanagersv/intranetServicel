<!DOCTYPE html>
<html lang="en">
<?php
include ('../plantilla/plantillaLogin.php');
include('../procesos/acceder.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header();
$interfaz->body();
?>
<body>
<br>
<div class="container_formLuis">
<div class="row3">
    <br>
    <h3 class="text-center text-muted" id="heading">
                <strong>INICIAR SESIÓN</strong>
    </h3>
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form-wrap">
        <form  id="frmLogin" action="#" method="POST">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="hidden" id="hCodigo" name="hCodigo" value="<?=$hCodigo?>">
                <input type="text" class="form-control" id="usuario" name="usuario"  placeholder="Usuario" required="true" value="<?=$usuario?>" autocomplete="off" autofocus>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="password" class="form-control" id="clave" name="clave"  placeholder="Clave" required="true" value="<?=$clave?>" autocomplete="off">
            </div>
            <br>
            <br>
                <button type="submit" class="btn btn-primary" name="btnIngresar">Ingresar</button>
        </form>
    </div>
</div><!--Fin row3-->
</div><!--Fin Container-->
</body>
</html>