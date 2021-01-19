<?php
if(isset($_SESSION['email'])) {
     echo 'Profil de '.$_SESSION['first_name']." ".$_SESSION['last_name']." <br><br>";
     echo 'Téléphone: '.$_SESSION['phone']." <br><br>";
     echo 'E-mail: '.$_SESSION['email']." <br><br>";
}
?>
    <div>
         <a href="edit_profile.php">Modifier votre profil</a>
         <br>
         <br>
         <a href="signout.php">Se déconnecter</a>
    </div>
     