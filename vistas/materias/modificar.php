<?php

require '../../modelos/materias.php';

$_GET['mat_id'] = filter_var(base64_decode($_GET['mat_id']), FILTER_SANITIZE_NUMBER_INT);
$materia = new Materia();

$materiaRegistrada = $materia->buscarId($_GET['mat_id']);

include_once '../../vistas/templates/header.php'; ?>
<h1 class="text-center">MODIFICAR DATOS DE LA MATERIA</h1>
<div class="row justify-content-center">
    <form action="../../controladores/materias/modificar.php" method="POST" class="border bg-light shadow rounded p-2">
        <div class="row mb-3">
            <div class="col-12">
                <input type="hidden" name="mat_id" id="mat_id" class="form-control" required value="<?= $materiaRegistrada['mat_id'] ?>">
            </div>
            <div class="col-4">
                <label for="mat_nombre">NOMBRE</label>
                <input type="text" name="mat_nombre" id="mat_nombre" class="form-control" required value="<?= $materiaRegistrada['mat_nombre'] ?>">
            </div>        
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-warning w-100">Modificar</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../../controladores/materias/buscar.php" class="btn btn-secondary w-100">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?php include_once '../../vistas/templates/footer.php'; ?>