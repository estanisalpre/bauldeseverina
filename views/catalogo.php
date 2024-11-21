<?php
    include 'db.php';

    //Bolsos
    $queryBolsos = "SELECT productImg, productName, productPrice, available, id_categoria FROM productos WHERE available = 1 AND id_categoria = 1";
    $stmtBolsos = $pdo->prepare($queryBolsos);
    $stmtBolsos->execute();
    $productosBolsos = $stmtBolsos->fetchAll(PDO::FETCH_ASSOC);
    //Tenis
    $queryTenis = "SELECT productImg, productName, productPrice, available, id_categoria FROM productos WHERE available = 1 AND id_categoria = 2";
    $stmtTenis = $pdo->prepare($queryTenis);
    $stmtTenis->execute();
    $productosTenis = $stmtTenis->fetchAll(PDO::FETCH_ASSOC);
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
    <link rel="shortcut icon" href="/src/assets/img/logos/logo.png" type="image/x-icon">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
</head>
<body>
    <!--NAV-->
    <nav id="nav">
        <div class="topNav">
            <img src="/src/assets/img/icons/envios.png" alt="Ícono carro de envíos"><p>Envío gratis a todo Colombia a partir de <span id="minAmount">$100,000</span></p>
        </div>
        <header>
            <div id="mobileHeader" class="mobileHeader">
                <img id="toIndex" src="/src/assets/img/logos/logo.png" alt="El Baul de Severina Logo">
                <ul>
                    <li id="toContact"><span class="contactSpan">Contacto</span></li>
                    <li><img id="menu" src="/src/assets/img/icons/menu.png" alt="Menu Icon"></li>
                </ul>
            </div>
        </header>
    </nav>
    <!--MENU HAMBURGUESA-->
    <div id="burguerMenu" class="burguerMenu">
        <div><img id="toAdmin" src="/src/assets/img/icons/admin.png" alt="Admin Access Icon"><img id="closeMenu" src="/src/assets/img/icons/exit.png" alt="Icon to close Menu"></div>
        <img src="/src/assets/img/logos/logo.png" alt="El Baul de Severina Logo">
        <ul>
            <li id="toIndex">INICIO</li>
            <li id="toAboutUs">SOBRE NOSOTROS</li>
            <li id="toHappyClients">CLIENTES FELICES</li>
            <li id="toContact">CONTACTO</li>
        </ul>
        <div class="socialMedia">
            <p>¡Síguenos!</p>
            <img id="instagramIcon" src="/src/assets/img/icons/instagram.png" alt="Instagram Icon para que nos contacten">
            <img id="facebookIcon" src="/src/assets/img/icons/facebook.png" alt="Facebook Icon para que nos contacten">
        </div>
        <p>Web Developed by <a href="">Estanislao S. Previte</a></p>
    </div>
    <!--MAIN / CONTENIDO PRINCIPAL-->
    <main>
        <img id="whatsapp" src="/src/assets/img/icons/whatsapp.png" alt="Whatsapp Icon">
        <!--SECTION DE CATEGORIAS-->
        <section id="categorySection">
            <h2>Busca por categoría:</h2>
            <div class="links">
                <div class="toCategory" data-id="bolsosCategory"><span>Bolsos</span><img src="/src/assets/img/icons/bolso.png" alt="Ícono de Categoria de Bolsos"></div>
                <div class="toCategory" data-id="jeansCategory"><span>Jeans</span><img src="/src/assets/img/icons/jeans.png" alt="Ícono de Categoria de Pantalones y Jeans"></div>
                <div class="toCategory" data-id="blusasCategory"><span>Blusas</span><img src="/src/assets/img/icons/blusa.png" alt="Ícono de Categoria de Blusas"></div>
                <div class="toCategory" data-id="tenisCategory"><span>Tenis</span><img src="/src/assets/img/icons/zapatos.png" alt="Ícono de Categoria de Tenis"></div>
                <div class="toCategory" data-id="vestidosCategory"><span>Vestidos & Faldas</span><img src="/src/assets/img/icons/falda.png" alt="Ícono de Categoria de Vestidos y Faldas"></div>
                <div class="toCategory" data-id="deportivaCategory"><span>Ropa Deportiva</span><img src="/src/assets/img/icons/deportiva.png" alt="Ícono de Categoria de Ropa Deportiva"></div>
                <div class="toCategory" data-id="suetersCategory"><span>Sueters</span><img src="/src/assets/img/icons/sueters.png" alt="Ícono de Categoria de Hoodies y Sueters"></div>
                <div class="toCategory" data-id="taconesCategory"><span>Tacones</span><img src="/src/assets/img/icons/tacones.png" alt="Ícono de Categoria de Sandalias y Tacones"></div>
                <div class="toCategory" data-id="abrigosCategory"><span>Abrigos</span><img src="/src/assets/img/icons/abrigos.png" alt="Ícono de Categoria de Abrigos"></div>
            </div>
            <div class="scrollSection">
                <h3>¡Desliza para descubrir por tu cuenta!</h3>
                <img src="/src/assets/img/icons/scroll.png" alt="Ícono de Scroll para ver todo nuestro catálogo de indumentaria">
            </div>
        </section>
        <section id="bolsosCategory" class="category">
            <h2>Bolsos</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosBolsos)): ?>
                    <?php foreach ($productosBolsos as $bolso): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($bolso['productImg']); ?>');">
                            <div class="card-content">
                                <span class="product-name"><?php echo htmlspecialchars($bolso['productName']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($bolso['productPrice']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="jeansCategory" class="category">
            <h2>Pantalones & Jeans</h2>
            <div id="jeansProducts"><span>Aún no hay productos</span></div>
        </section>
        <section id="blusasCategory" class="category">
            <h2>Blusas</h2>
            <div id="blusasProducts"><span>Aún no hay productos</span></div>
        </section>
        <section id="tenisCategory" class="category">
            <h2>Tenis</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosTenis)): ?>
                    <?php foreach ($productosTenis as $tenis): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($tenis['productImg']); ?>');">
                            <div class="card-content">
                                <span class="product-name"><?php echo htmlspecialchars($tenis['productName']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($tenis['productPrice']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="vestidosCategory" class="category">
            <h2>Vestidos & Faldas</h2>
            <div id="vestidosProducts"><span>Aún no hay productos</span></div>
        </section>
        <section id="deportivaCategory" class="category">
            <h2>Ropa Deportiva</h2>
            <div id="deportivaProducts"><span>Aún no hay productos</span></div>
        </section>
        <section id="suetersCategory" class="category">
            <h2>Hoodies & Sueters</h2>
            <div id="suetersProducts"><span>Aún no hay productos</span></div>
        </section>
        <section id="taconesCategory" class="category">
            <h2>Sandalias & Tacones</h2>
            <div id="taconesProducts"><span>Aún no hay productos</span></div>
        </section>
        <section id="abrigosCategory" class="category">
            <h2>Chaquetas & Abrigos</h2>
            <div id="abrigosProducts"><span>Aún no hay productos</span></div>
        </section>
    </main>
    <!--FOOTER-->
    <footer>
        <img src="/src/assets/img/logos/logo.png" alt="El Baul de Severina Logo">
        <div class="socialMedia">
            <h3>¡Síguenos!</h3>
            <img src="/src/assets/img/icons/instagram.png" alt="Instagram Icon">
            <img src="/src/assets/img/icons/facebook.png" alt="Facebook Icon">
        </div>
        <div>
            <ul>
                <span id="toIndex">Inicio</span>
                <span id="toContact">Contacto</span>
            </ul>
            <ul>
                <li>📱 +57 301 2397022</li>
                <li>📍 Medellín, CO</li>
            </ul>
        </div>
    </footer>
    <!--SCRIPTS-->
    <script type="module" src="/public/js/catalogo.js"></script>
</body>
</html>