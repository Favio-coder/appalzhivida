<?php
include_once 'auth/user.php'; // Incluir la clase User

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST['usuario'];
    $password = $_POST['contrasena'];

    // Crear una instancia de la clase User
    $user = new User();

    // Verificar si el usuario existe en la base de datos
    if ($user->userExists($username, $password)) {
        // Iniciar sesión y redirigir al usuario a la página de inicio
        session_start();
        $_SESSION['username'] = $username; // Guardar el nombre de usuario en la sesión
        header("Location: secciones/index.php"); // Redirigir a la página de inicio
        exit();
    } else {
        // Mostrar mensaje de error si las credenciales son incorrectas
        $error_message = "Nombre de usuario o contraseña incorrectos";
    }
}






