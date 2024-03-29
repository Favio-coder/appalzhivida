<?php

 

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>AlzhiVida</title>
<link rel="stylesheet" href="./styles/crearCuenta.css">
</head>
<body>



<div class="container">
    <div class="main-logo">
        <img src="./assets/logo_alzhivida.png" alt="logo-alzhivida">
    </div>
    <h2>Crea una cuenta en AlzhiVida</h2>
    <hr class="linea">
    <form action="procesar_register.php" method="post">
        <p class="text-input">Nombre(s):</p>
        <div class="box-input">
            <input type="text" id="nombres" name="nombres" placeholder="Nombre(s)" required>
        </div>
        <p class="text-input">Apellidos:</p>
        <div class="box-input">
            <input type="text" id="nombres" name="nombres" placeholder="Apellidos" required>
        </div>
        <p class="text-input">Correo electrónico:</p>
        <div class="box-input">
            <input type="email" id="email" name="email" placeholder="Correo electrónico o email" required>
        </div>
        <p class="text-input">Contraseña:</p>
        <div class="box-input">
            <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required>
            <img src="./assets/icon-eye-01.svg" alt="Mostrar contraseña" class="icon-eye-1" style=" display:block" height="25" width="25">
            <img src="./assets/icon-eye-two.svg" alt="Ocultar contraseña" class="icon-eye-2" style=" display:none" height="25" width="25">
        </div>
        <p class="text-input">Repetir Contraseña:</p>
        <div class="box-input">
            <input type="password" id="repetir-contraseña" name="repetir-contraseña" placeholder="Repetir Contraseña" required>
            <img src="./assets/icon-eye-01.svg" alt="Mostrar contraseña" class="icon-eye-1" style=" display:block" height="25" width="25">
            <img src="./assets/icon-eye-two.svg" alt="Ocultar contraseña" class="icon-eye-2" style=" display:none" height="25" width="25">
        </div>
        <input type="submit" value="Registrarse">
    </form>
    <br>
        <a href="index.php">¿Ya tienes una cuenta?<span>Iniciar sesión </span></a>
</div>

<script src="./JS/crearCuenta.js"></script>



</body>
</html>

