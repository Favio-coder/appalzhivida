

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Iniciar Sesión | AlzhiVida</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>




<body>

    <div class="imagen-cabecera">
        <img src="./assets/logo-ancianos copy.png" alt="">
    </div>


    <div class="container">
        <div class="secciones-botones-navegacion">
            <div class="btn__nav" id="btn__is">
                Iniciar Sesion
                <div class="sub__line"></div>
            </div>
            <a href="crearCuenta.php">
                <div class="btn__nav" id="btn__reg">
                    Crear Cuenta
                    <div class="sub__line"></div>
                </div>
            </a>
        </div>
        <div class="main-logo">
            <img src="./assets/logo_alzhivida.png" alt="logo-alzhivida">
        </div>

        <form action="configuraciones/session_val.php" name="formulatio__login" method="post" id="formulario__login">
            <div class="box-input">
                <input type="text" id="email" required name="usuario" placeholder="Correo electrónico">
            </div>
            <br>
            <div class="box-input">
                <input type="password" id="contraseña" maxlength="35" minlength="8" required name="contrasena" placeholder="Contraseña">
                <img src="./assets/icon-eye-01.svg" alt="Mostrar contraseña" class="icon-eye-1 icon-eye" height="25" width="25">
                <img src="./assets/icon-eye-two.svg" alt="Mostrar contraseña" class="icon-eye-2 icon-eye" height="25" width="25">
            </div>
        </form>
        <div id="box__recover">
            <a href="#">¿Olvidaste la contraseña?</a>
        </div>
        <div class="secciones-botones-entrar">
            <input type="submit" value="Ingresar" form="formulario__login">
        </div>
    </div>
    <div id="box__net">
        <a href="#" class="link__net" id="fb__net">
            <img src="./assets/icon_fb.svg" alt="" srcset="" class="img__net">
            @AlzhiVida
        </a>

        <a href="#" class="link__net" id="ins__net">
            <img src="./assets/icon_ins.svg" alt="" srcset="" class="img__net">
            @AlzhiVida
        </a>

        <a href="#" class="link__net" id="tiktok__net">
            <img src="./assets/icon_tiktok.svg" alt="" srcset="" class="img__net">
            @AlzhiVida
        </a>
    </div>
    <script src="./JS/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>