let membre = document.getElementById("membre").getElementsByTagName("p");
let membreLien = document.getElementById("membre").getElementsByTagName("a");

membre[0].addEventListener('click', function(){
    for (i=0; i<membreLien.length; i++){
        membreLien[i].classList.toggle("lienActif");
        }
    });