<?php

class BD {
    public static $instancia = null;

    public static function crearInstancia() {
        if (!isset(self::$instancia)) {
            $opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            //Conexión BD-Nombre de DB-Usuario-Contraseña
            try {
                self::$instancia = new PDO('mysql:host=localhost;dbname=app', 'root', '', $opciones);
                
            } catch (PDOException $e) {
                echo "Error de conexión: " . $e->getMessage();
                // Importante: devolver null si hay un error en la conexión
                return null;
            }
        }
        // Devolver la instancia de la conexión
        return self::$instancia;
    }
}

