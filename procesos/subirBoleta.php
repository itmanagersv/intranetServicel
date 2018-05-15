<?php
include('../clases/conexion.php');

$hCodigo        = (isset($_REQUEST['hCodigo'])?$_REQUEST['hCodigo']:null);
$accion         = (isset($_REQUEST['accion'])?$_REQUEST['accion']:'insert');
$txtEmpleado    = (isset($_REQUEST['txtEmpleado'])?$_REQUEST['txtEmpleado']:null);
$slcEmpleado    = (isset($_REQUEST['slcEmpleado'])?$_REQUEST['slcEmpleado']:null);
$slcMes         = (isset($_REQUEST['slcMes'])?$_REQUEST['slcMes']:null);
$txtQuincena    = (isset($_REQUEST['txtQuincena'])?$_REQUEST['txtQuincena']:null);
$txtAnyo        = (isset($_REQUEST['txtAnyo'])?$_REQUEST['txtAnyo']:null);
$desac          = '';

if (isset($_POST['btnGuardar'])){
    
    $file = $_FILES['file'];
    $fileName= $_FILES['file']['name'];
    $fileTmpName= $_FILES['file']['tmp_name'];
    $fileSize= $_FILES['file']['size'];
    $fileError= $_FILES['file']['error'];
    $fileType= $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    //strtolower convierte el string a lowercase, end toma el último index de un arreglo.
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');


    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if ($fileSize < 1000000){
                if ($accion=='insert'){
                    $fileNameNew = "E".$slcEmpleado."-M".$slcMes.$txtQuincena."-A".$txtAnyo.".".$fileActualExt;
                    $fileUrl = '../img/boletas/';
                    $fileDestination = $fileUrl.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    ///////////////////////////////////////////////////
                    $tabla      = "tblboleta";
                    $campos     = "idpersona, boleta, nombreBoleta, tipo, idmes, quincena, anyo";
                    $valores    = "$slcEmpleado, '{$fileDestination}', '{$fileNameNew}', '{$fileType}', '$slcMes', '$txtQuincena', '$txtAnyo'";
                    $resultado  = $bdConexion->insertarDB($tabla,$campos,$valores);
                    $hCodigo = $bdConexion->retornarId();
                    print $fileName;
                    if ($resultado==1){
                        $desac = 'disabled';
                        print "<br><br><div class='container'>
                                    <div class='alert alert-success alert-dismissable'>
                                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                        <strong>¡Éxito!</strong> Registro guardado de forma exitosa.
                                    </div>
                                    </div>";
                                    //header("Location: ../index.php?uploadsuccess");
                    }
                }
            } else {
                print 'El archivo es demasiado grande';
            }
        } else {
            print 'Ocurrió un error al subir el archivo';
        }
    } else {
        print 'Formato de archivos no permitido';
    }
}//Fin de boton Guardar

if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>