console.log("Iniciando...");

const enlace = document.querySelector("a#enlace_megamenu");
const megamenu = document.querySelector("nav.megamenu");
const offcanvas = document.querySelector("nav.offcanvas");
const enlace_menu_usuario = document.querySelector("a#menu_usuario");
const loader = document.querySelector("#loader");

const totop = document.querySelector("#totop");

const dialog = document.querySelector("#dialogRegistro");
const btnRegistro = document.querySelector("#btnRegistro");

const btnMinimize = document.querySelector("#minimize");
const menuAdmin = document.querySelector("div.admin aside");



enlace.addEventListener("click", function(){
    console.log("sda");
    megamenu.classList.toggle("reveal");
});


enlace.addEventListener("click", () => megamenu.classList.toggle("reveal") );

if(enlace_menu_usuario) enlace_menu_usuario.addEventListener("click", function(){
    offcanvas.classList.toggle("reveal");
})

window.addEventListener("load",()=>{
    console.log("Página cargada!");
    loader.classList.add("finished");
})

document.addEventListener("scroll", debounce(eventoScroll) );

function eventoScroll(){
    if( window.scrollY > window.innerHeight ) totop.classList.add("reveal");
    else  totop.classList.remove("reveal");

   /* if(window.scrollY> 1500){
        document.body.style.backgroundColor="green";
    }*/
}


/* btnRegistro.addEventListener("click",()=>{
    dialog.showModal();
})*/


function debounce( fn ){

    let timer;

    return ()=>{
        if(timer) clearTimeout(timer);
        timer = setTimeout( fn, 300);
    }

}

btnMinimize.addEventListener("click", ()=>{
    menuAdmin.classList.toggle("minimize");
})