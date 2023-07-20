<?php 
    require_once("../controller/atenderPacienteController.php");
    $obj = new atenderPacienteController();
    $paciente = $obj->buscarPacienteOptimizado();
    $idPaciente = $paciente[6];
    $obj->actualizarPaciente($idPaciente,3);
    $obj->actualizarConsulta($_GET["idConsulta"], 1);
    $obj->atender($_GET["idConsulta"], $_GET["idEspecialista"], $_GET["idTipConsulta"], $idPaciente);
    header("Location:listarPacienteOptimizado.php");
?>