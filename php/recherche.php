<script type="text/javascript">
    function creationXHR() {
        var resultat = null;
        try {
            resultat = new XMLHttpRequest();
        } catch (Error) { // Internet Explorer
            try {
                resultat = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (Error) {
                try {
                    resultat = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (Error) { // XMLHttpRequest non supporte par le navigateur
                    resultat = null;
                }
            }
        }
        console.log("creation objet XHR :" + resultat);
        return resultat;
    }

    function traitementReponse() {
        console.log(xhr.readyState);
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                text = xhr.responseText;
                affichage.innerHTML = text;
            } else {
                alert("problème de connection au serveur !");
            }
        }
    }

    document.getElementsByTagName("button")[0].addEventListener("click", function() {

        console.log("demarrage application");
        xhr = creationXHR();
        console.log(xhr.readyState);
        affichage = document.getElementById("affichage");
        console.log('envoi requete AJAX');
        let recherche = document.getElementsByName("recherche")[0].value;
        // envoi de la requête au serveur
        xhr.open("GET", "php/resultat.php?recherche=" + recherche, true);
        console.log(xhr.readyState);
        xhr.onreadystatechange = traitementReponse;
        xhr.send(null);

    })
</script>