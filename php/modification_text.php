<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
    <title>Modifier informations</title>
</head>

<body>
    <div id="gestion_admin">

        <div id="membre">
            <p>Membre</p>


            <span class="menu__item_gestion_membre">Dépôt de photos</span></br>
            <span class="menu__item_gestion_membre">Proposition modification d'informations</span></br>
            <span class="menu__item_gestion_membre">Photos validées</span></br>

        </div>
        <div id="admin">
            <p>Admin</p>



            <span class="menu__item_gestion_admin">Espace validation photos</span></br>
            <span class="menu__item_gestion_admin">Espace validation texte</span></br>
            <span class="menu__item_gestion_admin">Espace création lieu</span> </br>
            <span class="menu__item_gestion_admin">Campagnes de mail</span></br>
            <span class="menu__item_gestion_admin">mise à jour SiteMap</span></br>
            <span class="menu__item_gestion_admin">Indexation</span> </br>
            <span class="menu__item_gestion_admin">supervision du département</span></br>

        </div>

        <div id="admindep">

            <p>Admin département </p>
            <span class="menu__item_gestion_admindep">Gestion Admin Département</span>
        </div>
    </div>
    <div id="modinfos">
        <form action="" method="get" class="form_frontco_form">

            <div class="form_frontco">
                <label for="name"> </label>
                <input type="text" name="name" id="name" placeholder="Nom du lieu" required>
            </div>
            <div class="form_frontco">
                <label for="adress"> </label>
                <input type="text" name="adress" id="adress" placeholder="Adresse du lieu" required>
            </div>

            <div class="form_frontco">
                <label for="lien"> </label>
                <input type="text" name="lien" id="lien" placeholder="copier coller le lien de la page du lieu" required>
            </div>

            <div class="form_frontco">
                <label for="Text_mod"></label>
                <input type="text" name="Text_mod" id="Text_mod" placeholder="Ecrivez la modification que vous voulez apporter" required>
            </div>

            <div class="form_frontco_button">
                <input type="submit" value="Envoyer">
            </div>
        </form>

    </div>
</body>

</html>