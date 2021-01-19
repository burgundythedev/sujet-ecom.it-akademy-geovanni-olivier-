<?php

include '../model/user.php';

if(isset($_POST['add'])) {
    if (getItem($pdo, $_POST)){
        addItem($pdo, $_POST);
    };

}

include '../view/shop_view.php';