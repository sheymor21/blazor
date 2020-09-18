<?php 
    class publicaciones{
        public $id;
        public $idUser;
        public $title;
        public $content;
        public $datetime;

        public function initialize($id,$idUser,$title,$content,$datetime){
            $this->id = $id;
            $this->idUser = $idUser;
            $this->title = $title;
            $this->content = $content;
            $this->datetime = $datetime;
    
        }
        public function set($data){
            foreach($data as $key => $value) $this->{$key} = $value;
        }
    }

?>