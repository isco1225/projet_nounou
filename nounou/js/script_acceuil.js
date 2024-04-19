let btn_compte = document.getElementById('btn-compte2'); 
let liste = document.querySelector(".liste");

btn_compte.addEventListener('mouseover', ()=>{
    liste.style.display = 'block';
})
btn_compte.addEventListener("mouseleave", ()=>{
    liste.addEventListener("mouseleave", ()=>{
        liste.style.display = "none";
    })
})

