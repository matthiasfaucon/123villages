<!-- <?php

include 'php/verif_script.php';

?> -->


<!doctype html>
<html lang="fr">
<html xmlns:og="http://ogp.me/ns#">
<head>
  <meta charset="utf-8">
  <title>Legal</title>
  <meta property="og:title" content="Découvrez la France, à travers notre sélection" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="Page d'accueil du site 123villages contenant un accès à toutes les informations pour tout les villages de France " />
  <meta property="og:url" content="http://localhost/mmi2/123villages/" />
  <meta property="og:image" content="images/openGraph/laVieDuVillage.png" />
  <meta property="og:site_name" content="Site 123villages" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" type="image/x-icon" href="images/favicon.svg">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <script src="https://kit.fontawesome.com/7eb76eff39.js" crossorigin="anonymous"></script>
        
</head>
<body>

<header>
<img src="../images/banniere2.png"/>
      <p id="logoTypo">LaVieDuVillage.fr</p>
    <div id="profil"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg></div>
    <div id="cacher" class="non-active">
<?php
      if($_SESSION['verif'] == 1){
        ?>
          <div id="menuProfil"><a href="admin.php">Mon compte</a><a href="deconexion_back.php">se déconnecter</a></div>
        <?php
      }else{
        ?>
        <div id="menuProfil"><a href="front_connexion.php">Connexion</a><a href="front_create_account.php">Inscription</a></div>
        <?php
      }
    ?>
    </div>
    <div id="searchBarre">

      <input type="text" id="text" name="recherche" required placeholder="Rechercher...">
      <div id="research"><button href="recherche.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
    <path d="M236 176c0 15.46-12.54 28-28 28S180 191.5 180 176S192.5 148 208 148S236 160.5 236 176zM500.3 500.3c-15.62 15.62-40.95 15.62-56.57 0l-119.7-119.7c-40.41 27.22-90.9 40.65-144.7 33.46c-91.55-12.23-166-87.28-177.6-178.9c-17.24-136.2 97.29-250.7 233.4-233.4c91.64 11.6 166.7 86.07 178.9 177.6c7.19 53.8-6.236 104.3-33.46 144.7l119.7 119.7C515.9 459.3 515.9 484.7 500.3 500.3zM294.1 182.2C294.1 134.5 255.6 96 207.1 96C160.4 96 121.9 134.5 121.9 182.2c0 38.35 56.29 108.5 77.87 134C201.8 318.5 204.7 320 207.1 320c3.207 0 6.26-1.459 8.303-3.791C237.8 290.7 294.1 220.5 294.1 182.2z" />
</svg></button></div>

</div>

<div id="affichage" class="non-activeAffichage">affichage</div>

<?php

      include('recherche.php')

?>
</header>
<div id="positionLegal">
<section id="presentationSite">
    <h1>Description du site</h1>
    <ul>
    <li>Contenu informatif sur les villages de France</li>
    <li>Collecte d'informations en ligne</li>
    <li>Catalogue, base de donnée</li>
    <li>1ère mise en ligne : 16/11/2016</li>
    <li>Design et développement : Fabrice Hertel, Lisa Flamme, Virgile Duprez, Léo Cavarec, Matthias Faucon</li>
    </ul>
</section>

<section id="responsable">
    <h1>Responsable technique et éditorial</h1>
    <ul>
    <li>Fabrice Hertel</li>
    <li>6 impasse Voltaire</li>
    <li>27690 Léry</li>
    <li><a href="#" >Contact</a></li>
    <li>06 50 88 34 97</li>
    </ul>
</section>

<section id="hebergement">
    <h1>Hébergement</h1>
    <ul>
    <li>numéro de déclaration simplifiée Cnil, dans le cas de collecte de données sur les clients (non obligatoire, mais recommandé).</li>
    <li>OVH SAS au capital de 10 059 500 €</li>
    <li>RCS Lille Métropole 424 761 419 00045</li>
    <li>Code APE 6202A</li>
    <li>N° TVA : FR 22 424 761 419</li>
    <li>Siège social : 2 rue Kellermann - 59100 Roubaix - France.</li>
    </ul>
</section>

<section id="cnil">
    <h1>Déclaration Cnil</h1>
    <ul>
    <li>numéro de déclaration simplifiée Cnil, dans le cas de collecte de données sur les clients (non obligatoire, mais recommandé).</li>
    </ul>
</section>  

<section id="cookies">
    <h1>Cookies</h1>
    <ul>
    <li>Ce site implante un cookie dans votre ordinateur, afin de simplifier votre navigation et nous permettre d'effectuer des statistiques de fréquentation. Si vous le souhaitez, celui-ci peut-être désactivé.

Les informations communiquées vous concernant ( email, adresse, téléphone... ) sont destinées à nos seuls fichiers mailing.

Nous ne vendons, ni n'échangeons, ni ne communiquons aucun fichier d'adresses.

Vous disposez d'un droit d'accès, de modification, de rectification et de suppression des données qui vous concernent (art. 34 de la loi "Informatique et Libertés").

Pour l'exercer, merci de contacter contact@monvillagenormand.fr</li>
    </ul> 
</section>

<section id="droitAuteur">
    <h1>Droit d'auteur</h1>
    <ul>
   <li>
     Les informations contenues sur ce site sont la propriété de www.MonVillageNormand.fr .
A l'exception des images / information qui appartiennent aux personnes indiquées dans leur propriétées.
Merci de demander préalablement l'autorisation avant utilisation ( sauf usage privé ).
</li>
</ul>
</section> 
    </div>

<footer> <a>123Village.fr</a>  <a>Contact</a> <a>Légal</a></footer> 
<script src="../js/recherche.js"></script> 
<script src="../js/slider.js"></script>
<script src="../js/animation-sidebar.js"></script>
</body>

</html>



    


