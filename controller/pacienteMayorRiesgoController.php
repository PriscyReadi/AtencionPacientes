<?php
    class pacienteMayorRiesgoController{
        private $model;
        public function __construct(){
            require_once("../model/PacientemayorriesgoModel.php");
            $this->model = new PacientemayorriesgoModel_model();
        }

        public function verPasMayRiesgo($noHistCli){  
            return ($this->model->showPasMayRiesgo($noHistCli)) ? $this->model->showPasMayRiesgo($noHistCli) : false;
              
        }
    }
?>