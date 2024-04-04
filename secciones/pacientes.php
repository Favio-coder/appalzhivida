<?php
include_once '../configuraciones/bd.php'; // Asegúrate de incluir el archivo que contiene la clase BD

// Obtener una instancia de la conexión a la base de datos
$bd = BD::crearInstancia();

// Verificar si la conexión fue exitosa
if ($bd) {
    try {
        // Preparar y ejecutar la consulta SQL para obtener todos los pacientes
        $consulta = $bd->prepare("SELECT * FROM pacientes");
        $consulta->execute();
        // Obtener todos los resultados como un array asociativo
        $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Manejar cualquier error de la base de datos al obtener los pacientes
        echo "Error de base de datos al obtener los pacientes: " . $e->getMessage();
    }
} else {
    echo "Error al conectar a la base de datos";
}

// Verificar si se ha enviado algún formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = isset($_POST['accion']) ? $_POST['accion'] : '';

    // Verificar si la conexión a la base de datos es válida
    if ($bd) {
        try {
            switch ($accion) {
                case 'agregar':
                    $nombre = isset($_POST["nombre_paciente"]) ? $_POST["nombre_paciente"] : "";
                    $apellido = isset($_POST["apellido_paciente"]) ? $_POST["apellido_paciente"] : "";
                    $genero = isset($_POST["genero_paciente"]) ? $_POST["genero_paciente"] : "";
                    $edad = isset($_POST["edad_paciente"]) ? intval($_POST["edad_paciente"]) : 0;
                    $estado = isset($_POST['estado_paciente']) ? $_POST['estado_paciente'] : "";

                    // Construir la consulta SQL para agregar el paciente
                    $sql = "INSERT INTO pacientes (nombre, apellido, genero, edad, estado) VALUES (:nombre, :apellido, :genero, :edad, :estado)";
                    // Preparar la consulta
                    $consulta_agregar = $bd->prepare($sql);
                    // Asociar los parámetros con los valores obtenidos del formulario
                    $consulta_agregar->bindParam(':nombre', $nombre);
                    $consulta_agregar->bindParam(':apellido', $apellido);
                    $consulta_agregar->bindParam(':genero', $genero);
                    $consulta_agregar->bindParam(':edad', $edad);
                    $consulta_agregar->bindParam(':estado', $estado);
                    // Ejecutar la consulta
                    $consulta_agregar->execute();
                    // Redirigir a la página de vista de pacientes después de agregar el paciente
                    header("Location: vista_pacientes.php");
                    exit(); // Terminar la ejecución del script después de redirigir
                    
                case 'eliminar':
                    $id = isset($_POST['paciente_id']) ? intval($_POST['paciente_id']) : 0;
                    // Construir la consulta SQL para eliminar al paciente
                    $sql = "DELETE FROM pacientes WHERE idPacientes = :id";
                    // Preparar la consulta
                    $consulta_eliminar = $bd->prepare($sql);
                    // Asociar el parámetro con el valor obtenido del formulario
                    $consulta_eliminar->bindParam(':id', $id);
                    // Ejecutar la consulta
                    $consulta_eliminar->execute();
                    // Redirigir a la página de vista de pacientes después de eliminar al paciente
                    header("Location: vista_pacientes.php");
                    
                    break;

                    
                        
                       
                    
            }
        } catch (PDOException $e) {
            // Manejar cualquier error de la base de datos al agregar o eliminar al paciente
            echo "Error de base de datos: " . $e->getMessage();
        }
    } else {
        echo "Error al conectar a la base de datos";
    }
}

