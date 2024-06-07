<?php

require '../../modelos/alumnos.php';


// VALIDAR INFORMACION
$_POST['alum_nombre'] = htmlspecialchars($_POST['alum_nombre']);
$_POST['alum_apellido'] = htmlspecialchars($_POST['alum_apellido']);
$_POST['alum_grado'] = htmlspecialchars($_POST['alum_grado']);
$_POST['alum_arma'] = htmlspecialchars($_POST['alum_arma']);
$_POST['alum_nacionalidad'] = htmlspecialchars($_POST['alum_nacionalidad']);

if ($_POST['alum_nombre'] == '' || $_POST['alum_apellido'] == '' || $_POST['alum_grado'] == '' || $_POST['alum_arma'] == '' || $_POST['alum_nacionalidad'] =='') {
    // ALERTA PARA VALIDAR DATOS
    $resultado = [
        'mensaje' => 'DEBE VALIDAR LOS DATOS',
        'codigo' => 2
    ];
} else {
    try {
        // REALIZAR CONSULTA
        $alumnos = new Alumno($_POST);
        $guardar = $alumnos->guardar();
        $resultado = [
            'mensaje' => 'CLIENTE INSERTADO CORRECTAMENTE',
            'codigo' => 1
        ];
    } catch (PDOException $pe) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR INSERTANDO A LA BD',
            'detalle' => $pe->getMessage(),
            'codigo' => 0
        ];
    } catch (Exception $e) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR EN LA EJECUCIÓN',
            'detalle' => $e->getMessage(),
            'codigo' => 0
        ];
    }
}


$alertas = ['danger', 'success', 'warning'];


include_once '../../vistas/templates/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-lg-6 alert alert-<?= $alertas[$resultado['codigo']] ?>" role="alert">
        <?= $resultado['mensaje'] ?>
        <?= $resultado['detalle'] ?>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <a href="../../vistas/alumnos/index.php" class="btn btn-primary w-100">Volver al formulario</a>
    </div>
</div>


<?php include_once '../../vistas/templates/footer.php'; ?>