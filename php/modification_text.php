<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
    <title>Modifier informations</title>

    <?php
    include('verif_script.php');
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
    <div id="modinfos">
        <form action="envoi_mail_modif.php" method="get" class="form_frontco_form">

            <div class="form_frontco">
                <label for="name"> </label>
                <input type="text" name="subject" id="name" placeholder="Sujet" required>
            </div>
            <!--<div class="form_frontco">
                <label for="adress"> </label>
                <input type="text" name="adress" id="adress" placeholder="Adresse du lieu" required>
            </div>-->

            <div class="form_frontco">
                <label for="lien"> </label>
                <input type="text" name="lien" id="lien" placeholder="Lien de la page du lieu" required>
            </div>

            <div class="form_frontco">
                <label for="Text_mod"></label>
                <input type="text" name="contenu" id="Text_mod" placeholder="Proposition de modification" required>
            </div>

            <div class="form_frontco_button">
                <input type="submit" value="Envoyer">
            </div>
        </form>

    </div>
</body>

</html>