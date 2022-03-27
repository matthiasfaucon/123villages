<!-- <?php

    include 'php/verif_script.php';

?> -->

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Departement</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="La page de votre département" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="Une page vous permettant de découvrir le patrimoine de votre département" />
  <meta property="og:url" content="http://localhost/mmi2/123villages/php/departement.php" />
  <meta property="og:image" content="http://referenseo/images/open-graph.jpg" />
  <meta property="og:site_name" content="Site 123villages" />

  <link rel="stylesheet" href="../css/style.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
  <!-- <script src="script.js"></script> -->
  <script src="https://kit.fontawesome.com/7eb76eff39.js" crossorigin="anonymous"></script>
</head>
<body>

<header>
    <p id="logoTypo">LaVieDuVillage.fr</p>
    <div id="searchBarre"><input type="text" id="name" name="name" required placeholder="Rechercher..."><div id="research"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M236 176c0 15.46-12.54 28-28 28S180 191.5 180 176S192.5 148 208 148S236 160.5 236 176zM500.3 500.3c-15.62 15.62-40.95 15.62-56.57 0l-119.7-119.7c-40.41 27.22-90.9 40.65-144.7 33.46c-91.55-12.23-166-87.28-177.6-178.9c-17.24-136.2 97.29-250.7 233.4-233.4c91.64 11.6 166.7 86.07 178.9 177.6c7.19 53.8-6.236 104.3-33.46 144.7l119.7 119.7C515.9 459.3 515.9 484.7 500.3 500.3zM294.1 182.2C294.1 134.5 255.6 96 207.1 96C160.4 96 121.9 134.5 121.9 182.2c0 38.35 56.29 108.5 77.87 134C201.8 318.5 204.7 320 207.1 320c3.207 0 6.26-1.459 8.303-3.791C237.8 290.7 294.1 220.5 294.1 182.2z"/></svg></div></a></div>
    <div id="banner"><img src="../images/banniere.jpg"/></div>
</header>

<nav>
  <div id="menuVertical">
  <li class="menu-link">A voir</li>
  <li class="menu-link">Voyager</li>
  <li class="menu-link">Sport et loisirs</li>
  <li class="menu-link">Services publics</li>
  <li class="menu-link">Santé</li>
  <li class="menu-link">Commerces et Services</li>
  <li class="menu-link">Données publiques</li>
</div>
</nav>

<section id="presentationDepartement">
    <h1>Bienvenue en Seine-Maritime</h1>
    <div class="positionPresentation">
    <a href="codePostale.php"><div id="boutonRecherche"><p>Trouver votre village</p></div><a>
    <div id="infoDepartement"><p>Bien sûr, tout le monde connaît les très grandes villes de Seine-Maritime (76) que sont <a>Rouen</a>, <a>Dieppe</a>, <a>Havre</a>...</br>
      Mais le département de Seine-Maritime, c'est 745 communes !!!</br>
      Le patrimoine religieux y est remarquable : <a>églises</a>, <a>chapelles</a> et <a>calvaires</a>, mais n'oublions pas le petit patrimoine.</br>
      Qu'il s'agisse de <a>lavoirs</a>, de <a>colombiers</a>, de <a>moulins</a>... le 76 regorge de trésors à découvrir.</br>
      Venez-le (re)-découvrir en flânant sur nos pages avant de partir en <a>promenades</a></p></div>
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
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(carte);

    let xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = () => {
        // La transaction est terminée ?
        if(xmlhttp.readyState == 4){
            // Si la transaction est un succès
            if(xmlhttp.status == 200){
                // On traite les données reçues
                let donnees = JSON.parse(xmlhttp.responseText)
                
                // On boucle sur les données (ES8)
                Object.entries(donnees.agences).forEach(agence => {
                    // Ici j'ai une seule agence
                    // On crée un marqueur pour l'agence
                    let marker = L.marker([agence[1].lat, agence[1].lon]).addTo(carte)
                    marker.bindPopup(agence[1].nom)
                })
            }else{
                console.log(xmlhttp.statusText);
            }
        }
    }

    xmlhttp.open("GET", "agence/liste_simple.php");

    xmlhttp.send(null);
</script>

<div class="informationsMonument">
  
<h1 class='titreInfo'>Cirque-Théatre</h1>
<img class='imageInfo' src="../images/cirque.jpg"></img></br>
<p class='adresseInfo'>Adresse: 2 Rue Augustin Henry, 76500 Elbeuf</p></br>
<p class='telephoneInfo'>Téléphone: 0232131050</p>

</div>
  </div>
  </section>

  <section id="choixAPresenter">
    <h1>A découvrir</h1>
    <div id="fleche">
    <div class="fleche gauche"><</div>
    <div class="fleche droite">></div>
    </div>
    <div class="cards">
<div class="card">
  <a href="#"><img src="../images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
  <div>
    <h3>Rouen</h3>
    <p>Eglise de Rouen</p>
  </div>
  <a href="#"></a>
</div>

  <div class="card">
    <a href="#"><img src="../images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

  <div class="card">
    <a href="#"><img src="../images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

  <div class="card">
    <a href="#"><img src="../images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

  <div class="card">
   <a href="#"><img src="../images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

  <div class="card">
    <a href="#"><img src="../images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

  <div class="card">
    <a href="#"><img src="../images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

  <div class="card">
   <a href="#"><img src="../images/batiment-avec-fond/avoir/antique.jpg" alt="sample67"/></a>
    <div>
      <h3>Rouen</h3>
      <p>Eglise de Rouen</p>
    </div>
    <a href="#"></a>
  </div>

</div>
        
</section>

<footer>Mentions légales</footer>
</body>

</html>