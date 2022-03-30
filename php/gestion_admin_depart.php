<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
    <title>Gestion Administrateur</title>

    <?php
    include 'verif_script.php';
    if ($_SESSION['pass'] == "Membre" || $_SESSION['pass'] == "Admin depart") {
        header('location:front_connexion.php');
    }
    if (!isset($_SESSION['valide_changementpass'])) {
        $_SESSION['valide_changementpass'] = '';
    }
    ?>

</head>

<body> 
<a href="../index.php">Home</a>
<div class="pageAdmin">
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
                <a href="" class="menu__item_gestion_admin">Espace validation texte</a>
                <a href="" class="menu__item_gestion_admin">Espace création lieu</a>
                <a href="" class="menu__item_gestion_admin">Campagnes de mail</a>
                <a href="" class="menu__item_gestion_admin">mise à jour SiteMap</a>
                <a href="" class="menu__item_gestion_admin">Indexation</a>
                <a href="" class="menu__item_gestion_admin">supervision du département</a>

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
    <div class="changementTitre">
        <h2>Les membres</h2>
    <form method="GET" action="changement_pass.php">

        <?php

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=ptut', 'root', '');
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }

        $reponse = $bdd->query('SELECT prenom, nom, mail, pass2 from users where pass2 = "admin" OR pass2 = "membre"');

        while ($donnees = $reponse->fetch()) {
            echo "<div class='check'><p>".$donnees['nom'] . "/" . $donnees['prenom'] . "/" . $donnees['mail'] . "/" . $donnees["pass2"]."</p>";
            echo "<input type='checkbox' name='email[]' value='" . $donnees['mail'] . "'>"."</div>";

        }

        ?>
        <div class="selection">
        <select name="pass2">
            <option value="Membre">Membre</option>
            <option value="Admin depart">Administrateur départemental</option>
            <option value="Admin">Administrateur Global</option>
        </select>
        <input type="submit" value="éditer">
        </div>
        <?php

        if ($_SESSION['valide_changementpass'] == 1) {
            echo "<p>Le changement de rôle à été réalisé avec succès !</p>";
        }
        if ($_SESSION['valide_changementpass'] == 0) {
            echo "</p>Erreur lors du changement de rôle</p>";
        }

        ?>

    </form>
    </div>

    <script src="../js/animation-menu.js"></script>
</body>

</html>
