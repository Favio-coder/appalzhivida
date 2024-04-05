<?php

require("bd.php");
$conexion = new conexion();

if($_POST){
    $email = $_POST["usuario"];
    $pass = $_POST["contrasena"];

    $get_dates = $conexion->consultar("SELECT * FROM usuario WHERE correo = '$email'");

    $password = $get_dates[0]["contraseña"];

    if($pass == $password){
        header("Location: ../secciones/");
    }else{
        header("Location: ../login.php");
    }

}

?>