<?php 
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
?>