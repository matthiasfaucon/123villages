<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="..\css\style.css"> 
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
  <header>
    <p id="logoTypo">MonVillageNormand.fr</p>
    <div id="searchBarre"><p>Rechercher un village...</p><a href="departement.html"><div id="research"></div></a></div>
    <div id="banner"><img src="images/banniere_deskstop.jpg"></div>
  </header> 
  <div id="div_title_lieu"> 
        <h1 id="title_lieu">Château d'Harcourt (Eure)</h1>
    </div>
   <div id="txt-img-lieu">
    <div id="txt-infos-lieu">
        <p>
            Au cœur d'une forêt de 95 hectares, le château des XIIe-XIVe siècles remanié au XVIIe siècle est entouré d'une partie du mur d'enceinte et bordé d'un double fossé. Une exposition permanente présente aux visiteurs l'histoire du château, l'évolution de son architecture et l'histoire de la famille d'Harcourt. Véritable patrimoine végétal faisant pendant aux qualités architecturales du bâtiment, l'arboretum comprend 470 espèces d'arbres réparties sur 11 hectares. Créé au début du XIXe siècle, il fût l'un des premiers arboretums de France à introduire certaines espèces encore inconnues alors, comme les cèdres du Liban ou les séquoias
        </p>
    </div>  
    <div id="cont-img-infos">
    <div id="img-lieu">
    </div> 

    <div id="infolocal">  
        <div>
        <p>Type :Château fort</p>
        <p>Mail :harcourt@cg27.fr</p>
        <p>Site Internet: http://www.harcourt-normandie.fr</p>
        <p>Téléphone :+33 2 32 46 29 70</p>
        <p>Fax :+33 2 32 46 53 38</p>
        <p>Adresse: 13 rue du Château 27800 Harcourt</p>
        <p>Coordonnées GPS: 49.1738014221, 0.7868893743</p>
        
    </div>
 </div> 
 <div id="maCarte1"> </div> 
    <!-- Fichiers Javascript -->
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
<script>
    // On initialise la carte
    var carte = L.map('maCarte1').setView([48.852969, 2.349903], 13);
    
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
</div> 
<section id="journee-patrimoine">  
<ul>
  <li class="date">2013</li>
  <li class="date">2014</li>
  <li class="date">2015</li>
  <li class="date">2018</li>
  <li class="date">2019</li>  
  <li class="date">2020</li>
  <li class="date">2021</li>
</ul>
<div id="txt-journee-patrimoine">
  <h2 id="titre-txt-journee-patrimoine">Journée du patrimoine 2013</h2> 
  
  <p id="p-txt-journee-patrimoine">4817 Chasse aux papillons nocturnes </br>
4818 La conférence des oiseaux, théâtre d'Illusia </br>
4819 visite guidée </br>
4820 Visite libre </br></p>
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
  <footer>Mentions légales</footer> 
  <script>  
 
 let date=document.getElementsByClassName("date"); 
 let kl=document.getElementsByClassName("date").value;
 
 
 
 
 
 
 
 
 date[0].addEventListener("click", function(){
   document.getElementById("titre-txt-journee-patrimoine").innerHTML="Journée du patrimoine 2013";
   document.getElementById("p-txt-journee-patrimoine").innerHTML = "4817 Chasse aux papillons nocturnes </br> 4818 La conférence des oiseaux, théâtre d'Illusia </br> 4819 visite guidée </br> 4820 Visite libre </br>"; 
   console.log(kl); 
  }); 
 
 date[1].addEventListener("click", function(){
   document.getElementById("titre-txt-journee-patrimoine").innerHTML="Journée du patrimoine 2014";
   document.getElementById("p-txt-journee-patrimoine").innerHTML = "4760 Exposition Les arbres remarquables de France </br>4761 Présentation des recherches archéologiques récentes</br>4762 visite guidée </br>4763 Visite guidée A la découverte des arbres remarquables de l'arboretum </br>4764 Visite libre";
  }); 
  </script>

</body>
</html>