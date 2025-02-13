<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo de conexión a la base de datos
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $id_categoria = $_POST['id_categoria'];
    $available = isset($_POST['available']) ? 1 : 0;

    try {
        // INSERTAR EL PRODUCTO EN LA BASE DE DATOS
        $stmt = $pdo->prepare("INSERT INTO productos (productName, productPrice, available, id_categoria) 
                               VALUES (:productName, :productPrice, :available, :id_categoria)");
        $stmt->bindParam(':productName', $productName);
        $stmt->bindParam(':productPrice', $productPrice);
        $stmt->bindParam(':available', $available);
        $stmt->bindParam(':id_categoria', $id_categoria);
        $stmt->execute();

        // Obtener el ID del producto recién insertado
        $productId = $pdo->lastInsertId();

        // MANEJAR LAS IMÁGENES
        if (isset($_FILES['productImg'])) {
            $uploadDir = 'uploads/';
            
            foreach ($_FILES['productImg']['tmp_name'] as $key => $tmp_name) {
                if ($_FILES['productImg']['error'][$key] === 0) {
                    $fileName = basename($_FILES['productImg']['name'][$key]);
                    $uploadFile = $uploadDir . $fileName;

                    // Mover la imagen al directorio de carga
                    if (move_uploaded_file($tmp_name, $uploadFile)) {
                        // Guardar la imagen en la tabla de imágenes
                        $stmtImg = $pdo->prepare("INSERT INTO imagenes_producto (id_producto, imageUrl) 
                                                  VALUES (:id_producto, :imageUrl)");
                        $stmtImg->bindParam(':id_producto', $productId);
                        $stmtImg->bindParam(':imageUrl', $uploadFile);
                        $stmtImg->execute();
                    }
                }
            }
        }

        // Redirigir con éxito
        header('Location: /views/admin.php?success=1');
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header('Location: /views/admin.php');
    exit;
}
?>