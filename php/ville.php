<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Ville</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="..\css\style.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="../images/favicon.svg">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>

  <header>
    <p id="logoTypo">LaVieDuVillage.fr</p>
    <div id="searchBarre">
      <p>Rechercher un village...</p><a href="departement.php">
        <div id="research"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path d="M236 176c0 15.46-12.54 28-28 28S180 191.5 180 176S192.5 148 208 148S236 160.5 236 176zM500.3 500.3c-15.62 15.62-40.95 15.62-56.57 0l-119.7-119.7c-40.41 27.22-90.9 40.65-144.7 33.46c-91.55-12.23-166-87.28-177.6-178.9c-17.24-136.2 97.29-250.7 233.4-233.4c91.64 11.6 166.7 86.07 178.9 177.6c7.19 53.8-6.236 104.3-33.46 144.7l119.7 119.7C515.9 459.3 515.9 484.7 500.3 500.3zM294.1 182.2C294.1 134.5 255.6 96 207.1 96C160.4 96 121.9 134.5 121.9 182.2c0 38.35 56.29 108.5 77.87 134C201.8 318.5 204.7 320 207.1 320c3.207 0 6.26-1.459 8.303-3.791C237.8 290.7 294.1 220.5 294.1 182.2z" />
          </svg></div>
      </a>
    </div>
    <div id="banner"><img src="../images/banniere.jpg" /></div>
  </header>
  <section id="nom-ville">
    <div id="txt-nom-ville">
      <p>Elbeuf</p>
    </div>
    <div id="code-postal">
      <p>76500</p>
    </div>
    <div id="village_fleuri">
      <div>
        <p>village fleuri</p>
        <img src="">
      </div>
    </div>
  </section>
  <section id="presentation">
    <h1>Présentation</h1>
    <div id="txt-card">
      <p>Le village de Elbeuf-sur-Seine (76500), est situé dans le département de Seine-Maritime (76). Voici un complet de ses monuments historiques, de son histoire, de ses services publics et de ses commerces.</p>
      <div id="carte-ville">
        <!-- <img src="https://76.monvillagenormand.fr/images/300/176000077.webp" id="id"> -->
      </div>
    </div>
  </section>
  <section id="activites-ville">
    <h1>Activités à Elbeuf</h1>
    <div id="menuSecondaireHorizontal">
      <span class="menu-link">Services</span>
      <span class="menu-link">Patrimoine</span>
      <span class="menu-link">Commerces</span>
      <span class="menu-link">Découvrir</span>

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

  <section id="presentationCarte">
    <h1>Notre sélection pour la Seine-Marritime</h1>
    <div class="contenerCard">
      <div class="cards">
        <div class="card">
          <div class="card-background" style="background-image: url(../images/batiment-avec-fond/avoir/eglisecatholique.jpg);"></div>
          <div class="ville">
            <h3>Elbeuf</h3>
          </div>../
          <div class="monument">
            <p>Eglise d'Elbeuf</p>
          </div>
        </div>

        <div class="card">
          <div class="card-background" style="background-image: url(../images/batiment-avec-fond/avoir/eglisecatholique.jpg);"></div>
          <div class="ville">
            <h3>Elbeuf</h3>
          </div>
          <div class="monument">
            <p>Eglise d'Elbeuf</p>
          </div>
        </div>

        <div class="card">
          <div class="card-background" style="background-image: url(../images/batiment-avec-fond/avoir/eglisecatholique.jpg);"></div>
          <div class="ville">
            <h3>Elbeuf</h3>
          </div>
          <div class="monument">
            <p>Eglise d'Elbeuf</p>
          </div>
        </div>

        <div class="card">
          <div class="card-background" style="background-image: url(../images/batiment-avec-fond/avoir/eglisecatholique.jpg);"></div>
          <div class="ville">
            <h3>Elbeuf</h3>
          </div>
          <div class="monument">
            <p>Eglise d'Elbeuf</p>
          </div>
        </div>

        <div class="card">
          <div class="card-background" style="background-image: url(../images/batiment-avec-fond/avoir/eglisecatholique.jpg);"></div>
          <div class="ville">
            <h3>Elbeuf</h3>
          </div>
          <div class="monument">
            <p>Eglise d'Elbeuf</p>
          </div>
        </div>

        <div class="card">
          <div class="card-background" style="background-image: url(../images/batiment-avec-fond/avoir/eglisecatholique.jpg);"></div>
          <div class="ville">
            <h3>Elbeuf</h3>
          </div>
          <div class="monument">
            <p>Eglise d'Elbeuf</p>
          </div>
        </div>

        <div class="card">
          <div class="card-background" style="background-image: url(../images/batiment-avec-fond/avoir/eglisecatholique.jpg);"></div>
          <div class="ville">
            <h3>Elbeuf</h3>
          </div>
          <div class="monument">
            <p>Eglise d'Elbeuf</p>
          </div>
        </div>

        <div class="card">
          <div class="card-background" style="background-image: url(../images/batiment-avec-fond/avoir/eglisecatholique.jpg);"></div>
          <div class="ville">
            <h3>Elbeuf</h3>
          </div>
          <div class="monument">
            <p>Eglise d'Elbeuf</p>
          </div>
        </div>
      </div>

  </section>





  </section>


  <section id="test-presentation-cat">
    <div id="main_carrousel">
      <div class="w-img-nav_previous">
        <i class="i-previous"><svg width="12" height="18" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 1 3 9l8 8" stroke-width="3" fill="none" fill-rule="evenodd"></path>
          </svg></i>
      </div>
      <div id="img-primary-wrapper">
        <div class="card_leo">
          <div class="img-slider-fond">
            <!-- <img id="card_leo_img1" src="..\images\batiment-avec-fond\avoir\chateau.jpg"> -->
          </div>
          <div class="info_card_leo">
            <div></div> <!--  rond -->
            <p>Elbeuf</p>
          </div>
          <div>
            <p>chateau de Léo</p>
          </div>
        </div>
        <div class="card_leo">
          <div class="img-slider-fond1">
            <!-- <img id="card_leo_img2" src="..\images\batiment-avec-fond\avoir\colombier.jpg">  -->
          </div>
          <div class="info_card_leo">
            <div></div> <!--  rond -->
            <p>Elbeuf</p>
          </div>
          <div>
            <p>chateau de Léo</p>
          </div>
        </div>



      </div>
      <div class="w-img-nav_next">
        <i class="i-next"><svg width="13" height="18" xmlns="http://www.w3.org/2000/svg">
            <path d="m2 1 8 8-8 8" stroke-width="3" fill="none" fill-rule="evenodd"></path>
          </svg></i>
      </div>

    </div>

  </section>

  <!-- <div class="card_leo">
        <img src="..\images\batiment-avec-fond\avoir\chateau.jpg"> 
        <div class="info_card_leo">
          <div></div>
          <p>Elbeuf</p>
        </div>
        <div>
        <p>chateau de Léo</p> 
        </div>
    </div>  

    <div class="card_leo">
        <img src="..\images\batiment-avec-fond\avoir\chateau.jpg"> 
        <div class="info_card_leo">
          <div></div>
          <p>Elbeuf</p>
        </div>
        <div>
        <p>chateau de Léo</p> 
        </div>
    </div>  

    <div class="card_leo">
        <img src="..\images\batiment-avec-fond\avoir\chateau.jpg"> 
        <div class="info_card_leo">
          <div></div>
          <p>Elbeuf</p>
        </div>
        <div>
        <p>chateau de Léo</p> 
        </div>
    </div>  

    <div class="card_leo">
        <img src="..\images\batiment-avec-fond\avoir\chateau.jpg"> 
        <div class="info_card_leo">
          <div></div>
          <p>Elbeuf</p>
        </div>
        <div>
        <p>chateau de Léo</p> 
        </div>
    </div>   -->
  </section>
  <footer>Mentions légales</footer>
  <script>
    const next = document.getElementsByClassName("w-img-nav_next")[0];
    const pre = document.getElementsByClassName("w-img-nav_previous")[0];

    const card_img1 = document.getElementsByClassName("img-slider-fond")[0];
    const card_img2 = document.getElementsByName("img-slider-fond1")[0];
    var count = 0;

    next.addEventListener("click", maFcontion);
    pre.addEventListener("click", maFcontion1);

    function maFcontion() {

      count++;
      console.log("true");
       console.log(count);
       if (count == 0) {
      card_img1.style.backgroundImage = "url('../images/batiment-avec-fond/avoir/colombier.jpg')";
    }
      if (count == 1) {
      card_img1.style.backgroundImage = "url('../images/batiment-avec-fond/avoir/eglisecatholique.jpg')";
    }  
    if (count == 2) {
      card_img1.style.backgroundImage = "url('../images/batiment-avec-fond/avoir/chateau.jpg')";
    } 
    if (count == 3)
    {
      count=0; 
    }

    }

    function maFcontion1() {

      count--;
      console.log(count); 
      if (count == 0) {
      card_img1.style.backgroundImage = "url('../images/batiment-avec-fond/avoir/colombier.jpg')";
    }
      if (count == 1) {
      card_img1.style.backgroundImage = "url('../images/batiment-avec-fond/avoir/eglisecatholique.jpg')";
    }  
    if (count == 2) {
      card_img1.style.backgroundImage = "url('../images/batiment-avec-fond/avoir/chateau.jpg')";
    } 
    if (count == -1)
    {
      count=0; 
    }

    }

    console.log(count)
    if (count == 1) {
      card_img1.style.backgroundImage = "url('../images/batiment-avec-fond/avoir/eglisecatholique.jpg')";
    }
  </script>
</body>


</html>