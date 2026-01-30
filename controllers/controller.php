<?php

    class controller {

    private $gestor;

    public function __construct(iGestor $gestor){
        $this->gestor=$gestor;
    }

    public function obetenerTodos(){
        return $this->gestor->obetenerTodos();
    }

    public function guardar($entidad){
        $this->gestor->guardar($entidad);
    }

    public function eliminar($id){
        $this->gestor->eliminar($id);
    }

    public function buscar($id){
        $this->gestor->buscar($id);
    }

    public function editar($entidad){
        $this->gestor->editar($entidad);
    }
    }