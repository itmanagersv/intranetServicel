<?php
session_start();
session_destroy();
echo '<script type="text/javascript">javascript:window.location="../index.php"</script>';
?>