<?php


include '../model/user.php';



if(isset($_POST['connection'])) // si le bouton "Connexion" est appuyé
{
    //var_dump($_POST);

    if (!empty ($_POST ['email']) && !empty ($_POST ['password']))// on vérifie que les champs ne sont pas vide
    {
        getUser($pdo, $data);
        header('Location: http://localhost/sujet-ecom.it-akademy-geovanni-olivier-/profile');
    exit();
    }
}

include '../view/signin_view.php';