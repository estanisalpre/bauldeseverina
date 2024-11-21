//Toda la funcionalidad de la pagina de catalogo
import {navFunctionality} from './nav.js'

document.addEventListener('DOMContentLoaded', () => {
    //Botones del NAV
    navFunctionality();

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