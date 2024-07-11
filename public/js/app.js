const btn_menu=document.getElementById("menu");
const navbar=document.getElementById("lista");

btn_menu.addEventListener("click", ()=>{
    if (navbar.classList.contains("visible")) {
        navbar.classList.remove("visible"); // Si está presente, quítala
    } else {
        navbar.classList.add("visible"); // Si no está presente, agrégala
    }


})