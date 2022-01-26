<?php

    session_start();

    if(!isset($_SESSION['email_verif']) || !isset($_SESSION['mdp_verif'])){
        $_SESSION['email_verif'] = '';
        $_SESSION['mdp_verif'] = '';
    }

    if(!isset($_SESSION['email_exist'])){
        $_SESSION['email_exist'] = '';
    }

    if($_SESSION['email_verif'] == 1 && $_SESSION['mdp_verif'] == 1){
        header('Location: ../index.php');
    }

    if(!isset($_SESSION['no_email'])){
        $_SESSION['no_email'] = '';
    }

    if(!isset($_SESSION['verif'])){
        $_SESSION['verif'] = 0;
    }

    if($_SESSION['verif'] == 1){
        header('Location: ../index.php');
    }

?>

<!DOCTYPE html>

<head>
    
    <title>Connexion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

<div id="blocConnexion">
<div id="boxGauche"></div>
<div id="boxDroite">
<div id="titleLien">
<h1>Connexion</h1>
<a href="inscription.php">Cliquer ici pour s'inscrire</a>
</div>
<div id="coordonnees">
<form method="get" action="connexion_back.php">

Entrez votre adresse e-mail : <br>
<input type="text" name="email" required><br>

<br>

Entrez votre MdP : <br>
<input type="text" name="mdp" required><br>

<?php
    if($_SESSION['email_verif'] == 0 || $_SESSION['mdp_verif'] == 0){
        echo 'adresse e-mail ou mot de passe incorrect<br>';
    }

    if($_SESSION['no_email'] == 1){
        echo 'Veuillez entrer une adresse email valide<br>';
    }
?>

<br>

<input type="submit" value="continuer">
</div>

</form>

<?php

if($_SESSION['email_exist'] == 0){
    echo 'Inscription réussite !<br><br>';
}

?>
</div>
</div>

   
   

    <!-- DEBUT - FaceBook Login API -->

    <!--<script>

        window.fbAsyncInit = function() {

            FB.init({

                appId      : '692040328819024',
                cookie     : true,
                xfbml      : true,
                version    : 'v12.0'

            });
      
            FB.AppEvents.logPageView();   
      
        };

        (function(d, s, id){

            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);

        }
        
        (document, 'script', 'facebook-jssdk'));
    
    </script>-->

    <!-- FIN - FaceBook Login API -->

</body>
</html>