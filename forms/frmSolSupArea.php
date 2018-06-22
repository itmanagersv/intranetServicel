<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ('../plantilla/plantilla.php');
include('../clases/sesion.php');
include('../procesos/validarAfk.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header($rol);
$interfaz->body();
?>
<body>
<br>
<script Language="JavaScript">
        function validate(){
            var cmb1 = document.getElementById("slcMes").value;
            var cmb2 = document.getElementById("slcAnyo").value;
            if(cmb1==0 || cmb2==0){
                alert("Por favor seleccionar un tipo de reporte a generar");
                return false;
            }
        }
</script>
<div class="container">
    <div class="row3">
        <br>
        <h3 class="text-center text-muted">
            <strong>PARÁMETROS DE REPORTE</strong>
        </h3>
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form-wrap">
            <form  action="../reportes/rptSolSupArea.php" method="GET" name="frm" id="frm">
                <div class="input-group">
                    <span class="input-group-addon"><i class=" fa fa-calendar"></i></span>
                    <select name="slcMes" id="slcMes" class="form-control">
					    <option value="0">Selecccionar un mes</option>
                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                        <option value="13">Anual</option>
                    </select>
                </div>

                <br>

                <div class="input-group">
                    <span class="input-group-addon"><i class=" fa fa-calendar"></i></span>
                    <select name="slcAnyo" id="slcAnyo" class="form-control">
					    <option value="0">Selecccionar un año</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>

                <br>
                    <button type="submit" class="btn btn-primary btnGuardar" name="btnGenerar" onclick="return validate()">Generar</button>
                    <a href="../index.php" id="btnCancelar" class="btn btn-warning">Cancelar</a>    
            </form>
        </div>
    </div><!--Fin row3-->
</div><!--Fin Container-->
</body>
</html>