<?php 
    require_once("../controller/atenderPacienteController.php");
    $obj = new atenderPacienteController();
    $obj->liberarConsulta();
    $obj->actualizaTodoPaciente();
    $obj->ActualizaAtencion()
?>