<?php
 class DatabaseServiceCiudadano implements iServices{
        
    private $logic;
    private $context;

    public function __construct($directory = "../Database")
    {
        $this->logic = new logic();
       $this->context = new EleccionContext($directory);
    }

    function GetList()
    {
       $listciudadano = array();

       $stmt = $this->context->db->prepare("select * from ciudadanos");
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return $listciudadano;
        }else{
            while($row = $result->fetch_object()){
                    $ciudadano = new ciudadano();
                    $ciudadano->id = $row->id;
                    $ciudadano->nombre = $row->Nombre;
                    $ciudadano->apellido = $row->Apellido;
                    $ciudadano->documento = $row->Documento;
                    $ciudadano->estado = $row->Estado;
                    $ciudadano->email = $row->Email;
                    array_push($listciudadano,$ciudadano);
            }
        }
        $stmt->close();
        return $listciudadano;
    }

    function Add($entidad)
    {
       
        $stmt = $this->context->db->prepare("insert into ciudadanos (Documento,Nombre,Apellido,Email,Estado) values (?,?,?,?,?)");
        $stmt->bind_param('sssss',$entidad->documento,$entidad->nombre,$entidad->apellido,$entidad->email,$entidad->estado);
        $stmt->execute();
        $stmt->close();
    }

    function Delete($id)
    {
        $stmt = $this->context->db->prepare("Delete from ciudadanos where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    function GetbyId($id)
    {
        $ciudadano = new ciudadano();
        $stmt = $this->context->db->prepare("select * from ciudadanos where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return null;
        }else{
            while($row = $result->fetch_object()){
                    $ciudadano->id = $row->id;
                    $ciudadano->nombre = $row->Nombre;
                    $ciudadano->apellido = $row->apellido;
                    $ciudadano->documento = $row->documento;
                    $ciudadano->estado = $row->Estado;
                    $ciudadano->email = $row->email;
               
            }
        }
        $stmt->close();
        return $ciudadano;
    }
    
    function Update($id, $entidad)
    {   

        $stmt = $this->context->db->prepare("Update ciudadanos set Documento = ?, Nombre = ?, Apellido = ?, Email = ?, Estado = ? where id = ?");
        $stmt->bind_param('sssssi',$entidad->documento,$entidad->nombre,$entidad->apellido,$entidad->email,$entidad->estado,$entidad->id);
        $stmt->execute();
        $stmt->close();
         
        
    }
    function buscar($cedula){
        
        $stmt = $this->context->db->prepare("Select * from Ciudadanos where Documento = ?");
        $stmt->bind_param("s",$cedula);
         $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows ===0){
            return null;
        }else{
            $result = $result->fetch_object();
            $user = new ciudadano();

            $user->id = $result->Id;
            $user->nombre = $result->Nombre;
            $user->cedula = $result->cedula;
            $user->estado = $result->Estado;
            $user->apellido = $result->apellido;
            $user->email = $result->email;

            return $user;
        }
        $stmt->close();
    }

 }
?>