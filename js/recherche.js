let searchBarre = document.getElementById("text");
let affichage = document.getElementById("affichage");
let loupe = document.getElementById("research");

searchBarre.addEventListener('click', function(){
  if (affichage.className === "non-activeAffichage") {
  affichage.className = "activeAffichage";
} else {
  affichage.className = "non-activeAffichage";
}
})

loupe.addEventListener('click', function(){
  if (affichage.className === "activeAffichage") {
  affichage.className = "non-activeAffichage";
}

else{
  affichage.className = "non-activeAffichage";
}
})

