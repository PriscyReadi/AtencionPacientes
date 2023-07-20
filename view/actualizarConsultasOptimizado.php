<?php 
    require_once("../controller/atenderPacienteController.php");
    $obj = new atenderPacienteController();
    $obj->liberarConsultaOptimizada();
    $obj->actualizaTodoPacienteOptimizada();
    $obj->ActualizaAtencionOptimizada();
    header("Location:listarPacienteOptimizado.php");
?>