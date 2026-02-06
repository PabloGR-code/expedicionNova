<?php

    class GestorEntidad implements iGestor {

        public function __construct(){
            if(!isset($_SESSION['entidad'])){
                $_SESSION['entidad']=[];
            }
        }

        public function obtenerTodos(){
            return $_SESSION['entidad'];
        }

        public function guardar($entidad){
            $_SESSION['entidad'][]=$entidad;
        }

        public function eliminar($id){
            foreach ($_SESSION['entidad'] as $i => $entidad) {
                if($entidad->getId()== $id){
                    unset($_SESSION['entidad'][$i]);
                    $_SESSION['entidad']=array_values($_SESSION['entidad']);
                    return true;
                }
            }
            return false;
        }

        public function buscar($id){
            foreach ($_SESSION['entidad'] as $entidad){
                if($entidad->getId()==$id){
                    return $entidad;
                }
            }
            return null;
        }

        public function editar($id, $name, $planet, $level, $extra){
            foreach ($_SESSION['entidad'] as $i => $actual){
            if($actual->getId() == $id){

                $actual->setNombre($name);
                $actual->setPlanetaOrigen($planet);
                $actual->setNivelEstabilidad($level);

                $tipo = get_class($actual);

            if ($tipo === "FormaDeVida"){
                $actual->setDieta($extra);

            } elseif ($tipo === "MineralRaro"){
                $actual->setDureza($extra);

            } elseif ($tipo === "ArtefactoAntiguo"){
                $actual->setAntiguedad($extra);
            }

            return true;
        }
    }
    return false;
        }

    }