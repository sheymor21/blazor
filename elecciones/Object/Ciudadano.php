<?php 
class ciudadano{

    public $id;
    public $documento;
    public $nombre;
    public $estado;
    public $apellido;
    public $email;

    public function initialize($id,$nombre,$apellido,$documento,$email,$estado = 'activo'){

        $this->nombre = $nombre;
        $this->id = $id;
        $this->documento = $documento;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->estado = $estado;
        
    }

    public function set($data){
        foreach($data as $key => $value) $this->{$key} = $value;
    }
}




?>