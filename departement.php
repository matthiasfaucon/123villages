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
    <h1>Présentation</h1>
    <div class="positionPresentation">
    <div id="boutonCodePostal"><p>Trouver votre village</p></div>
    <div id="infoDepartement"><p>Bien sûr, tout le monde connaît les très grandes villes de Seine-Maritime (76) que sont <a>Rouen</a>, <a>Dieppe</a>, <a>Havre</a>...</br>
      Mais le département de Seine-Maritime, c'est 745 communes !!!</br>
      Le patrimoine religieux y est remarquable : <a>églises</a>, <a>chapelles</a> et <a>calvaires</a>, mais n'oublions pas le petit patrimoine.</br>
      Qu'il s'agisse de <a>lavoirs</a>, de <a>colombiers</a>, de <a>moulins</a>... le 76 regorge de trésors à découvrir.</br>
      Venez-le (re)-découvrir en flânant sur nos pages avant de partir en <a>promenades</a></p></div>
      </div>
    <hr> 
  </section>

  <section id="activites">
    <div id="menuSecondaireHorizontal">
   <span>Services</span> <span>Patrimoine</span> <span>Commerces</span> <span>Découvrir</span>
    </div>
    <div id="maCarteDepartement"></div>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
<script>
    // On initialise la carte
    var carte = L.map('maCarteDepartement').setView([48.852969, 2.349903], 13);
    
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
<div id="icone">
  <div class="hotel"><p>magasin</p></div>
  <div class="magasin"><p>magasin</p></div>
  <div class="magasin"><p>magasin</p></div>
  <div class="magasin"><p>magasin</p></div>
  <div class="magasin"><p>magasin</p></div>
  <div class="magasin"><p>magasin</p></div>
  <div class="magasin"><p>magasin</p></div>
  <div class="magasin"><p>magasin</p></div>
</div>

    
    <hr>
  </section>
  
</body>

</html>