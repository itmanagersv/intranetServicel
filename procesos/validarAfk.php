<?php
// 2 hours in seconds
$inactive = 900; 
ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours

//session_start();

if (isset($_SESSION['nombre']) && (time() - $_SESSION['nombre'] > $inactive)) {
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
}
$_SESSION['nombre'] = time(); // Update session
?>