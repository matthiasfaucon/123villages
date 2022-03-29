<!-- <?php

      include 'verif_script.php';

      ?> -->

<!doctype html>
<html lang="fr">
<html xmlns:og="http://ogp.me/ns#">

<head>
  <meta charset="utf-8">
  <title>Departement</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="La page de votre département" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="Une page vous permettant de découvrir le patrimoine de votre département" />
  <meta property="og:url" content="http://localhost/mmi2/123villages/php/departement.php" />
  <meta property="og:image" content="../images/openGraph/laVieDuVillage.png" />
  <meta property="og:site_name" content="Site laVieDuillage" />

  <link rel="stylesheet" href="../css/style.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
  <!-- <script src="script.js"></script> -->
  <script src="https://kit.fontawesome.com/7eb76eff39.js" crossorigin="anonymous"></script>
</head>

<body>

  <header>
    <img src="../images/banniere2.png" />
    <p id="logoTypo">LaVieDuVillage.fr</p>
    <div id="profil"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
        <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" />
      </svg></div>
    <div id="cacher" class="non-active">
      <?php
      if ($_SESSION['verif'] == 1) {
      ?>
        <div id="menuProfil"><a href="admin.php">Mon compte</a><a href="deconexion_back.php">se déconnecter</a></div>
      <?php
      } else {
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


  <section id="presentationDepartement">
    <h1>Bienvenue en Seine-Maritime</h1>
    <div class="positionPresentation">
      <a href="codePostale.php">
        <div id="boutonRecherche">
          <p>Trouver votre village</p>
        </div><a>
          <div id="infoDepartement">
            <p>Bien sûr, tout le monde connaît les très grandes villes de Seine-Maritime (76) que sont <a>Rouen</a>, <a>Dieppe</a>, <a>Havre</a>...</br>
              Mais le département de Seine-Maritime, c'est 745 communes !!!</br>
              Le patrimoine religieux y est remarquable : <a>églises</a>, <a>chapelles</a> et <a>calvaires</a>, mais n'oublions pas le petit patrimoine.</br>
              Qu'il s'agisse de <a>lavoirs</a>, de <a>colombiers</a>, de <a>moulins</a>... le 76 regorge de trésors à découvrir.</br>
              Venez-le (re)-découvrir en flânant sur nos pages avant de partir en <a>promenades</a></p>
          </div>
    </div>
  </section>

  <section id="activites">
    <h1>Découvrez la Seine-Maritime</h1>
    <div id="menuSecondaireHorizontal">
      <span class="menu-link">A voir</span>
      <span class="menu-link">Voyager</span>
      <span class="menu-link">Sport et loisirs</span>
      <span class="menu-link">Services publics</span>
      <span class="menu-link">Santé</span>
      <span class="menu-link">Commerces et Services</span>
    </div>
    <div class="carteInformations">
      <div id="maCarteDepartement"></div>
      <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
      <script>
        // On initialise la carte
        var carte = L.map('maCarteDepartement').setView([49.290628552849746, 1.0112003960901552], 13);

        // On charge les "tuiles"
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
          // Il est toujours bien de laisser le lien vers la source des données
          // attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
          minZoom: 1,
          maxZoom: 20
        }).addTo(carte);

        let xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = () => {
          // La transaction est terminée ?
          if (xmlhttp.readyState == 4) {
            // Si la transaction est un succès
            if (xmlhttp.status == 200) {
              // On traite les données reçues
              let donnees = JSON.parse(xmlhttp.responseText)

              // On boucle sur les données (ES8)
              Object.entries(donnees.agences).forEach(agence => {
                // Ici j'ai une seule agence
                // On crée un marqueur pour l'agence
                let marker = L.marker([agence[1].lat, agence[1].lon]).addTo(carte)
                marker.bindPopup(agence[1].nom)
              })
            } else {
              console.log(xmlhttp.statusText);
            }
          }
        }

        xmlhttp.open("GET", "agence/liste_simple.php");

        xmlhttp.send(null);
      </script>

      <div class="informationsMonument">
        <div class="positionnementInfos">
          <h1 class='titreInfo'>Cirque-Théatre</h1>
          <img class='imageInfo' src="../images/cirque.jpg"></img></br>
          <p class='adresseInfo'>Adresse: 2 Rue Augustin Henry, 76500 Elbeuf</p></br>
          <p class='telephoneInfo'>Téléphone: 0232131050</p>
        </div>
      </div>
    </div>
  </section>

  <section id="choixAPresenter">
    <h1>A découvrir</h1>

    <section id="slider-lieu">
      <div class="w-img-nav_previous">
        <i class="i-previous"><svg width="12" height="18" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 1 3 9l8 8" stroke-width="3" fill="none" fill-rule="evenodd"></path>
          </svg></i>
      </div>

      <div id="main-slider">

        <div class="card-slider">
          <div id="image-slider">
            <img src="https://27.monvillagenormand.fr/images/300/427000018.webp" id="img1">
          </div>

        </div>


        <div class="card-slider">
          <div id="image-slider1">
            <img src="https://27.monvillagenormand.fr/images/300/327000034.webp" id="img2">
          </div>

        </div>

        <div class="card-slider">
          <div id="image-slider2">
            <img src="https://27.monvillagenormand.fr/images/300/M27000011.webp" id="img3">
          </div>
        </div>

      </div>
      <div class="w-img-nav_next">
        <i class="i-next"><svg width="13" height="18" xmlns="http://www.w3.org/2000/svg">
            <path d="m2 1 8 8-8 8" stroke-width="3" fill="none" fill-rule="evenodd"></path>
          </svg></i>
      </div>
      <script src="js/recherche.js"></script> 
      <script src="../js/slider-departement.js"></script>
      <script src="../js/animation-sidebar.js"></script>



    </section>

  </section>

  <footer> <a>123Village.fr</a>  <a>Contact</a> <a href="php/legal.php">Légal</a></footer> 

</body>

</html>