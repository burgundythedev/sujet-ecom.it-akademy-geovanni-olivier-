<?php


include '../model/user.php';



if(isset($_POST['connection'])) // si le bouton "Connexion" est appuyé
{
    //var_dump($_POST);

    if (!empty ($_POST ['email']) && !empty ($_POST ['password']) && (password_verify($_POST['password'], $passwordHash)))// on vérifie que les champs ne sont pas vide
    {
        getUser();
        header('Location: ../controller/profile_controller.php');
    exit();
    }
}

include '../view/signin_view.php';