
    let date = document.getElementsByClassName("date");
    let kl = document.getElementsByClassName("date").value;
    const voir = document.getElementById("voir-photos");

    const next = document.getElementsByClassName("w-img-nav_next")[0];
    const pre = document.getElementsByClassName("w-img-nav_previous")[0];

    const imageslider = document.getElementById("img1");
    const imageslider1 = document.getElementById("img2");
    const imageslider2 = document.getElementById("img3");




    var count = 0;

    // il faut changer les noms des variables parce que c'est les memes que dans ville.php






    next.addEventListener("click", maFcontion);
    pre.addEventListener("click", maFcontion1);

    function maFcontion() {

      count++;
      

      if (count == 0) {
        imageslider.src = "https://76.monvillagenormand.fr/images/300/476000046.webp";
        imageslider1.src = "https://76.monvillagenormand.fr/images/300/U76000052.webp";
        imageslider2.src = "https://76.monvillagenormand.fr/images/300/s76000083.webp";
      }

      if (count == 1) {
          
        imageslider.src= "https://76.monvillagenormand.fr/images/300/A76000181.webp"; //Cirque-théâtre
        imageslider1.src = "https://76.monvillagenormand.fr/images/300/876000089.webp"; //Gare
        imageslider2.src = "https://76.monvillagenormand.fr/images/300/J76000056.webp"; //Square Saint-Jean
      }
      if (count == 2) {
        imageslider.src = "https://76.monvillagenormand.fr/images/300/576000060.webp"; //Mairie
        imageslider1.src = "https://76.monvillagenormand.fr/images/300/676000076.webp"; //Chêne à la vierge
        imageslider2.src = "https://76.monvillagenormand.fr/images/300/M76000258.webp"; //fabrique des savoirs
      }
      if (count == 3) {
        imageslider.src = "https://76.monvillagenormand.fr/images/300/476000046.webp";
        imageslider1.src = "https://76.monvillagenormand.fr/images/300/U76000052.webp";
        imageslider2.src = "https://76.monvillagenormand.fr/images/300/s76000083.webp"; 
        count = 0;
      }

    }

    function maFcontion1() {

      count--;
    
      if (count == 0) {
        imageslider.src = "https://76.monvillagenormand.fr/images/300/476000046.webp";
        imageslider1.src = "https://76.monvillagenormand.fr/images/300/U76000052.webp";
        imageslider2.src = "https://76.monvillagenormand.fr/images/300/s76000083.webp";
      }
      if (count == 1) {
        imageslider.src= "https://76.monvillagenormand.fr/images/300/A76000181.webp"; //Cirque-théâtre
        imageslider1.src = "https://76.monvillagenormand.fr/images/300/876000089.webp"; //Gare
        imageslider2.src = "https://76.monvillagenormand.fr/images/300/J76000056.webp"; //Square Saint-Jean
      }
      if (count == 2) {
        imageslider.src = "https://76.monvillagenormand.fr/images/300/576000060.webp"; //Mairie
        imageslider1.src = "https://76.monvillagenormand.fr/images/300/676000076.webp"; //Chêne à la vierge
        imageslider2.src = "https://76.monvillagenormand.fr/images/300/M76000258.webp"; //fabrique des savoirs
      }
      if (count == -1) {
        count = 0;
        imageslider.src = "https://76.monvillagenormand.fr/images/300/476000046.webp";
        imageslider1.src = "https://76.monvillagenormand.fr/images/300/U76000052.webp";
        imageslider2.src = "https://76.monvillagenormand.fr/images/300/s76000083.webp";
      }

    }

    console.log(count)
    if (count == 1) {
      card_img1.style.backgroundImage = "url('../images/batiment-avec-fond/avoir/eglisecatholique.jpg')";
    }

   
  
