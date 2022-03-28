<!-- <?php

      include 'php/verif_script.php';

      ?> -->

<!doctype html>
<html lang="fr">
<html xmlns:og="http://ogp.me/ns#">

<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <meta property="og:title" content="Découvrez la France, à travers notre sélection" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="Page d'accueil du site 123villages contenant un accès à toutes les informations pour tout les villages de France " />
  <meta property="og:url" content="http://localhost/mmi2/123villages/" />
  <meta property="og:image" content="http://referenseo/images/open-graph.jpg" />
  <meta property="og:site_name" content="Site 123villages" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="images/favicon.svg">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <script src="https://kit.fontawesome.com/7eb76eff39.js" crossorigin="anonymous"></script>
        <script src="js/profil.js"></script>
        
=======
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
  <script src="https://kit.fontawesome.com/7eb76eff39.js" crossorigin="anonymous"></script>
  <script src="js/profil.js"></script>
>>>>>>> 0d081ffd90478983fcf7aab8d27403e9236fc980
</head>

<body>

<<<<<<< HEAD
<header>
<img src="images/banniere2.png"/>
      <p id="logoTypo">LaVieDuVillage.fr</p>
    <div id="profil"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg></div>
    <div id="cacher" class="non-active">
    
    <div id="menuProfil" ><a>Mon compte</a><a href="php/deconexion_back.php">Déconnexion</a></div>
<?php
      if($_SESSION['verif'] == 1){
        ?>
          <div id="menuProfil"><a>Mon compte</a><a href="php/deconexion_back.php">se déconnecter</a></div>
        <?php
      }else{
        ?>
        <!-- <div id="menuProfilAvant"><a href="php/front_connexion.php">Connexion</a><a href="php/front_create_account.php">Inscription</a></div> -->
        <?php
      }
=======
  <header>
    <img src="images/banniere2.png" />
    <p id="logoTypo">LaVieDuVillage.fr</p>
    <div id="profil"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
        <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" />
      </svg></div>

    <div id="menuProfil"><a>Mon compte</a><a>se déconnecter</a></div>
    <div id="searchBarre">
      <form action="php/searchleo.php">
        <input type="text" id="name" name="name" required placeholder="Rechercher...">
        <INPUT type=submit value=Envoyer>

      </form>

      <a href="php/departement.php">

        <div id="research"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path d="M236 176c0 15.46-12.54 28-28 28S180 191.5 180 176S192.5 148 208 148S236 160.5 236 176zM500.3 500.3c-15.62 15.62-40.95 15.62-56.57 0l-119.7-119.7c-40.41 27.22-90.9 40.65-144.7 33.46c-91.55-12.23-166-87.28-177.6-178.9c-17.24-136.2 97.29-250.7 233.4-233.4c91.64 11.6 166.7 86.07 178.9 177.6c7.19 53.8-6.236 104.3-33.46 144.7l119.7 119.7C515.9 459.3 515.9 484.7 500.3 500.3zM294.1 182.2C294.1 134.5 255.6 96 207.1 96C160.4 96 121.9 134.5 121.9 182.2c0 38.35 56.29 108.5 77.87 134C201.8 318.5 204.7 320 207.1 320c3.207 0 6.26-1.459 8.303-3.791C237.8 290.7 294.1 220.5 294.1 182.2z" />
          </svg></div>
      </a>
    </div>
    <div id="codePostalHeader">76</div>


    <?php

    if ($_SESSION['verif'] == 1) {
    ?>
      <div id="menuProfil"><a>Mon compte</a><a href="php/deconexion_back.php">se déconnecter</a></div>
    <?php
    } else {
    ?>
      <div id="menuProfil"><a href="php/front_connexion.php">Connexion</a><a href="php/front_create_account.php">Inscription</a></div>
    <?php
    }

>>>>>>> 0d081ffd90478983fcf7aab8d27403e9236fc980
    ?>
    </div>
    <script src="js/recherche.js"></script>
    <div id="searchBarre">
    <!-- <form action="php/searchleo.php">
      <input type="text" id="name" name="name" required placeholder="Rechercher...">
      <div id="research"><input type="submit" value=""></div></a>
    </form> -->

      <form action="php/searchleo.php">
        <input type="text" id="name" name="name" required placeholder="Rechercher...">
        <div id="research"><input type="submit" value=""></div></a>
      </form>
    </div>
    <!-- <div id="codePostalHeader">76</div> -->

      <input type="text" id="name" name="recherche" required placeholder="Rechercher...">
      <div id="research"><button href="php/recherche.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M236 176c0 15.46-12.54 28-28 28S180 191.5 180 176S192.5 148 208 148S236 160.5 236 176zM500.3 500.3c-15.62 15.62-40.95 15.62-56.57 0l-119.7-119.7c-40.41 27.22-90.9 40.65-144.7 33.46c-91.55-12.23-166-87.28-177.6-178.9c-17.24-136.2 97.29-250.7 233.4-233.4c91.64 11.6 166.7 86.07 178.9 177.6c7.19 53.8-6.236 104.3-33.46 144.7l119.7 119.7C515.9 459.3 515.9 484.7 500.3 500.3zM294.1 182.2C294.1 134.5 255.6 96 207.1 96C160.4 96 121.9 134.5 121.9 182.2c0 38.35 56.29 108.5 77.87 134C201.8 318.5 204.7 320 207.1 320c3.207 0 6.26-1.459 8.303-3.791C237.8 290.7 294.1 220.5 294.1 182.2z" />
                    </svg></button></div>

