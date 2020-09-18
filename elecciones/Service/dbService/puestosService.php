<?php
 class DatabaseServicePuestos  implements iServices{
        
    private $logic;
    private $context;

    public function __construct($directory = "../Database")
    {
        $this->logic = new logic();
       $this->context = new EleccionContext($directory);
    }

    function GetList()
    {
       $listpuestos  = array();

       $stmt = $this->context->db->prepare("select * from puestos");
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return $listpuestos ;
        }else{
            while($row = $result->fetch_object()){
                    $puestos  = new puesto();
                    $puestos ->id = $row->id;
                    $puestos ->nombre = $row->Nombre;
                    $puestos ->descripcion = $row->Descripcion;
                    $puestos ->estado = $row->Estado;
                    array_push($listpuestos ,$puestos );
            }
        }
        $stmt->close();
        return $listpuestos ;
    }

    function Add($entidad)
    {
       
        $stmt = $this->context->db->prepare("insert into puestos (Nombre,Descripcion,Estado) values (?,?,?)");
        $stmt->bind_param('sss',$entidad->nombre,$entidad->descripcion,$entidad->estado);
        $stmt->execute();
        $stmt->close();
        $puestosId = $this->context->db->insert_id;
        
        if(isset($_FILES['photo'])){
            $Pimg = $_FILES['photo'];

            if($Pimg['error'] == 4){
                $entidad->img = "";
            }else {

                $typeRemplace = str_replace("image/","",$_FILES['photo']['type']);
                $type = $Pimg['type'];
                $size = $Pimg['size'];
                $name = $puestosId.".".$typeRemplace;
                $tmpName = $Pimg['tmp_name'];

                $success = $this->logic->uploadIMG("../Object",$name,$tmpName,$type,$size);

                if($success){
                    $stmt = $this->context->db->prepare("Update puestos set Foto = ? where id = ?");
                    $stmt->bind_param("si",$name,$puestosId);
                    $stmt->execute();
                    $stmt->close();
                }



            }
        }
    }

    function Delete($id)
    {
        $stmt = $this->context->db->prepare("Delete from puestos  where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    function GetbyId($id)
    {
        $puestos  = new puesto();
        $stmt = $this->context->db->prepare("select * from puestos where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 0){
            return null;
        }else{
            while($row = $result->fetch_object()){
                $puestos ->id = $row->id;
                $puestos ->nombre = $row->Nombre;
                $puestos ->descripcion = $row->Descripcion;
                $puestos ->estado = $row->Estado;
               
            }
        }
        $stmt->close();
        return $puestos ;
    }
    
    function Update($id, $entidad)
    {   
        $element = $this->GetbyId($id);

        $stmt = $this->context->db->prepare("Update puestos set Nombre = ?, Descripcion = ?, Estado = ? where id = ?");
        $stmt->bind_param('sssi',$entidad->nombre,$entidad->descripcion,$entidad->estado,$entidad->id);
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
                    $stmt = $this->context->db->prepare("Update puestos  set Logo = ? where id = ?");
                    $stmt->bind_param("si",$name,$id);
                    $stmt->execute();
                    $stmt->close();
                }



            }
        }
         
        
    }

 }
?>