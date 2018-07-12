<?php
include('../clases/conexion.php');
$slcManual    = (isset($_REQUEST['slcManual'])?$_REQUEST['slcManual']:null);
$desac          = '';

if (isset($_REQUEST['btnSeleccionar'])){

    switch ($slcManual){

        case '1':
            //echo '<script type="text/javascript" language="Javascript">window.open("../pdf/politicas/La Chica 
            //del Tren.pdf");</script>';
            echo '<script type="text/javascript" language="Javascript">window.open("https://drive.google.com/file/d/1-Ep5H1Vv3e_bFaBt298BgGemHU43tUHY/view?usp=sharing");
            </script>'; 
            break;

        case '2':
            echo '<script type="text/javascript" language="Javascript">window.open("https://drive.google.com/file/d/18rYGA34BXstv_VTtLeBSJh9IIyiKnzxs/view?usp=sharing");
            </script>'; 
            break;

        case '3':
            echo '<script type="text/javascript" language="Javascript">window.open("https://drive.google.com/file/d/1gA-sySfqhuhSYD5ih-GUnMWEmSsxa0Py/view?usp=sharing");
            </script>'; 
            break;    

        case '4':
            echo '<script type="text/javascript" language="Javascript">window.open("https://drive.google.com/file/d/1m2IwKPlsi7dzu5VlXNve9z4P0C699pb6/view?usp=sharing");
            </script>'; 
            break;
            
        case '5':
            echo '<script type="text/javascript" language="Javascript">window.open("https://drive.google.com/file/d/1_f_HH03MZjcrv5qpamVu_BlwqtojKdhB/view?usp=sharing");
            </script>'; 
            break;
            
        case '6':
            echo '<script type="text/javascript" language="Javascript">window.open("https://drive.google.com/file/d/1KfevticR1SIK1SRIPNbW1vu0q4tzg6zQ/view?usp=sharing");
            </script>'; 
            break;    

        case '7':
            echo '<script type="text/javascript" language="Javascript">window.open("https://drive.google.com/file/d/1biajDDjj7MS30FHetjvYhAl74DxN7YFc/view?usp=sharing");
            </script>'; 
            break;

        case '8':
            echo '<script type="text/javascript" language="Javascript">window.open("https://drive.google.com/file/d/1W1RMi5b76tNxaDprbw0dCRMgoIsWFuhL/view?usp=sharing");
            </script>'; 
            break;

        default:
            break;

    }

}//Fin de boton Guardar

if ($_SESSION['usuario'] == 'Iniciar Sesión'){echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';}

?>