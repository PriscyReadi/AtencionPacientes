<?php
    class consultarMasPacientesController{
        private $model;
        public function __construct(){
            require_once("../model/ConsultamaspacientesModel.php");
            $this->model = new ConsultapacienteModel_model();
        }
        public function verConsultaMasPacientes(){  
            return ($this->model->showComMasPac()) ? $this->model->showComMasPac() : false;
          
        }
        
    }
?>