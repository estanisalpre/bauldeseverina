<?php
session_start();

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

// Obtener los datos enviados desde el formulario
if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validar las credenciales (reemplazar con tu lógica)
    if ($username === 'mibaul1233' && $password === 'mibaul1233') {
        $_SESSION['user'] = $username;
        // Redirigir o mostrar éxito
        echo "Inicio de sesión exitoso.";
    } else {
        $error = 'Credenciales incorrectas';
        echo $error;
    }
} else {
    echo "Datos incompletos";
}