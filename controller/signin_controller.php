<?php
include '../model/user.php';

if(isset($_POST['connection'])){                                                                        // si le bouton "Connexion" est appuyé
    if (!empty ($_POST ['email']) && !empty ($_POST ['password'])) {                                    // on vérifie que les champs ne sont pas vide
        if ($clientInfo = getUser($pdo, $_POST)){
            $_SESSION ['first_name']= $clientInfo ['first_name'];
            $_SESSION ['last_name']= $clientInfo ['last_name'];
            $_SESSION ['email']= $clientInfo ['email'];
            $_SESSION ['phone']= $clientInfo ['phone'];
            header('Location: http://localhost/sujet-ecom.it-akademy-geovanni-olivier-/profile');
            exit();
            //var_dump($clientInfo);
        } else echo "Echec de connexion";
    } 
}

include '../view/signin_view.php';