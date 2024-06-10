<?php

require '../../modelos/alumnos.php';

$_GET['alum_id'] = filter_var(base64_decode($_GET['alum_id']), FILTER_SANITIZE_NUMBER_INT);
$alumno = new Alumno();

$AlumnoRegistrado = $alumno->buscarId($_GET['alum_id']);

include_once '../../vistas/templates/header.php'; ?>
<h1 class="text-center">MODIFICAR DATOS DEL ALUMNO</h1>
<div class="row justify-content-center">
    <form action="../../controladores/alumnos/modificar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row m-1 p-2">
            <div class="col">
                <input type="hidden" name="alum_id" id="alum_id" class="form-control" required value="<?= $AlumnoRegistrado['alum_id'] ?>">
            </div>
        </div>
        <div class="row m-1 p-2">
            <div class="col">
                <label for="alum_nombre">NOMBRE</label>
                <input type="text" name="alum_nombre" id="alum_nombre" class="form-control" required value="<?= $AlumnoRegistrado['alum_nombre'] ?>">
            </div>
        </div>
        <div class="row m-1 p-2">
            <div class="col">
                <label for="alum_apellido">APELLIDO</label>
                <input type="text" name="alum_apellido" id="alum_apellido" class="form-control" required value="<?= $AlumnoRegistrado['alum_apellido'] ?>">
            </div>
        </div>
        <div class="row m-1 p-2">
            <div class="col">
                <label for="alum_grado">GRADO</label>
                <input type="text" name="alum_grado" id="alum_grado" class="form-control" required value="<?= $AlumnoRegistrado['alum_grado'] ?>">
            </div>
        </div>
        <div class="row m-1 p-2">
            <div class="col">
                <label for="alum_arma">ARMA</label>
                <br>
                <select name="alum_arma" id="alum_arma">
                    <option><?= $AlumnoRegistrado['alum_arma'] ?></option>
                    <option value="Infantería">Infantería</option>
                    <option value="Artillería">Artillería</option>
                    <option value="Caballería">Caballería</option>
                    <option value="Ingenieros">Ingenieros</option>
                    <option value="Aviación">Aviación</option>
                    <option value="Marina">Marina</option>
                    <option value="Transmisiones Militares">Transmisiones Militares</option>
                    <option value="Material de Guerra">Material de Guerra</option>
                    <option value="Policia Militar">Policia Militar</option>
                    <option value="Intendencia">Intendencia</option>
                    <option value="Sanidad MIlitar">Sanidad MIlitar</option>
                </select>
            </div>
        </div>
        <div class="row m-1 p-2">
            <div class="col">
                <label for="alum_nacionalidad">NACIONALIDAD</label>
                <input type="text" name="alum_nacionalidad" id="alum_nacionalidad" class="form-control" required value="<?= $AlumnoRegistrado['alum_nacionalidad'] ?>">
            </div>
        </div>
        <div class="row m-1 p-2">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Modificar</button>
            </div>
        </div>
        <div class="row m-1 p-2">
            <div class="col">
                <a href="../../controladores/alumnos/buscar.php" class="btn btn-secondary w-100">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?php include_once '../../vistas/templates/footer.php'; ?>