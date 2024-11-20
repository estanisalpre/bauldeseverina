//Funcionalidad de todos los NAV
import { burguerMenu } from "./burguerMenu.js";

export function navFunctionality(){
    //Todos los botones se expresan en esta funcion
    allButtons();
    burguerMenu();
}

//Aquí estan todos los botones del nav
function allButtons(){
    const myLogo = document.querySelectorAll('#toIndex')
    const contact = document.querySelectorAll('#toContact')
    const briefcase = document.querySelectorAll('#toBriefcase')
    const aboutUs = document.querySelectorAll('#toAboutUs')
    const happyClients = document.querySelectorAll('#toHappyClients')
    const admin = document.querySelectorAll('#toAdmin')
    const logout = document.querySelectorAll('#logout')

    if(myLogo || contact || briefcase || aboutUs || happyClients || admin || logout){
        myLogo.forEach(function(logo){
            logo.addEventListener('click', () => {
                location.href = '/index.html'
            })
        })
        contact.forEach(function(contact){
            contact.addEventListener('click', () => {
                location.href = '/index.html'
            })
        })
        briefcase.forEach(function(briefcase){
            briefcase.addEventListener('click', () => {
                location.href = 'src/views/catalogo.html'
            })
        })
        aboutUs.forEach(function(aboutUs){
            aboutUs.addEventListener('click', () => {
                location.href = '/index.html'
            })
        })
        happyClients.forEach(function(happyClients){
            happyClients.addEventListener('click', () => {
                location.href = '/index.html'
            })
        })
        admin.forEach(function(admin){
            admin.addEventListener('click', () => {
                location.href = 'src/views/admin.html'
            })
        })
        logout.forEach(function(logout){
            logout.addEventListener('click', () => {
                location.href = '/index.html'
            })
        })
    }

}