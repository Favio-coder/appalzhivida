<?php

include("./bd.php");
$conexion = new conexion();

if($_POST){
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["contrasena"];
    $password_val = $_POST["contrasena__val"];
    if($password == $password_val){
        $conexion->ejecutar("INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellidos`, `usuario`, `correo`, `descripcion`, `genero`, `contraseña`) VALUES (NULL, '$name', '$lastname', '', '$email', '', '', '$password')");
        header("Location: ../login.php");
    }
}
?>