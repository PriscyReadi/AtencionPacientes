<?php
    require_once("../controller/pacienteMasAncianoController.php");
    $obj = new pacienteMasAncianoController();
    $rows = $obj->verPasMasAnciano();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atencion Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
  <body>
<div class = "container">
    <h2 class="text-center">Paciente más anciano</h2>
    <div class = "row">
        <div class="col">
            <table class="table table-hover container-fluid">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Riesgo</th>
                        <th scope="col">Nº Historial clínico</th>
                        <th scope="col">Con Dieta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($rows): ?>
                    <?php foreach($rows as $row): ?>
                    <tr>
                        <td scope="col"><?= $row[0]?></td>
                        <td scope="col"><?= $row[1]?></td>
                        <td scope="col"><?= $row[2]?></td>
                        <td scope="col"><?= $row[3]?></td>
                        <td scope="col"><?php if ($row[4] == 1){
                                                echo "Si";
                                            }
                                            else {
                                                echo "No";
                                            }?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" class="text-center">No hay registros actualmente</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




        


<?php
    require_once("footer.php");
?>