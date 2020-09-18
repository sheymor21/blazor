<?php
 class DatabaseServicePartidos implements iServices{
        
    private $logic;
    private $context;

    public function __construct($directory = "../Database")
    {
        $this->logic = new logic();
       $this->context = new EleccionContext($directory);
    }

    function GetList()
    {
       $listpartidos = array();

       $stmt = $this->context->db->prepare("select * from partidos");
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return $listpartidos;
        }else{
            while($row = $result->fetch_object()){
                    $partido = new partidos();
                    $partido->id = $row->id;
                    $partido->nombre = $row->Nombre;
                    $partido->descripcion = $row->Descripcion;
                    $partido->estado = $row->Estado;
                    $partido->logo = $row->Logo;
                    array_push($listpartidos,$partido);
            }
        }
        $stmt->close();
        return $listpartidos;
    }

    function Add($entidad)
    {
       
        $stmt = $this->context->db->prepare("insert into partidos (Nombre,Descripcion,Logo,Estado) values (?,?,?,?)");
        $stmt->bind_param('ssss',$entidad->nombre,$entidad->descripcion,$entidad->logo,$entidad->estado);
        $stmt->execute();
        $stmt->close();
        $PartidoId = $this->context->db->insert_id;
        
        if(isset($_FILES['photo'])){
            $Pimg = $_FILES['photo'];

            if($Pimg['error'] == 4){
                $entidad->img = "";
            }else {

                $typeRemplace = str_replace("image/","",$_FILES['photo']['type']);
                $type = $Pimg['type'];
                $size = $Pimg['size'];
                $name = $PartidoId.".".$typeRemplace;
                $tmpName = $Pimg['tmp_name'];

                $success = $this->logic->uploadIMG("../Object",$name,$tmpName,$type,$size);

                if($success){
                    $stmt = $this->context->db->prepare("Update partidos set Foto = ? where id = ?");
                    $stmt->bind_param("si",$name,$PartidoId);
                    $stmt->execute();
                    $stmt->close();
                }



            }
        }
    }

    function Delete($id)
    {
        $stmt = $this->context->db->prepare("Delete from partidos where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    function GetbyId($id)
    {
        $partido = new partidos();
        $stmt = $this->context->db->prepare("select * from partidos where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return null;
        }else{
            while($row = $result->fetch_object()){
                $partido->id = $row->id;
                $partido->nombre = $row->Nombre;
                $partido->fecha = $row->Fecha;
                $partido->estado = $row->Estado;
               
            }
        }
        $stmt->close();
        return $partido;
    }
    
    function Update($id, $entidad)
    {   
        $element = $this->GetbyId($id);

        $stmt = $this->context->db->prepare("Update partidos set Nombre = ?, Descripcion = ?, Logo = ?, Estado = ? where id = ?");
        $stmt->bind_param('ssssi',$entidad->nombre,$entidad->descripcion,$entidad->logo,$entidad->estado,$entidad->id);
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
                    $stmt = $this->context->db->prepare("Update partidos set Logo = ? where id = ?");
                    $stmt->bind_param("si",$name,$id);
                    $stmt->execute();
                    $stmt->close();
                }



            }
        }
         
        
    }

 }
?>