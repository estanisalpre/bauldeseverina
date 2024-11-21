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
    //Funcionalidad para loguearse
    loginButton();
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

//Boton para loguearse
function loginButton(){
    const toAdmin = document.getElementById('toAdmin')
    const sectionForm = document.getElementById('sectionForm')
    const backButton = document.getElementById('backButton')

    if(toAdmin){
        toAdmin.addEventListener('click', () => {
            sectionForm.style.display = 'flex'
        })
    }
    if(backButton){
        backButton.addEventListener('click', () => {
            sectionForm.style.display = 'none'
        })
    }
}