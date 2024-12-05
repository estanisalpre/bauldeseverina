//Toda funcionalidad de las imagenes que deslizan
export function imgSlider(){
    const slides = document.querySelector('.slides');
    const images = document.querySelectorAll('.slides img');
    let currentIndex = 0;
    let startY = 0;
    let endY = 0;

    //Función para deslizar a la siguiente imagen
    function slideNext() {
        currentIndex++;
        if (currentIndex >= images.length) {
            currentIndex = 0;
        }
        updateSlider();
    }

    //Función para deslizar a la imagen anterior
    function slidePrev() {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = images.length - 1;
        }
        updateSlider();
    }

    //Actualizar la posición del slider
    function updateSlider() {
        const imageHeight = images[0].clientHeight; 
        slides.style.transform = `translateY(-${currentIndex * imageHeight}px)`; 
    }

    slides.addEventListener('touchstart', (e) => {
        startY = e.touches[0].clientY;
    });

    slides.addEventListener('touchmove', (e) => {
        if (currentIndex < images.length - 1 || startY > endY) {
            e.preventDefault();
        }
    });

    slides.addEventListener('touchend', (e) => {
        endY = e.changedTouches[0].clientY;
        if (startY > endY + 50) {
            slideNext(); 
        } else if (startY < endY - 50) {
            slidePrev();
        }
    });
}