let membre = document.getElementById("membre").getElementsByTagName("p");
let membreLien = document.getElementById("membre").getElementsByTagName("a");
let adminDepartement = document.getElementById("admindep").getElementsByTagName("p");
let adminDepartementLien = document.getElementById("admindep").getElementsByTagName("a");


membre[0].addEventListener('click', function(){
    if (adminDepartementLien[0].classList == 'menu__item_gestion_admindep lienActif'){
        
        for (i=0; i<adminDepartementLien.length; i++){
            adminDepartementLien[i].classList.remove("lienActif");
            }

            for (i=0; i<membreLien.length; i++){
                membreLien[i].classList.toggle("lienActif");
                }
    }
    else{
        for (i=0; i<membreLien.length; i++){
    membreLien[i].classList.toggle("lienActif");
    }
}
});

adminDepartement[0].addEventListener('click', function(){
    if (membreLien[0].classList == 'menu__item_gestion_membre lienActif'){
        

        for (i=0; i<membreLien.length; i++){
            membreLien[i].classList.remove("lienActif");
            }

            for (i=0; i<adminDepartementLien.length; i++){
                adminDepartementLien[i].classList.toggle("lienActif");
            }
    }
    else{
    for (i=0; i<adminDepartementLien.length; i++){
    adminDepartementLien[i].classList.toggle("lienActif");
    }
}
});