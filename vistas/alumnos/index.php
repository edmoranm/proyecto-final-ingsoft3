<?php include_once '../templates/header.php'; ?>

<h1 class="text-center">FORMULARIO DE ALUMNOS</h1>
<div class="row justify-content-center">
    <form action="/crud_2024/controladores/cliente/guardar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="cli_nombre">Nombre del Cliente</label>
                <input type="text" name="cli_nombre" id="cli_nombre" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_apellido">Apellido del Alumno</label>
                <input type="text" name="cli_apellido" id="cli_apellido" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_nit">Grado del Alumno</label>
                <input type="number" name="cli_nit" id="cli_nit" step="1" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_telefono">Arma del Alumno</label>
                <input type="tel" name="cli_telefono" id="cli_telefono" step="1" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_telefono">Nacionalidad del Alumno</label>
                <input type="tel" name="cli_telefono" id="cli_telefono" step="1" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../../controladores/cliente/buscar.php" class="btn btn-info w-100">Buscar</a>
            </div>
        </div>
    </form>
</div>

<?php include_once '../templates/footer.php'; ?>


   