const btnShow = document.getElementById('btn-show');
const secondaryServices = document.getElementById('secondaryServices');
const btnMenu = document.getElementById('iconMenu');
const menu = document.getElementById('menu-mobile');
const btnCloseMenu = document.getElementById('close-icon');
function showServices(){
    secondaryServices.classList.toggle('active');
}

function showMenu() {
    menu.classList.toggle('active');
    btnMenu.classList.toggle('hidden')
}