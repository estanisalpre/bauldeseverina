<?php
include 'db.php';

// Obtener precio del transporte
$queryTransport = "SELECT transportPrice FROM transport";
$stmtTransport = $pdo->prepare($queryTransport);
$stmtTransport->execute();
$precioTransport = $stmtTransport->fetch(PDO::FETCH_ASSOC);

// Obtener todos los productos disponibles con sus imágenes
$queryProductos = "SELECT p.id_producto, p.productName, p.productPrice, p.available, p.id_categoria, ip.image_url 
                   FROM productos p
                   LEFT JOIN imagenes_productos ip ON p.id_producto = ip.id_producto
                   WHERE p.available = 1";
$stmtProductos = $pdo->prepare($queryProductos);
$stmtProductos->execute();
$productos = $stmtProductos->fetchAll(PDO::FETCH_ASSOC);

// Agrupar las imágenes por producto
$productosConImagenes = [];
foreach ($productos as $producto) {
    $idProducto = $producto['id_producto'];
    if (!isset($productosConImagenes[$idProducto])) {
        $productosConImagenes[$idProducto] = [
            'productName' => $producto['productName'],
            'productPrice' => $producto['productPrice'],
            'available' => $producto['available'],
            'id_categoria' => $producto['id_categoria'],
            'imagenes' => []
        ];
    }
    if ($producto['image_url']) {
        $productosConImagenes[$idProducto]['imagenes'][] = $producto['image_url'];
    }
}

// Agrupar productos por categoría
$categorias = [
    1 => "Bolsos",
    5 => "Pantalones & Jeans",
    6 => "Blusas",
    7 => "Vestidos",
    8 => "Deportiva",
    9 => "Hoodies",
    10 => "Sandalias",
    11 => "Abrigos",
    2 => "Tenis",
    19 => "Otros"
];

