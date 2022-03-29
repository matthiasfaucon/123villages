profil = document.getElementById('profil');
cacher = document.getElementById('cacher');
menuProfil = document.getElementById('menuProfil');

  profil.addEventListener('click', function(){
    if (cacher.className === "non-active") {
    cacher.className = "active";
  } else {
    cacher.className = "non-active";
  }
    menuProfil.classList.toggle("ouvrir");
  })