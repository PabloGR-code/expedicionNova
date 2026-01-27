<?php

    class FormaDeVida extends EntidadEstelar implements iInteactuable{

        private $dieta;

        public function __construct($id, $nombre, $planetaOrigen, $nivelEstabilidad, $dieta){
            parent::__construct($id, $nombre, $planetaOrigen, $nivelEstabilidad);
            $this->dieta=$dieta;
        }

        public function getDieta(){
                return $this->dieta;
            }

        public function reaccionar(){
            return "Emite un pulso electromagnético";
        }
    }