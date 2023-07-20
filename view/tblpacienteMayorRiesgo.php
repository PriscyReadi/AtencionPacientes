<?php
    require_once("pacienteMayorRiesgo.php");
    require_once("../controller/pacienteMayorRiesgoController.php");
    if (empty($_POST["nroHistorial"])){
        exit();
    }
    else {
    $obj = new pacienteMayorRiesgoController();
    $rows = $obj->verPasMayRiesgo($_POST["nroHistorial"]);
?>

<div class = "container">
    <h2 class="text-center">Pacientes de mayor riesgo</h2>
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
<?php } ?>