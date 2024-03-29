<?php
include_once '../configuraciones/bd.php';

class User extends BD {
    private $nombre;
    private $username;

    public function userExists($user, $pass) {
        $md5pass = md5($pass);

        // Obtener la instancia de la conexión a la base de datos
        $conexionBD = BD::crearInstancia();

        // Verificar si la conexión se realizó correctamente
        if (!$conexionBD) {
            // Manejar el error de conexión
            echo "Error al conectar con la base de datos";
            return false;
        }

        // Corregir error en el nombre de la variable en la consulta y añadir la validación del nombre de usuario
        $query = $conexionBD->prepare('SELECT * FROM usuario WHERE usuario = :user AND contraseña = :pass');

        // Vincular los parámetros a la consulta preparada
        $query->bindParam(':user', $user, PDO::PARAM_STR);
        $query->bindParam(':pass', $md5pass, PDO::PARAM_STR);

        // Ejecutar la consulta
        $query->execute();

        // Obtener el resultado de la consulta
        $results = $query->fetch(PDO::FETCH_ASSOC);

        // Verificar si se encontraron resultados
        if ($results) {
            return true; // El usuario existe en la base de datos
        } else {
            return false; // El usuario no existe en la base de datos
        }
    }
}   

