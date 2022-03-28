let searchBarre = document.getElementById("text");
let affichage = document.getElementById("affichage");
let nonCliquable = document.getElementById("research");

console.log("coucou");

searchBarre.addEventListener('click', function(){
  if (affichage.className === "non-activeAffichage") {
  affichage.className = "activeAffichage";
} else {
  affichage.className = "non-activeAffichage";
}

})

