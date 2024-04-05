<?php 

class User{

    private $email;
    private $user_name;
    private $name; 

    public function __construct($n,$e,$u){
        $this->name = $n;
        $this->user_name = $u; 
        $this->email = $e;
    }

    public function GetNome(){
        return $this->name;
    }

    public function GetEmail(){
        return $this->email;
    }
    public function GetUseName(){
        return $this->user_name;
    }

}