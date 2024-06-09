<?php
require_once '../../modelos/notas.php';
require_once '../../modelos/alumnos.php';

try {
    $not_id = $_GET['alum_id'];
    $alumno = new Notas();
    $alumnos = $alumno->buscarInfo($not_id);

    $Notas = new Notas();
    $Nota = $Notas->buscar($not_id);

    $promedio = $Notas->promedio($not_id);
    
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
    $error = $e2->getMessage();
}

?>
<?php include_once '../../vistas/templates/header.php' ?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <h1 class="text-center" style="background-color: black; color: white;">NOTAS DEL ALUMNO</h1>
                    </tr>
                </thead>
                <?php if (count($alumnos) > 0) : ?>
                    <?php foreach ($alumnos as $key => $alumno) : ?>
                        <tr class="text-center">
                        <tr>
                            <th>ALUMNO</th>
                            <td><?= $alumno['alum_nombre'] . ' ' . $alumno['alum_apellido'] ?></td>
                        </tr>
                        <tr>
                            <th>GRADO Y ARMA</th>
                            <td><?= $alumno['alum_grado'] . ' ' . 'de' . ' ' . $alumno['alum_arma'] ?></td>
                        </tr>
                        <tr>
                            <th>NACIONALIDAD</th>
                            <td><?= $alumno['alum_nacionalidad'] ?></td>
                        </tr>
                        <tbody>

                            </tr>
                        <?php endforeach ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="4">NO EXISTEN REGISTROS</td>
                        </tr>
                    <?php endif ?>
                        </tbody>
            </table>
        </div>
    </div>

    <tr>
        <h3 class="text-center" style="margin-top: 0; margin-bottom: 0;">NOTAS OBTENIDAS</h3>
    </tr>
    <div class="row justify-content-center mt-4">
        <div class="col-lg-8">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>NO. </th>
                        <th>MATERIA</th>
                        <th>PUNTEO</th>
                        <th>GANO/PERDIO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($Nota) > 0) : ?>
                        <?php foreach ($Nota as $key => $Notas) : ?>
                            <tr class="text-center">
                                <td><?= $key + 1 ?></td>
                                <td><?= $Notas['mat_nombre'] ?></td>
                                <td><?= $Notas['not_puntos'] ?> PUNTOS</td>
                                <td><?= $Notas['not_resultado'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="4">NO EXISTEN REGISTROS</td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-lg-8">
            <table class="table table-bordered table-hover">
                <tbody class="text-center">
                    <tr>
                        <td>PROMEDIO</td>
                        <td><?= number_format($promedio[0]['promedio'], 2, '.', ',') ?> PUNTOS</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <a href="../../vistas/notas/buscar.php" class="btn btn-info w-100">Volver al formulario</a>
        </div>
    </div>
</div>
<?php include_once '../../vistas/templates/footer.php' ?>