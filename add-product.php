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
    $productPrice = $_POST['productPrice'];
    $id_categoria = $_POST['id_categoria'];
    $available = isset($_POST['available']) ? 1 : 0;

    try {
        // Insertar el producto en la base de datos
        $stmt = $pdo->prepare("INSERT INTO productos (productName, productPrice, available, id_categoria) VALUES (:productName, :productPrice, :available, :id_categoria)");
        $stmt->bindParam(':productName', $productName);
        $stmt->bindParam(':productPrice', $productPrice);
        $stmt->bindParam(':available', $available);
        $stmt->bindParam(':id_categoria', $id_categoria);
        $stmt->execute();

        // Obtener el ID del producto insertado
        $id_producto = $pdo->lastInsertId();

        // Verificar si se subieron imágenes
        if (isset($_FILES['productImg'])) {
            $uploadDir = 'uploads/'; // Directorio donde se guardarán las imágenes

            foreach ($_FILES['productImg']['tmp_name'] as $key => $tmp_name) {
                if ($_FILES['productImg']['error'][$key] === 0) {
                    $fileName = basename($_FILES['productImg']['name'][$key]);
                    $uploadFile = $uploadDir . $fileName;

                    if (move_uploaded_file($tmp_name, $uploadFile)) {
                        // Insertar cada imagen en la tabla imagenes_productos
                        $stmt = $pdo->prepare("INSERT INTO imagenes_productos (id_producto, image_url) VALUES (:id_producto, :image_url)");
                        $stmt->bindParam(':id_producto', $id_producto);
                        $stmt->bindParam(':image_url', $uploadFile);
                        $stmt->execute();
                    }
                }
            }
        }

        // Redirigir al panel de administración con un mensaje de éxito
        header('Location: /views/admin.php?success=1');
        exit;
    } catch (PDOException $e) {
        echo "Error al agregar el producto: " . $e->getMessage();
    }
} else {
    // Si no es una solicitud POST, redirigir al panel de administración
    header('Location: /views/admin.php');
    exit;
}
?>