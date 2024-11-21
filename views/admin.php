<?php
include 'db.php';

session_start(); // Iniciar sesión

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user'])) {
    // Si no hay sesión activa, redirigir al login
    header("Location: /");
    exit;
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    // Hacer la consulta para obtener los productos
    $stmt = $pdo->prepare("SELECT * FROM products");
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtener todos los productos

} catch (PDOException $e) {
    die("Error al obtener los productos: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Baúl de Severina - Catálogo</title>
    <!--CSS-->
    <link rel="stylesheet" href="/src/assets/styles/admin.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="/src/assets/img/logos/logo.png" type="image/x-icon">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
</head>
<body>
   <!--NAV-->
   <nav id="nav">
        <header>
            <img id="toBriefcase" src="/src/assets/img/icons/catalogo.png" alt="Ícono catálogo de productos">
            <img id="logout" src="/src/assets/img/icons/logout.png" alt="Ícono para cerrar sesión">
        </header>
    </nav>
    <!--MAIN / CONTENIDO PRINCIPAL-->
    <main>
        <h1>Panel Administrativo</h1>
        <!--OPCIONES A ELEGIR-->
        <section id="options">
            <div>
                <button id="addProductButton">Agregar nuevo producto</button>
            </div>
            <div>
                <button id="showListButton">Lista de productos</button>
            </div>
        </section>
        <section id="standarSection"><img src="/src/assets/img/logos/logo.png" alt="Logo de El Baul de Severina"></section>
        <!--AGREGAR PRODUCTOS-->
        <section id="addProduct">
            <h2>Agrega un nuevo producto</h2>
            <form action="" method="POST">
                <input type="file" name="productImg" id="productImg" required>
                <input type="text" name="productName" id="productName" required placeholder="Nombre del producto">
                <input type="number" name="productPrice" id="productPrice" required placeholder="Precio del producto">
                <select name="categories" id="categories">
                    <option value="1">Bolsos</option>
                    <option value="2">Bolsos</option>
                    <option value="3">Bolsos</option>
                    <option value="4">Bolsos</option>
                    <option value="5">Bolsos</option>
                    <option value="6">Bolsos</option>
                    <option value="7">Bolsos</option>
                    <option value="8">Bolsos</option>
                    <option value="9">Bolsos</option>
                </select>
                <input type="submit" id="addProductButton" value="Cargar">
                <button id="cancelButton" class="cancelButton">Cancelar</button>
            </form>
        </section>
        <!--LISTA DE PRODUCTOS-->
        <section id="productList">
            <h2>Edita o elimina productos</h2>
            <h3>Editar o eliminar productos</h3>
            <?php 
                if (isset($products) && !empty($products)) {
                    foreach ($products as $product): ?>
                        <div class="product" data-id="<?= $product['idProduct']; ?>">
                            <div>
                                <h2><?= htmlspecialchars($product['idProduct']); ?></h2>
                                <h4><?= htmlspecialchars($product['productName']); ?></h4>
                                <p>Precio: $<?= htmlspecialchars($product['productValue']); ?></p>
                                <img src="<?= htmlspecialchars($product['productImg']); ?>" alt="Imagen de <?= htmlspecialchars($product['productName']); ?>">
                                <p>Disponible: <?= $product['available'] ? 'Sí' : 'No'; ?></p>
                            </div>
                            <div class="product-buttons">
                                <button class="edit-btn">Editar</button>
                                <button class="delete-btn">Eliminar</button>
                            </div>
                        </div>
                    <?php endforeach;
                } else {
                    echo "<p>No hay productos disponibles.</p>";
                }
            ?>
            <button id="cancelButton" class="cancelButton">Cancelar</button>
        </section>
        <!--EDIT MODAL-->
        <div id="editForm" style="display: none;">
            <h2>Editar Producto</h2>
            <form id="editProductForm">
                <label for="editProductName">Nombre del Producto:</label>
                <input type="text" id="editProductName"/>

                <label for="editProductValue">Precio del Producto:</label>
                <input type="number" id="editProductValue" step="0.01" />

                <label for="editProductAvailable">Disponible:</label>
                <input type="checkbox" id="editProductAvailable" />

                <button type="button" id="submitEditButton">Actualizar Producto</button>
                <button type="button" id="closeEditForm">Cancelar</button>
            </form>
        </div>
    </main>
    <!--SCRIPTS-->
    <script type="module" src="/src/js/admin.js"></script>
</body>
</html>