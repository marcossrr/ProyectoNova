<?php

class GestorEntidades {

    public function __construct(){
        if (!isset($_SESSION['entidades'])) {
            $_SESSION['entidades'] = [];
        }
    }

    public function obtenerTodos(){
        return $_SESSION['entidades'];
    }

    public function guardar($entidad){
        $_SESSION['entidades'][] = $entidad;
    }

    public function eliminar($id){

        foreach ($_SESSION['entidades'] as $i => $e){

            if ($e->getId() == $id){

                unset($_SESSION['entidades'][$i]);
                $_SESSION['entidades'] = array_values($_SESSION['entidades']);
                return true;
            }
        }

        return false;
    }

    public function modificar($id, $nombre, $planeta, $estabilidad_lvl){

        foreach ($_SESSION['entidades'] as $e){

            if ($e->getId() == $id){

                $e->setNombre($nombre);
                $e->setPlaneta($planeta);
                $e->setEstabilidad($estabilidad_lvl);

                return true;
            }
        }

        return false;
    }
}
