//Todos los archivos JS conectan aquí
//IMPORTACIONES
import { burguerMenu } from "./burguerMenu.js";
import { carrousel } from "./carrousel.js";
import { allRedirections } from "./redirections.js";

//Los captura el DOM
document.addEventListener('DOMContentLoaded', () => {
    //Menú hamburguesa
    burguerMenu();

    //Redirecciones
    allRedirections();

    //Carrousel
    carrousel();
});