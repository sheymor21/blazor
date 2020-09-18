<?php 
class user{
    public $id;
    public $name;
    public $lastname;
    public $email;
    public $photo;
    public $username;
    public $password;

    public function initialize($id,$name,$lastname,$photo,$email,$username,$password){
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->photo = $photo;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;

    }

    public function set($data){
        foreach($data as $key => $value) $this->{$key} = $value;
    }

}


?>