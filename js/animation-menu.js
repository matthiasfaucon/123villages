let membre = document.getElementById("membre").getElementsByTagName("p");
let membreLien = document.getElementById("membre").getElementsByTagName("a");
let admin = document.getElementById("admin").getElementsByTagName("p");
let adminLien = document.getElementById("admin").getElementsByTagName("a");
let adminDepartement = document.getElementById("admindep").getElementsByTagName("p");
let adminDepartementLien = document.getElementById("admindep").getElementsByTagName("a");
console.log("coucou");

membre[0].addEventListener('click', function(){
    if (adminLien[0].classList == 'menu__item_gestion_admin lienActif' || adminDepartementLien[0].classList == 'menu__item_gestion_admindep lienActif'){
        console.log("coucou2");
        for (i=0; i<adminLien.length; i++){
            adminLien[i].classList.remove("lienActif");
            }
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

admin[0].addEventListener('click', function(){
        if (membreLien[0].classList == 'menu__item_gestion_membre lienActif' || adminDepartementLien[0].classList == 'menu__item_gestion_admindep lienActif'){
            console.log("coucou2");
            for (i=0; i<membreLien.length; i++){
                membreLien[i].classList.remove("lienActif");
                }
            for (i=0; i<adminDepartementLien.length; i++){
                adminDepartementLien[i].classList.remove("lienActif");
                }
    
                for (i=0; i<adminLien.length; i++){
                    adminLien[i].classList.toggle("lienActif");
                    }
        }
        else{
    for (i=0; i<adminLien.length; i++){
    adminLien[i].classList.toggle("lienActif");
    }
}
});

adminDepartement[0].addEventListener('click', function(){
    if (membreLien[0].classList == 'menu__item_gestion_membre lienActif' || adminLien[0].classList == 'menu__item_gestion_admin lienActif'){
        console.log("coucou2");
        for (i=0; i<adminLien.length; i++){
            adminLien[i].classList.remove("lienActif");
            }
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