<?php
include ("../secciones/pacientes.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/pacientes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header class="cabecera-paciente">
        <div class="imagen-paciente">
            <img src="../assets/interactua.svg" class="iconos-boton" alt="">
        </div>
        <p id="titulo-paciente">Pacientes</p>
    </header>
    <main>
        <div class="boton-agregar">
            <button type="submit" name="accion" value="agregar" onclick="mostrarVentanaAgregar()"> Agregar +</button>
        </div>
        <br>
        <?php if (empty($resultados)): ?>
            <!-- Mostrar el mensaje de advertencia si no hay pacientes -->
            <div class="mensaje-advertencia">
                <i class="icono-advertencia fas fa-exclamation-triangle"></i> Ups! No hay ningún paciente por aquí.
            </div>
        <?php else: ?>

            <div class="contenedor-pacientes">
                <?php foreach ($resultados as $paciente): ?>
                    <div class="paciente-card">
                        <div
                            class="pacientes-card-imagen <?php echo ($paciente['genero'] == 'Masculino') ? 'Masculino' : 'Femenino'; ?>">
                            <?php if ($paciente['genero'] == 'Masculino'): ?>
                                <i class="fa-solid fa-male"></i>
                            <?php else: ?>
                                <i class="fa-solid fa-female"></i>
                            <?php endif; ?>
                        </div>
                        <div class="paciente-datos">
                            <p>
                                <?php echo $paciente['nombre'] . ' ' . $paciente['apellido']; ?>
                            </p>
                            <p>Edad:
                                <?php echo $paciente['edad']; ?>
                            </p>
                            <p>Estado:
                                <?php echo $paciente['estado']; ?>
                            </p>
                            <form action="" method="post" class="acciones-paciente">
                                <input type="hidden" name="paciente_id" id="paciente_id"
                                    value="<?php echo $paciente['idPacientes']; ?>">
                                <button type="submit" name="accion" value="editar" class="editar_paciente">
                                    <i class="fa-solid fa-pencil"></i> Editar
                                </button>
                                <button type="button" onclick="mostrarVentana()" class="eliminar_paciente">
                                    <i class="fa-solid fa-trash"></i> Eliminar
                                </button>
                            </form>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </main>

    <!-- Contenido de la ventana emergente para agregar pacientes-->
    <div id="ventana-emergente" class="ventana-emergente">
        <div class="contenido-ventana">
            <span class="cerrar" onclick="cerrarVentanaAgregar()">×</span>
            <h2>Rellena los campos</h2>
            <form action="" method="post">
                <input type="text" id="nombre_paciente" name="nombre_paciente" placeholder="Nombre del paciente"
                    required><br><br>
                <input type="text" id="apellido_paciente" name="apellido_paciente" placeholder="Apellido del paciente"
                    required><br><br>
                <div class="genero-ventana-emergente">
                    <label>Género:</label><br>
                    <label><input type="radio" id="genero_paciente" name="genero_paciente" value="Masculino">
                        Masculino</label><br>
                    <label><input type="radio" id="genero_paciente" name="genero_paciente" value="Femenino">
                        Femenino</label><br><br>
                </div>
                <div class="edad-ventana-emergente">
                    <label for="edad">Edad:</label>
                    <br>
                    <input type="range" id="edad_paciente" name="edad_paciente" min="0" max="100" value="0"
                        oninput="mostrarEdad()">
                    <span id="edadMostrada">0</span> años<br><br>
                </div>
                <!-- Agrega un campo oculto para almacenar el estado del paciente -->
                <input type="hidden" id="estado_paciente" name="estado_paciente">
                <button type="button" onclick="abrirVentanaCuestionario()">Medir estado</button>
                <button type="submit" name="accion" value="agregar">
                    Añadir
                </button>
            </form>
        </div>
    </div>

    <!-- Ventana emergente para el cuestionario -->
    <div id="ventana-cuestionario" class="ventana-emergente" style="display: none;">
        <div class="contenido-ventana">
            <span class="cerrar" onclick="cerrarVentanaCuestionario()">×</span>
            <h2>Cuestionario de Evaluación de Fase</h2>
            <p>Por favor, responde las siguientes preguntas basadas en las observaciones y experiencias que has tenido
                con el paciente en las últimas semanas.</p>
            <!-- Aquí pega el código HTML del cuestionario -->
            <form action="" method="post" id="formulario-cuestionario">
                <div class="pregunta">
                    <label>1. Capacidad para realizar actividades diarias:</label><br>
                    <label><input type="radio" name="pregunta1" value="Sí"> Sí</label>
                    <label><input type="radio" name="pregunta1" value="No"> No</label><br>
                </div>
                <div class="pregunta">
                    <label>2. Funcionamiento cognitivo:</label><br>
                    <label><input type="radio" name="pregunta2" value="Sí"> Sí</label>
                    <label><input type="radio" name="pregunta2" value="No"> No</label><br>
                </div>
                <div class="pregunta">
                    <label>3. Comportamiento social:</label><br>
                    <label><input type="radio" name="pregunta3" value="Sí"> Sí</label>
                    <label><input type="radio" name="pregunta3" value="No"> No</label><br>
                </div>
                <div class="pregunta">
                    <label>4. Orientación espacial y temporal:</label><br>
                    <label><input type="radio" name="pregunta4" value="Sí"> Sí</label>
                    <label><input type="radio" name="pregunta4" value="No"> No</label><br>
                </div>
                <div class="pregunta">
                    <label>5. Capacidad para comunicarse:</label><br>
                    <label><input type="radio" name="pregunta5" value="Sí"> Sí</label>
                    <label><input type="radio" name="pregunta5" value="No"> No</label><br>
                </div>
                <div class="pregunta">
                    <label>6. Problemas de memoria a largo plazo:</label><br>
                    <label><input type="radio" name="pregunta6" value="Sí"> Sí</label>
                    <label><input type="radio" name="pregunta6" value="No"> No</label><br>
                </div>
                <div class="pregunta">
                    <label>7. Dependencia en las actividades de la vida diaria:</label><br>
                    <label><input type="radio" name="pregunta7" value="Sí"> Sí</label>
                    <label><input type="radio" name="pregunta7" value="No"> No</label><br>
                </div>
                <div class="pregunta">
                    <label>8. Problemas de razonamiento y toma de decisiones:</label><br>
                    <label><input type="radio" name="pregunta8" value="Sí"> Sí</label>
                    <label><input type="radio" name="pregunta8" value="No"> No</label><br>
                </div>
                <div class="pregunta">
                    <label>9. Cambios en la personalidad y el estado de ánimo:</label><br>
                    <label><input type="radio" name="pregunta9" value="Sí"> Sí</label>
                    <label><input type="radio" name="pregunta9" value="No"> No</label><br>
                </div>
                <div class="pregunta">
                    <label>10. Necesidad de supervisión constante:</label><br>
                    <label><input type="radio" name="pregunta10" value="Sí"> Sí</label>
                    <label><input type="radio" name="pregunta10" value="No"> No</label><br>
                </div>
                

                <button type="button" name="accion" value="evaluar" id="evaluar_paciente" onclick="evaluarCuestionario()">
                    Evaluar
                </button>
            </form>
        </div>
    </div>


    <!-- Contenido de la ventana emergente para confirmar la eliminación-->
    <div id="confirmacionEliminacion" class="ventana-emergente">
        <form action="" method="post" class="acciones-paciente">
            <div class="contenido-ventana">
                <p>¿Estás seguro de que deseas eliminar este paciente?</p>
                <input type="hidden" name="paciente_id" id="paciente_id"
                    value="<?php echo $paciente['idPacientes']; ?>">
                <button type="submit" name="accion" value="eliminar" id="eliminar_paciente">
                    <i class="fa-solid fa-trash"></i> Eliminar
                </button>
                <button onclick="cerrarVentana()" id="cancelar-paciente">
                    <i class="fa-solid fa-x"></i> Cancelar
                </button>
            </div>
        </form>
    </div>

    <script>
        // Función para mostrar la ventana emergente
        function mostrarVentanaAgregar() {
            document.getElementById("ventana-emergente").style.display = "block";
            document.querySelector('.mensaje-advertencia').style.display = 'none';
        }
        // Función para cerrar la ventana emergente
        function cerrarVentanaAgregar() {
            document.getElementById("ventana-emergente").style.display = "none";
            document.querySelector('.mensaje-advertencia').style.display = 'block';
        }
        function mostrarEdad() {
            var edad = document.getElementById("edad_paciente").value;
            document.getElementById("edadMostrada").textContent = edad;
        }
        function mostrarVentana() {
            document.getElementById("confirmacionEliminacion").style.display = "block";
        }
        function cerrarVentana() {
            document.getElementById("confirmacionEliminacion").style.display = "none";
        }
        // Función para mostrar la ventana emergente de advertencia
        function mostrarMensajeAdvertencia() {
            document.querySelector('.mensaje-advertencia').style.display = 'block';
        }

        // Llamar a la función si no hay pacientes
        if (<?php echo empty($resultados) ? 'true' : 'false'; ?>) {
            mostrarMensajeAdvertencia();
        }

        function abrirVentanaCuestionario() {
            document.getElementById("ventana-cuestionario").style.display = "block";
        }

        function cerrarVentanaCuestionario() {
            document.getElementById("ventana-cuestionario").style.display = "none";
        }


        function evaluarCuestionario() {
        // Verificar si todas las preguntas han sido respondidas
        var todasRespondidas = true;
        var contador = 0;
        var preguntas = document.querySelectorAll('.pregunta input[type="radio"]');
        preguntas.forEach(function (pregunta) {
            var nombrePregunta = pregunta.name;
            if (!document.querySelector('input[name="' + nombrePregunta + '"]:checked')) {
                todasRespondidas = false;
            }
        });

        // Si todas las preguntas han sido respondidas, realizar la evaluación
        if (todasRespondidas) {
            preguntas.forEach(function (pregunta) {
                var nombrePregunta = pregunta.name;
                var pregunta_paciente = document.querySelector('input[name="' + nombrePregunta + '"]:checked').value;

                if (pregunta_paciente == "Sí") {
                    contador++;
                }
            });

            var estado = "";
            if (contador >= 0 && contador <= 3) {
                estado = "Fase leve";
            } else if (contador >= 4 && contador <= 6) {
                estado = "Fase moderada";
            } else {
                estado = "Fase avanzada";
            }

            // Establecer el valor del campo oculto
            document.getElementById("estado_paciente").value = estado;

            // Enviar el formulario
            document.getElementById("formulario-cuestionario").submit();
        } else {
            alert("Por favor, responde todas las preguntas antes de evaluar.");
        }
    }



    </script>
</body>

</html>