<?php

    class controller {

    private $gestor;

    public function __construct(iGestor $gestor){
        $this->gestor=$gestor;
    }

    public function index(){
        $entidades= $this->gestor->obtenerTodos();
        include 'views/listar.php';
    }

    public function guardar($entidad){
        $this->gestor->guardar($entidad);
        header("Location: index.php");
        exit;
    }

    public function eliminar($id){
        $this->gestor->eliminar($id);
        header("Location: index.php");
    }

    public function buscar($id){
        $entidad = $this->gestor->buscar($id);
        include 'views/editar.php';
    }

    public function editar($entidad){
        $this->gestor->editar($entidad);
        header("Location: index.php");
        exit;
    }
    }