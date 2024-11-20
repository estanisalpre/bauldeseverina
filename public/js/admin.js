import { allButtons } from "./functions.js"

// Obtener el formulario y agregar el evento submit
document.addEventListener('DOMContentLoaded', () => {
    allButtons();

    //FUNCIONALIDAD FORMULARIO AGREGAR PRODUCTOS
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const prodName = document.querySelector('#productName').value;
        const price = document.querySelector('#price').value;

        // Enviar los datos al servidor
        fetch('/add-product.php', {
            method: 'POST',
            body: new FormData(form)
        })
        .then(response => response.text())
        .then(data => {
            console.log('Éxito');
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    // Seleccionar todos los botones "Eliminar"
    const deleteButtons = document.querySelectorAll(".delete-btn");
    deleteButtons.forEach(button => {
        button.addEventListener("click", (event) => {
            // Obtener el ID del producto del atributo data-id del contenedor padre
            const productElement = event.target.closest(".product");
            const productId = productElement.dataset.id;

            // Confirmar eliminación
            if (confirm("¿Seguro que deseas eliminar este producto?")) {
                fetch('/delete_product.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id: productId })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        productElement.remove(); // Eliminar el producto del DOM
                        alert("Producto eliminado exitosamente.");
                    } else {
                        alert("Error al eliminar el producto.");
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        });
    });

    // Seleccionar todos los botones "Editar"
    const editButtons = document.querySelectorAll(".edit-btn");
    const editForm = document.getElementById("editForm");
    const editProductName = document.getElementById("editProductName");
    const editProductValue = document.getElementById("editProductValue");
    const editProductAvailable = document.getElementById("editProductAvailable");
    const submitEditButton = document.getElementById("submitEditButton");
    let currentProductId = null;

    editButtons.forEach(button => {
        button.addEventListener("click", (event) => {
            const productElement = event.target.closest(".product");
            currentProductId = productElement.dataset.id;

            const productName = productElement.querySelector('h4').textContent;
            const productValue = productElement.querySelector('p').textContent.replace('Precio: $', '');
            const productAvailable = productElement.querySelector('p').textContent.includes('Sí');

            editProductName.value = productName;
            editProductValue.value = productValue;
            editProductAvailable.checked = productAvailable;

             // Mostrar el formulario
            editForm.style.display = 'block';
        });

        // Enviar los datos al servidor para actualizar el producto
        submitEditButton.addEventListener("click", () => {
            const newName = editProductName.value;
            const newValue = editProductValue.value;
            const newAvailable = editProductAvailable.checked ? 1 : 0;

            // Verificar que los campos estén completos
            if (newName && newValue) {
                fetch('/edit_product.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ 
                        id: currentProductId, 
                        productName: newName, 
                        productValue: newValue,
                        available: newAvailable 
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Producto editado exitosamente.");
                        location.reload(); // Recargar la página para reflejar los cambios
                    } else {
                        alert("Error al editar el producto.");
                    }
                })
                .catch(error => console.error('Error:', error));
            } else {
                alert("El nombre del producto es obligatorio.");
            }
        });
    });

    //Botón para cerrar sesión
    const logout = document.getElementById('logout')

    if(logout){
        logout.addEventListener('click', () => {
            fetch('/logout.php', {
                method: 'GET',
            })
            .then(response => {
                // Si la respuesta es exitosa, redirigimos al login
                if (response.ok) {
                    window.location.href = '/'; 
                }
            })
            .catch(error => console.error('Error al cerrar sesión:', error));
        })
    }
});