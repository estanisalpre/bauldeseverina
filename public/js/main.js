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
    const comenzar = document.querySelectorAll('#comenzarButton')

    if(comenzar){
        comenzar.forEach(function(start){
            start.addEventListener('click', () => {
                location.href = '/#presentation'
            })
        })
    }
}

//Boton para loguearse
export function loginButton(){
    const toAdmin = document.querySelectorAll('#toAdmin')
    const sectionForm = document.getElementById('sectionForm')
    const backButton = document.getElementById('backButton')

    if(toAdmin){
        toAdmin.forEach(function(admin){
            admin.addEventListener('click', () => {
                sectionForm.style.display = 'flex'
            })
        })
    }
    if(backButton){
        backButton.addEventListener('click', () => {
            sectionForm.style.display = 'none'
        })
    }
}