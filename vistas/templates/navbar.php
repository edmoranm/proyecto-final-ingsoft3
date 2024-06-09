<nav class="navbar fixed-top navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../../vistas/alumnos/index.php"><img src="../../images/logo.jpg" alt="Logo" width="70" height="40">ESCUELA DE INFORMATICA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../vistas/inicio/index.php"><i class="bi bi-house-fill me-2"></i>INICIO</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-file-person me-2"></i>ALUMNOS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../../vistas/alumnos/index.php"><i class="bi bi-plus-circle me-2"></i>CREAR</a></li>
            <li><a class="dropdown-item" href="../alumnos/buscar.php"><i class="bi bi-search me-2"></i>BUSCAR</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-file-person me-2"></i>MATERIAS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../../vistas/materias/index.php"><i class="bi bi-plus-circle me-2"></i>CREAR</a></li>
            <li><a class="dropdown-item" href="../materias/buscar.php"><i class="bi bi-search me-2"></i>BUSCAR</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="../../vistas/notas/index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-file-person me-2"></i>NOTAS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../../vistas/notas/index.php"><i class="bi bi-plus-circle me-2"></i>CREAR</a></li>
            <li><a class="dropdown-item" href="../../vistas/notas/buscar.php"><i class="bi bi-search me-2"></i>BUSCAR</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>