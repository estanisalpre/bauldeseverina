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
});