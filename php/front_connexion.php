<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
    <title>Connexion</title>

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

</head>

<body>
  



<div id="arrow">
<svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490 314.33"><defs><style>.cls-1{fill:#4062bb;}</style></defs><title>up-arrow-svgrepo-com</title><polygon class="cls-1" points="31.93 164.82 490 164.82 490 149.51 31.93 149.51 189.08 11.52 178.97 0 0 157.17 178.97 314.33 189.08 302.82 31.93 164.82"/></svg>
</svg>

    </div>
    <div class="seConnecter">
    <div id="peopleandcracc">
        <div id="people"> </div>
        <div id="cracc">
            <div id="lcoin">
                <h4>CONNEXION</h4>
                <a href="front_create_account.php">Pas encore de compte ? </a>
            </div>

            <div id="apigf">
                <div id="apig">
                    <img src="../images/google.png"/><p>Connexion avec Google</p>
                </div>
                <div id="apif">
                    <p>Connexion avec Facebook</p>
                </div>
            </div>

            <form action="connexion_back.php" method="post" class="form_frontco_form">

                <div class="form_frontco">
                    <label for="email"> </label>
                    <input type="email" name="email" id="email" placeholder="Adresse email" required>
                </div>

                <?php
                    if($_SESSION['no_email'] == 1){
                        echo '<p>Veuillez entrer une adresse email valide</p><br>';
                    }
                ?>

                <div class="form_frontco">
                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                </div>

                <?php
                    if($_SESSION['email_verif'] == 0 || $_SESSION['mdp_verif'] == 0){
                        echo '<p>adresse e-mail ou mot de passe incorrect</p><br>';
                    }

                ?>

                <div class="form_frontco_button">
                    <input type="submit" value="Envoyer">
                </div>
            </form>


        </div>
    </div>
</div>

</body>

</html>