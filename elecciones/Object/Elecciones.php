<?php 
class elecciones{

    public $id;
    public $nombre;
    public $fecha;
    public $estado;

    public function initialize($id,$nombre,$fecha,$estado = 'activo'){

        $this->nombre = $nombre;
        $this->id = $id;
        $this->fecha = $fecha;
        $this->estado = $estado;
        
    }

    public function set($data){
        foreach($data as $key => $value) $this->{$key} = $value;
    }
}




?>