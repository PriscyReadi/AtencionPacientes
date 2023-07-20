<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atencion Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="public/js/jQuery.js"></script>
  </head>
  <body>
<div class = "container">
<title>Paciente con Mayor Riesgo</title>
<h2 class="text-center">Paciente con Mayor Riesgo</h2>
    <form action="tblpacienteMayorRiesgo.php" method="POST" autocomplete="off">
            <div class="mb-3">
                <label class="form-label">Nº Historial Clínico</label>
                <input type="text" style="width: 200px;" size="6" name="nroHistorial" required class="form-control" id="nroHistorial" aria-describedby="emailHelp">
            </div>
            <button type="submit" id ="buscar" class="btn btn-primary">Buscar</button>
    </form>
</div>

<?php 
    require_once("tblpacienteMayorRiesgo.php");
?>
<?php
    require_once("footer.php");
?>