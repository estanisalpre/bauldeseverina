//Toda la funcionalidad de la pagina de catalogo

import { burguerMenu } from "./burguerMenu.js";

document.addEventListener('DOMContentLoaded', () => {
    //Nav buttons
    navButtons();

    //Burguer buttons
    burguerMenu();

    //Botones categoría
    categoryButtons();
})

//Funcionalidad botones de categoría
function categoryButtons(){
    const categories = document.querySelectorAll('.toCategory')

    categories.forEach(function(category){
        category.addEventListener('click', () => {
            const categoryId = category.dataset.id;

            if(categoryId){
                location.href = `catalogo.html#${categoryId}`;
            } else {
                console.log('Categoria sin data-id')
            }
        })
    })
}

//Nav Buttons
function navButtons(){
    const myLogo = document.getElementById('myLogo')
    const toContact = document.getElementById('contact')
    
    if(myLogo || toContact){
        myLogo.addEventListener('click', () => {
            location.href = '/index.html'
        })
        toContact.addEventListener('click', () => {
            location.href = '/index.html'
        })
    }
}