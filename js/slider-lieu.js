let date = document.getElementsByClassName("date"); 
const datep = document.getElementById("datep");
    let kl = document.getElementsByClassName("date").value;
    const voir = document.getElementById("voir-photos"); 

    let arr =document.getElementById("#Calque_1"); 

    const next = document.getElementsByClassName("w-img-nav_next")[0];
    const pre = document.getElementsByClassName("w-img-nav_previous")[0];

    const imageslider = document.getElementById("img1");
    const imageslider1 = document.getElementById("img2");
    const imageslider2 = document.getElementById("img3");
    const bt_txt = document.getElementById("txt-infos-lieu-bt"); 

    var huit = document.querySelector("#journee-patrimoine li:nth-child(4)");   
    
    var cinq = document.querySelector("#journee-patrimoine li:nth-child(5)"); 
  
    var quatre = document.querySelector("#journee-patrimoine li:nth-child(6)"); 
    
    var trois = document.querySelector("#journee-patrimoine li:nth-child(7)"); 
    



    bt_txt.addEventListener("click", function() {
      document.getElementById("txt-infos-lieu").classList.toggle("active");
    });  

    
    datep.addEventListener("click", function() {
      huit.classList.toggle("active");
      cinq.classList.toggle("active");
      quatre.classList.toggle("active");
      trois.classList.toggle("active"); 
    }); 


    var count = 0;

    // il faut changer les noms des variables parce que c'est les memes que dans ville.php


    voir.addEventListener("click", function() {

      document.getElementById("test-slider-lieu").classList.toggle("active");
    });




    next.addEventListener("click", maFcontion);
    pre.addEventListener("click", maFcontion1);

    function maFcontion() {

      count++;


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
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journ??e du patrimoine 2013";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "4817 Chasse aux papillons nocturnes </br> 4818 La conf??rence des oiseaux, th????tre d'Illusia </br> 4819 visite guid??e </br> 4820 Visite libre </br>";
      
    });

    date[5].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journ??e du patrimoine 2014";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "4760 Exposition Les arbres remarquables de France </br>4761 Pr??sentation des recherches arch??ologiques r??centes</br>4762 visite guid??e </br>4763 Visite guid??e A la d??couverte des arbres remarquables de l'arboretum </br>4764 Visite libre";
    });

    date[4].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journ??e du patrimoine 2015";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "5044 visite guid??e</br>5045 Visite libre</br>4762 visite guid??e </br>5046 Visite th??atralis??e - Domaine ?? vendre";
    });

    date[3].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journ??e du patrimoine 2018";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "9512599 Visite libre du domaine d'Harcourt, ch??teau et arboretum</br>15930892 Visite libre du Chantier Chapentiers sans fronti??res";
    });

    date[2].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journ??e du patrimoine 2019";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "56071185 Spectacle de th????tre jeune public au domaine d'Harcourt</br>60300153 Lecture musicale au domaine d'Harcourt</br>4762 visite guid??e";
    });

    date[1].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journ??e du patrimoine 2020";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "20437322 Visite libre du domaine d'Harcourt, ch??teau et arboretum</br>73767743 Savoir-faire : de lin ?? l'autre - Art ??ph??m??re extraordinaire par Fran??ois Ab??lanet";
    });

    date[0].addEventListener("click", function() {
      document.getElementById("titre-txt-journee-patrimoine").innerHTML = "Journ??e du patrimoine 2021";
      document.getElementById("p-txt-journee-patrimoine").innerHTML = "64639888 Installation d'une oeuvre d'art contemporain immersive par Anne Blanchet";
    });