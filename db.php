<?php
$host = '82.197.82.73'; 
$dbname = 'u584871321_stockProducts'; 
$username = 'u584871321_admin';  
$password = 'Kinesis1233';  

try {
    // Crea una nueva conexión PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Establece el modo de error de PDO para que lance excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
    // Si ocurre un error, se captura la excepción y se muestra el mensaje de error
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
?>