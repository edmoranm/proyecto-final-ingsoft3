<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
//  error_reporting(E_ALL);


    require '../../modelos/alumnos.php';
    
    $_GET['alum_id'] = filter_var( base64_decode($_GET['alum_id']), FILTER_SANITIZE_NUMBER_INT);
    $alumnos = new Alumno($_GET);
    
    try{
        
        $eliminar = $alumnos->eliminar();
        $resultado = [
            'mensaje' => 'CLIENTE ELIMINADO CORRECTAMENTE',
            'codigo' => 1
        ];
        
    } catch (PDOException $pe){
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR ELIMINANDO EL REGISTRO A LA BD',
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



$alertas = ['danger', 'success', 'warning'];


include_once '../../vistas/templates/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-lg-6 alert alert-<?=$alertas[$resultado['codigo']] ?>" role="alert">
        <?= $resultado['mensaje'] ?>
        <?= $resultado['detalle'] ?>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <a href="../../controladores/alumnos/buscar.php" class="btn btn-primary w-100">Volver a los resultados</a>
    </div>
</div>


<?php include_once '../../vistas/templates/footer.php'; ?>  
