<?php
 class DatabaseServiceElecciones implements iServices{
        
    private $logic;
    private $context;

    public function __construct($directory = "../Database")
    {
        $this->logic = new logic();
       $this->context = new EleccionContext($directory);
    }

    function GetList()
    {
       $listelecciones = array();

       $stmt = $this->context->db->prepare("select * from elecciones");
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return $listelecciones;
        }else{
            while($row = $result->fetch_object()){
                    $elecciones = new elecciones();
                    $elecciones->id = $row->id;
                    $elecciones->nombre = $row->Nombre;
                    $elecciones->fecha = $row->Fecha;
                    $elecciones->estado = $row->Estado;
                    array_push($listelecciones,$elecciones);
            }
        }
        $stmt->close();
        return $listelecciones;
    }

    function Add($entidad)
    {
       
        $stmt = $this->context->db->prepare("insert into elecciones (Nombre,Fecha,Estado) values (?,?,?)");
        $stmt->bind_param('sss',$entidad->nombre,$entidad->fecha,$entidad->estado);
        $stmt->execute();
        $stmt->close();
    }

    function Delete($id)
    {
        $stmt = $this->context->db->prepare("Delete from elecciones where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    function GetbyId($id)
    {
        $elecciones = new elecciones();
        $stmt = $this->context->db->prepare("select * from elecciones where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return null;
        }else{
            while($row = $result->fetch_object()){
                $elecciones->id = $row->id;
                $elecciones->nombre = $row->Nombre;
                $elecciones->fecha = $row->Fecha;
                $elecciones->estado = $row->Estado;
               
            }
        }
        $stmt->close();
        return $elecciones;
    }
    
    function Update($id, $entidad)
    {   

        $stmt = $this->context->db->prepare("Update elecciones set Nombre = ?, Fecha = ?, Estado = ? where id = ?");
        $stmt->bind_param('sssi',$entidad->nombre,$entidad->fecha,$entidad->estado,$entidad->id);
        $stmt->execute();
        $stmt->close();
         
        
    }

 }
?>