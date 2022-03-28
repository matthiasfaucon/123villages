<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
    <title>Gestion de contenue</title>

    <?php
        include 'verif_script.php';
    ?>

</head>

<body>

    <div id="gestion_admin">

        <?php

            if($_SESSION['verif'] == 0){
                header('Location:front_connexion.php');
            }else{

                ?>


        <div id="membre">
            <p>Membre</p>

            
                <a href="depotphoto.php" class="menu__item_gestion_membre">Dépôt de photos</a></br>
                <span class="menu__item_gestion_membre">Proposition modification d'informations</span></br>
                <span class="menu__item_gestion_membre">Photos validées</span></br>
            
        </div>

        <?php 

            }

            if($_SESSION['pass'] == "Admin" || $_SESSION['pass'] == "Admin depart"){

                ?>


         <div id="admin"> 
            <p>Admin département</p>


           
                 <a href="verifphoto.php" class="menu__item_gestion_admin">Espace validation photos</a></br>
                 <a href="suppphoto.php" class="menu__item_gestion_admin">Espace validation photos</a></br>
                 <span class="menu__item_gestion_admin">Espace validation texte</span></br>
                 <span class="menu__item_gestion_admin">Espace création lieu</span> </br>
                 <span class="menu__item_gestion_admin">Campagnes de mail</span></br>
                 <span class="menu__item_gestion_admin">mise à jour SiteMap</span></br>
                 <span class="menu__item_gestion_admin">Indexation</span> </br>
                 <span class="menu__item_gestion_admin">supervision du département</span></br>
         
        </div>

        <?php

            }

            if($_SESSION['pass'] == "Admin"){

                ?>
    
        <div id="admindep">

            <p>Admin</p>
            <span class="menu__item_gestion_admindep">Gestion Admin Département</span>
        </div> 

        <?php

            }

            ?>
    </div>





</body>

</html>