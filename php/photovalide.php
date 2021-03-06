<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
    <title>Photo valide</title>

    <?php
    include 'verif_script.php';
    ?>

</head>

<body>
<!--<a href="../index.php">Home</a>-->

<a href="../index.php">
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
    </a>

    <div id="gestion_admin">

        <?php

        if ($_SESSION['pass'] == "Membre" || $_SESSION['pass'] == "Admin depart" || $_SESSION['pass'] == "Admin") {

        ?>


            <div id="membre">
                <p>Membre</p>


                <a href="depotphoto.php" class="menu__item_gestion_membre">Dépôt de photos</a>
                <a href="modification_text.php" class="menu__item_gestion_membre">Proposition modification d'informations</a>
                <a href="photovalide.php" class="menu__item_gestion_membre">Photos validées</a>

            </div>

        <?php

        } else {
            header('location:front_connexion.php');
        }

        if ($_SESSION['pass'] == "Admin" || $_SESSION['pass'] == "Admin depart") {

        ?>


            <div id="admin">
                <p>Admin département</p>



                <a href="verifphoto.php" class="menu__item_gestion_admin">Espace validation photos</a>
                <a href="suppphoto.php" class="menu__item_gestion_admin">Espace suppression photos</a>
                <!--<a href="" class="menu__item_gestion_admin">Espace validation texte</a>
                <a href="" class="menu__item_gestion_admin">Espace création lieu</a>
                <a href="" class="menu__item_gestion_admin">Campagnes de mail</a>
                <a href="" class="menu__item_gestion_admin">mise à jour SiteMap</a>
                <a href="" class="menu__item_gestion_admin">Indexation</a>
                <a href="" class="menu__item_gestion_admin">supervision du département</a>-->

            </div>

        <?php

        }

        if ($_SESSION['pass'] == "Admin") {

        ?>

            <div id="admindep">

                <p>Admin</p>
                <a href="gestion_admin_depart.php" class="menu__item_gestion_admindep">Gestion Admin Département</a>
            </div>

        <?php

        }

        ?>
    </div>
    <div id="imageSupp">
    <?php

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=ptut', 'root', '');
    } catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

    $reponse = $bdd->prepare('SELECT * from pictures where user=? AND validation=1');
    $reponse->execute(array($_SESSION['email']));

    while ($donnees = $reponse->fetch()) {
        echo "<div class='photoTexte'>";
        echo "<img src='../images/photos/" . $donnees['nom'] . "' alt='image' id='photo'>" ."<div class='photoValide'>";
        echo "<p>" . "<span>Nom de l'image: </span>" .$donnees['nom']. "</p>"  . "<p>" . "<span>Adresse: </span>" .$donnees['adresse']."</p>"  ."<p>" . "<span>Description: </span>" .$donnees['description']."</p>"  ."<p>" . "<span>Lien: </span>".$donnees['lien']."</p>";
        echo "</div></div>";
    }

    $reponse->closeCursor();

    ?>
    </div>
    <?php

    if ($_SESSION['pass'] == "Membre") {

      echo "<script src='../js/membre-menu.js'></script>";

    }

    if ($_SESSION['pass'] == "Admin depart") {

      echo "<script src='../js/membre-departement-menu.js'></script>";

    }

    if ($_SESSION['pass'] == "Admin") {

      echo "<script src='../js/animation-menu.js'></script>";

    }

    ?>
</body>

</html>