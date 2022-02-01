<!-- <?php

    include 'php/verif_script.php';

?> -->

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
  <!-- <script src="script.js"></script> -->
</head>
<body>

<header>
    <p id="logoTypo">MonVillageNormand.fr</p>
    <div id="searchBarre"><p>Rechercher un village...</p><a href="departement.html"><div id="research"></div></a></div>
    <div id="banner"><img src="images/banniere_deskstop.jpg"></div>
</header>

<section id="presentation">
    <h1>L'office du tourisme des villages</h1>
    <div id="boxinfo">
    <div class="info"><p>Envie de connaître le passé de votre village et des hommes qui l'ont habité ?</p></div>
    <div class="info"><p>Passionné de vieilles pierres, vous voulez découvrir des endroits insolites, apprendre leur histoire et les localiser ?</p></div>
    <div class="info"><p>Vous ne vous rappelez plus du résultat des dernières élections ?</p></div>
    <div class="info"><p>Organisateur d'un séjour dans notre belle région, vous recherchez les meilleures adresses ?</p></div>
    <div class="info"><p>Quels sont les horaires d'ouverture de la bibliothèque ?</p></div>
    </div> 
    <hr> 
</section>

<section id="trouverLieux">
    <h1>Vous ne savez pas où aller ?</h1>
    <div id="recherche">
    <div id="boutonRecherche"><p>Trouver un village avec notre sélection</p></div>
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
    </div>
    <hr>
</section>

<section id="choixAPresenter">
    <h1>A découvrir</h1>
    <div class="contenerCard">
    <div class="cards">
      <div class="card">
        <div class="card-background" style="background-image: url(images/bleu.jpg);"></div>
          <div class="ville">
            <h3>Rouen</h3>
          </div>
          <div class="monument">
            <p>Eglise de barentin</p>
          </div>
      </div>

      <div class="card">
        <div class="card-background" style="background-image: url(images/bleu.jpg);"></div>
          <div class="ville">
            <h3>Rouen</h3>
          </div>
          <div class="monument">
            <p>Eglise de barentin</p>
          </div>
      </div>

      <div class="card">
        <div class="card-background" style="background-image: url(images/bleu.jpg);"></div>
          <div class="ville">
            <h3>Rouen</h3>
          </div>
          <div class="monument">
            <p>Eglise de barentin</p>
          </div>
      </div>

      <div class="card">
        <div class="card-background" style="background-image: url(images/bleu.jpg);"></div>
          <div class="ville">
            <h3>Rouen</h3>
          </div>
          <div class="monument">
            <p>Eglise de barentin</p>
          </div>
      </div>

      <div class="card">
        <div class="card-background" style="background-image: url(images/bleu.jpg);"></div>
          <div class="ville">
            <h3>Rouen</h3>
          </div>
          <div class="monument">
            <p>Eglise de barentin</p>
          </div>
      </div>

      <div class="card">
        <div class="card-background" style="background-image: url(images/bleu.jpg);"></div>
          <div class="ville">
            <h3>Rouen</h3>
          </div>
          <div class="monument">
            <p>Eglise de barentin</p>
          </div>
      </div>

      <div class="card">
        <div class="card-background" style="background-image: url(images/bleu.jpg);"></div>
          <div class="ville">
            <h3>Rouen</h3>
          </div>
          <div class="monument">
            <p>Eglise de barentin</p>
          </div>
      </div>

      <div class="card">
        <div class="card-background" style="background-image: url(images/bleu.jpg);"></div>
          <div class="ville">
            <h3>Rouen</h3>
          </div>
          <div class="monument">
            <p>Eglise de barentin</p>
          </div>
      </div>
</div>
        
  </section>



</body>

</html>