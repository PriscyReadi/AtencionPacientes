<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atencion Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="public/js/javaScript.js"></script>

    </head>
  <body>
    <div class="container-fluid p-2 mb-3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="listarPaciente.php">Inicio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="listarPacienteOptimizado.php">Atención Optimizada</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"  onclick= "cargarMayorRiesgo()" href="">Pacientes Mayor Riesgo</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"  onclick= "cargarModalFum()" href="">Pacientes Fumadores Urgentes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"  onclick= "cargarConsulta()" href="">Consulta con mas pacientes</a>   
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"  onclick= "cargarAnciano()" href="">Pacientes mas ancianos</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>
    </div>
