<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cargar Composer
require __DIR__ . '/vendor/autoload.php';

// Views como directorio de plantillas
Flight::set('flight.views.path', __DIR__ . '/views');

// Ruta para la página de inicio
Flight::route('/', function(){
    Flight::render('index');  // Carga views/index.php
});

// Ruta para la sección de administración
Flight::route('/admin', function(){
    Flight::render('admin');  // Carga views/admin.php
});

// Ruta para la sección de productos
Flight::route('/productos', function(){
    Flight::render('productos');  // Carga views/productos.php
});

// Iniciar Flight
Flight::start();