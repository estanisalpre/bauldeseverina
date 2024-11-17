//Todas las redirecciones de botones y demás, se realizan aquí

export function allRedirections(){

    //Whatsapp - Instagram - Facebook
    whatsappRedirection();
    instagramRedirection();
    facebookRedirection();
}

//Boton whatsapp
function whatsappRedirection(){
    const whatsapp = document.getElementById('whatsapp')

    if(whatsapp){
        whatsapp.addEventListener('click', () => {
            location.href = 'https://www.whatsapp.com/'
        })
    }
}

//Boton instagram
function instagramRedirection(){
    const instagram = document.getElementById('instagramIcon')

    if(instagram){
        instagram.addEventListener('click', () => {
            location.href = 'https://www.whatsapp.com/'
        })
    }
}

//Boton facebook
function facebookRedirection(){
    const facebook = document.getElementById('facebookIcon')

    if(facebook){
        facebook.addEventListener('click', () => {
            location.href = 'https://www.whatsapp.com/'
        })
    }
}