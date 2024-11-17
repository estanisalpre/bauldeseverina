//Todas las redirecciones de botones y demás, se realizan aquí

export function allRedirections(){

    //Whatsapp - Instagram - Facebook
    whatsappRedirection();
    instagramRedirection();
    facebookRedirection();

    //Botones principales del contenedor
    principalButtons();

    //Botones para redireccionar al catalogo
    toBriefcase();

    //Botones para redireccionar a contacto
    toContact();

    //Botones para redireccionar a categorias / catalogo
    toCategories();

    //Boton al panel administrativo
    toAdminPanel();
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

//Botones del contenedor principal
function principalButtons(){
    //Llamamos del DOM - Botones
    const toContact = document.getElementById('toContact')
    const toBriefcase = document.getElementById('catalogoImg')

    //Nos lleva al sector de contacto
    if(toContact){
        toContact.addEventListener('click', () => {
            location.href = '/index.html#contactSection'
        })
    }

    //Nos lleva al html de catalogo
    if(toBriefcase){
        toBriefcase.addEventListener('click', () => {
            location.href = '/src/views/catalogo.html'
        })
    }
}

//Botón Nav Catálogo y Catálogo en Main
function toBriefcase(){
    const catalogoNav = document.getElementById('catalogo')
    const catalogoBurguer = document.getElementById('toBriefcase')

    if(catalogoNav || catalogoBurguer){
        catalogoNav.addEventListener('click', () => {
            location.href = '/src/views/catalogo.html'
        })
        catalogoBurguer.addEventListener('click', () => {
            location.href = '/src/views/catalogo.html'
        })
    }
}

//Botón hacia contacto
function toContact(){
    const contactNav = document.getElementById('contact')
    const contactBurguer = document.getElementById('toContact')

    if(contactNav || contactBurguer){
        contactNav.addEventListener('click', () => {
            location.href = 'src/views/severinaInfo.html'
        })
        contactBurguer.addEventListener('click', () => {
            location.href = 'src/views/severinaInfo.html'
        })
    }
}

//Botón hacia categorías / catálogo
function toCategories(){
    const buttonToCategory = document.querySelectorAll('.toCategories')

    if(buttonToCategory){
        buttonToCategory.forEach(function(button){
            button.addEventListener('click', () => {
                location.href = 'src/views/catalogo.html'
            })
        })
    }
}

//Boton hacia panel administrativo
function toAdminPanel(){
    const adminButton = document.getElementById('adminAccess')

    if(adminButton){
        adminButton.addEventListener('click', () => {
            location.href = 'src/views/admin.html'
        })
    }
}