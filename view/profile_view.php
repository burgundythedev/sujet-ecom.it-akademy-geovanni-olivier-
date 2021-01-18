
    <div>
         <h2>Profil de <?php echo $clientinfo['last_name']; ?></h2>
         <br /><br />
         Fisrtname = <?php echo $clientinfo['fisrt_name']; ?>
         <br />
         Mail = <?php echo $clientinfo['mail']; ?>
         <br />
         Tel = <?php echo $clientinfo['phone']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="edit_profile.php">Modifier votre profil</a>
         <a href="signout.php">Se déconnecter</a>
         <?php
         }
         ?>
     </div>
     