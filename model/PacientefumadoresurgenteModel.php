<?php
    class PacientefumadoresurgenteModel_model{
        private $PDO;
        public function __construct(){
          require_once("../config/db.php");
            $con = new db();
            $this->PDO = $con::conexion();
        }

        public function showPasFumMayRiesgo(){
            //listar paciente por atender (estadoPaciente = 1) fumadores ordenados de mayor a menor riego
          $stament = $this->PDO->prepare("SELECT p.nombrePaciente, p.idRiesgo FROM paciente p INNER JOIN pJoven j ON (p.idPaciente = j.idPaciente)
          WHERE j.fumador = 1 ORDER BY idRiesgo DESC");
          return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }
?>
