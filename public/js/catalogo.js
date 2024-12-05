//Toda la funcionalidad de la pagina de catalogo
import {navFunctionality} from './nav.js'

document.addEventListener('DOMContentLoaded', () => {
    //Botones del NAV
    navFunctionality();

    //Botones categoría
    categoryButtons();

    //Botones consultar whatsapp
    whatsappRedirection();
})

//Funcionalidad botones de categoría
function categoryButtons(){
    const categories = document.querySelectorAll('.toCategory')

    categories.forEach(function(category){
        category.addEventListener('click', () => {
            const categoryId = category.dataset.id;

            if(categoryId){
                location.href = `catalogo#${categoryId}`;
            } else {
                console.log('Categoria sin data-id')
            }
        })
    })
}

//Funcionalidad boton whatsapp para consultar producto
function whatsappRedirection(){
    const buyButton = document.querySelectorAll('.buyButton')

    if (buyButton){
        buyButton.forEach(function(button){
            button.addEventListener('click', () =>{
                // Encontrar el contenedor más cercano al botón con la clase 'card-content'
                const cardContent = button.closest('.card-content');
                
                // Obtener el nombre del producto desde el span con la clase 'product-name'
                const productName = cardContent.querySelector('.product-name').textContent.trim();

                // Redirigir a WhatsApp con el texto dinámico
                window.open(`https://wa.me/573246541854?text=¡Hola!%20Vi%20en%20tu%20página%20web%20el%20siguiente%20producto:%20${encodeURIComponent(productName)}`);
            })
        })
    }
}