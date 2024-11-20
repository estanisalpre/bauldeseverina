//Funcionalidad del admin.html
export function allButtons(){
    //Abrir y cerrar menu hamburguesa
    openCloseBurguerMenu();
    //Admin button
    adminButton();
    //Hacia el panel de admin
    toAdminPanel();
    //Volver al index
    toIndex();
    //Todos los productos
    allProducts();
    //Agregar producto nuevo
    addProductSection();
    //Mostrar lista
    showProductsList();
    //Cerrar lista en admin
    closeEditForm();
}

//Burguer Menu
function openCloseBurguerMenu(){
    const openIcon = document.getElementById('icon_hamburguesa')
    const burguerMenu = document.getElementById('menu_hamburguesa')
    const closeIcon = document.getElementById('cerrar_menu')

    if(openIcon){
        openIcon.addEventListener('click', () => {
            burguerMenu.style.display = 'flex'
        })
    }

    if(closeIcon){
        closeIcon.addEventListener('click', () => {
             burguerMenu.style.display = 'none'
        })
    }
}

//Boton admin
function adminButton(){
    const adminButton = document.getElementById('adminButton')
        
    if(adminButton){
        const sectionForm = document.getElementById('sectionForm')

        adminButton.addEventListener('click', () => {
            sectionForm.style.display = 'flex'
        })
    }
}

//Hacia index.html
function toIndex(){
    const toIndex = document.getElementById('toIndex')
    
    if(toIndex){
        toIndex.addEventListener('click', () => {
            location.href = '/'
        })
    }
}

//Hacia panel administrativo
function toAdminPanel() {
    const userName = document.getElementById('userName');
    const password = document.getElementById('password');
    const submitLogin = document.getElementById('submitLogin');
    const backButton = document.getElementById('backButton');

    if (submitLogin) {
        submitLogin.addEventListener('click', (e) => {
            e.preventDefault();

            const usernameValue = userName.value;
            const passwordValue = password.value;

            // Enviar las credenciales al servidor usando Fetch
            fetch('/login.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ username: usernameValue, password: passwordValue })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.href = '/admin';
                } else {
                    alert('Credenciales incorrectas');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    }

    // Para cerrar el modal de login
    if (backButton) {
        const sectionForm = document.getElementById('sectionForm');
        backButton.addEventListener('click', () => {
            sectionForm.style.display = 'none';
        });
    }
}

//Agregar producto nuevo
function addProductSection(){
    const addButton = document.getElementById('addButton')
    const newProductSection = document.getElementById('newProductSection')
    const productListSection = document.getElementById('productListSection')

    if(addButton){
        addButton.addEventListener('click', () => {
            closeTitles();
            productListSection.style.display = 'none'
            newProductSection.style.display = 'flex'
        })
    }
}

//Ver Lista
function showProductsList(){
    const listButton = document.getElementById('listButton')
    const productListSection = document.getElementById('productListSection')
    const newProductSection = document.getElementById('newProductSection')

    if(listButton){
        listButton.addEventListener('click', () => {
            closeTitles();
            newProductSection.style.display = 'none'
            productListSection.style.display = 'flex'
        })
    }
}

//Cerrar titulos del panel
function closeTitles(){
    document.getElementById('titlePanel').style.display = 'none'
    document.getElementById('infoPanel').style.display = 'none'
}

//Productos
function allProducts(){
    const firstDiv = document.getElementById('firstDiv')
    const secondDiv = document.getElementById('secondDiv')
    const thirdDiv = document.getElementById('thirdDiv')
    const fourthDiv = document.getElementById('fourthDiv')
    const moreProducts = document.getElementById('moreProductsButton')

    if(firstDiv || secondDiv || thirdDiv || fourthDiv || moreProducts){
        firstDiv.addEventListener('click', () => {location.href = './productos'})
        secondDiv.addEventListener('click', () => {location.href = './productos'})
        thirdDiv.addEventListener('click', () => {location.href = './productos'})
        fourthDiv.addEventListener('click', () => {location.href = './productos'})
        moreProducts.addEventListener('click', () => {location.href = './productos'})
    }
}

// Cerrar el formulario de edición
function closeEditForm() {
    const editForm = document.getElementById('editForm');
    const cancelButton = document.getElementById('closeEditForm')

    if(cancelButton){
        cancelButton.addEventListener('click', () => {
            editForm.style.display = 'none';
        })
    }
}
  