<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo de conexión a la base de datos
include 'db.php';

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $productName = $_POST['productName'];
    $productBrand = $_POST['productBrand'];
    $productDescription = $_POST['productDescription'];
    $productPrice = $_POST['productPrice'];
    $id_talla = $_POST['id_talla'];
    $id_categoria = $_POST['id_categoria'];
    $cintura = $_POST['cintura'];
    $largo = $_POST['largo'];
    $tiro = $_POST['tiro'];
    $cadera = $_POST['cadera'];
    $pierna = $_POST['pierna'];
    $busto = $_POST['busto'];
    $manga = $_POST['manga'];
    $available = isset($_POST['available']) ? 1 : 0; 
    $productImg = ''; 

    // Verificar si se cargó una imagen
    if (isset($_FILES['productImg']) && $_FILES['productImg']['error'] == 0) {
        // Definir la ruta donde se guardará la imagen
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['productImg']['name']);

        // Intentar mover la imagen al directorio de carga
        if (move_uploaded_file($_FILES['productImg']['tmp_name'], $uploadFile)) {
            $productImg = $uploadFile; 
        }
    }
        // Insertar los datos en la base de datos
        try {
            // Preparar la consulta SQL para insertar el producto
            $stmt = $pdo->prepare("INSERT INTO productos (productName, productBrand, productDescription, productPrice, productImg, cintura, largo, tiro, cadera, pierna, busto, manga, id_talla, available, id_categoria) VALUES (:productName, :productBrand, :productDescription, :productPrice, :productImg, :cintura, :largo, :tiro, :cadera, :pierna, :busto, :manga, :id_talla, :available, :id_categoria)");
            $stmt->bindParam(':productName', $productName);
            $stmt->bindParam(':productBrand', $productBrand);
            $stmt->bindParam(':productDescription', $productDescription);
            $stmt->bindParam(':productPrice', $productPrice);
            $stmt->bindParam(':productImg', $productImg);
            $stmt->bindParam(':cintura', $cintura);
            $stmt->bindParam(':largo', $largo);
            $stmt->bindParam(':tiro', $tiro);
            $stmt->bindParam(':cadera', $cadera);
            $stmt->bindParam(':pierna', $pierna);
            $stmt->bindParam(':busto', $busto);
            $stmt->bindParam(':manga', $manga);
            $stmt->bindParam(':id_talla', $id_talla);
            $stmt->bindParam(':available', $available);
            $stmt->bindParam(':id_categoria', $id_categoria);
            
            // Ejecutar la consulta
            $stmt->execute();

            // Redirigir al panel de administración con un mensaje de éxito
            header('Location: /views/admin.php?success=1');  // Redirigir con un parámetro 'success'
            exit;
        } catch (PDOException $e) {
            // Mostrar error si no se puede insertar el producto
            echo "Error al agregar el producto: " . $e->getMessage();
        }
} else {
    // Si no es una solicitud POST, redirigir al panel de administración
    header('Location: /views/admin.php');
    exit;
}
?> 