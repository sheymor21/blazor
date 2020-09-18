<?php
 class DatabaseServiceUser implements iServices{
        
    private $logic;
    private $context;

    public function __construct($directory = "../Database")
    {
        $this->logic = new logic();
       $this->context = new UserContext($directory);
    }

    function GetList()
    {
       $listuser = array();

       $stmt = $this->context->db->prepare("select * from user");
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return $listuser;
        }else{
            while($row = $result->fetch_object()){
                    $user = new user();
                    $user->id = $row->id;
                    $user->name = $row->name;
                    $user->lastname = $row->lastname;
                    $user->email = $row->email;
                    $user->photo = $row->photo;
                    $user->username = $row->username;
                    $user->password = $row->password;
                    array_push($listuser,$user);
            }
        }
        $stmt->close();
        return $listuser;
    }

    function Add($entidad)
    {
       

        $stmt = $this->context->db->prepare("insert into user (name,lastname,email,username,password,photo) values (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss",$entidad->name,$entidad->lastname,$entidad->email,$entidad->username,$entidad->password,$entidad->photo);
        $stmt->execute();
        $stmt->close();
        $userId = $this->context->db->insert_id;
        
        if(isset($_FILES['photo'])){
            $Pimg = $_FILES['photo'];

            if($Pimg['error'] == 4){
                $entidad->img = "";
            }else {

                $typeRemplace = str_replace("image/","",$_FILES['photo']['type']);
                $type = $Pimg['type'];
                $size = $Pimg['size'];
                $name = $userId.".".$typeRemplace;
                $tmpName = $Pimg['tmp_name'];

                $success = $this->logic->uploadIMG("../User",$name,$tmpName,$type,$size);

                if($success){
                    $stmt = $this->context->db->prepare("Update user set photo = ? where id = ?");
                    $stmt->bind_param("si",$name,$userId);
                    $stmt->execute();
                    $stmt->close();
                }



            }
        }
    }

    function Delete($id)
    {
        $stmt = $this->context->db->prepare("Delete from user where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    function GetbyId($id)
    {
        $user = new user();
        $stmt = $this->context->db->prepare("select * from user where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return null;
        }else{
            while($row = $result->fetch_object()){
                $user->id = $row->id;
                $user->name = $row->name;
                $user->lastname = $row->lastname;
                $user->email = $row->email;
                $user->photo = $row->photo;
                $user->username = $row->username;
                $user->password = $row->password;
               
            }
        }
        $stmt->close();
        return $user;
    }
    
    function Update($id, $entidad)
    {   
        $element = $this->GetbyId($id);

        $stmt = $this->context->db->prepare("Update user set name = ?,lastname = ?,email = ?,photo = ?,username = ?,password = ? where id = ?");
        $stmt->bind_param("ssssssi",$entidad->name,$entidad->lastname,$entidad->email,$entidad->photo,$entidad->username,$entidad->password,$id);
        $stmt->execute();
        $stmt->close();

        if(isset($_FILES['photo'])){
            $Pimg = $_FILES['photo'];

            if($Pimg['error'] == 4){
                $entidad->img = $element->img;
            }else {

                $typeRemplace = str_replace("image/","",$_FILES['photo']['type']);
                $type = $Pimg['type'];
                $size = $Pimg['size'];
                $name = $id.".".$typeRemplace;
                $tmpName = $Pimg['tmp_name'];

                $success = $this->logic->uploadIMG("../User",$name,$tmpName,$type,$size);

                if($success){
                    $stmt = $this->context->db->prepare("Update user set photo = ? where id = ?");
                    $stmt->bind_param("si",$name,$id);
                    $stmt->execute();
                    $stmt->close();
                }



            }
        }
         
        
    }

    function Login($user,$password){
        $stmt = $this->context->db->prepare("Select * from user where username = ? and password = ?");
        $stmt->bind_param("ss",$user,$password);
         $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows ===0){
            return null;
        }else{
            $result = $result->fetch_object();
            $user = new user();

            $user->id = $result->id;
            $user->name = $result->name;
            $user->lastname = $result->lastname;
            $user->email = $result->email;
            $user->username = $result->username;
            $user->password = $result->password;
            $user->photo = $result->photo;

            return $user;
        }
        $stmt->close();
    }
 }
?>