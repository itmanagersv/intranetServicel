<?php

if ((isset($_SESSION['nombre'])) && (isset($_SESSION['id'])) && (isset($_SESSION['rol'])) && (isset($_SESSION['persona']))) {
    $rol	= $_SESSION['rol'];
    $idusuario = $_SESSION['id'];
    $user = $_SESSION['nombre'];
    $idPersona = $_SESSION['persona'];
    $dir = 'index.php';

}else{
	$rol = 0;
    $user = 'Iniciar Sesión';
    $_SESSION['usuario'] = $user;
    $dir = 'forms/frmLogin.php';
}

?>