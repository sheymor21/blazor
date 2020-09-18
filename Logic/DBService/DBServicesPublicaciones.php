<?php
class DatabaseServicePublicaciones implements iServices{
        
    private $logic;
    private $context;

    public function __construct($directory = "../Database")
    {
        $this->logic = new logic();
       $this->context = new UserContext($directory);
    }

    function GetList()
    {
       $listpublicacion = array();

       $stmt = $this->context->db->prepare("select * from publicacion");
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return $listpublicacion;
        }else{
            while($row = $result->fetch_object()){
                    $publicacion = new publicaciones();
                    $publicacion->id = $row->id;
                    $publicacion->idUser = $row->idUser;
                    $publicacion->title = $row->title;
                    $publicacion->content = $row->content;
                    $publicacion->datetime = $row->datetime;
                    array_push($listpublicacion,$publicacion);
            }
        }
        $stmt->close();
        return $listpublicacion;
    }

    function Add($entidad)
    {
       

        $stmt = $this->context->db->prepare("insert into publicacion (idUser,title,content,datetime) values (?,?,?,?)");
        $stmt->bind_param("isss",$entidad->idUser,$entidad->title,$entidad->content,$entidad->datetime);
        $stmt->execute();
        $stmt->close();
        
    }

    function Delete($id)
    {
        $stmt = $this->context->db->prepare("Delete from publicacion where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    function GetbyId($id)
    {
        $publicacion = new publicaciones();
        $stmt = $this->context->db->prepare("select * from publicacion where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return null;
        }else{
            while($row = $result->fetch_object()){

                $publicacion->id = $row->id;
                $publicacion->idUser = $row->idUser;
                $publicacion->title = $row->title;
                $publicacion->content = $row->content;
                $publicacion->datetime = $row->datetime;
               
            }
        }
        $stmt->close();
        return $publicacion;
    }
    
    function Update($id, $entidad)
    {   
        //$element = $this->GetbyId($id);

        $stmt = $this->context->db->prepare("Update publicacion set  idUser = ? ,title = ?,content = ?,datetime = ? where id = ?");
        $stmt->bind_param("isssi",$entidad->idUser,$entidad->title,$entidad->content,$entidad->datetime,$id);
        $stmt->execute();
        $stmt->close();
        
    }

 }


?>