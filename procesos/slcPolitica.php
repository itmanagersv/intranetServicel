<?php
include('../clases/conexion.php');
$slcPolitica    = (isset($_REQUEST['slcPolitica'])?$_REQUEST['slcPolitica']:null);
$desac          = '';

if (isset($_REQUEST['btnSeleccionar'])){

    switch ($slcPolitica){

        case '1':

            echo '<script type="text/javascript" language="Javascript">window.open("https://drive.google.com/file/d/1gaEQ__jNJHjK4n9qeYg1Dml3VEYkHgZf/view?usp=sharing");
            </script>'; 
           break;

        case '2':

            echo '<script type="text/javascript" language="Javascript">window.open("https://drive.google.com/file/d/1zyHZxmrcWLWBkSXOAqgSSdhDm-t_c9Gw/view?usp=sharing");
            </script>'; 
            break;

        case '3':

            echo '<script type="text/javascript" language="Javascript">window.open("https://drive.google.com/file/d/1_xRsxcqmZPdIrrX9S9heS8CTZAhpoGum/view?usp=sharing");
            </script>'; 
            break;    

        default:
            break;

    }

}//Fin de boton Guardar

if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>