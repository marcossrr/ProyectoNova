<?php

abstract class EntidadCosmica {
    protected $id;
    protected $nombre;
    protected $planeta;
    protected $estabilidad_lvl;
    protected $tipo;

    abstract public function reaccionar();
    
    public function __construct($id, $nombre, $planeta, $estabilidad_lvl){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->planeta = $planeta;
        $this->estabilidad_lvl = $estabilidad_lvl;
    }

        public function getId() { return $this->id; }
        public function getTipo() { return $this->tipo; }
        public function getNombre() { return $this->nombre; }
        public function getPlaneta() { return $this->planeta; }
        public function getEstabilidad() { return $this->estabilidad_lvl; }
        
        public function setNombre($nombre) { $this->nombre = $nombre; }
        public function setPlaneta($planeta) { $this->planeta = $planeta; }
        public function setEstabilidad($estabilidad_lvl) { $this->estabilidad_lvl = $estabilidad_lvl; }

            public function toArray() {
        return ["id" => $this->id, "nombre" => $this->nombre, "planeta" => $this->planeta, "estabilidad" => $this->estabilidad_lvl];
    }

}