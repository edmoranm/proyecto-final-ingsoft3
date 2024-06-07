<?php include_once '../templates/header.php'; ?>

<h1 class="text-center">FORMULARIO DE ALUMNOS</h1>
<div class="row justify-content-center">
    <form action="../../controladores/alumnos/guardar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="alum_nombre">Nombre del Alumno</label>
                <input type="text" name="alum_nombre" id="alum_nombre" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="alum_apellido">Apellido del Alumno</label>
                <input type="text" name="alum_apellido" id="alum_apellido" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="alum_grado">Grado del Alumno</label>
                <input type="text" name="alum_grado" id="alum_grado" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="alum_arma">Arma del Alumno</label>
                <input type="text" name="alum_arma" id="alum_arma" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="alum_nacionalidad">Nacionalidad del Alumno</label>
                <input type="text" name="alum_nacionalidad" id="alum_nacionalidad" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../../controladores/alumnos/buscar.php" class="btn btn-info w-100">Buscar</a>
            </div>
        </div>
    </form>
</div>

<?php include_once '../templates/footer.php'; ?>


   