<?php
session_start(); // Iniciar la sesión

// Obtener los datos enviados en el cuerpo de la solicitud
$data = json_decode(file_get_contents('php://input'), true);

// Verificar si las credenciales se han enviado
if (isset($data['username'], $data['password'])) {
    $username = $data['username'];
    $password = $data['password'];

    // Aquí debes validar las credenciales con la base de datos
    // Ejemplo simple con validación estática (cambiar por tu propia lógica)
    if ($username === 'armando2024' && $password === 'armando1233') {
        // Iniciar sesión y guardar el nombre de usuario
        $_SESSION['user'] = $username;
        echo json_encode(['success' => true]); // Responder con éxito
    } else {
        echo json_encode(['success' => false, 'message' => 'Credenciales incorrectas']); // Responder con error
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Datos incompletos']);
}