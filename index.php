<?php include("auth/login.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>AlzhiVida</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>




<body>

    <div class="imagen-cabecera">
        <img src="./assets/logo-ancianos copy.png" alt="">
    </div>


    <div class="container">
        <div class="secciones-botones-navegacion">
            <a href="index.php">Ingresar</a>
            <a href="crearCuenta.php">Crear cuenta</a>
        </div>
        <div class="main-logo">
            <img src="./assets/logo_alzhivida.png" alt="logo-alzhivida">
        </div>

        <form action="secciones/index.php" method="post">
            <div class="box-input">
                <input type="text" id="usuario" name="usuario" placeholder="Usuario">
            </div>
            <br>
            <div class="box-input">
                <input type="password" id="contraseña" name="contrasena" placeholder="Contraseña">
                <img src="./assets/icon-eye-01.svg" alt="Mostrar contraseña" class="icon-eye-1" height="25" width="25">
                <img src="./assets/icon-eye-two.svg" alt="Mostrar contraseña" class="icon-eye-2" height="25" width="25">
            </div>
            <div class="secciones-botones-entrar">
                <input type="submit" value="Ingresar">
            </div>
        </form>
    </div>
    <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($listaUsuarios as $usuario) { ?>
                    <tr>
                        <td scope="row"><?php echo $usuario['idUsuario']; ?></td>
                        <td><?php echo $usuario['nombre']; ?></td>
                        <td><?php echo $usuario['usuario']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

    <script src="./JS/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>