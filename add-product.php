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

    <script>
                console.log('Datos insertadossss')
            </script>
        // Insertar los datos en la base de datos
        try {
            // Preparar la consulta SQL para insertar el producto
            $stmt = $pdo->prepare("INSERT INTO productos (productName, productPrice, productImg, available, id_categoria) VALUES (:productName, :productPrice, :productImg, :available, :id_categoria)");
            $stmt->bindParam(':productName', $productName);
            $stmt->bindParam(':productPrice', $productPrice);
            $stmt->bindParam(':productImg', $productImg);
            $stmt->bindParam(':available', $available);
            $stmt->bindParam(':id_categoria', $id_categoria);
            <script>
                console.log('Datos insertados')
            </script>
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