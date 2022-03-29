<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#">
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
    <title>Inscription</title>

    <meta property="og:title" content="Rejoignez et soutenez-nous dans la découverte du patrimoine français" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="Une page d'inscription, vous permettant de vous créez un compte et de contribuer au partage du patrimoine " />
    <meta property="og:url" content="http://localhost/mmi2/123villages/" />
    <meta property="og:image" content="images/openGraph/laVieDuVillage.png" />
    <meta property="og:site_name" content="Site 123villages" />
    <?php

    session_start();

    if (!isset($_SESSION['email_exist'])) {
        $_SESSION['email_exist'] = '';
    }

    if (!isset($_SESSION['no_email'])) {
        $_SESSION['no_email'] = '';
    }

    if ($_SESSION['verif'] == 1) {
        header('Location: ../index.php');
    }

    ?>

</head>

<body>
    <div id="arrow">
        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490 314.33">
            <defs>
                <style>
                    .cls-1 {
                        fill: #4062bb;
                    }
                </style>
            </defs>
            <title>up-arrow-svgrepo-com</title>
            <polygon class="cls-1" points="31.93 164.82 490 164.82 490 149.51 31.93 149.51 189.08 11.52 178.97 0 0 157.17 178.97 314.33 189.08 302.82 31.93 164.82" />
        </svg>
        </svg>
    </div>


    <div id="peopleandcracc">
        <div id="people">
            <img src="../images/membre.png">
         </div>
        <div id="cracc">
            <div id="lcoin">
                <h4>INSCRIPTION</h4>
                <a href="front_connexion.php">Déjà un compte ? </a>
            </div>

            <div id="apigf">
                <div id="apig">
                    <p>S'inscrire avec Google</p>
                </div>
                <div id="apif">
                    <p>S'inscrire avec Facebook</p>
                </div>
            </div>

            <form action="inscription_back.php" method="post" class="form_frontco_form">

                <div class="form_frontco">
                    <label for="name"> </label>
                    <input type="text" name="prenom" id="name" placeholder="Prénom" required>
                </div>

                <div class="form_frontco">
                    <label for="fname"> </label>
                    <input type="text" name="nom" id="fname" placeholder="Nom" required>
                </div>

                <div class="form_frontco">
                    <label for="email"> </label>
                    <input type="email" name="email" id="email" placeholder="Adresse email" required>
                </div>

                <div class="form_frontco">
                    <label for="password"></label>
                    <input type="password" name="mdp" id="password" placeholder="Mot de passe" required>
                </div>

                <?php
                if ($_SESSION['email_exist'] == 1) {
                    echo '<p>adresse e-mail déjà existant</p><br>';
                }

                if ($_SESSION['no_email'] == 1) {
                    echo '<p>Veuillez entrer une adresse email valide</p><br>';
                }
                ?>

                <div class="form_frontco_button">
                    <input type="submit" value="Envoyer">
                </div>
            </form>


        </div>
    </div>


</body>

</html>