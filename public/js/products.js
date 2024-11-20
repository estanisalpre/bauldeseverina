//Funcionalidad de productos.php

document.addEventListener('DOMContentLoaded', () => {
    //availableProducts();
    backToIndex();
})

//Back to index
function backToIndex(){
    const backToIndexButton = document.getElementById('toMyIndex')

    if(backToIndexButton){
        backToIndexButton.addEventListener('click', () => {
            location.href = '/'
        })
    }
}