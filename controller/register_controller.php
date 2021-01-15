<?php

include '../model/user.php';

if(isset($_POST['validation'])) {

    echo 'welcome';
    //var_dump($_POST);
    //addUser($pdo, $_POST);
}
include '../view/register_view.php';