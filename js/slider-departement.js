
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
      console.log("true");
      console.log(count);

      if (count == 0) {
        imageslider.src = "https://27.monvillagenormand.fr/images/300/427000018.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/327000034.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/327000034.webp";
      }

      if (count == 1) {
          
        imageslider.src= "https://27.monvillagenormand.fr/images/300/327000359.webp";
        imageslider1.src = "https://76.monvillagenormand.fr/images/300/376000019.webp";
        imageslider2.src = "https://76.monvillagenormand.fr/images/300/476000272.webp";
      }
      if (count == 2) {
        imageslider.src = "https://76.monvillagenormand.fr/images/300/476003271.webp";
        imageslider1.src = "https://76.monvillagenormand.fr/images/300/476003261.webp";
        imageslider2.src = "https://76.monvillagenormand.fr/images/300/276000181.webp";
      }
      if (count == 3) {
        count = 0;
        imageslider.src = "https://27.monvillagenormand.fr/images/300/427000018.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/327000034.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/327000034.webp";
      }

    }

    function maFcontion1() {

      count--;
      console.log(count);
      if (count == 0) {
        imageslider.style.backgroundImage = "url('https://27.monvillagenormand.fr/images/300/327000356.webp')";
        imageslider1.style.backgroundImage = "url('https://27.monvillagenormand.fr/images/300/327000357.webp')";
        imageslider2.style.backgroundImage = "url('https://27.monvillagenormand.fr/images/300/327000359.webp')";
      }
      if (count == 1) {
        imageslider.src= "https://27.monvillagenormand.fr/images/300/Q27000009.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/K27000001.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/X27000006.webp";
      }
      if (count == 2) {
        imageslider.src = "https://27.monvillagenormand.fr/images/300/s27000040.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/s27000141.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/L27100001.webp";
      }
      if (count == -1) {
        count = 0;
        imageslider.src = "https://27.monvillagenormand.fr/images/300/427000018.webp";
        imageslider1.src = "https://27.monvillagenormand.fr/images/300/327000034.webp";
        imageslider2.src = "https://27.monvillagenormand.fr/images/300/327000034.webp";
      }

    }

    console.log(count)
    if (count == 1) {
      card_img1.style.backgroundImage = "url('../images/batiment-avec-fond/avoir/eglisecatholique.jpg')";
    }

   
  
