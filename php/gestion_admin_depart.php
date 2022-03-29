<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
    <title>Gestion de contenue</title>

    <?php
        include 'verif_script.php';
        if($_SESSION['pass'] == "Membre" || $_SESSION['pass'] == "Admin depart"){
            header('location:front_connexion.php');
        }
    ?>

</head>

    <body>
    <div id="gestion_admin">

<?php

if($_SESSION['pass'] == "Membre" || $_SESSION['pass'] == "Admin depart" || $_SESSION['pass'] == "Admin"){

        ?>


<div id="membre">
    <p>Membre</p>

    
        <a href="depotphoto.php" class="menu__item_gestion_membre">Dépôt de photos</a>
        <a href="modification_text.php" class="menu__item_gestion_membre">Proposition modification d'informations</a>
        <a href="photovalide.php" class="menu__item_gestion_membre">Photos validées</a>
    
</div>

<?php 

    }else{
        header('location:front_connexion.php');
    }

    if($_SESSION['pass'] == "Admin" || $_SESSION['pass'] == "Admin depart"){

        ?>


<div id="admin"> 
    <p>Admin département</p>
         <a href="verifphoto.php" class="menu__item_gestion_admin">Espace validation photos</a>
         <a href="suppphoto.php" class="menu__item_gestion_admin">Espace suppression photos</a>
         <span class="menu__item_gestion_admin">Espace validation texte</span>
         <span class="menu__item_gestion_admin">Espace création lieu</span> 
         <span class="menu__item_gestion_admin">Campagnes de mail</span>
         <span class="menu__item_gestion_admin">mise à jour SiteMap</span>
         <span class="menu__item_gestion_admin">Indexation</span> 
         <span class="menu__item_gestion_admin">supervision du département</span>

</div>

<?php

    }

    if($_SESSION['pass'] == "Admin"){

        ?>

<div id="admindep">

    <p>Admin</p>
    <a href="gestion_admin_depart" class="menu__item_gestion_admindep">Gestion Admin Département</a>
</div> 

<?php

    }

    ?>
</div>
        <form method="GET" action="changement_pass.php">

        <?php

            try
            {
                $bdd=new PDO('mysql:host=localhost;dbname=ptut','root','');
            }
            catch(Exception $e)
            {
                die('Erreur :'.$e->getMessage());
            }

            $reponse=$bdd->query('SELECT prenom, nom, mail, pass2 from users where pass2 = "admin" OR pass2 = "membre"');

            while ($donnees=$reponse->fetch())
            {
                echo $donnees['nom']."/".$donnees['prenom']."/".$donnees['mail']."/".$donnees["pass2"];
                echo "<input type='checkbox' name='email[]' value='".$donnees['mail']."'><br>";
            }

            ?>

                    <select name="pass2">
                        <option value="Membre">Membre</option>
                        <option value="Admin depart">Administrateur départemental</option>
                        <option value="Admin">Administrateur Global</option>
                    </select>
                    <input type="submit" value="éditer">
                </form>


    </body>