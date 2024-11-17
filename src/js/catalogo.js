//Toda la funcionalidad de la pagina de catalogo

document.addEventListener('DOMContentLoaded', () => {
    //Nav buttons

    //Burguer buttons

    //Botones categoría
    categoryButtons();
})

//Funcionalidad botones de categoría
function categoryButtons(){
    const categories = document.querySelectorAll('.toCategory')

    categories.forEach(function(category){
        category.addEventListener('click', () => {
            const categoryId = category.dataset.id;

            console.log(categoryId)
            if(categoryId){
                location.href = `catalogo.html#${categoryId}`;
            } else {
                console.log('Categoria sin data-id')
            }
        })
    })
}