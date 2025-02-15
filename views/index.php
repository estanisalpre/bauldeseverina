<?php
    include 'db.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    try {
        //Imagen 1
        $queryImgs1 = "SELECT productImg FROM productos ORDER BY RAND() LIMIT 1";
        $stmtImgs1 = $pdo->prepare($queryImgs1);
        $stmtImgs1->execute();
        $myImgs1 = $stmtImgs1->fetch(PDO::FETCH_ASSOC);

        //Imagen 2
        $queryImgs2 = "SELECT productImg FROM productos ORDER BY RAND() LIMIT 1";
        $stmtImgs2 = $pdo->prepare($queryImgs2);
        $stmtImgs2->execute();
        $myImgs2 = $stmtImgs2->fetch(PDO::FETCH_ASSOC);

        //Imagen 3
        $queryImgs3 = "SELECT productImg FROM productos ORDER BY RAND() LIMIT 1";
        $stmtImgs3 = $pdo->prepare($queryImgs3);
        $stmtImgs3->execute();
        $myImgs3 = $stmtImgs3->fetch(PDO::FETCH_ASSOC);
    
    } catch (PDOException $e) {
        die("Error en la consulta: " . $e->getMessage());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Baúl de Severina - Tienda Oficial</title>
    <!--CSS-->
    <link rel="stylesheet" href="/public/styles/styles.css">
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
        <!--PRIMER CONTENEDOR-->
        <section id="firstContent">
                <div class="slides">
                    <?php if (!empty($myImgs1)): ?>
                        <div style="background-image: url('<?php echo htmlspecialchars($myImgs1['productImg']); ?>');">
                            <button id="comenzarButton">COMENZAR</button>
                        </div>
                    <?php else: ?>
                        <div class="assistanceImg" style="background-image: url('/public/imgs/categories/abrigosCategory.jpeg');">
                            <button id="comenzarButton">COMENZAR</button>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($myImgs2)): ?>
                        <div style="background-image: url('<?php echo htmlspecialchars($myImgs2['productImg']); ?>');">
                            <button id="comenzarButton">COMENZAR</button>
                        </div>
                    <?php else: ?>
                        <div class="assistanceImg" style="background-image: url('/public/imgs/categories/bolsosCategory.jpeg');">
                            <button id="comenzarButton">COMENZAR</button>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($myImgs3)): ?>
                        <div style="background-image: url('<?php echo htmlspecialchars($myImgs3['productImg']); ?>');">
                            <button id="comenzarButton">COMENZAR</button>
                        </div>
                    <?php else: ?>
                        <div class="assistanceImg" style="background-image: url('/public/imgs/categories/tenisCategory.jpeg');">
                            <button id="comenzarButton">COMENZAR</button>
                        </div>
                    <?php endif; ?>
                </div>
        </section>
        <!--PRESENTACION-->
        <section id="presentation">
            <div class="textPresentation">
                <img src="/public/imgs/logos/logo.png" alt="Logo de El Baul de Severina">
                <h1>Una segunda oportunidad para tu clóset</h1>
                <p>Llevamos seis años trayendo tesoros de segunda mano, aplicando los mejores procesos de curaduría, con precios justos. <br> <br> De Medellín para Colombia con amor</p>
            </div>
        </section>
        <!--SECCIÓN DE CATEGORÍAS-->
        <h4>Categorias</h4> 
        <section id="categoriesSection">
            <div class="fourthCategory">
                <h3>Tenis</h3>
            </div>
            <div class="fifthCategory">
                <h3>Vestidos & Faldas</h3>
            </div>
            <div class="seventhCategory">
                <h3>Hoodies & Sueters</h3>
            </div>
            <div class="secondCategory">
                <h3>Pantalones & Jeans</h3>
            </div>
            <button id="toBriefcase">VER CATÁLOGO COMPLETO</button>
            <!--CATALOGO-->
            <div class="toBriefcaseSection">
                <div id="contactSection" class="contactSection">
                    <h2>¡Contáctanos!</h2>
                    <div>
                        <ul>
                            <li><img src="/public/imgs/icons/facebook.png" alt="Ícono de Facebook"></li>
                            <li><img src="/public/imgs/icons/instagram.png" alt="Ícono de Instagram"></li>
                            <li><img src="/public/imgs/icons/whatsapp.png" alt="Ícono de Whatsapp"></li>
                        </ul>
                    </div>
                    <div class="numeroCiudad">
                        <ul>
                            <li>📱 301 2397022</li>
                            <li>📍 Medellín, CO</li>  
                        </ul>
                    </div>
                </div>
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
    <!--FOOTER-->
    <footer>
        <img src="/public/imgs/logos/logo.png" alt="El Baul de Severina Logo">
        <div>
            <ul>
                <span id="toIndex">Inicio</span>
                <span id="toBriefcase">Catálogo</span>
                <span id="toContact">Contacto</span>
                <span id="toContact">Sobre Nosotros</span>
            </ul>
        </div>
    </footer>
    <!--SCRIPTS-->
    <script type="module" src="/public/js/main.js"></script>
</body>
</html>