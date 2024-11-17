//Funcionalidad del carrousel

export function carrousel(){
    //Traemos elementos del DOM
    const firstImage = document.getElementById('firstImage')
    const secondImage = document.getElementById('secondImage')
    const thirdImage = document.getElementById('thirdImage')
    const leftArrow = document.getElementById('leftArrow')
    const rightArrow = document.getElementById('rightArrow')

    //Ponemos un contador para buscar la imagen
    let imageCount = 0;

    //Flecha hacia la izquierda
    if(leftArrow){
        leftArrow.addEventListener('click', () => {
            if(imageCount === 0){
                imageCount = 2;
                closeOtherImages(firstImage,secondImage);
                thirdImage.style.display = 'block'
            } else if (imageCount === 2){
                imageCount = 1;
                closeOtherImages(firstImage,thirdImage);
                secondImage.style.display = 'block'
            } else if (imageCount === 1){
                imageCount = 0;
                closeOtherImages(secondImage,thirdImage);
                firstImage.style.display = 'block'
            }
        })
    }

    //Flecha hacia la derecha
    if(rightArrow){
        rightArrow.addEventListener('click', () => {
            if(imageCount === 0){
                imageCount = 1;
                closeOtherImages(firstImage,thirdImage);
                secondImage.style.display = 'block'
            } else if (imageCount === 1){
                imageCount = 2;
                closeOtherImages(firstImage,secondImage);
                thirdImage.style.display = 'block'
            } else if (imageCount === 2){
                imageCount = 0;
                closeOtherImages(secondImage,thirdImage);
                firstImage.style.display = 'block'
            }
        })
    }
}

//Cerramos las otras imagenes
function closeOtherImages(img1,img2){
    img1.style.display = 'none'
    img2.style.display = 'none'
}

