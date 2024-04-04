<?php
// Verificar si se recibió el ID del paciente a eliminar
if (isset($_POST['eliminar_paciente'])) {
    // Obtener el ID del paciente desde el formulario
    $paciente_id = $_POST['idPacientes'];

    // Realizar la conexión a la base de datos (puedes incluir tu archivo de configuración de la base de datos aquí)
    $conexion = new PDO('mysql:host=localhost;dbname=app', 'root', '');

    // Preparar la consulta SQL para eliminar el paciente
    $consulta = $conexion->prepare("DELETE FROM pacientes WHERE idPacientes = :id");

    // Asignar el valor del ID del paciente al parámetro de la consulta
    $consulta->bindParam(':id', $paciente_id);

    // Ejecutar la consulta
    $consulta->execute();

    // Redireccionar de vuelta a la página principal después de eliminar el paciente
    header('Location: index.php');
    exit();
} else {
    // Si no se recibió el ID del paciente, redireccionar a alguna página de error o mostrar un mensaje de error
    header('Location: error.php');
    exit();
}

