<?php
class eleccion
{

    public $votante;
    public $nombre;
    public $descripcion;
    public $partido;
    
    private $logic;

    public function __construct()
    {
        $this->logic = new logic();
    }

    public function IniciatiliazeData($votante, $nombre, $descripcion, $partido)
    {

        $this->votante = $votante;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->partido = $partido;
    }
}
?>