<?php
    include 'db.php';

    //Transporte
    $queryTransport = "SELECT transportPrice FROM transport";
    $stmtTransport = $pdo->prepare($queryTransport);
    $stmtTransport->execute();
    $precioTransport = $stmtTransport->fetch(PDO::FETCH_ASSOC);
    //Bolsos
    $queryBolsos = "SELECT p.productImg, p.productName, p.productBrand, p.cintura, p.tiro, p.largo, p.cadera, p.pierna, p.busto, p.manga, p.productDescription, p.productPrice, p.available, p.id_categoria, t.nombre_talla FROM productos p INNER JOIN tallas t ON p.id_talla = t.id_talla WHERE p.available = 1 AND p.id_categoria = 1";
    $stmtBolsos = $pdo->prepare($queryBolsos);
    $stmtBolsos->execute();
    $productosBolsos = $stmtBolsos->fetchAll(PDO::FETCH_ASSOC);
    //Pantalones & Jeans
    $queryJeans = "SELECT p.productImg, p.productName, p.productBrand, p.cintura, p.tiro, p.largo, p.cadera, p.pierna, p.busto, p.manga, p.productDescription, p.productPrice, p.available, p.id_categoria, t.nombre_talla FROM productos p INNER JOIN tallas t ON p.id_talla = t.id_talla WHERE p.available = 1 AND p.id_categoria = 5";
    $stmtJeans = $pdo->prepare($queryJeans);
    $stmtJeans->execute();
    $productosJeans = $stmtJeans->fetchAll(PDO::FETCH_ASSOC);
    //Blusas
    $queryBlusas = "SELECT p.productImg, p.productName, p.productBrand, p.cintura, p.tiro, p.largo, p.cadera, p.pierna, p.busto, p.manga, p.productDescription, p.productPrice, p.available, p.id_categoria, t.nombre_talla FROM productos p INNER JOIN tallas t ON p.id_talla = t.id_talla WHERE p.available = 1 AND p.id_categoria = 6";
    $stmtBlusas = $pdo->prepare($queryBlusas);
    $stmtBlusas->execute();
    $productosBlusas = $stmtBlusas->fetchAll(PDO::FETCH_ASSOC);
    //Vestidos
    $queryVestidos = "SELECT p.productImg, p.productName, p.productBrand, p.cintura, p.tiro, p.largo, p.cadera, p.pierna, p.busto, p.manga, p.productDescription, p.productPrice, p.available, p.id_categoria, t.nombre_talla FROM productos p INNER JOIN tallas t ON p.id_talla = t.id_talla WHERE p.available = 1 AND p.id_categoria = 7";
    $stmtVestidos = $pdo->prepare($queryVestidos);
    $stmtVestidos->execute();
    $productosVestidos = $stmtVestidos->fetchAll(PDO::FETCH_ASSOC);
    //Deportiva
    $queryDeportiva = "SELECT p.productImg, p.productName, p.productBrand, p.cintura, p.tiro, p.largo, p.cadera, p.pierna, p.busto, p.manga, p.productDescription, p.productPrice, p.available, p.id_categoria, t.nombre_talla FROM productos p INNER JOIN tallas t ON p.id_talla = t.id_talla WHERE p.available = 1 AND p.id_categoria = 8";
    $stmtDeportiva  = $pdo->prepare($queryDeportiva );
    $stmtDeportiva ->execute();
    $productosDeportiva  = $stmtDeportiva ->fetchAll(PDO::FETCH_ASSOC);
    //Hoodies
    $queryHoodies = "SELECT p.productImg, p.productName, p.productBrand, p.cintura, p.tiro, p.largo, p.cadera, p.pierna, p.busto, p.manga, p.productDescription, p.productPrice, p.available, p.id_categoria, t.nombre_talla FROM productos p INNER JOIN tallas t ON p.id_talla = t.id_talla WHERE p.available = 1 AND p.id_categoria = 9";
    $stmtHoodies = $pdo->prepare($queryHoodies);
    $stmtHoodies->execute();
    $productosHoodies = $stmtHoodies->fetchAll(PDO::FETCH_ASSOC);
    //Sandalias
    $querySandalias = "SELECT p.productImg, p.productName, p.productBrand, p.cintura, p.tiro, p.largo, p.cadera, p.pierna, p.busto, p.manga, p.productDescription, p.productPrice, p.available, p.id_categoria, t.nombre_talla FROM productos p INNER JOIN tallas t ON p.id_talla = t.id_talla WHERE p.available = 1 AND p.id_categoria = 10";
    $stmtSandalias  = $pdo->prepare($querySandalias );
    $stmtSandalias ->execute();
    $productosSandalias  = $stmtSandalias ->fetchAll(PDO::FETCH_ASSOC);
    //Abrigos
    $queryAbrigos = "SELECT p.productImg, p.productName, p.productBrand, p.cintura, p.tiro, p.largo, p.cadera, p.pierna, p.busto, p.manga, p.productDescription, p.productPrice, p.available, p.id_categoria, t.nombre_talla FROM productos p INNER JOIN tallas t ON p.id_talla = t.id_talla WHERE p.available = 1 AND p.id_categoria = 11";
    $stmtAbrigos = $pdo->prepare($queryAbrigos);
    $stmtAbrigos->execute();
    $productosAbrigos = $stmtAbrigos->fetchAll(PDO::FETCH_ASSOC);
    //Tenis
    $queryTenis = "SELECT p.productImg, p.productName, p.productBrand, p.cintura, p.tiro, p.largo, p.cadera, p.pierna, p.busto, p.manga, p.productDescription, p.productPrice, p.available, p.id_categoria, t.nombre_talla FROM productos p INNER JOIN tallas t ON p.id_talla = t.id_talla WHERE p.available = 1 AND p.id_categoria = 2";
    $stmtTenis = $pdo->prepare($queryTenis);
    $stmtTenis->execute();
    $productosTenis = $stmtTenis->fetchAll(PDO::FETCH_ASSOC);
    //Otros
    $queryOtros = "SELECT p.productImg, p.productName, p.productBrand, p.cintura, p.tiro, p.largo, p.cadera, p.pierna, p.busto, p.manga, p.productDescription, p.productPrice, p.available, p.id_categoria, t.nombre_talla FROM productos p INNER JOIN tallas t ON p.id_talla = t.id_talla WHERE p.available = 1 AND p.id_categoria = 19";
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
        <section id="bolsosCategory" data-id="bolsosCategory" class="category">
            <h2><span class="selectCategory">Categorías</span>Bolsos</h2>
            <div id="productos-bolsos" class="product-card">
                <?php
                if (!empty($productosBolsos)): ?>
                    <?php foreach ($productosBolsos as $bolso): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($bolso['productImg']); ?>');">
                            <div class="card-content">
                                <div class="medidas-content">
                                    <table>
                                        <tr>
                                            <th>Cintura</th>
                                            <th>Tiro</th>
                                            <th>Largo</th>
                                            <th>Cadera</th>
                                            <th>Pierna</th>
                                            <th>Busto</th>
                                            <th>Manga</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo htmlspecialchars($bolso['cintura'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($bolso['tiro'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($bolso['largo'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($bolso['cadera'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($bolso['pierna'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($bolso['busto'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($bolso['manga'] ?? '-'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <span class="product-talla">Talla: <?php echo htmlspecialchars($bolso['nombre_talla'] ?? 'N/A'); ?></span>
                                <span class="product-name"><?php echo htmlspecialchars($bolso['productName']); ?></span>
                                <span class="product-description"><?php echo htmlspecialchars($bolso['productDescription']); ?> | Marca: <?php echo htmlspecialchars($bolso['productBrand']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($bolso['productPrice']); ?><button class="buyButton" value="hola">¡Quiero esto!</button</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="jeansCategory" data-id="jeansCategory" class="category">
            <h2><span class="selectCategory">Categorías</span>Pantalones & Jeans</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosJeans)): ?>
                    <?php foreach ($productosJeans as $jeans): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($jeans['productImg']); ?>');">
                            <div class="card-content">
                            <div class="medidas-content">
                                    <table>
                                        <tr>
                                            <th>Cintura</th>
                                            <th>Tiro</th>
                                            <th>Largo</th>
                                            <th>Cadera</th>
                                            <th>Pierna</th>
                                            <th>Busto</th>
                                            <th>Manga</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo htmlspecialchars($jeans['cintura'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($jeans['tiro'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($jeans['largo'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($jeans['cadera'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($jeans['pierna'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($jeans['busto'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($jeans['manga'] ?? '-'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <span class="product-talla">Talla: <?php echo htmlspecialchars($jeans['nombre_talla'] ?? 'N/A'); ?></span>
                                <span class="product-name"><?php echo htmlspecialchars($jeans['productName']); ?></span>
                                <span class="product-description"><?php echo htmlspecialchars($jeans['productDescription']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($jeans['productPrice']); ?><button class="buyButton" value="hola">¡Quiero esto!</button</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="blusasCategory" data-id="blusasCategory" class="category">
            <h2><span class="selectCategory">Categorías</span>Blusas</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosBlusas)): ?>
                    <?php foreach ($productosBlusas as $blusa): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($blusa['productImg']); ?>');">
                            <div class="card-content">
                            <div class="medidas-content">
                                    <table>
                                        <tr>
                                            <th>Cintura</th>
                                            <th>Tiro</th>
                                            <th>Largo</th>
                                            <th>Cadera</th>
                                            <th>Pierna</th>
                                            <th>Busto</th>
                                            <th>Manga</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo htmlspecialchars($blusa['cintura'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($blusa['tiro'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($blusa['largo'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($blusa['cadera'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($blusa['pierna'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($blusa['busto'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($blusa['manga'] ?? '-'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <span class="product-talla">Talla: <?php echo htmlspecialchars($blusa['nombre_talla'] ?? 'N/A'); ?></span>
                                <span class="product-name"><?php echo htmlspecialchars($blusa['productName']); ?></span>
                                <span class="product-description"><?php echo htmlspecialchars($blusa['productDescription']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($blusa['productPrice']); ?><button class="buyButton" value="hola">¡Quiero esto!</button</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="tenisCategory"  data-id="tenisCategory" class="category">
            <h2><span class="selectCategory">Categorías</span>Tenis</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosTenis)): ?>
                    <?php foreach ($productosTenis as $tenis): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($tenis['productImg']); ?>');">
                            <div class="card-content">
                            <div class="medidas-content">
                                    <table>
                                        <tr>
                                            <th>Cintura</th>
                                            <th>Tiro</th>
                                            <th>Largo</th>
                                            <th>Cadera</th>
                                            <th>Pierna</th>
                                            <th>Busto</th>
                                            <th>Manga</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo htmlspecialchars($tenis['cintura'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($tenis['tiro'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($tenis['largo'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($tenis['cadera'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($tenis['pierna'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($tenis['busto'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($tenis['manga'] ?? '-'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <span class="product-talla">Talla: <?php echo htmlspecialchars($tenis['nombre_talla'] ?? 'N/A'); ?></span>
                                <span class="product-name"><?php echo htmlspecialchars($tenis['productName']); ?></span>
                                <span class="product-description"><?php echo htmlspecialchars($tenis['productDescription']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($tenis['productPrice']); ?><button class="buyButton" value="hola">¡Quiero esto!</button</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="vestidosCategory" data-id="vestidosCategory" class="category">
            <h2><span class="selectCategory">Categorías</span>Vestidos & Faldas</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosVestidos)): ?>
                    <?php foreach ($productosVestidos as $vestido): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($vestido['productImg']); ?>');">
                            <div class="card-content">
                            <div class="medidas-content">
                                    <table>
                                        <tr>
                                            <th>Cintura</th>
                                            <th>Tiro</th>
                                            <th>Largo</th>
                                            <th>Cadera</th>
                                            <th>Pierna</th>
                                            <th>Busto</th>
                                            <th>Manga</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo htmlspecialchars($vestido['cintura'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($vestido['tiro'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($vestido['largo'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($vestido['cadera'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($vestido['pierna'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($vestido['busto'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($vestido['manga'] ?? '-'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <span class="product-talla">Talla: <?php echo htmlspecialchars($vestido['nombre_talla'] ?? 'N/A'); ?></span>
                                <span class="product-name"><?php echo htmlspecialchars($vestido['productName']); ?></span>
                                <span class="product-description"><?php echo htmlspecialchars($vestido['productDescription']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($vestido['productPrice']); ?><button class="buyButton" value="hola">¡Quiero esto!</button</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="deportivaCategory" data-id="deportivaCategory" class="category">
            <h2><span class="selectCategory">Categorías</span>Ropa Deportiva</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosDeportiva)): ?>
                    <?php foreach ($productosDeportiva as $deportiva): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($deportiva['productImg']); ?>');">
                            <div class="card-content">
                            <div class="medidas-content">
                                    <table>
                                        <tr>
                                            <th>Cintura</th>
                                            <th>Tiro</th>
                                            <th>Largo</th>
                                            <th>Cadera</th>
                                            <th>Pierna</th>
                                            <th>Busto</th>
                                            <th>Manga</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo htmlspecialchars($deportiva['cintura'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($deportiva['tiro'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($deportiva['largo'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($deportiva['cadera'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($deportiva['pierna'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($deportiva['busto'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($deportiva['manga'] ?? '-'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <span class="product-talla">Talla: <?php echo htmlspecialchars($deportiva['nombre_talla'] ?? 'N/A'); ?></span>
                                <span class="product-name"><?php echo htmlspecialchars($deportiva['productName']); ?></span>
                                <span class="product-description"><?php echo htmlspecialchars($deportiva['productDescription']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($deportiva['productPrice']); ?><button class="buyButton" value="hola">¡Quiero esto!</button></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="suetersCategory" data-id="suetersCategory" class="category">
            <h2><span class="selectCategory">Categorías</span>Hoodies & Sueters</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosHoodies)): ?>
                    <?php foreach ($productosHoodies as $hoodies): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($hoodies['productImg']); ?>');">
                            <div class="card-content">
                            <div class="medidas-content">
                                    <table>
                                        <tr>
                                            <th>Cintura</th>
                                            <th>Tiro</th>
                                            <th>Largo</th>
                                            <th>Cadera</th>
                                            <th>Pierna</th>
                                            <th>Busto</th>
                                            <th>Manga</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo htmlspecialchars($hoodies['cintura'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($hoodies['tiro'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($hoodies['largo'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($hoodies['cadera'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($hoodies['pierna'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($hoodies['busto'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($hoodies['manga'] ?? '-'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <span class="product-talla">Talla: <?php echo htmlspecialchars($hoodies['nombre_talla'] ?? 'N/A'); ?></span>
                                <span class="product-name"><?php echo htmlspecialchars($hoodies['productName']); ?></span>
                                <span class="product-description"><?php echo htmlspecialchars($hoodies['productDescription']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($hoodies['productPrice']); ?><button class="buyButton" value="hola">¡Quiero esto!</button</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="taconesCategory" data-id="taconesCategory" class="category">
            <h2><span class="selectCategory">Categorías</span>Sandalias & Tacones</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosSandalias)): ?>
                    <?php foreach ($productosSandalias as $sandalia): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($sandalia['productImg']); ?>');">
                            <div class="card-content">
                            <div class="medidas-content">
                                    <table>
                                        <tr>
                                            <th>Cintura</th>
                                            <th>Tiro</th>
                                            <th>Largo</th>
                                            <th>Cadera</th>
                                            <th>Pierna</th>
                                            <th>Busto</th>
                                            <th>Manga</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo htmlspecialchars($sandalia['cintura'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($sandalia['tiro'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($sandalia['largo'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($sandalia['cadera'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($sandalia['pierna'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($sandalia['busto'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($sandalia['manga'] ?? '-'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <span class="product-talla">Talla: <?php echo htmlspecialchars($sandalia['nombre_talla'] ?? 'N/A'); ?></span>
                                <span class="product-name"><?php echo htmlspecialchars($sandalia['productName']); ?></span>
                                <span class="product-description"><?php echo htmlspecialchars($sandalia['productDescription']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($sandalia['productPrice']); ?><button class="buyButton" value="hola">¡Quiero esto!</button</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="abrigosCategory" data-id="abrigosCategory" class="category">
            <h2><span class="selectCategory">Categorías</span>Chaquetas & Abrigos</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosAbrigos)): ?>
                    <?php foreach ($productosAbrigos as $abrigo): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($abrigo['productImg']); ?>');">
                            <div class="card-content">
                            <div class="medidas-content">
                                    <table>
                                        <tr>
                                            <th>Cintura</th>
                                            <th>Tiro</th>
                                            <th>Largo</th>
                                            <th>Cadera</th>
                                            <th>Pierna</th>
                                            <th>Busto</th>
                                            <th>Manga</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo htmlspecialchars($abrigo['cintura'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($abrigo['tiro'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($abrigo['largo'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($abrigo['cadera'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($abrigo['pierna'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($abrigo['busto'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($abrigo['manga'] ?? '-'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <span class="product-talla">Talla: <?php echo htmlspecialchars($abrigo['nombre_talla'] ?? 'N/A'); ?></span>
                                <span class="product-name"><?php echo htmlspecialchars($abrigo['productName']); ?></span>
                                <span class="product-description"><?php echo htmlspecialchars($abrigo['productDescription']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($abrigo['productPrice']); ?><button class="buyButton" value="hola">¡Quiero esto!</button</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
        </section>
        <section id="otrosCategory" data-id="moreCategory" class="category">
            <h2><span class="selectCategory">Categorías</span>¡Más para ti!</h2>
            <div id="productos-bolsos">
                <?php
                if (!empty($productosOtros)): ?>
                    <?php foreach ($productosOtros as $otros): ?>
                        <div class="card" style="background-image: url('<?php echo htmlspecialchars($otros['productImg']); ?>');">
                            <div class="card-content">
                            <div class="medidas-content">
                                    <table>
                                        <tr>
                                            <th>Cintura</th>
                                            <th>Tiro</th>
                                            <th>Largo</th>
                                            <th>Cadera</th>
                                            <th>Pierna</th>
                                            <th>Busto</th>
                                            <th>Manga</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo htmlspecialchars($otros['cintura'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($otros['tiro'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($otros['largo'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($otros['cadera'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($otros['pierna'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($otros['busto'] ?? '-'); ?></td>
                                            <td><?php echo htmlspecialchars($otros['manga'] ?? '-'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <span class="product-talla">Talla: <?php echo htmlspecialchars($otros['nombre_talla'] ?? 'N/A'); ?></span>
                                <span class="product-name"><?php echo htmlspecialchars($otros['productName']); ?></span>
                                <span class="product-description"><?php echo htmlspecialchars($otros['productDescription']); ?></span>
                                <span class="product-price">$<?php echo htmlspecialchars($otros['productPrice']); ?><button class="buyButton">¡Quiero esto!</button</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay productos disponibles.</p>
                <?php endif; 
                ?>
            </div>
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