<?php
include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();

$id = isset ($_POST['id']) ? intval($_POST['id']) : "error1";
$nombre_curso = isset ($_POST['nombre_curso']) ? $_POST['nombre_curso'] : "error2";
$accion = isset ($_POST['accion']) ? $_POST['accion'] : '';

if ($accion != '') {
    switch ($accion) {
        case 'agregar':
            // Utiliza consultas preparadas para evitar problemas de seguridad y errores de sintaxis SQL
            $sql = "INSERT INTO cursos (id, nombre_curso) VALUES (NULL, :nombre_curso)";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':nombre_curso', $nombre_curso);
            $consulta->execute();
            echo "Curso agregado correctamente.";
            header("Location: {$_SERVER['PHP_SELF']}");
            exit();
        case 'editar':
            $sql = "UPDATE cursos SET nombre_curso='$nombre_curso' WHERE id=$id";
            echo $sql;
            break;
        case 'borrar':
            $sql = "DELETE FROM cursos WHERE id=$id";
            echo $sql;
            break;
        case 'seleccionar':
            $sql = "SELECT * FROM cursos WHERE id=$id";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            $curso = $consulta->fetch(PDO::FETCH_ASSOC);
            break;
    }
}

// Realiza la consulta fuera del bloque switch para evitar duplicación de código
$consulta = $conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos = $consulta->fetchAll();

