<?php 

include_once '../../vistas/templates/header.php'; ?>

<h1 class="text-center">FORMULARIO DE ALUMNOS</h1>
<div class="row justify-content-center">
    <form action="../../controladores/alumnos/buscar.php" method="GET" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="alum_nombre">NOMBRE</label>
                <input type="text" name="alum_nombre" id="alum_nombre" class="form-control" >
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="alum_aoellido">APELLIDO</label>
                <input type="text" name="alum_aoellido" id="alum_aoellido" class="form-control" >
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-info w-100 bg-dark text-white"> BUSCAR</button>
            </div>
        </div>
    </form>
</div>

<?php include_once '../../vistas/templates/footer.php'; ?>

   