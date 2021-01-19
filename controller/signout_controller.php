<?php
session_start();

if isset($_POST['signout']){
$_SESSION = array(); // permet de vider ttes les variables de la session
session_destroy();
header("Location: http://localhost/sujet-ecom.it-akademy-geovanni-olivier-/signin");
}
?>