<?php
    include 'db.php';

    //Bolsos
    $queryBolsos = "SELECT productImg, productName, productPrice, available, id_categoria FROM productos WHERE available = 1 AND id_categoria = 1";
    $stmtBolsos = $pdo->prepare($queryBolsos);
    $stmtBolsos->execute();
    $productosBolsos = $stmtBolsos->fetchAll(PDO::FETCH_ASSOC);
    //Pantalones & Jeans
    $queryJeans = "SELECT productImg, productName, productPrice, available, id_categoria FROM productos WHERE available = 1 AND id_categoria = 5";
    $stmtJeans = $pdo->prepare($queryJeans);
    $stmtJeans->execute();
    $productosJeans = $stmtJeans->fetchAll(PDO::FETCH_ASSOC);
    //Blusas
    $queryBlusas = "SELECT productImg, productName, productPrice, available, id_categoria FROM productos WHERE available = 1 AND id_categoria = 6";
    $stmtBlusas = $pdo->prepare($queryBlusas);
    $stmtBlusas->execute();
    $productosBlusas = $stmtBlusas->fetchAll(PDO::FETCH_ASSOC);
    //Vestidos
    $queryVestidos = "SELECT productImg, productName, productPrice, available, id_categoria FROM productos WHERE available = 1 AND id_categoria = 7";
    $stmtVestidos = $pdo->prepare($queryVestidos);
    $stmtVestidos->execute();
    $productosVestidos = $stmtVestidos->fetchAll(PDO::FETCH_ASSOC);
    //Deportiva
    $queryDeportiva = "SELECT productImg, productName, productPrice, available, id_categoria FROM productos WHERE available = 1 AND id_categoria = 8";
    $stmtDeportiva  = $pdo->prepare($queryDeportiva );
    $stmtDeportiva ->execute();
    $productosDeportiva  = $stmtDeportiva ->fetchAll(PDO::FETCH_ASSOC);
    //Hoodies
    $queryHoodies = "SELECT productImg, productName, productPrice, available, id_categoria FROM productos WHERE available = 1 AND id_categoria = 9";
    $stmtHoodies = $pdo->prepare($queryHoodies);
    $stmtHoodies->execute();
    $productosHoodies = $stmtHoodies->fetchAll(PDO::FETCH_ASSOC);
    //Sandalias
    $querySandalias = "SELECT productImg, productName, productPrice, available, id_categoria FROM productos WHERE available = 1 AND id_categoria = 10";
    $stmtSandalias  = $pdo->prepare($querySandalias );
    $stmtSandalias ->execute();
    $productosSandalias  = $stmtSandalias ->fetchAll(PDO::FETCH_ASSOC);
    //Abrigos
    $queryAbrigos = "SELECT productImg, productName, productPrice, available, id_categoria FROM productos WHERE available = 1 AND id_categoria = 11";
    $stmtAbrigos = $pdo->prepare($queryAbrigos);
    $stmtAbrigos->execute();
    $productosAbrigos = $stmtAbrigos->fetchAll(PDO::FETCH_ASSOC);
    //Tenis
    $queryTenis = "SELECT productImg, productName, productPrice, available, id_categoria FROM productos WHERE available = 1 AND id_categoria = 2";
    $stmtTenis = $pdo->prepare($queryTenis);
    $stmtTenis->execute();
    $productosTenis = $stmtTenis->fetchAll(PDO::FETCH_ASSOC);
    //Otros
    $queryOtros = "SELECT productImg, productName, productPrice, available, id_categoria FROM productos WHERE available = 1 AND id_categoria = 19";
    $stmtOtros = $pdo->prepare($queryOtros);
    $stmtOtros->execute();
    $productosOtros = $stmtOtros->fetchAll(PDO::FETCH_ASSOC);
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
            <img src="/public/imgs/icons/envios.png" alt="Ícono carro de envíos"><p>Envío gratis a todo Colombia a partir de <span id="minAmount">$100,000</span></p>
        </div>
        <header>
            <div id="mobileHeader" class="mobileHeader">
                <img id="toIndex" src="/public/imgs/logos/logo.png" alt="El Baul de Severina Logo">
                <ul>
                    <li id="toContact"><span class="contactSpan">Contacto</span></li>
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
            <li id="toIndex">INICIO</li>
            <li id="toAboutUs">SOBRE NOSOTROS</li>
            <li id="toHappyClients">CLIENTES FELICES</li>
            <li id="toContact">CONTACTO</li>
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
            </div>
            <div class="scrollSection">
                <h3>¡Desliza para descubrir por tu cuenta!</h3>
                <img src="/public/imgs/icons/scroll.png" alt="Ícono de Scroll para ver todo nuestro catálogo de indumentaria">
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
            <div id="productos-bolsos">
                <?php
                if (!empty($productosJeans)): ?>
                    <?php foreach ($productosJeans as $jeans): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($jeans['productImg']); ?>');">
                            <div class="card-content">
                                <span class="product-name"><?php echo htmlspecialchars($jeans['productName']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($jeans['productPrice']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="blusasCategory" class="category">
            <h2>Blusas</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosBlusas)): ?>
                    <?php foreach ($productosBlusas as $blusa): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($blusa['productImg']); ?>');">
                            <div class="card-content">
                                <span class="product-name"><?php echo htmlspecialchars($blusa['productName']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($blusa['productPrice']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
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
            <div id="productos-bolsos">
                <?php
                if (!empty($productosVestidos)): ?>
                    <?php foreach ($productosVestidos as $vestido): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($vestido['productImg']); ?>');">
                            <div class="card-content">
                                <span class="product-name"><?php echo htmlspecialchars($vestido['productName']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($vestido['productPrice']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="deportivaCategory" class="category">
            <h2>Ropa Deportiva</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosDeportiva)): ?>
                    <?php foreach ($productosDeportiva as $deportiva): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($deportiva['productImg']); ?>');">
                            <div class="card-content">
                                <span class="product-name"><?php echo htmlspecialchars($deportiva['productName']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($deportiva['productPrice']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="suetersCategory" class="category">
            <h2>Hoodies & Sueters</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosHoodies)): ?>
                    <?php foreach ($productosHoodies as $hoodies): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($hoodies['productImg']); ?>');">
                            <div class="card-content">
                                <span class="product-name"><?php echo htmlspecialchars($hoodies['productName']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($hoodies['productPrice']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="taconesCategory" class="category">
            <h2>Sandalias & Tacones</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosSandalias)): ?>
                    <?php foreach ($productosSandalias as $sandalia): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($sandalia['productImg']); ?>');">
                            <div class="card-content">
                                <span class="product-name"><?php echo htmlspecialchars($sandalia['productName']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($sandalia['productPrice']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="abrigosCategory" class="category">
            <h2>Chaquetas & Abrigos</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosAbrigos)): ?>
                    <?php foreach ($productosAbrigos as $abrigo): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($abrigo['productImg']); ?>');">
                            <div class="card-content">
                                <span class="product-name"><?php echo htmlspecialchars($abrigo['productName']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($abrigo['productPrice']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="otrosCategory" class="category">
            <h2>¡Más para ti!</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosOtros)): ?>
                    <?php foreach ($productosOtros as $otros): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($otros['productImg']); ?>');">
                            <div class="card-content">
                                <span class="product-name"><?php echo htmlspecialchars($otros['productName']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($otros['productPrice']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
    </main>
    <!--FOOTER-->
    <footer>
        <img src="/public/imgs/logos/logo.png" alt="El Baul de Severina Logo">
        <div class="socialMedia">
            <h3>¡Síguenos!</h3>
            <img src="/public/imgs/icons/instagram.png" alt="Instagram Icon">
            <img src="/public/imgs/icons/facebook.png" alt="Facebook Icon">
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