</div>
    </div>

<div id="affichage">affichage</div>

<?php

      include('php/recherche.php')

?>
</header>


<<<<<<< HEAD
profil = document.getElementById('profil');
cacher = document.getElementById('cacher');
menuProfil = document.getElementById('menuProfil');

  profil.addEventListener('click', function(){
    if (cacher.className === "non-active") {
    cacher.className = "active";
  } else {
    cacher.className = "non-active";
  }
    menuProfil.classList.toggle("ouvrir");
  })

</script>
=======
  </header>

  <script>
    profil = document.getElementById('profil');
    menuProfil = document.getElementById('menuProfil');

    // profil.addEventListener('click', event => {

    //   nbrClick = `${event.detail}`;

    // if (nbrClick == 1){

    profil.addEventListener('click', function() {
      menuProfil.classList.toggle("ouvrir");
    })

    // else {

    //   menuProfil.classList.replace('ouvrir','fermer');
    //   nbrClick = 0;
    // }

    // console.log (nbrClick)
    // });
    // profil.addEventListener('dblclick', function(){
    //   this.classList.remove("test");
    // });



    // function ouvrir(){
    //   menuProfil.animate([
    //   // étapes/keyframes
    //   { transform: 'translateY(0px)',
    //     opacity:1
    //   },
    //   { transform: 'translateY(40px)',
    //     opacity:0,

    //   }
    // ], {
    //   // temporisation
    //   duration: 1000,
>>>>>>> 0d081ffd90478983fcf7aab8d27403e9236fc980

    // });
    // }
  </script>

  <section id="presentation">
    <h1>L'office du tourisme des villages</h1>
    <div id="boxinfo">
      <div class="info">
        <p>Envie de connaître le passé de votre village et des hommes qui l'ont habité ?</p>
      </div>
      <div class="info">
        <p>Passionné de vieilles pierres, vous voulez découvrir des endroits insolites, apprendre leur histoire et les localiser ?</p>
      </div>
      <div class="info">
        <p>Vous ne vous rappelez plus du résultat des dernières élections ?</p>
      </div>
      <div class="info">
        <p>Organisateur d'un séjour dans notre belle région, vous recherchez les meilleures adresses ?</p>
      </div>
      <div class="info">
        <p>Quels sont les horaires d'ouverture de la bibliothèque ?</p>
      </div>
    </div>
  </section>

  <section id="trouverLieux">
    <h1>Vous ne savez pas où aller ?</h1>
    <div id="recherche">
      <div id="boutonLieu">
        <p>Trouver un village avec notre sélection</p>
      </div>
      <div id="maCarte"></div>

      <!-- Fichiers Javascript -->
      <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
      <script>
        // On initialise la carte
        var carte = L.map('maCarte').setView([48.852969, 2.349903], 13);

        // On charge les "tuiles"
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
          // Il est toujours bien de laisser le lien vers la source des données
          attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
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
    </div>
  </section>

  <section id="choixAPresenter">
    <h1>A découvrir</h1>
    <!-- <div id="fleche">
    <div class="fleche gauche"><</div>
    <div class="fleche droite">></div>
    </div>
    <div class="cards">

    
<div class="card">
  <a href="#"><img src="images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
  <div>
    <h3>$ville</h3>
    <p>$monument</p>
  </div>
  <a href="#"></a>
</div>

  <div class="card">
    <a href="#"><img src="images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

  <div class="card">
    <a href="#"><img src="images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

  <div class="card">
    <a href="#"><img src="images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

  <div class="card">
   <a href="#"><img src="images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

  <div class="card">
    <a href="#"><img src="images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

  <div class="card">
    <a href="#"><img src="images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

  <div class="card">
   <a href="#"><img src="images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div> -->
    <section id="slider-lieu">
      <div class="w-img-nav_previous">
        <i class="i-previous"><svg width="12" height="18" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 1 3 9l8 8" stroke-width="3" fill="none" fill-rule="evenodd"></path>
          </svg></i>
      </div>

      <div id="main-slider">

        <div class="card-slider">
          <div id="image-slider">
            <img src="https://27.monvillagenormand.fr/images/300/327000356.webp" id="img1">
          </div>

        </div>


        <div class="card-slider">
          <div id="image-slider1">
          <img src="https://76.monvillagenormand.fr/images/300/476002630.webp" id="img2">
          </div>

        </div>

        <div class="card-slider">
          <div id="image-slider2">
          <img src="https://76.monvillagenormand.fr/images/300/M76000016.webp" id="img3">
          </div>
        </div>

      </div>
      <div class="w-img-nav_next">
        <i class="i-next"><svg width="13" height="18" xmlns="http://www.w3.org/2000/svg">
            <path d="m2 1 8 8-8 8" stroke-width="3" fill="none" fill-rule="evenodd"></path>
          </svg></i>
      </div>




      
    </section>

    </div>

  </section>
  <script src="js/slider.js"></script> 
  <footer>Mentions légales</footer>
</body>

</html>