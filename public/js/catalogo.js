//Toda la funcionalidad de la pagina de catalogo
import { loginButton } from './main.js';
import {navFunctionality} from './nav.js'
import { allRedirections } from './redirections.js';

document.addEventListener('DOMContentLoaded', () => {
    //Botones del NAV
    navFunctionality();

    //Todas las redirecciones
    allRedirections();

    //Botones categoría
    categoryButtons();

    //Botones consultar whatsapp
    whatsappRedirection();

    //Admin
    loginButton();
})

//Funcionalidad botones de categoría
function categoryButtons(){
    const categories = document.querySelectorAll('.toCategory')

    categories.forEach(function(category){
        category.addEventListener('click', () => {
            const categoryId = category.dataset.id;

            if(categoryId){
                closeCategories();
                openCategory(categoryId)
                location.href = `catalogo#${categoryId}`;
            } else {
                console.log('Categoria sin data-id')
            }
        })
    })
}

//Abrimos la categoria correspondiente
function openCategory(id){
    const categorySection = document.querySelectorAll('.category')

    categorySection.forEach(function(category){
        if (category.dataset.id === id){
            category.style.display = 'flex'
        }
    })
}

//Cerramos las categorias
function closeCategories(){
    const divLinks = document.querySelector(".links")
    const categories = document.querySelectorAll('.category')

    divLinks.style.display = 'none'
    
    categories.forEach(category => {
        category.style.display = 'none'
    })
}

//Funcionalidad boton whatsapp para consultar producto
function whatsappRedirection(){
    const buyButton = document.querySelectorAll('.buyButton')

    if (buyButton){
        buyButton.forEach(function(button){
            button.addEventListener('click', () =>{
                const cardContent = button.closest('.card-content');
                const productName = cardContent.querySelector('.product-name').textContent.trim();
                window.open(`https://wa.me/573012397022?text=¡Hola!%20Vi%20en%20tu%20página%20web%20el%20siguiente%20producto:%20${encodeURIComponent(productName)}`);
            })
        })
    }
}