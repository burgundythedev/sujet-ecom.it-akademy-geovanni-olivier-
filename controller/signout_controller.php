<?php
session_start();
$_SESSION = array(); // permet de vider ttes les variables de la session
session_destroy();
header("Location: ../controller/signin_controller.php");
?>