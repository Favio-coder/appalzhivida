<?php include("../templates/cabecera.php"); ?>
    
<link rel="stylesheet" href="../styles/vistaCurso.css">
<?php include("../secciones/cursos.php"); ?>
<div class="container">
    <h1>Control de cursos</h1>

    <div class="row">
        <div class="col-md-5">
            <form action="" method="post">
                <div class="card">
                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Id" />
                    </div>

                    <div class="mb-3">
                        <label for="nombre_curso" class="form-label">Nombre del curso</label>
                        <input type="text" class="nombre_curso form-control" name="nombre_curso" id="nombre_curso" aria-describedby="helpId" placeholder="Nombre del curso" />
                    </div>
                    <div class="btn-group" role="group" aria-label="Button group name">
                        <button type="submit" name="accion"value="agregar" class="btn btn-success">Agregar</button>
                        <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
                        <button type="submit" name="accion"value="borrar" class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-7">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($listaCursos as $curso) { ?>
                    <tr>
                        <td scope="row"><?php echo $curso['id']; ?></td>
                        <td><?php echo $curso['nombre_curso']; ?></td>
                        <td>Seleccionar</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


