<?php

class ControllerEntidades{
    private $gestor;

    public function __construct(){
        $this->gestor = new GestorEntidades();
    }

    public function index(){
        $entidades = $this->gestor->obtenerTodos();
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

    if (!$id) {
        echo "ID no especificado";
        exit;
    }

    $entidad = $this->gestor->buscar($id); 
    if (!$entidad) {
        echo "Entidad desconocida";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'] ?? '';
        $planeta = $_POST['planeta'] ?? '';
        $estabilidad = $_POST['estabilidad'] ?? '';

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

        $this->gestor->modificar($id, $nombre, $planeta, $estabilidad, $dieta, $dureza, $antiguedad);
        header("Location: index.php");
        exit;
    }
}


    public function expulsion() {
        $id = $_GET['id'] ?? null;
        $this->gestor->expulsar($id);

        header("Location: index.php");
        exit;
    }
}
