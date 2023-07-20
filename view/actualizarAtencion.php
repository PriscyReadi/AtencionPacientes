<?php 
    require_once("../controller/atenderPacienteController.php");
    $obj = new atenderPacienteController();
    $paciente = $obj->buscarPaciente();
    $idPaciente = $paciente[0];
    $obj->actualizarPaciente($idPaciente,3);
    $obj->actualizarConsulta($_GET["idConsulta"], 1);
    $obj->atender($_GET["idConsulta"], $_GET["idEspecialista"], $_GET["idTipConsulta"], $idPaciente);
?>