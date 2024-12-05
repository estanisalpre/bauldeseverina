//Todas las redirecciones de botones y demás, se realizan aquí

export function allRedirections(){
    //Whatsapp - Instagram - Facebook
    whatsappRedirection();
    instagramRedirection();
    //facebookRedirection();
}

//Boton whatsapp
function whatsappRedirection(){
    const whatsapp = document.getElementById('whatsapp')

    if(whatsapp){
        whatsapp.addEventListener('click', () => {
            window.open(`https://wa.me/573012397022?text=¡Hola!%20Vengo%20de%20www.elbauldeseverina.com%20y%20quiero%20contactarme%20con%20ustedes%20`);
        })
    }
}

//Boton instagram
function instagramRedirection(){
    const instagram = document.getElementById('instagramIcon')

    if(instagram){
        instagram.addEventListener('click', () => {
            location.href = 'https://www.instagram.com/elbauldeseverina/'
        })
    }
}

//Boton facebook
/* function facebookRedirection(){
    const facebook = document.getElementById('facebookIcon')

    if(facebook){
        facebook.addEventListener('click', () => {
            location.href = 'https://www.whatsapp.com/'
        })
    }
} */