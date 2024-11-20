<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo de conexión a la base de datos
include 'db.php';

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $productName = $_POST['prodName'];
    $productValue = $_POST['price'];
    $available = isset($_POST['available']) ? 1 : 0; 
    $productImg = ''; 

    // Verificar si se cargó una imagen
    if (isset($_FILES['productImg']) && $_FILES['productImg']['error'] == 0) {
        // Definir la ruta donde se guardará la imagen
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['productImg']['name']);

        // Intentar mover la imagen al directorio de carga
        if (move_uploaded_file($_FILES['productImg']['tmp_name'], $uploadFile)) {
            $productImg = $uploadFile;  // Guardar la ruta de la imagen en la base de datos
        }
    }

    // Insertar los datos en la base de datos
    try {
        // Preparar la consulta SQL para insertar el producto
        $stmt = $pdo->prepare("INSERT INTO products (productName, productValue, productImg, available) VALUES (:productName, :productValue, :productImg, :available)");
        $stmt->bindParam(':productName', $productName);
        $stmt->bindParam(':productValue', $productValue);
        $stmt->bindParam(':productImg', $productImg);
        $stmt->bindParam(':available', $available);

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