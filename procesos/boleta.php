<?php
include('../clases/conexion.php');

$hCodigo        = (isset($_REQUEST['hCodigo'])?$_REQUEST['hCodigo']:null);
$accion         = (isset($_REQUEST['accion'])?$_REQUEST['accion']:'insert');
$slcEmpleado    = (isset($_REQUEST['slcEmpleado'])?$_REQUEST['slcEmpleado']:null);
$slcMes         = (isset($_REQUEST['slcMes'])?$_REQUEST['slcMes']:null);
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
        if($fileError === 0){
            if($filesize < 1000000){
                $fileNameNew = $slcEmpleado.$slcMes.$txtAnyo.".".$fileActualExt;
                $fileUrl = '..img/boletas/';
                $fileDestination = $fileUrl.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: ../index.php?uploadsuccess");
            } else {
                print 'El archivo es demasiado grande';
            }
        } else {
            print 'Ocurrió un error al subir el archivo';
        }
    } else {
        print 'Formato de archivos no permitido';
    }
}
?>