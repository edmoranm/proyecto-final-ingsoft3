<?php
require_once '../../modelos/notas.php';


function nota_real($nota){
    if($nota >= 70){
        return "Gano";
    }else{
        return "Perdio";
    }
}
if(isset($_POST)){

    if($_POST['not_alumno'] != '' && $_POST['not_materia'] != '' && $_POST['not_puntos'] != ''){

        $not_alumno = $_POST['not_alumno'];
        $not_materia = $_POST['not_materia'];
        $not_puntos = $_POST['not_puntos'];
        $not_resultado = nota_real($not_puntos);

        $arg = [
            'not_alumno' => $not_alumno,
            'not_materia' => $not_materia,
            'not_puntos' => $not_puntos,
            'not_resultado' => $not_resultado
        ];
        
        try {
            $notas = new Notas($arg);
            $resultado = $notas->guardar();
            $error = "NO se guardó correctamente";
        } catch (PDOException $e) {
            $error = $e->getMessage();
        } catch (Exception $e2){
            $error = $e2->getMessage();
        }
    }else{
        $error = "Debe llenar todos los datos";
    }

}else{
    $error = "No se recibieron datos";
}

?>
<?php include_once '../../vistas/templates/header.php'?>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <?php if($resultado): ?>
                    <div class="alert alert-success" role="alert">
                        Guardado exitosamente!
                    </div>
                <?php else :?>
                    <div class="alert alert-danger" role="alert">
                        Ocurrió un error: <?= $error ?>
                    </div>
                <?php endif ?>
              
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <a href="../../vistas/notas/index.php" class="btn btn-info">Volver al formulario</a>
            </div>
        </div>
    </div>
    <?php include_once '../../vistas/templates/footer.php'?>
