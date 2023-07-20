<?php 
    require_once("head.php");
    require_once("atenderPaciente.php");
    require_once("../controller/listarPacienteController.php");
    $obj = new listarPacienteController();
    $rows = $obj->CantPacientesEspera();
    $cant = $rows[0];
    if ($cant == 0){
        $pas = $obj->proxPacientePendiente();
            if($pas){
                foreach($pas as $row){
                    $rows = $obj->actualizaPacientePendiente($row[0]);   
                }
            }   
        }
    $rows = $obj->verPacientes();
?>


<div class = "container">
    <h2 class="text-center">Pacientes para ser atendidos</h2>
    <div class = "row">
        <div class="col">
            <table class="table table-hover container-fluid">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Nº Historia Clínica</th>
                        <th scope="col">Riesgo</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($rows): ?>
                    <?php foreach($rows as $row): ?>
                    <tr>
                        <?php if ($row[4] == 1) {?>
                        <td class = "bg-danger" scope="col"><?= $row[0]?></td>
                        <td class = "bg-danger" scope="col"><?= $row[1]?></td>
                        <td class = "bg-danger" scope="col"><?= $row[2]?></td>
                        <td class = "bg-danger" scope="col"><?= $row[3]?></td>
                        <td class = "bg-danger" scope="col">En espera</td>
                        <?php } else {?>
                        <td class = "bg-warning" scope="col"><?= $row[0]?></td>
                        <td class = "bg-warning" scope="col"><?= $row[1]?></td>
                        <td class = "bg-warning" scope="col"><?= $row[2]?></td>
                        <td class = "bg-warning" scope="col"><?= $row[3]?></td>
                        <td class = "bg-warning" scope="col">Pendiente</td>
                        <?php } ?> 
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