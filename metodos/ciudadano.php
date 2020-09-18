<?php
class ciudadano
{

    public $cedula;
    public $nombre;
    public $apellido;
    public $email;
    public $estado;
    private $logic;

    public function __construct()
    {
        $this->logic = new logic();
    }

    public function IniciatiliazeData($cedula, $nombre, $apellido, $email, $estado)
    {

        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->estado = $estado;
    }
}
