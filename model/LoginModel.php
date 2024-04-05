<?php 

require_once __DIR__."/database.php";

class Usuario{
 
    public static function verif_user($email,$user){
        $sql = "SELECT * FROM usuarios WHERE email = :email AND nome_usuario = :user";
        $verif = Database::GetInstance()->prepare($sql);
        $verif->bindValue(":email",$email);
        $verif->bindValue(":user",$user);
        $verif->execute(); 
        return $verif->rowCount() == 0 ? True : False; 
    }

    public static function register_user($nome,$email,$senha,$fullname){
        $sql = "INSERT INTO usuarios (nome_completo,email,senha,nome_usuario) VALUES (:nc,:e,:s,:nu)";
        $query = Database::GetInstance()->prepare($sql);
        $query->bindValue(":nc",$nome);
        $query->bindValue(":e",$email);
        $query->bindValue(":s",$senha);
        $query->bindValue(":nu",$fullname);
        $query->execute();
    }

    public static function login($user,$senha){
        $sql = "SELECT nome_completo,email,senha,nome_usuario FROM usuarios WHERE ( nome_usuario = :user OR email = :user) AND senha = :senha";
        $query = Database::GetInstance()->prepare($sql);
        $query->bindValue(":user",$user);
        $query->bindValue(":senha",$senha);
        $query->execute();
        
        if($query->rowCount() == 1){
            $user = $query->fetch(PDO::FETCH_ASSOC); 
            $_SESSION["nome"] = $user["nome_completo"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["usuario"] = $user["nome_usuario"]; 
            return true;
        }
        else{
            return false;
        }
    }

    // public static function Getuser($email){ 
    //     $sql = "SELECT nome_completo,email,nome_usuario FROM usuarios WHERE email = :email ";
    //     $query = Database::GetInstance()->prepare($sql);
    //     $query->bindValue(":email",$email);
    //     $query->execute();
    //     $user = $query->fetch(PDO::FETCH_ASSOC);
    //     $dados = new User($user["nome_completo"],$user["email"],$user["nome_usuario"]);
    //     return $dados;        
    // }
    

}