<?php
    include 'db.php';

    //Transporte
    $queryTransport = "SELECT transportPrice FROM transport";
    $stmtTransport = $pdo->prepare($queryTransport);
    $stmtTransport->execute();
    $precioTransport = $stmtTransport->fetch(PDO::FETCH_ASSOC);
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
        <!--PRESENTACION-->
        <section id="presentation">
            <div class="textPresentation">
                <img src="/public/imgs/logos/logo.png" alt="Logo de El Baul de Severina">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> <br> Ex dicta sunt quaerat. Ex dicta sunt quaerat. Ex dicta sunt quaerat. Ex dicta sunt quaerat. Ex dicta sunt quaerat.</p>
            </div>
            <h2 id="comenzarButton"><img src="/public/imgs/icons/start.png" alt="Ícono de Comenzar - Navegar por la tienda online"> Comenzar</h2>
        </section>
        <!--SECCIÓN DE CATEGORÍAS-->
        <section id="categoriesSection">
            <div class="firstCategory">
                <div><h3>Bolsos</h3></div>
                <div id="buttonSection">
                    <button id="toBriefcase">VER MÁS</button>
                </div> 
            </div>
            <div class="secondCategory">
                <div><h3>Pantalones & Jeans</h3></div>
                <div id="buttonSection">
                    <button id="toBriefcase">VER MÁS</button>
                </div> 
            </div>
            <div class="thirdCategory">
                <div><h3>Blusas</h3></div>
                <div id="buttonSection">
                    <button id="toBriefcase">VER MÁS</button>
                </div> 
            </div>
            <div class="fourthCategory">
                <div><h3>Tenis</h3></div>
                <div id="buttonSection">
                    <button id="toBriefcase">VER MÁS</button>
                </div> 
            </div>
            <div class="toBriefcaseSection">
                <h3>¿Quieres ver el catálogo completo?</h3>
                <button id="toBriefcase"><img src="/public/imgs/icons/catalogo.png" alt="Ícono de Catálogo de nuestra indumentaria">VER CATÁLOGO</button>
            </div>
            <div class="fifthCategory">
                <div><h3>Vestidos & Faldas</h3></div>
                <div id="buttonSection">
                    <button id="toBriefcase">VER MÁS</button>
                </div> 
            </div>
            <!--CLIENTES FELICES-->
            <div class="sixthCategory">
                <div><h3>Ropa deportiva</h3></div>
                <div id="buttonSection">
                    <button id="toBriefcase">VER MÁS</button>
                </div> 
            </div>
            <div class="seventhCategory">
                <div><h3>Hoodies & Sueters</h3></div>
                <div id="buttonSection">
                    <button id="toBriefcase">VER MÁS</button>
                </div> 
            </div>
            <div class="eigthCategory">
                <div><h3>Sandalias & Tacones</h3></div>
                <div id="buttonSection">
                    <button id="toBriefcase">VER MÁS</button>
                </div> 
            </div>
            <!--CONTACTO-->
            <section id="contact">
                <h2>¡Contáctanos!</h2>
                <div>
                    <ul>
                        <li><img src="/public/imgs/icons/facebook.png" alt="Ícono de Facebook"></li>
                        <li><img src="/public/imgs/icons/instagram.png" alt="Ícono de Instagram"></li>
                        <li><img src="/public/imgs/icons/whatsapp.png" alt="Ícono de Whatsapp"></li>
                        <li><img src="/public/imgs/icons/gmail.png" alt="Ícono de Correo Electrónico"></li>
                    </ul>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Whatsapp</li>
                        <li>Correo</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li>📱 +57 301 2397022 </li>
                        <li>📍 Medellín, CO</li>  
                    </ul>
                </div>
            </section>
            <div class="ninethCategory">
                <div><h3>Chaquetas & Abrigos</h3></div>
                <div id="buttonSection">
                    <button id="toBriefcase">VER MÁS</button>
                </div> 
            </div>
            <div class="tenCategory">
                <div><h3>Chaquetas & Abrigos</h3></div>
                <div id="buttonSection">
                    <button id="toBriefcase">VER MÁS</button>
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
        <div class="socialMedia">
            <h3>¡Síguenos!</h3>
            <img src="/public/imgs/icons/instagram.png" alt="Instagram Icon">
            <img src="/public/imgs/icons/facebook.png" alt="Facebook Icon">
        </div>
        <div>
            <ul>
                <span id="toBriefcase">Catálogo</span>
                <span id="toContact">Contacto</span>
            </ul>
            <ul>
                <li>📱 +57 301 2397022</li>
                <li>📍 Medellín, CO</li>
            </ul>
        </div>
    </footer>
    <!--SCRIPTS-->
    <script type="module" src="/public/js/main.js"></script>
</body>
</html>






