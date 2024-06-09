<?php
require_once '../../modelos/alumnos.php';
require_once '../../modelos/materias.php';

    try {
        $alumno = new Alumno();
        $materia = new Materia();
        $alumnos = $alumno->buscar();
        $materias = $materia->buscar();
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../vistas/templates/header.php'?>


    <div class="container mt-5">
        <h1 class="text-center">Formulario de búsqueda de notas</h1>
        <div class="row justify-content-center">
            <form action="../../controladores/notas/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="not_alumno">Alumno</label>
                        <select name="not_alumno" id="not_alumno" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($alumnos as $key => $alumno) : ?>
                                <option value="<?= $alumno['alum_id'] ?>"><?= $alumno['alum_id'] . ' ' . $alumno['alum_apellido'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>               
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-info w-100">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php include_once '../../vistas/templates/footer.php'?>