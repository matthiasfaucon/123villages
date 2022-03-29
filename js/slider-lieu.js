let date = document.getElementsByClassName("date");
    let kl = document.getElementsByClassName("date").value;
    const voir = document.getElementById("voir-photos");

    const next = document.getElementsByClassName("w-img-nav_next")[0];
    const pre = document.getElementsByClassName("w-img-nav_previous")[0];

    const imageslider = document.getElementById("img1");
    const imageslider1 = document.getElementById("img2");
    const imageslider2 = document.getElementById("img3");
    const bt_txt = document.getElementById("txt-infos-lieu-bt");


    bt_txt.addEventListener("click", function() {
      document.getElementById("txt-infos-lieu").style.display = "block";
    }); 



    var count = 0;

    // il faut changer les noms des variables parce que c'est les memes que dans ville.php


    voir.addEventListener("click", function() {

      document.getElementById("test-slider-lieu").style.display = "block";
    });




    next.addEventListener("click", maFcontion);
    pre.addEventListener("click", maFcontion1);

    function maFcontion() {

      count++;
      console.log("true");
      console.log(count);

      if (count == 0) {
        imageslider.src = "https://27.monvillagenormand.fr/images/300/327000356.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/327000357.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/327000359.webp";
      }

      if (count == 1) {

        imageslider.src = "https://27.monvillagenormand.fr/images/300/327000359.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/327000372.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/327000362.webp";
      }
      if (count == 2) {
        imageslider.src = "https://27.monvillagenormand.fr/images/300/327000362.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/327000371.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/327000370.webp";
      }
      if (count == 3) {
        count = 0;
        imageslider.src = "https://27.monvillagenormand.fr/images/300/327000356.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/327000357.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/327000359.webp";
      }

    }

    function maFcontion1() {

      count--;
      console.log(count);
      if (count == 0) {
        imageslider.src = "https://27.monvillagenormand.fr/images/300/327000356.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/327000357.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/327000359.webp";
      }
      if (count == 1) {
        imageslider.src = "https://27.monvillagenormand.fr/images/300/327000359.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/327000372.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/327000362.webp";
      }
      if (count == 2) {
        imageslider.src = "https://27.monvillagenormand.fr/images/300/327000362.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/327000371.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/327000370.webp";
      }
      if (count == -1) {
        count = 0;
        imageslider.src = "https://27.monvillagenormand.fr/images/300/327000356.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/327000357.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/327000359.webp";
      }

    }

    // console.log(count)
    // if (count == 1) {
    //   card_img1.style.backgroundImage = "url('../images/batiment-avec-fond/avoir/eglisecatholique.jpg')";
    // }

    date[6].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journée du patrimoine 2013";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "4817 Chasse aux papillons nocturnes </br> 4818 La conférence des oiseaux, théâtre d'Illusia </br> 4819 visite guidée </br> 4820 Visite libre </br>";
      console.log(kl);
    });

    date[5].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journée du patrimoine 2014";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "4760 Exposition Les arbres remarquables de France </br>4761 Présentation des recherches archéologiques récentes</br>4762 visite guidée </br>4763 Visite guidée A la découverte des arbres remarquables de l'arboretum </br>4764 Visite libre";
    });

    date[4].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journée du patrimoine 2015";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "5044 visite guidée</br>5045 Visite libre</br>4762 visite guidée </br>5046 Visite théatralisée - Domaine à vendre";
    });

    date[3].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journée du patrimoine 2018";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "9512599 Visite libre du domaine d'Harcourt, château et arboretum</br>15930892 Visite libre du Chantier Chapentiers sans frontières";
    });

    date[2].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journée du patrimoine 2019";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "56071185 Spectacle de théâtre jeune public au domaine d'Harcourt</br>60300153 Lecture musicale au domaine d'Harcourt</br>4762 visite guidée";
    });

    date[1].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journée du patrimoine 2020";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "20437322 Visite libre du domaine d'Harcourt, château et arboretum</br>73767743 Savoir-faire : de lin à l'autre - Art éphémère extraordinaire par François Abélanet";
    });

    date[0].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journée du patrimoine 2021";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "64639888 Installation d'une oeuvre d'art contemporain immersive par Anne Blanchet";
    });