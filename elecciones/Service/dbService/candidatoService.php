<?php
 class DatabaseServiceCandidato implements iServices{
        
    private $logic;
    private $context;

    public function __construct($directory = "../Database")
    {
        $this->logic = new logic();
       $this->context = new EleccionContext($directory);
    }

    function GetList()
    {
       $listcandidato = array();

       $stmt = $this->context->db->prepare("select * from candidatos");
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return $listcandidato;
        }else{
            while($row = $result->fetch_object()){
                    $candidato = new candidato();
                    $candidato->id = $row->id;
                    $candidato->nombre = $row->Nombre;
                    $candidato->apellido = $row->Apellido;
                    $candidato->puesto = $row->Puesto;
                    $candidato->partido = $row->Partido;
                    $candidato->foto = $row->Foto;
                    $candidato->estado = $row->Estado;
                    array_push($listcandidato,$candidato);
            }
        }
        $stmt->close();
        return $listcandidato;
    }

    function Add($entidad)
    {
       
        $stmt = $this->context->db->prepare("insert into candidatos (Nombre,Apellido,Partido,Puesto,Foto,Estado) values (?,?,?,?,?,?)");
        $stmt->bind_param('ssssss',$entidad->nombre,$entidad->apellido,$entidad->partido,$entidad->puesto,$entidad->foto,$entidad->estado);
        $stmt->execute();
        $stmt->close();

        $candidatoId = $this->context->db->insert_id;
        if(isset($_FILES['photo'])){
            $Pimg = $_FILES['photo'];

            if($Pimg['error'] == 4){
                $entidad->img = "";
            }else {

                $typeRemplace = str_replace("image/","",$_FILES['photo']['type']);
                $type = $Pimg['type'];
                $size = $Pimg['size'];
                $name = $candidatoId.".".$typeRemplace;
                $tmpName = $Pimg['tmp_name'];

                $success = $this->logic->uploadIMG("../Object",$name,$tmpName,$type,$size);

                if($success){
                    $stmt = $this->context->db->prepare("Update candidatos set Foto = ? where id = ?");
                    $stmt->bind_param("si",$name,$candidatoId);
                    $stmt->execute();
                    $stmt->close();
                }



            }
        }
    }

    function Delete($id)
    {
        $stmt = $this->context->db->prepare("Delete from candidatos where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    function GetbyId($id)
    {
        $candidato = new candidato();
        $stmt = $this->context->db->prepare("select * from candidatos where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return null;
        }else{
            while($row = $result->fetch_object()){
                $candidato->id = $row->id;
                $candidato->nombre = $row->Nombre;
                $candidato->apellido = $row->Apellido;
                $candidato->documento = $row->Documento;
                $candidato->puesto = $row->puesto;
                $candidato->partido = $row->partido;
                $candidato->foto = $row->foto;
               
            }
        }
        $stmt->close();
        return $candidato;
    }
    
    function Update($id, $entidad)
    {   
        $element = $this->GetbyId($id);

        $stmt = $this->context->db->prepare("Update candidatos set Nombre = ?, Apellido = ?, Partido = ?, Puesto = ?,Foto = ?, Estado = ? where id = ?");
        $stmt->bind_param('ssiissi',$entidad->nombre,$entidad->apellido,$entidad->partido,$entidad->puesto,$entidad->foto,$entidad->estado,$entidad->id);
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

                $success = $this->logic->uploadIMG("../Object",$name,$tmpName,$type,$size);

                if($success){
                    $stmt = $this->context->db->prepare("Update candidatos set Foto = ? where id = ?");
                    $stmt->bind_param("si",$name,$id);
                    $stmt->execute();
                    $stmt->close();
                }



            }
        }
         
        
    }

 }
?>