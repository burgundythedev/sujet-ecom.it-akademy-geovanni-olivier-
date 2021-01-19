<?php

include '../model/user.php';

if(isset($_POST['first_name'])) {
    var_dump(addUser($pdo, $_POST));
    header('Location: http://localhost/sujet-ecom.it-akademy-geovanni-olivier-/aftregisterlogin');
    exit();
    
}
include '../view/register_view.php';
