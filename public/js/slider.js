//Toda funcionalidad de las imagenes que deslizan
export function imgSlider(){
    const slides = document.querySelector('.slides');
    const images = document.querySelectorAll('.slides img');
    let currentIndex = 0;

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
        const width = slides.clientWidth; 
        slides.style.transform = `translateX(-${currentIndex * width}px)`; 
    }

    //Detectar eventos de deslizamiento
    let startX = 0;
    let endX = 0;

    slides.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });

    slides.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;
        if (startX > endX + 50) {
            slideNext(); 
        } else if (startX < endX - 50) {
            slidePrev();
        }
    });
}