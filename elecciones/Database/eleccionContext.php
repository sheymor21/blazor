<?php 
class EleccionContext{

    public $db;
    private $fileHandler;
    
    public function __construct($directory)
    {
        $this->fileHandler = new file($directory,"configuracion");
        $configuration = $this->fileHandler->ReadConfiguration();
        $this->db = new mysqli($configuration->server,$configuration->user,$configuration->password,$configuration->database);
        if($this->db->connect_error){
            exit('ERROR AL CONECTAR');
        }
    }
}






?>