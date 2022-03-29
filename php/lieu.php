<!-- <?php

include 'php/verif_script.php';

?> -->

<!doctype html>
<html lang="fr">
<html xmlns:og="http://ogp.me/ns#">
<head>
  <meta charset="utf-8">
  <title>Lieu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="..\css\style.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <meta property="og:title" content="Découvrez la France, à travers notre sélection" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="Page du Château d'Harcourt du site 123villages contenant un accès à toutes les informations pour ce lieu " />
  <meta property="og:url" content="http://localhost/mmi2/123villages/" />
  <meta property="og:image" content="images/openGraph/laVieDuVillage.png" />
  <meta property="og:site_name" content="Site 123villages" />
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
  <div id="div_title_lieu">
    <h1 id="title_lieu">Château d'Harcourt (Eure)</h1>
  </div>





  <div id="ii">
    <div id="infos-local">
      <adress>
        <p>Type :Château fort</p>
        <a href="mailto:harcourt@cg27.fr">Mail :harcourt@cg27.fr</a>
        <a href="http://www.harcourt-normandie.fr">Site Internet: http://www.harcourt-normandie.fr</a>
        <a href="tel:+33232462970">Téléphone :+33 2 32 46 29 70</a>
        <a href="fax:+33232465338">Fax :+33 2 32 46 53 38</a>
        <p>Adresse: 13 rue du Château 27800 Harcourt</p>
        <p>Coordonnées GPS: 49.1738014221, 0.7868893743</p>
        <p>Label Qualite Tourisme : 2013-04567 LE DOMAINE D'HARCOURT</p> <a href="Ville.php?INSEE=27311"> 27800 Harcourt </a>
        <p>Classement monument historique :Château : classement par liste de 1862</p>
      <adress>
    </div>



    <div id="cont-img-infos">


      <div id="img-lieu">
      </div>



      <div id="maCarte1"> </div>
      <!-- Fichiers Javascript -->
      <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
      <script>
        // On initialise la carte
        var carte = L.map('maCarte1').setView([49.17411774759845, 0.786777382593574], 13);

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
      <div id="partenaire">

        <div id="part1"></div>
        <div id="part2"></div>
        <div id="part3"></div>
      </div>
    </div>

  </div>

  <div id="txt-infos-lieu-bt">
    <p>En savoir +</p>
  </div>
  <div id="txt-infos-lieu">
    <p>
      Au cœur d'une forêt de 95 hectares, le château des XIIe-XIVe siècles remanié au XVIIe siècle est entouré d'une partie du mur d'enceinte et bordé d'un double fossé. Une exposition permanente présente aux visiteurs l'histoire du château, l'évolution de son architecture et l'histoire de la famille d'Harcourt. Véritable patrimoine végétal faisant pendant aux qualités architecturales du bâtiment, l'arboretum comprend 470 espèces d'arbres réparties sur 11 hectares. Créé au début du XIXe siècle, il fût l'un des premiers arboretums de France à introduire certaines espèces encore inconnues alors, comme les cèdres du Liban ou les séquoias
    </p>
    <div>
    </div>



  </div>

  <section id="hordou">
  <p>horaire</p>
<div>
    <div id="lundi">
      <p>lundi</p>
      <div>
        <p> 09:00–12:00</p>
        <p>14:00–17:30</p>
      </div>
    </div>

    <div id="mardi">
      <p>mardi</p>
      <div>
        <p> 09:00–12:00</p>
        <p>14:00–17:30</p>
      </div>
    </div>

    <div id="mercredi">
      <p>mercredi</p>
      <div>
        <p> 09:00–12:00</p>
        <p>14:00–17:30</p>
      </div>
    </div>

    <div id="jeudi">
      <p>jeudi</p>
      <div>
        <p>     09:00–12:00</p>
        <p> 14:00–17:30</p>
      </div>
    </div>

    <div id="vendredi">
      <p>
        vendredi</p>
      <div>
        <p>09:00–12:00</p>
        <p>14:00–17:30</p>
      </div>
    </div>
    <div id="samedi">
      <p>samedi</p>
      <p>09:00–12:00</p>
    </div>
    <div id="dimanche">
      <p>dimanche</p>
      <p>Fermé</p>
    </div>
