//Todos los archivos JS conectan aquí
//IMPORTACIONES
import { burguerMenu } from "./burguerMenu.js";
import { allRedirections } from "./redirections.js";

//Los captura el DOM
document.addEventListener('DOMContentLoaded', () => {
    //Menú hamburguesa
    burguerMenu();

    //Redirecciones
    allRedirections();
});