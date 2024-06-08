<?php include_once '../../vistas/templates/header.php'?>

    <div class="container mt-5">
        <h1 class="text-center">MATERIAS</h1>
        <div class="row justify-content-center">
            <form action="../../controladores/materias/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="mat_nombre">NOMBRE DE LA MATERIA</label>
                        <input type="text" name="mat_nombre" id="mat_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../vistas/templates/footer.php'?>