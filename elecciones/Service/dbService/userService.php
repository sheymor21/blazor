<?php
 class DatabaseServiceUser implements iServices{
        
    private $logic;
    private $context;

    public function __construct($directory = "../Database")
    {
        $this->logic = new logic();
       $this->context = new EleccionContext($directory);
    }

    function GetList()
    {
       $listuser = array();

       $stmt = $this->context->db->prepare("select * from usuarios");
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return $listuser;
        }else{
            while($row = $result->fetch_object()){
                    $user = new user();
                    $user->id = $row->id;
                    $user->nombre = $row->Nombre;
                    $user->contraseña = $row->contraseña;
                    $user->estado = $row->Estado;
                    array_push($listuser,$user);
            }
        }
        $stmt->close();
        return $listuser;
    }

    function Add($entidad)
    {
       
        $stmt = $this->context->db->prepare("insert into usuarios (Nombre,contraseña,Estado) values (?,?,?)");
        $stmt->bind_param('sss',$entidad->nombre,$entidad->contraseña,$entidad->estado);
        $stmt->execute();
        $stmt->close();
    }

    function Delete($id)
    {
        $stmt = $this->context->db->prepare("Delete from usuarios where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    function GetbyId($id)
    {
        $user = new user();
        $stmt = $this->context->db->prepare("select * from usuarios where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return null;
        }else{
            while($row = $result->fetch_object()){
                $user->id = $row->id;
                $user->nombre = $row->Nombre;
                $user->contraseña = $row->contraseña;
                $user->estado = $row->Estado;
               
            }
        }
        $stmt->close();
        return $user;
    }
    
    function Update($id, $entidad)
    {   

        $stmt = $this->context->db->prepare("Update usuarios set Nombre = ?,contraseña = ?, Estado = ? where id = ?");
        $stmt->bind_param('sssi',$entidad->nombre,$entidad->contraseña,$entidad->estado,$entidad->id);
        $stmt->execute();
        $stmt->close();
         
        
    }

    function Login($user,$password){
        $stmt = $this->context->db->prepare("Select * from usuarios where Nombre = ? and contraseña = ?");
        $stmt->bind_param("ss",$user,$password);
         $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows ===0){
            return null;
        }else{
            $result = $result->fetch_object();
            $user = new user();

            $user->id = $result->Id;
            $user->nombre = $result->Nombre;
            $user->contraseña = $result->Contraseña;
            $user->estado = $result->Estado;

            return $user;
        }
        $stmt->close();
    }

 }
?>