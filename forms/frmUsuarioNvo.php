<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ('../plantilla/plantilla.php');
include('../clases/sesion.php');
include('../procesos/validarAfk.php');
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
            <strong>NUEVO USUARIO DE SISTEMA</strong>
        </h3>
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form-wrap">
            <form  action="#" method="GET" name="frm" id="frm">
                <div class="input-group" id="combobox">
                    <?php
                            $bdConexion->llenarSelect("idpersona","SELECT idpersona, nombre FROM tblpersona ORDER BY nombre",$idpersona,$tbl="un empleado");
                    ?>
                    <span class="input-group-addon" id="spanSearch" style=" padding:0px;">
                        <button type="button" class="fa fa-plus" style="margin:0px;height:32px; border-radius:0px 3px 3px 0px;" name="btnAgregarPersona" data-toggle="modal" data-target="#persona"> 
                        </button>
                    </span>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="txtuser" name="txtuser" placeholder="Nombre de usuario" value="<?=$txtuser?>">
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
                    <input type="password" class="form-control pass" id="txtpass" name="txtpass" placeholder="Contraseña" value="<?=$txtpass?>">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control pass" id="txtpass2" name="txtpass2" placeholder="Confirmar contraseña" value="<?=$txtpass?>">
                </div>
                <div class="input-group">
                    <input type="hidden" class="form-control" id="hCodigo" name="hCodigo" placeholder="" readonly="true" value="<?=$hCodigo?>">
                </div>
                <br>
                    <button type="submit" class="btn btn-primary btnGuardar" name="btnGuardar" <?=$desac?> onclick="return validate()">Guardar</button>
                    <a href="../forms/tblUsuario.php" id="btnCancelar" class="btn btn-warning">Cancelar</a>
                    <input type="hidden" id="accion" name="accion" value="insert" >  
            </form>
        </div>

        <div class="modal fade" id="persona" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog"  id="modal-dialog">
                        <div class="panel panel-primary" id="panel-primary">
                            <div class="panel-heading" id="panel-heading" >
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="panel-title" id="contactLabel">Servicel</h4>
                            </div>
                            <!--Formulario-->
                            <form action="frmUsuarioNvo.php" method="GET">
                                <div class="modal-body" id="modalBody">               
                                    <h3><strong>EMPLEADO</strong></h3>
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
                                    <input type="text" class="form-control dui" id="txtDui" name="txtDui" placeholder="DUI" required="true" value="<?=$txtDui?>">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                                    <input type="text" class="form-control nit" id="txtNit" name="txtNit" placeholder="NIT" required="true" value="<?=$txtNit?>">
                                </div>
                                <div class="input-group">
                                    <input type="hidden" class="form-control" id="hCodigo" name="hCodigo" placeholder="" readonly="true" value="<?=$hCodigo?>">
                                </div>
                                <br>
                                <div id="botones">
                                    <button type="submit" class="btn btn-primary" name="btnGuardarEmpleado">Guardar</button>
                                    <a href="" data-dismiss="modal" id="btnCancelar" class="btn btn-warning">Cancelar</a>
                                    <input type="hidden" id="accion" name="accion" value="<?=$accion?>">
                                </div>
                                <div class="col-md-2" >
                                </div>           
                            </form>          
                        </div>
                    </div>
                </div><!--End Modal persona--> 

    </div><!--Fin row3-->
</div><!--Fin Container-->
</body>
<?php
//$interfaz->footer();
?>
</html>