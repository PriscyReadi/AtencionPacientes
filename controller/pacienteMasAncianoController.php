<?php
    class pacienteMasAncianoController{
        private $model;
        public function __construct(){
            require_once("../model/PacientemasancianoModel.php");
            $this->model = new PacientemasancianoModel_model();
        }

        public function verPasMasAnciano(){
            
            return ($this->model->showPasMasAnciano()) ? $this->model->showPasMasAnciano() : false;
              
        }
    }
?>