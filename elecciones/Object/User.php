<?php 
class user{

    public $id;
    public $nombre;
    public $contraseña;
    public $estado;

    public function initialize($id,$nombre,$contraseña,$estado = 'activo'){

        $this->id = $id;
        $this->nombre = $nombre;
        $this->contraseña = $contraseña;
        $this->estado = $estado;
        
    }

    public function set($data){
        foreach($data as $key => $value) $this->{$key} = $value;
    }
}




?>