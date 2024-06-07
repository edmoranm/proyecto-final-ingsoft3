<?php
    // ini_set('display_errors', '1');
    // ini_set('display_startup_errors', '1');
    // error_reporting(E_ALL);
    require '../../modelos/alumnos.php';

    // consulta
    try {
        // var_dump($_GET);
        $_GET['alum_nobmre'] = htmlspecialchars( $_GET['alum_nobmre']);
        $_GET['alum_apellido'] = htmlspecialchars( $_GET['alum_apellido']);
    
        $objAlumno = new Alumno($_GET);
        $alumnos = $objAlumno->buscar();
        $resultado = [
            'mensaje' => 'Datos encontrados',
            'datos' => $alumnos,
            'codigo' => 1
        ];
        // var_dump($alumnos);
        
    } catch (Exception $e) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR EN LA EJECUCIÓN',
            'detalle' => $e->getMessage(),
            'codigo' => 0
        ];
    }       


    $alertas = ['danger', 'success', 'warning'];

    
    include_once '../../vistas/templates/header.php'; ?>

    <div class="row mb-4 justify-content-center">
        <div class="col-lg-6 alert alert-<?=$alertas[$resultado['codigo']] ?>" role="alert">
            <?= $resultado['mensaje'] ?>
        </div>
    </div>
    <div class="row mb-4 justify-content-center">
        <div class="col-lg-6">
            <a href="../../vistas/alumnos/buscar.php" class="btn btn-primary w-100">Volver al formulario de busqueda</a>
        </div>
    </div>
    <h1 class="text-center">Listado de Alumnos</h1>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Grado</th>
                        <th>Arma</th>
                        <th>Nacionalidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($resultado['codigo'] == 1 && count($alumnos) > 0) : ?>
                        <?php foreach ($alumnos as $key => $alumno) : ?>
                            <tr>
                                <td><?= $key + 1?></td>
                                <td><?= $alumno['alum_nobmre'] ?></td>
                                <td><?= $alumno['alum_apellido'] ?></td>
                                <td><?= $alumno['alum_grado'] ?></td>
                                <td><?= $alumno['alum_arma'] ?></td>
                                <td><?= $alumno['alum_nacionalidad'] ?></td>
                                <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Acciones
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="../../vistas/alumnos/modificar.php?alumn_id=<?= base64_encode($alumno['alumn_id'])?>"><i class="bi bi-pencil-square me-2"></i>Modificar</a></li>
                                        <li><a class="dropdown-item" href="../../controladores/alumnos/eliminar.php?alumn_id=<?= base64_encode($alumno['alumn_id'])?>"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                                    </ul>
                                </div>

                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="4">No hay alumnos registrados</td>
                        </tr>  
                    <?php endif ?>
                </tbody>
                        
            </table>
        </div>        
    </div>        
<?php include_once '../../vistas/templates/footer.php'; ?>  