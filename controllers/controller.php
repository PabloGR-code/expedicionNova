<?php

    class Controller {

    private $gestor;

    public function __construct(iGestor $gestor){
        $this->gestor=$gestor;
    }

    public function index()
    {
        $todos = $this->gestor->obtenerTodos();

        $porPagina = 5;
        $total = count($todos);
        $totalPaginas = ceil($total / $porPagina);

        $paginaActual = $_GET['pagina'] ?? 1;

        if ($paginaActual < 1){
            $paginaActual = 1;
        }
        if ($paginaActual > $totalPaginas){
            $paginaActual = $totalPaginas;
        }

        $inicio = ($paginaActual - 1) * $porPagina;
        $entidades = array_slice($todos, $inicio, $porPagina);

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
        $entidad = $this->gestor->buscar($id);

        if (!$entidad) {
            echo "Entidad no encontrada";
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $name = $_POST['Nombre'];
            $planet = $_POST['PlanetaOrigen'];
            $level = $_POST['NivelEstabilidad'];
            $extra = $_POST['Detalle'];

            $this->gestor->editar($id, $name, $planet, $level, $extra);

            header("Location: index.php");
            exit;
        }

        include 'views/editar.php';
    }
    
    }
