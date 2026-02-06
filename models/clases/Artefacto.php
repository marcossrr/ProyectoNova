<?php

class Artefacto extends EntidadCosmica{
       private $antiguedad;

    public function __construct($id, $nombre, $planeta, $estabilidad_lvl, $antiguedad){
        parent::__construct($id, $nombre, $planeta, $estabilidad_lvl);
        $this->antiguedad = $antiguedad;
    }

    public function getAntiguedad(){
        return $this->antiguedad;
    }

    public function setAntiguedad($antiguedad){
        $this->antiguedad = $antiguedad;
    }

        public function reaccionar() {
        return "Reproduce un mensaje en una lengua muerta";
    }

        public function getTipo() {
        return "artefacto";
    }
}
