<?php 
    require_once("head.php");
    require_once("../controller/atenderPacienteController.php");
    $obj = new atenderPacienteController();
    $rows = $obj->verAtencion();
?>


<div class = "container">
    <h2 class="text-center">Estado de Consultas</h2>
    <a href="actualizarConsultas.php" class="btn btn-primary">Liberar Consultas</a>
    <div class = "row">
        <div class="col">
            <table class="table table-hover container-fluid">
                <thead>
                    <tr>
                        <th scope="col">Consulta</th>
                        <th scope="col">Especialista</th>
                        <th scope="col">Paciente</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($rows): ?>
                    <?php foreach($rows as $row): ?>
                    <tr>
                        <td scope="col"><?= $row[1]?></td>
                        <?php if ($row[2] == 0) {?>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col">
                                 <!-- Button trigger modal -->
                                <a  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Atender Paciente</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">¿Desea ingresar un nuevo paciente en la atención?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                                <a href="actualizarAtencion.php?idConsulta=<?= $row[0]?>&idEspecialista=<?= $row[3]?>&idTipConsulta=<?= $row[4]?>" class="btn btn-danger">Atender Paciente</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                        <?php } else {?>
                            <td scope="col"><?= $row[5]?></td>
                            <td scope="col"><?= $row[6]?></td>
                            <td scope="col"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ocupado</button></td>
                            <?php }?>
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