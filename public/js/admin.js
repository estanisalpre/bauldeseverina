//Toda la funcionalidad del panel administrativo
import { navFunctionality } from "./nav.js";

document.addEventListener('DOMContentLoaded', () => {
    //Funcionalidad del nav
    navFunctionality();
    //Funcionalidad de modales
    openModals();
    //Cerrar modales
    closeAllSection();
})

//Abrir modales
function openModals(){
    const addProductButton = document.getElementById('addProductButton')
    const showListButton = document.getElementById('showListButton')
    const addProduct = document.getElementById('addProduct')
    const productList = document.getElementById('productList')
    const standarSection = document.getElementById('standarSection')

    if(addProductButton || showListButton){
        addProductButton.addEventListener('click', () => {
            const addProduct = document.getElementById('addProduct')
            standarSection.style.display = 'none'
            productList.style.display = 'none'
            addProduct.style.display = 'flex'
        })
        showListButton.addEventListener('click', () => {
            const productList = document.getElementById('productList')
            standarSection.style.display = 'none'
            addProduct.style.display = 'none'
            productList.style.display = 'flex'
        })
    }
}

//Función para cerrar todos los sections
function closeAllSection(){
    const cancelButton = document.querySelectorAll('.cancelButton')
    const productList = document.getElementById('productList')
    const addProduct = document.getElementById('addProduct')
    const standarSection = document.getElementById('standarSection')

    if(cancelButton){
        cancelButton.forEach(function(button){
            button.addEventListener('click', () => {
                productList.style.display = 'none'
                addProduct.style.display = 'none'
                standarSection.style.display = 'flex'
            })
        })
    }
}