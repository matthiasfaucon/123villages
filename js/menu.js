let menuToggleDiv = document.getElementById('menuToggleDiv');
let menuToggle = document.getElementsByClassName('menuToggle');
let toggle = document.getElementById('toggle');
let apparitionMenu = document.getElementById('apparitionMenu');



toggle.onclick = function () {
    toggle.classList.toggle('active');
    menuToggleDiv.style.display = "block";
    apparitionMenu.classList.toggle("active");
}

document.onclick = function (e) {

    if (e.target.id !== 'toggle') {
        toggle.classList.remove('active');
        menuToggleDiv.style.display = "none";
    }

    if (toggle.classList == '') {
        menuToggleDiv.style.display = "none";
    }

}