// Agrupar productos por categoría
$productosPorCategoria = [];
foreach ($productosConImagenes as $idProducto => $producto) {
    $idCategoria = $producto['id_categoria'];
    if (isset($categorias[$idCategoria])) {
        $productosPorCategoria[$idCategoria][] = $producto;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Baúl de Severina - Catálogo</title>
    <!--CSS-->
    <link rel="stylesheet" href="/public/styles/catalogo.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="/public/imgs/logos/logo.png" type="image/x-icon">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
</head>
<body>
    <!--NAV-->
    <nav id="nav">
        <div class="topNav">
            <img src="/public/imgs/icons/envios.png" alt="Ícono carro de envíos">
                <p>Envío gratis a todo Colombia a partir de 
                    <span id="minAmount">
                        <?php 
                            if (!empty($precioTransport)) {
                                echo "$" . htmlspecialchars($precioTransport['transportPrice']);
                            } else {
                                echo "00,00";
                            }
                        ?>
                    </span>
                </p>
        </div>
        <header>
            <div id="mobileHeader" class="mobileHeader">
                <img id="toIndex" src="/public/imgs/logos/logo.png" alt="El Baul de Severina Logo">
                <ul>
                    <li id="toBriefcase"><img id="catalogoImg" src="/public/imgs/icons/catalogo.png" alt="Ícono catálogo de productos"></li>
                    <li><img id="menu" src="/public/imgs/icons/menu.png" alt="Menu Icon"></li>
                </ul>
            </div>
        </header>
    </nav>
    <!--MENU HAMBURGUESA-->
    <div id="burguerMenu" class="burguerMenu">
        <div><img id="toAdmin" src="/public/imgs/icons/admin.png" alt="Admin Access Icon"><img id="closeMenu" src="/public/imgs/icons/exit.png" alt="Icon to close Menu"></div>
        <img src="/public/imgs/logos/logo.png" alt="El Baul de Severina Logo">
        <ul>
            <li id="toAboutUs">SOBRE NOSOTROS</li>
            <li id="toBriefcase">CATÁLOGO</li>
            <li id="toContact">CONTACTO</li>
            <li class="selectCategory">CATEGORÍAS</li>
        </ul>
        <div class="socialMedia">
            <p>¡Síguenos!</p>
            <img id="instagramIcon" src="/public/imgs/icons/instagram.png" alt="Instagram Icon para que nos contacten">
            <img id="facebookIcon" src="/public/imgs/icons/facebook.png" alt="Facebook Icon para que nos contacten">
        </div>
        <p>Web Developed by <a href="">Estanislao S. Previte</a></p>
    </div>
    <!--MAIN / CONTENIDO PRINCIPAL-->
    <main>
        <img id="whatsapp" src="/public/imgs/icons/whatsapp.png" alt="Whatsapp Icon">
        <!--SECTION DE CATEGORIAS-->
        <section id="categorySection">
            <h2>Busca por categoría:</h2>
            <div class="links">
                <div class="toCategory" data-id="bolsosCategory"><span>Bolsos</span><img src="/public/imgs/icons/bolso.png" alt="Ícono de Categoria de Bolsos"></div>
                <div class="toCategory" data-id="jeansCategory"><span>Jeans</span><img src="/public/imgs/icons/jeans.png" alt="Ícono de Categoria de Pantalones y Jeans"></div>
                <div class="toCategory" data-id="blusasCategory"><span>Blusas</span><img src="/public/imgs/icons/blusa.png" alt="Ícono de Categoria de Blusas"></div>
                <div class="toCategory" data-id="tenisCategory"><span>Tenis</span><img src="/public/imgs/icons/zapatos.png" alt="Ícono de Categoria de Tenis"></div>
                <div class="toCategory" data-id="vestidosCategory"><span>Vestidos & Faldas</span><img src="/public/imgs/icons/falda.png" alt="Ícono de Categoria de Vestidos y Faldas"></div>
                <div class="toCategory" data-id="deportivaCategory"><span>Ropa Deportiva</span><img src="/public/imgs/icons/deportiva.png" alt="Ícono de Categoria de Ropa Deportiva"></div>
                <div class="toCategory" data-id="suetersCategory"><span>Sueters</span><img src="/public/imgs/icons/sueters.png" alt="Ícono de Categoria de Hoodies y Sueters"></div>
                <div class="toCategory" data-id="taconesCategory"><span>Tacones</span><img src="/public/imgs/icons/tacones.png" alt="Ícono de Categoria de Sandalias y Tacones"></div>
                <div class="toCategory" data-id="abrigosCategory"><span>Abrigos</span><img src="/public/imgs/icons/abrigos.png" alt="Ícono de Categoria de Abrigos"></div>
                <div class="toCategory" data-id="moreCategory"><span>Otros</span><img src="/public/imgs/icons/boutique.png" alt="Ícono de Categoria de Abrigos"></div>
            </div>
        </section>
        <section id="selectCategory">
            <img id="closeCategories" src="/public/imgs/icons/exit.png" alt="Ícono para cerrar categorías de ropa">
            <ul>
                <li class="toCategory" data-id="bolsosCategory">Bolsos</li>
                <li class="toCategory" data-id="jeansCategory">Jeans & Pantalones</li>
                <li class="toCategory" data-id="blusasCategory">Blusas</li>
                <li class="toCategory" data-id="tenisCategory">Tenis</li>
                <li class="toCategory" data-id="vestidosCategory">Vestidos & Faldas</li>
                <li class="toCategory" data-id="deportivaCategory">Ropa Deportiva</li>
                <li class="toCategory" data-id="suetersCategory">Hoodies & Sueters</li>
                <li class="toCategory" data-id="taconesCategory">Tacones & Sandalias</li>
                <li class="toCategory" data-id="abrigosCategory">Chaquetas & Abrigos</li>
                <li class="toCategory" data-id="moreCategory">¡Más para ti!</li>
            </ul>              
        </section>
        <section id="productos">
            <?php foreach ($productosPorCategoria as $idCategoria => $productos): ?>
                <h2><?php echo $categorias[$idCategoria]; ?></h2>
                <div class="productos-grid">
                    <?php foreach ($productos as $producto): ?>
                        <div class="producto">
                            <?php if (!empty($producto['imagenes'])): ?>
                                <div class="producto-imagenes">
                                    <?php foreach ($producto['imagenes'] as $imagen): ?>
                                        <img src="<?php echo htmlspecialchars($imagen); ?>" alt="<?php echo htmlspecialchars($producto['productName']); ?>">
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <h3><?php echo htmlspecialchars($producto['productName']); ?></h3>
                            <p>Precio: $<?php echo number_format($producto['productPrice'], 2); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </section>                
        <!--LOGIN-->
        <section id="sectionForm" class="sectionForm">
            <form action="login.php" method="POST" class="loginForm">
                <span id="errorMessage">❌Credenciales incorrectas</span>
                <p>Ingresa tus credenciales</p>
                <input type="text" name="username" id="username" required placeholder="Usuario" maxlength="11">
                <input type="password" name="password" id="password" required placeholder="Contraseña" maxlength="17">
                <button id="submitLogin" type="submit">Ingresar</button>
            </form>
            <button id="backButton">Regresar</button>
            <?php
                // Mostrar error si las credenciales son incorrectas
                if (isset($error)) {
                    echo "<p>$error</p>";
                }
            ?>
        </section>
    </main>
    <!--SCRIPTS-->
    <script type="module" src="/public/js/catalogo.js"></script>
</body>
</html>