<?php include("../templates/cabecera.php"); ?>
<link rel="stylesheet" href="../styles/index_style.css">
    <h1 class="titulo-bienvenido">¡BIENVENIDO A LA APLICACIÓN! </h1>


    <a href="Posts/generar_posts.php">
    <button id="boton-publicacion">
        Crear publicación
    </button>
    </a>
    

    <h1 class="titulo-tendencias">TENDENCIAS:</h1>


    <!--Categoria para almacenar botones de tendencias-->
    <div class="contenedor-tendencias">
        <div class="tendencias-1 tendencias">
            <a href="./tendencias/tendencia_1.php">
                <img class="img-tendencias" src="../assets/boton-1.jpg" alt="boton-1">
            </a>
        </div>
        <br>
        <div class="tendencias-2 tendencias">
            <a href="./tendencias/tendencia_2.php">
                <img class="img-tendencias" src="../assets/boton-2.jpg" alt="boton-2">
            </a>
        </div>
        <br>
        <div class="tendencias-3 tendencias">
            <a href="./tendencias/tendencia_3.php">
                <img class="img-tendencias" src="../assets/boton-3.jpg" alt="boton-3">
            </a>
        </div>
    </div>

    <!--Pie de pagina para botones para volver a sección, avanzar y retrocedes-->
   <a href="../secciones/vista_curso.php">Ir cursos</a>
    <a href="../secciones/vista_alumnos.php">Ir alumnos</a>
    <a href="../secciones/pacientes.php">Ir pacientes</a>
<?php include("../templates/cabecera_volver.php"); ?> 
<?php include("../templates/pie.php"); ?>   

