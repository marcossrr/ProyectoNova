<?php

abstract class EntidadCosmica{
    private $id;
    private $nombre;
    private $planeta;
    private $estabilidad_lvl;

    public function __construct($id, $nombre, $planeta, $estabilidad_lvl){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->planeta = $planeta;
        $this->estabilidad_lvl = $estabilidad_lvl;
    }

        public function getId() { return $this->id; }
        public function getNombre() { return $this->nombre; }
        public function getPlaneta() { return $this->planeta; }
        public function getEstabilidad() { return $this->estabilidad_lvl; }

        public function setNombre() { $this->nombre = $nombre; }
        public function setPlaneta() { $this->planeta = $planeta; }
        public function setEstabilidad() { $this->estabilidad_lvl = $estabilidad_lvl; }

            public function toArray() {
        return ["id" => $this->id, "nombre" => $this->nombre, "planeta" => $this->planeta, "estabilidad" => $this->estabilidad_lvl];
    }

}