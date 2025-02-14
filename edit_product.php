<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo de conexión a la base de datos
include 'db.php';

    header('Content-Type: application/json');
    $data = json_decode(file_get_contents('php://input'), true);

    if (!isset($data['id'], $data['productName'], $data['productBrand'], $data['productDescription'], $data['productPrice'], $data['available'])) {
        echo json_encode(['success' => false, 'message' => 'Datos incompletos']);
        exit;
    }

    try {
        $stmt = $pdo->prepare("UPDATE productos SET productName = :productName, productBrand = :productBrand, productDescription = :productDescription, productPrice = :productPrice, available = :available WHERE id_producto = :id");
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_INT);
        $stmt->bindParam(':productName', $data['productName'], PDO::PARAM_STR);
        $stmt->bindParam(':productBrand', $data['productBrand'], PDO::PARAM_STR);
        $stmt->bindParam(':productDescription', $data['productDescription'], PDO::PARAM_STR);
        $stmt->bindParam(':productPrice', $data['productPrice'], PDO::PARAM_STR);
        $stmt->bindParam(':available', $data['available'], PDO::PARAM_INT);
        $success = $stmt->execute();
        echo json_encode(['success' => $success]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
?>