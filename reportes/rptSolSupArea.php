<?php

include("../clases/conexion.php");
session_start();
include('../clases/sesion.php');
include ('../plantilla/plantilla.php');
$interfaz = new plantilla($user,$dir);
$interfaz->header($rol);
$interfaz->body();

date_default_timezone_set("America/El_Salvador");

$slcMes	    =	(isset($_REQUEST['slcMes'])?$_REQUEST['slcMes']:null);
$slcAnyo	=	(isset($_REQUEST['slcAnyo'])?$_REQUEST['slcAnyo']:null);
$impMes = null;

switch ($slcMes) {
	case '1':
		$impMes = 'Enero';
		break;

	case '2':
		$impMes = 'Febrero';
		break;

	case '3':
		$impMes = 'Marzo';
		break;

	case '4':
		$impMes = 'Abril';
		break;

	case '5':
		$impMes = 'Mayo';
		break;

	case '6':
		$impMes = 'Junio';
		break;

	case '7':
		$impMes = 'Julio';
		break;

	case '8':
		$impMes = 'Agosto';
		break;

	case '9':
		$impMes = 'Septiembre';
		break;

	case '10':
		$impMes = 'Octubre';
		break;

	case '11':
		$impMes = 'Noviembre';
		break;

	case '12':
		$impMes = 'Diciembre';
        break;
        
    case '12':
		$impMes = 'Anual';
		break;
	
	default:
		$impMes = null;
		break;
}


$sql = "SELECT tus.nombretipo AS 'Área', mat.material AS 'Material', SUM(sup.cantidad) AS 'Acumulado' 
FROM tblsolsuplemento sup INNER JOIN tbltipousuario tus  ON sup.idtipo = tus.idtipo INNER JOIN tblmaterial mat 
ON mat.idmaterial = sup.idmaterial WHERE MONTH(sup.fecha) = ".$slcMes." AND YEAR(sup.fecha) = ".$slcAnyo." GROUP BY 
sup.idmaterial";

$rsMostrar = $bdConexion->ejecutarSQL($sql);
?>
<body onload="window.print();">
<br><br>
<div class="container">
	<table id="example" align="center" class="table table-striped table-bordered">
	<tr>
		<td>
			<div>
				<center>
					<img src="../img/svg/logo.jpg" height="60%" width="225">
				</center>
			</div>
		</td>
		<td>
			<?php
				echo "<center><h3><strong>Solicitudes de suplementos de oficina del mes de $impMes de $slcAnyo</strong></h3></center>";
			?>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div style="float: left; font-family: arial;">
                            Generado:<?=date("d/M/Y")?><br>
			</div>
                        <div style="float: right;">
                                <?php $time = time(); echo date("g:i a", $time)?>
			</div>
			<table id="example" align="center" class="table table-striped table-bordered">
				<tr align="center">
					<th scope="col"><center><strong>Área</strong></center></th>
                    <th scope="col"><center><strong>Material</strong></center></th>
                    <th scope="col"><center><strong>Acumulado</strong></center></th>
				</tr>
				<?php
				while ($detalle = mysqli_fetch_array($rsMostrar)) 
				{
					print "
					<tr>
						<td align='center'>".$detalle['Área']."</td>
                        <td align='center'>".$detalle['Material']."</td>
                        <td align='center'>".$detalle['Acumulado']."</td>
					</tr>";
				}
				?>
			</table>
		</td>
	</tr>
	</table>
	</div>
</body>
</html>