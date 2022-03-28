let searchBarre = document.getElementById("searchBarre");
let affichage = document.getElementById("affichage");

console.log("coucou");
searchBarre.addEventListener('click', function(){
  if (affichage.className === "non-activeAffichage") {
  affichage.className = "activeAffichage";
} else {
  affichage.className = "non-activeAffichage";
}
})