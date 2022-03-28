<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
    <title>Connexion</title>
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

            <form action="connexion_back.php" method="get" class="form_frontco_form">

                <div class="form_frontco">
                    <label for="email"> </label>
                    <input type="email" name="email" id="email" placeholder="Adresse email" required>
                </div>

                <div class="form_frontco">
                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                </div>

                <div class="form_frontco_button">
                    <input type="submit" value="Envoyer">
                </div>
            </form>


        </div>
    </div>
</div>

</body>

</html>