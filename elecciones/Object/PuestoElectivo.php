<?php 
class puesto{

    public $id;
    public $nombre;
    public $descripcion;
    public $estado;
    public function initialize($id,$nombre,$descripcion,$estado = 'activo'){

       $this->id = $id;
       $this->nombre = $nombre;
       $this->descripcion = $descripcion;
       $this->estado = $estado;
        
    }

    public function set($data){
        foreach($data as $key => $value) $this->{$key} = $value;
    }
}




?>