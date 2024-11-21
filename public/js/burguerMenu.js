//Funcionalidad del menu hamburguesa

export function burguerMenu(){
    //Llamamos del DOM los elementos
    const menuButton = document.getElementById('menu')
    const nav = document.getElementById('nav')
    const burguerMenu = document.getElementById('burguerMenu')
    const closeMenuButton = document.getElementById('closeMenu')
    const whatsappButton = document.getElementById('whatsapp')

    //Abrimos menu
    if(menuButton){
        menuButton.addEventListener('click', () => {
            nav.style.display = 'none'
            whatsappButton.style.display = 'none'
            burguerMenu.style.display = 'flex'
        })
    }

    //Cerramos menu
    if(closeMenuButton){
        closeMenuButton.addEventListener('click', () => {
            burguerMenu.style.display = 'none'
            whatsappButton.style.display = 'block'
            nav.style.display = 'flex'
        })
    }
}