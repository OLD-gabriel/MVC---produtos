<?php 

Class Database{

    private static $conn;

    public static function GetInstance(){
        if(self::$conn == NULL){
            self::$conn = new PDO("mysql:host=localhost;dbname=cadastro_produtos","root","");
        }
        return self::$conn;
    }

}