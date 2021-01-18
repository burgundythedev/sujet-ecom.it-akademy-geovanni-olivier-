<?php

include '../model/user.php';
 
if(isset($_GET['id']) AND $_GET['id'] > 0) {}

getUserId($pdo);

include '../view/profile_view.php';

