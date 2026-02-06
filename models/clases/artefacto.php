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

    public function setAntiguedad(){
        $this->antiguedad = $antiguedad;
    }
}
