//Todos los archivos JS conectan aquí
//IMPORTACIONES
import { navFunctionality } from "./nav.js";
import { allRedirections } from "./redirections.js";

document.addEventListener('DOMContentLoaded', () => {
    navFunctionality();
    allRedirections();
    comenzar();
    loginButton();
});

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