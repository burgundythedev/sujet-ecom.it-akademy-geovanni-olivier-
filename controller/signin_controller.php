<?php

include '../model/user.php';

if(isset($_POST['email'])) {
    getUser($pdo,$id);
   
}
include '../view/signin_view.php';
