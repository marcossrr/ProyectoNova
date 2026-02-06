<?php

class ControllerEntidades{
    private $gestor;

    public function __construct(){
        $this->gestor = new GestorEntidades();
    }

public function index() {
    $todas_entidades = $this->gestor->obtenerTodos();

    // 🔹 filtrar solo entidades válidas
    $todas_entidades = array_filter($todas_entidades, function($e) {
        return $e !== null;
    });

    $por_pagina = 5;
    $pagina_actual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

    $total_entidades = count($todas_entidades);
    $total_paginas = $total_entidades > 0 ? ceil($total_entidades / $por_pagina) : 1;

    if ($pagina_actual < 1) $pagina_actual = 1;
    if ($pagina_actual > $total_paginas) $pagina_actual = $total_paginas;

    $inicio = ($pagina_actual - 1) * $por_pagina;
    $entidades = array_slice($todas_entidades, $inicio, $por_pagina);

    include "views/explorador.php";
}



    public function registro(){

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        $id = uniqid();

        $tipo = $_POST['tipo'] ?? null;

        $nombre = $_POST['nombre'];
        $planeta = $_POST['planeta'];
        $estabilidad = $_POST['estabilidad'];

        switch($tipo){

            case "vida":
                $entidad = new FormaDeVida(
                    $id, $nombre, $planeta, $estabilidad, $_POST['dieta']
                );
            break;

            case "mineral":
                $entidad = new MineralRaro(
                    $id, $nombre, $planeta, $estabilidad, $_POST['dureza']
                );
            break;

            case "artefacto":
                $entidad = new Artefacto(
                    $id, $nombre, $planeta, $estabilidad, $_POST['antiguedad']
                );
            break;

            default:
                die("Tipo no válido");
        }

        $this->gestor->guardar($entidad);

        header("Location: index.php");
        exit;
    }

    include "views/registro.php";
}


public function modificacion() {
    $id = $_GET['id'] ?? null;


    $entidad = $this->gestor->buscar($id); 
    if (!$entidad) {
        echo "Entidad desconocida";
        exit;
    }

    $tipo = $entidad->getTipo(); 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'] ?? '';
        $planeta = $_POST['planeta'] ?? '';
        $estabilidad = $_POST['estabilidad'] ?? '';

        $dieta = $_POST['dieta'] ?? null;
        $dureza = $_POST['dureza'] ?? null;
        $antiguedad = $_POST['antiguedad'] ?? null;

        $this->gestor->modificar($id, $nombre, $planeta, $estabilidad, $dieta, $dureza, $antiguedad);

        header("Location: index.php");
        exit;
    }

    include "views/modificacion.php";
}


public function expulsion() {
    $id = $_GET['id'] ?? null; 

    if (!$id) {
        die("ID no especificado");
    }

    $this->gestor->expulsar($id); 

    header("Location: index.php"); 
    exit;
}

}