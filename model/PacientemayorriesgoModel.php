<?php
    class PacientemayorriesgoModel_model{
        private $PDO;
        public function __construct(){
          require_once("../config/db.php");
            $con = new db();
            $this->PDO = $con::conexion();
        }

        public function showPasMayRiesgo($noHistCli){
          $stament = $this->PDO->prepare("SELECT * FROM paciente where idRiesgo > (select idRiesgo from paciente where noHistCli =".$noHistCli.") and estadoPaciente = 1");
          return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }
?>