</div> 
  </section>


 <div id="proeve"> 
   <p>Prochain évènement</p> 
   <div>
   <p>Prochain évènement du lieu en question</p>
   </div>

 </div>
  <section id="journee-patrimoine">
    <ul>
      <li class="date">2021</li>
      <li class="date">2020</li>
      <li class="date">2019</li>
      <li class="date">2018</li>
      <li class="date">2015</li>
      <li class="date">2014</li>
      <li class="date">2013</li>

    </ul>
    <div id="txt-journee-patrimoine">
      <h2 id="titre-txt-journee-patrimoine">Journée du patrimoine 2021</h2>

      <p id="p-txt-journee-patrimoine">4639888 Installation d'une oeuvre d'art contemporain immersive par Anne Blanchet</p>
    </div>
  </section>
  <div id="GroupeDeMiniatures">
    <figure class="ImageMiniature">
      <a href="illustration.php?NumImage=327000356">
        <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000356.webp">
      </a>
    </figure>
    <figure class="ImageMiniature">
      <a href="illustration.php?NumImage=327000357">
        <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000357.webp">
      </a>



    </figure>
    <figure class="ImageMiniature">
      <a href="illustration.php?NumImage=327000359">
        <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000359.webp">
      </a>

    </figure>
    <figure class="ImageMiniature">
      <a href="illustration.php?NumImage=327000362">
        <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000362.webp">
      </a>
    </figure>

    <figure class="ImageMiniature">
      <a href="illustration.php?NumImage=327000370">
        <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000370.webp">
      </a>
    </figure>

    <figure class="ImageMiniature">
      <a href="illustration.php?NumImage=327000371">
        <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000371.webp">
      </a>
    </figure>

    <figure class="ImageMiniature">
      <a href="illustration.php?NumImage=327000372">
        <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000372.webp">
      </a>
    </figure>

    <figure class="ImageMiniature">
      <a href="illustration.php?NumImage=327000373">
        <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000373.webp">
      </a>
    </figure>

    <figure class="ImageMiniature">
      <a href="illustration.php?NumImage=327000374">
        <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000374.webp">
      </a>

    </figure>

  </div>

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
          <img src="https://27.monvillagenormand.fr/images/300/327000357.webp" id="img2">
          </div>

        </div>

        <div class="card-slider">
          <div id="image-slider2">
          <img src="https://27.monvillagenormand.fr/images/300/327000359.webp" id="img3">
          </div>
        </div>

      </div>
      <div class="w-img-nav_next">
        <i class="i-next"><svg width="13" height="18" xmlns="http://www.w3.org/2000/svg">
            <path d="m2 1 8 8-8 8" stroke-width="3" fill="none" fill-rule="evenodd"></path>
          </svg></i>
      </div>
      <p id="voir-photos">Voir toutes les photos</p>



      
    </section>
  <div id="test-slider-lieu">
    <div id="GroupeDeMiniatures">
      <figure class="ImageMiniature">
        <a href="illustration.php?NumImage=327000356">
          <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000356.webp">
        </a>
      </figure>
      <figure class="ImageMiniature">
        <a href="illustration.php?NumImage=327000357">
          <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000357.webp">
        </a>



      </figure>
      <figure class="ImageMiniature">
        <a href="illustration.php?NumImage=327000359">
          <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000359.webp">
        </a>

      </figure>
      <figure class="ImageMiniature">
        <a href="illustration.php?NumImage=327000362">
          <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000362.webp">
        </a>
      </figure>

      <figure class="ImageMiniature">
        <a href="illustration.php?NumImage=327000370">
          <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000370.webp">
        </a>
      </figure>

      <figure class="ImageMiniature">
        <a href="illustration.php?NumImage=327000371">
          <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000371.webp">
        </a>
      </figure>

      <figure class="ImageMiniature">
        <a href="illustration.php?NumImage=327000372">
          <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000372.webp">
        </a>
      </figure>

      <figure class="ImageMiniature">
        <a href="illustration.php?NumImage=327000373">
          <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000373.webp">
        </a>
      </figure>

      <figure class="ImageMiniature">
        <a href="illustration.php?NumImage=327000374">
          <img itemprop="image" alt="Château d'Harcourt" src="https://27.monvillagenormand.fr/images/300/327000374.webp">
        </a>

      </figure>
    </div>
  </div>



  <footer>Mentions légales</footer>

  <script src="../js/slider-lieu.js"></script>
  <script src="../js/animation-sidebar.js"></script> 

</body>

</html>