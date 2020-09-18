<?php 
class partidos{

    public $id;
    public $nombre;
    public $descripcion;
    public $estado;
    public $logo;

    public function initialize($id,$nombre,$descripcion,$logo,$estado = 'activo'){

        $this->nombre = $nombre;
        $this->id = $id;
        $this->logo = $logo;
        $this->descripcion = $descripcion;
        $this->estado = $estado;
        
    }

    public function set($data){
        foreach($data as $key => $value) $this->{$key} = $value;
    }
}




?>