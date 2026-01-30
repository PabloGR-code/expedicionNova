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

        public function editar($entidad){
            foreach ($_SESSION['entidad'] as $i => $actual){
                if($actual->getId()==$entidad->getId()){
                    $_SESSION['entidad'][$i]=$entidad;
                    return true;
                }
            }
            return false;
        }

    }