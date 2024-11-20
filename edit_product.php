<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo de conexión a la base de datos
include 'db.php';

    header('Content-Type: application/json');
    $data = json_decode(file_get_contents('php://input'), true);

    if (!isset($data['id'], $data['productName'], $data['productValue'], $data['available'])) {
        echo json_encode(['success' => false, 'message' => 'Datos incompletos']);
        exit;
    }

    try {
        $stmt = $pdo->prepare("UPDATE products SET productName = :productName, productValue = :productValue, available = :available WHERE idProduct = :id");
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_INT);
        $stmt->bindParam(':productName', $data['productName'], PDO::PARAM_STR);
        $stmt->bindParam(':productValue', $data['productValue'], PDO::PARAM_STR);
        $stmt->bindParam(':available', $data['available'], PDO::PARAM_INT);
        $success = $stmt->execute();
        echo json_encode(['success' => $success]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
?>