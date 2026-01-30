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

    public function Registro(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = uniqid(); 
            $nombre = $_POST['nombre'];
            $planeta = $_POST['planeta'];
            $estabilidad_lvl = $_POST['estabilidad'];

            $entidad = new EntidadCosmica($id, $nombre, $planeta, $estabilidad_lvl);
            $this->gestor->guardar($entidad);

            header("Location: index.php");
            exit;
        }
            include "views/registro.php";
    }

    public function Modificacion(){
        $id = $_GET['id'] ?? null;
        $entidad = $this->gestor->modificar();

        if (!$entidad) {
            echo "Entidad desconocida";
            exit;
        }

         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->gestor->modificar($id, $_POST['nombre'], $_POST['planeta'], $_POST['estabilidad']);

            header("Location: index.php");
            exit;
    }
            include "views/modificacion.php";
}

    public function eliminar() {
        $id = $_GET['id'] ?? null;
        $this->gestor->eliminar($id);

        header("Location: index.php");
        exit;
    }
}
