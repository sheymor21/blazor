<?php
class logic{
    function __construct()
    {


    }

    function verificar($list1,$list2){
        $validacion = false;
        

        if(!empty($list1)){
            if(!empty($list2)){
                $validacion = true;
            }
          
        }
        return $validacion;
    }


    public function uploadIMG($directory,$name,$tmpFile,$type,$size){

        $isSucces =false;
        if
        (
            ($type == "image/gif")
           || ($type == "image/jpeg")
           || ($type == "image/png")
           || ($type == "image/jpg")
           || ($type == "image/JPG")
            ||($type == "image/pjpeg") && ($size<1000000)
        ){
            if(!file_exists($directory)){
                mkdir($directory,0777,true);

                if(file_exists($directory)){
                   
                    $this->uploadFile($name,$tmpFile);
                    $isSucces = true;
                }

            }else{
                $this->uploadFile($name,$tmpFile);
                $isSucces = true;
            }
        }else {
            $isSucces = false;
        }
        return $isSucces;
    }

    public function uploadFile($name,$tmpFile){
        if(file_exists($name)){
            unlink($name);
        }

        move_uploaded_file($tmpFile,$name);
    }

    public function cont($list){
        $count = count($list);
        $element = $list[$count - 1];
            
        return $element;
    }

    public  function seleccion($select){
        $id = 0;
        if(is_numeric($select)){
            $id = $select - 1;    
        }else{
            $id = -1;
        }
        return $id;
    }
    
    public function filtrado($list,$propiedad,$value){
        $filtro = [];
        foreach ($list as $item) {
            if($item->$propiedad == $value){
                array_push($filtro,$item);
            }
        }
        return $filtro;
    }
    
    public function index($list,$propiedad,$value){
        $index = 0;
        foreach ($list as $key => $item) {
            if($item->$propiedad == $value){
                $index = $key;
            }
        }
        return $index;
    }
    
    public function Incorrect(){
        $modal = <<<EOF
        <div class="modal fade" id="incorrecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                 <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Ha cometido un error</h5>
                         
                </div>
             <div class="modal-body">
             <h5>Su contraseña o usuario son incorrectos</h5>
             </div>
                <div class="modal-footer">
                   
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        EOF;

        echo $modal;
    }

    public function tramposo(){
        session_start();
        if($_SESSION['user'] == null){
            header('Location: agregarUser.php');
        }
    }

    public function volverLogin(){
        session_start();
        if($_SESSION['user'] != null){
            header('Location: agregarCiudadano.php');
        }
    }

    public function listButtons($opcion,$where){
        if($where == 'eliminar'){
                if($opcion == 1){
                    $botones = <<<EOF
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a name="" id="" class="btn btn-dark" href="Eliminar.php?id=1" role="button">Partido</a>
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=2" role="button">Candidato</a>
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=3" role="button">Ciudadano</a>
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=4" role="button">Puesto</a>
                     </div>
                    EOF;
                }else if($opcion == 2){
                    $botones = <<<EOF
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=1" role="button">Partido</a>
                    <a name="" id="" class="btn btn-dark" href="Eliminar.php?id=2" role="button">Candidato</a>
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=3" role="button">Ciudadano</a>
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=4" role="button">Puesto</a>
                     </div>
                    EOF;
                } else if($opcion == 3){
                    $botones = <<<EOF
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=1" role="button">Partido</a>
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=2" role="button">Candidato</a>
                    <a name="" id="" class="btn btn-dark" href="Eliminar.php?id=3" role="button">Ciudadano</a>
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=4" role="button">Puesto</a>
                     </div>
                    EOF;
                } else if($opcion == 4){
                    $botones = <<<EOF
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=1" role="button">Partido</a>
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=2" role="button">Candidato</a>
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=3" role="button">Ciudadano</a>
                    <a name="" id="" class="btn btn-dark" href="Eliminar.php?id=4" role="button">Puesto</a>
                     </div>
                    EOF;
                }else{
                    $botones = <<<EOF
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=1" role="button">Partido</a>
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=2" role="button">Candidato</a>
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=3" role="button">Ciudadano</a>
                    <a name="" id="" class="btn btn-secondary" href="Eliminar.php?id=4" role="button">Puesto</a>
                     </div>
                    EOF;
        
                }
        }else if($where == 'editar'){
            if($opcion == 1){
                $botones = <<<EOF
                <div class="btn-group" role="group" aria-label="Basic example">
                <a name="" id="" class="btn btn-dark" href="update.php?id=1" role="button">Partido</a>
                <a name="" id="" class="btn btn-secondary" href="update.php?id=2" role="button">Candidato</a>
                <a name="" id="" class="btn btn-secondary" href="update.php?id=3" role="button">Ciudadano</a>
                <a name="" id="" class="btn btn-secondary" href="update.php?id=4" role="button">Puesto</a>
                 </div>
                EOF;
            }else if($opcion == 2){
                $botones = <<<EOF
                <div class="btn-group" role="group" aria-label="Basic example">
                <a name="" id="" class="btn btn-secondary" href="update.php?id=1" role="button">Partido</a>
                <a name="" id="" class="btn btn-dark" href="update.php?id=2" role="button">Candidato</a>
                <a name="" id="" class="btn btn-secondary" href="update.php?id=3" role="button">Ciudadano</a>
                <a name="" id="" class="btn btn-secondary" href="update.php?id=4" role="button">Puesto</a>
                 </div>
                EOF;
            } else if($opcion == 3){
                $botones = <<<EOF
                <div class="btn-group" role="group" aria-label="Basic example">
                <a name="" id="" class="btn btn-secondary" href="update.php?id=1" role="button">Partido</a>
                <a name="" id="" class="btn btn-secondary" href="update.php?id=2" role="button">Candidato</a>
                <a name="" id="" class="btn btn-dark" href="update.php?id=3" role="button">Ciudadano</a>
                <a name="" id="" class="btn btn-secondary" href="update.php?id=4" role="button">Puesto</a>
                 </div>
                EOF;
            } else if($opcion == 4){
                $botones = <<<EOF
                <div class="btn-group" role="group" aria-label="Basic example">
                <a name="" id="" class="btn btn-secondary" href="update.php?id=1" role="button">Partido</a>
                <a name="" id="" class="btn btn-secondary" href="update.php?id=2" role="button">Candidato</a>
                <a name="" id="" class="btn btn-secondary" href="update.php?id=3" role="button">Ciudadano</a>
                <a name="" id="" class="btn btn-dark" href="update.php?id=4" role="button">Puesto</a>
                 </div>
                EOF;
            }else{
                $botones = <<<EOF
                <div class="btn-group" role="group" aria-label="Basic example">
                <a name="" id="" class="btn btn-secondary" href="update.php?id=1" role="button">Partido</a>
                <a name="" id="" class="btn btn-secondary" href="update.php?id=2" role="button">Candidato</a>
                <a name="" id="" class="btn btn-secondary" href="update.php?id=3" role="button">Ciudadano</a>
                <a name="" id="" class="btn btn-secondary" href="update.php?id=4" role="button">Puesto</a>
                 </div>
                EOF;
    
            }
        }
        

        echo $botones;
    }

    
}


?>