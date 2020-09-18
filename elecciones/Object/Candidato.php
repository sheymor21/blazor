<?php 
class candidato{

    public $id;
    public $nombre;
    public $estado;
    public $apellido;
    public $puesto;
    public $partido;
    public $foto;

    public function initialize($id,$nombre,$apellido,$puesto,$partido,$foto,$estado = 'activo'){

        $this->nombre = $nombre;
        $this->id = $id;
        $this->apellido = $apellido;
        $this->puesto = $puesto;
        $this->partido = $partido;
        $this->foto = $foto;
        $this->estado = $estado;
        
    }

    public function set($data){
        foreach($data as $key => $value) $this->{$key} = $value;
    }
}




?>