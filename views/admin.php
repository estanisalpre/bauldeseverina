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
    <title>Panel Administrativo - Café Frutal</title>
    <!--CSS-->
    <link rel="stylesheet" href="/public/styles/admin.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="/public/imgs/logo/logo_planta.png" type="image/x-icon">
    <!--FUENTES GOOGLE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!--NAV-->
    <nav>
        <button id="addButton">AGREGAR PRODUCTO</button>
        <img id="toIndex" src="/public/imgs/logo/logo_horizontal.png" alt="Logo Café Frutal">
        <button id="listButton">VER LISTA</button>
        <img id="logout" src="/public/imgs/icons/logout.png" alt="Ícono de cerrar sesión">
    </nav>
    <!--MAIN-->
    <main>
        <h1 id="titlePanel">Panel Administrativo</h1>
        <p id="infoPanel">Tu espacio para agregar, editar o eliminar productos</p>
        <section class="newProductSection" id="newProductSection">
            <h3>Agrega un nuevo producto</h3>
            <form class="form" action="/add-product.php" method="POST">
                <input type="file" name="productImg" id="producitImg" required>
                <input type="text" name="prodName" id="productName" required placeholder="Nombre del producto">
                <input type="number" name="price" id="price" required placeholder="Precio">
                <label for="available">Disponible:</label>
                <input type="checkbox" name="available" id="available">
                <input class="addButtonInput" type="submit" value="Agregar">
            </form>
        </section>
        <section class="productList" id="productListSection">
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
    <script type="module" src="/public/js/admin.js?v=<?php echo time(); ?>"></script>
</body>
</html>