<?php
    class pacienteFumadoresUrgenteController{
        private $model;
        public function __construct(){
            require_once("../model/PacientefumadoresurgenteModel.php");
            $this->model = new PacientefumadoresurgenteModel_model();
        }

        public function verPasFumUrg(){
            return ($this->model->showPasFumMayRiesgo()) ? $this->model->showPasFumMayRiesgo() : false;    
        }
    }
?>