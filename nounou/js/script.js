// PARTIE ACTIONS DES BOUTONS ET DES LIENS

//Boutons

let btn_connexion = document.getElementById('btn-connexion');
let btn_inscription = document.getElementById('btn-inscription');

btn_connexion.addEventListener('click', ()=>{
    window.location.href = "//localhost/nounou/php/page_connexion.php";
})
btn_inscription.addEventListener('click', ()=>{
    window.location.href = "//localhost/nounou/php/page_inscription.php";
})