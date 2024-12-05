//Todos los archivos JS conectan aquí
//IMPORTACIONES
import { navFunctionality } from "./nav.js";
import { allRedirections } from "./redirections.js";
import { imgSlider } from "./slider.js";

//Los captura el DOM
document.addEventListener('DOMContentLoaded', () => {
    //Funcionalidad del NAV
    navFunctionality();
    //Slider de imagenes
    imgSlider();
    //Redirecciones
    allRedirections();
    //Boton comenzar
    comenzar();
    //Funcionalidad para loguearse
    loginButton();
});

//Button Comenzar
function comenzar(){
    const comenzar = document.querySelectorAll('#comenzarButton')

    if(comenzar){
        comenzar.addEventListener('click', () => {
            location.href = '/#presentation'
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