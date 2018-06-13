<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    include('clases/sesion.php');
    include ('plantilla/plantillaIndex.php');
    $interfaz = new plantilla($user,$dir);
    $interfaz->header();
    $interfaz->body($rol);
    $interfaz->footer();
    print 'server';
?> 

</html>