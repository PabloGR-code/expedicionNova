<?php

    class Controller {

    private $gestor;

    public function __construct(iGestor $gestor){
        $this->gestor=$gestor;
    }

    public function index(){
        $entidades= $this->gestor->obtenerTodos();
        include 'views/listar.php';
    }

    public function guardar($entidad){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $id=uniqid();               
            $nombre= $_POST['nombre'];
            $planetaorigen= $_POST['planetadeorigen'];
            $nivelestabilidad= $_POST['nivelestabilidad'];
            $tipo=$_POST['tipo'];

            $entidad=null;

            if ($tipo == 'Vida'){
                $entidad =new FormaDeVida(
                    $id,
                    $nombre,
                    $planetaorigen,
                    $nivelestabilidad,
                    $_POST['dieta']
                );
            }elseif ($tipo == 'Mineral'){
                $entidad = new MineralRaro(
                    $id,
                    $nombre,
                    $planetaorigen,
                    $nivelestabilidad,
                    $_POST['dureza']
                );
            }elseif ($tipo == 'Artefacto'){
                $entidad = new ArtefactoAntiguo(
                    $id,
                    $nombre,
                    $planetaorigen,
                    $nivelestabilidad,
                    $_POST['antigüedad']
                );  
            }

            if($entidad!==null){
                $this->gestor->guardar($entidad);
            }

        
            header("Location: index.php");
            exit;

        }

        include 'views/crear.php';
        
    }

    public function eliminar($id){
        $this->gestor->eliminar($id);
        header("Location: index.php");
    }

    public function buscar($id){
        $entidad = $this->gestor->buscar($id);
        include 'views/editar.php';
    }

    public function editar(){

    
        $id = $_GET['id'] ?? null;
        $entidadActual = $this->gestor->buscar($id);

        if (!$entidadActual) {
            echo "Entidad no encontrada";
            exit;
        }

    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nombre = $_POST['nombre'];
            $planeta = $_POST['planetadeorigen'];
            $nivel = $_POST['nivelestabilidad'];
            $tipo = $_POST['tipo'];

            if ($tipo === 'Vida') {
                $entidad = new FormaDeVida(
                    $id,
                    $nombre,
                    $planeta,
                    $nivel,
                    $_POST['dieta']
                );
            } elseif ($tipo === 'Mineral') {
                $entidad = new MineralRaro(
                    $id,
                    $nombre,
                    $planeta,
                    $nivel,
                    $_POST['dureza']
                );
            } elseif ($tipo === 'Artefacto') {
                $entidad = new ArtefactoAntiguo(
                    $id,
                    $nombre,
                    $planeta,
                    $nivel,
                    $_POST['antigüedad']
                );
            }

            $this->gestor->editar($entidad);
            header("Location: index.php");
            exit;
        }

    
        $entidad = $entidadActual;
        include "views/editar.php";
    }
    }
