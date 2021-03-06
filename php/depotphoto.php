<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
  <title>Depot photo</title>

  <?php
  include('verif_script.php');
  if (!isset($_SESSION['valide_photo'])) {
    $_SESSION['valide_photo'] = '';
  }
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


        <div id="admindep">
          <p>Admin département</p>

          <a href="verifphoto.php" class="menu__item_gestion_admindep">Espace validation photos</a>
          <a href="suppphoto.php" class="menu__item_gestion_admindep">Espace suppression photos</a>
          <!--<a class="menu__item_gestion_admindep">Espace validation texte</a>
          <a class="menu__item_gestion_admindep">Espace création lieu</a>
          <a class="menu__item_gestion_admindep">Campagnes de mail</a>
          <a class="menu__item_gestion_admindep">mise à jour SiteMap</a>
          <a class="menu__item_gestion_admindep">Indexation</a>
          <a class="menu__item_gestion_admindep">supervision du département</a>-->
        </div>

      <?php

      }

      if ($_SESSION['pass'] == "Admin") {

      ?>

        <div id="admin">

          <p>Admin</p>
          <a href="gestion_admin_depart.php" class="menu__item_gestion_admin">Gestion Admin Département</a>
        </div>

      <?php

      }

      ?>
    </div>

    <div id="depot_photo">

      <h3>Zone de dépôt de photo</h3>

      <form action="upload.php" enctype="multipart/form-data" method="post" id="formdepot">
        <div class="form_frontco">
          <label for="name"> </label>
          <input type="text" name="name" id="name" placeholder="Descritption" required>
        </div>
        <div class="form_frontco">
          <label for="adress"> </label>
          <input type="text" name="adress" id="adress" placeholder="Adresse du lieu" required>
        </div>

        <div class="form_frontco">
          <label for="link"> </label>
          <input type="text" name="link" id="link" placeholder="Lien de la page du lieu " required>
        </div>

        <div class="form_frontco">
          <label for="code"> </label>
          <input type="text" name="code" id="code" placeholder="Entrer le code de l'élément (7 caractères)" minlength="7" maxlength="7" required>
        </div>

        <div class="form_frontco">

        </div>
        <div id="zonededepot">
          <input type="file" name="image" accept="image/jpg, image/jpeg, image/JPG, image/JPEG">
        </div>

        <input type="submit" value="Upload">
        <!--<button type="submit">Upload</button>-->

        <?php
        if ($_SESSION['valide_photo'] == 1) {
          echo "<p>L'envoi a été un succès !<br>Veuillez désormais attendre la validation d'un administrateur</p>";
        }
        if ($_SESSION['valide_photo'] == 0) {
          echo "<p>Echec de l'envoie</p>";
        }
        ?>

      </form>


    </div>
    <!-- <form id="dep-phot" action="upload.php" method="POST">
  <input type="file" multiple>
  <p>Drag your files here or click in this area.</p>
  <button type="submit">Upload</button>
</form> -->




    <!-- <script src="../js/animation-menu.js"></script> -->
    <!-- <script src="../js/membre-menu.js"></script> -->

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
</div>



</html>