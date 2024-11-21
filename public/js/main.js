//Todos los archivos JS conectan aquí
//IMPORTACIONES
import { navFunctionality } from "./nav.js";
import { allRedirections } from "./redirections.js";

//Los captura el DOM
document.addEventListener('DOMContentLoaded', () => {
    //Funcionalidad del NAV
    navFunctionality();
    //Redirecciones
    allRedirections();
    //Boton comenzar
    comenzar();
});

//Button Comenzar
function comenzar(){
    const comenzar = document.getElementById('comenzarButton')

    if(comenzar){
        comenzar.addEventListener('click', () => {
            location.href = '/index.html#categoriesSection'
        })
    }
}