let page_parent = document.querySelector('.parent-container');
let page_nounou = document.querySelector('.nounou-container');

let page_parentform = document.querySelector('.parent-container form');
let page_nounouform = document.querySelector('.nounou-container form');


let box_nounou = document.querySelector('.nounou-container .box');
let box_parent = document.querySelector('.parent-container .box');

console.log(box_nounou)
console.log(box_parent)

let btn_creercompte = document.getElementById('btn-creer');
let btn_parent = document.getElementById('btn-parent');

function condition(){
    if(box_nounou.styles.display == 'none'){
        box_parent.styles.display = 'none';
        page_parentform.styles.display = 'block';
    }else{
        box_parent.styles.display = 'block';
        page_parentform.styles.display = 'none';
    }
}

function avtive(page1) {
    
}

console.log(btn_creercompte)

btn_creercompte.addEventListener('click', ()=>{
    box_parent.style.display = 'block';
    box_nounou.style.display = 'none';
    page_nounouform.style.display = 'block';
    page_parentform.style.display = 'none';

    page_parent.style.width = '40%';
    page_nounou.style.width = '60%';
    
})
btn_parent.addEventListener('click', ()=>{
    box_parent.style.display = 'none';
    box_nounou.style.display = 'block';
    page_nounouform.style.display = 'none';
    page_parentform.style.display = 'block';

    page_parent.style.width = '60%';
    page_nounou.style.width = '40%';

})



/*

var mdp1 = document.getElementById("mdp");
var mdp2 = document.getElementById("mdp2");
var mdpMatchMessage = document.getElementById("mdpMatchMessage");
var btn_nounou = document.getElementById("btn_in");

// Fonction pour vérifier si les mots de passe correspondent
function verifierMdp() {
    if (mdp1.value !== mdp2.value) {
        mdpMatchMessage.textContent = "Les mots de passe ne correspondent pas";
        mdp2.style.borderColor = "red"; // Ajoutez une bordure rouge pour indiquer une erreur
        btn_nounou.disabled = true; // Désactivez le bouton de soumission
    } else {
        mdpMatchMessage.textContent = ""; // Effacez le message d'erreur
        mdp2.style.borderColor = ""; // Réinitialisez la couleur de la bordure
        btn_nounou.disabled = false; // Activez le bouton de soumission
    }
}

// Écoutez les événements de saisie sur les champs de mot de passe
mdp1.addEventListener("input", verifierMdp);
mdp2.addEventListener("input", verifierMdp);*/