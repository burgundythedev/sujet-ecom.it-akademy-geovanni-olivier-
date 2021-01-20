<?php
include '../model/user.php';


$connected = false;

if(isset($_POST['connection'])){                                                                                                      // si le bouton "Connexion" est appuyé
    if (!empty ($_POST ['email']) && !empty ($_POST ['password'])) {                                      // on vérifie que les champs ne sont pas vide
        if ($clientInfo = getUser($pdo, $_POST)){
            $connected = true;
            $_SESSION ['first_name']= $clientInfo ['first_name'];
            $_SESSION ['last_name']= $clientInfo ['last_name'];
            $_SESSION ['email']= $clientInfo ['email'];
            $_SESSION ['phone']= $clientInfo ['phone'];
            $_SESSION ['id']= $clientInfo ['id'];
            header('Location: http://localhost/sujet-ecom.it-akademy-geovanni-olivier-/profile');
            exit();
        } else echo "Echec de connexion";
    }
    $_SESSION['connected'] = $connected;
    //var_dump($_SESSION['id']);
    if (isset($_SESSION['connected'])) {
        addOrder($pdo, $_SESSION['id']);
    }
}

include '../view/signin_view.php';