<?php 

include_once '../../vistas/templates/header.php'?>


    <div class="container mt-5">
        <h1 class="text-center">BUSCAR MATERIAS</h1>
        <div class="row justify-content-center">
            <form action="../../controladores/materias/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="mat_nombre">Nombre de la Materia</label>
                        <input type="text" name="mat_nombre" id="mat_nombre" class="form-control">
                    </div>
                </div>
                    <div class="col">
                        <button type="submit" class="btn btn-info w-100">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include_once '../../vistas/templates/footer.php'?>