<?php
 ini_set('display_errors', '1');
 ini_set('display_startup_errors', '1');
 error_reporting(E_ALL);

require '../../modelos/alumnos.php';

$_GET['alum_id'] = filter_var(base64_decode($_GET['alum_id']), FILTER_SANITIZE_NUMBER_INT);
$alumnos = new Alumno();

$AlumnoRegistrado = $alumnos->buscarId($_GET['alum_id']);

include_once '../../vistas/templates/header.php'; ?>
<h1 class="text-center">MODIFICAR ALUMNO</h1>
<div class="row justify-content-center">
    <form action="../../controladores/alumnos/modificar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <input type="hidden" name="alum_id" id="alum_id" class="form-control" required value="<?= $AlumnoRegistrado['alum_id'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="alum_nombre">NOMBRE</label>
                <input type="text" name="alum_nombre" id="alum_nombre" class="form-control" required value="<?= $AlumnoRegistrado['alum_nombre'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="alum_apellido">APELLIDO</label>
                <input type="text" name="alum_apellido" id="alum_apellido" class="form-control" required value="<?= $AlumnoRegistrado['alum_apellido'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="alum_grado">GRADO</label>
                <input type="text" name="alum_grado" id="alum_grado" class="form-control" required value="<?= $AlumnoRegistrado['alum_grado'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="alum_arma">arma</label>
                <input type="text" name="alum_arma" id="alum_arma" class="form-control" required value="<?= $AlumnoRegistrado['alum_arma'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="alum_nacionalidad">nacionalidad</label>
                <input type="text" name="alum_nacionalidad" id="alum_nacionalidad" class="form-control" required value="<?= $AlumnoRegistrado['alum_nacionalidad'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-warning w-100">Modificar</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../../controladores/alumnos/buscar.php" class="btn btn-secondary w-100">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?php include_once '../../vistas/templates/footer.php'; ?>