<?php
if (isset($_SESSION['userid'])) {

    session_start();
    session_destroy();
    header("Location:/RMS/login.php");
}
?>
