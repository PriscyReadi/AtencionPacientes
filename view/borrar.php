<?php
    require_once("head.php");
    require_once("../controller/pacienteMayorRiesgoController.php");
    $obj = new pacienteMayorRiesgoController();
    $rows = $obj->verPasMayRiesgo($_POST['nroHistorial']);
?>
<form action="pacienteMayorRiesgoController.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label class="form-label">Nº Historial Clínico</label>
        <input type="text" name="nroHistorial" required class="form-control" id="nroHistorial" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>

<div class = "container">
    <h2 class="text-center">Pacientes de mayor riesgo</h2>
    <div class="pb-3">
        <a href="index.php" class="btn btn-primary">Regresar</a>
    </div>
    <div class = "row">
        <div class="col">
            <table class="table table-hover container-fluid">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Nº Historial Clínico</th>
                        <th scope="col">Riesgo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($rows): ?>
                    <?php foreach($rows as $row): ?>
                    <tr>
                        <td scope="col"><?= $row[0]?></td>
                        <td scope="col"><?= $row[1]?></td>
                        <td scope="col"><?= $row[2]?></td>
                        <td scope="col"><?= $row[5]?></td>
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