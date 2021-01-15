<?php

include '../model/user.php';
$url = '../view/signin_view.php';
if(isset($_POST['first_name'])) {
    addUser($pdo, $_POST);
    header('Location: http://localhost/sujet-ecom.it-akademy-geovanni-olivier-/signin');
    exit();
}
include '../view/register_view.php';
