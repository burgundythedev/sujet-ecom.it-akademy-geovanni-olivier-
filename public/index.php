<?php
// Database connection : $pdo
include_once '../pdo_connection.php';

include '../layout/header.php';

// Manage query strings
$slug =  explode('?', $_SERVER['REQUEST_URI'])[0];

// Router
switch ($slug) {
    // url
    case "/sujet-ecom.it-akademy-geovanni-olivier-/":
        include '../controller/home_controller.php';
        break;
    case '/sujet-ecom.it-akademy-geovanni-olivier-/signin':
        include '../controller/signin_controller.php';
        break;
    case '/sujet-ecom.it-akademy-geovanni-olivier-/register':
        include '../controller/register_controller.php';
        break;
    case '/sujet-ecom.it-akademy-geovanni-olivier-/profile':
        include '../controller/profile_controller.php';
        break;
    default:
        include "../controller/404_controller.php";
        break;
}

include '../layout/footer.php';

?>

