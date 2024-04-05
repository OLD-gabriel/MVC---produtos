<?php 

require_once __DIR__."/../model/User.php";
require_once __DIR__."/ProductController.php";

class LoginController{

    public static function index(){
        require_once  __DIR__."/../view/head.php";
        require_once  __DIR__."/../view/login.php";
        require_once  __DIR__."/../view/footer.php";
    }

    public static function register(){
        require_once  __DIR__."/../view/head.php";
        require_once  __DIR__."/../view/register.php";
        require_once  __DIR__."/../view/footer.php";    
    }

    public static function register_account($nome,$user,$email,$senha){
        if(Usuario::verif_user($email,$user)){
            Usuario::register_user($nome,$email,$senha,$user);
            header("location:index.php");
        }
        else{
            header("location:index.php?action=register");
        }
    }

    public static function login($user,$senha){
        $dados = Usuario::login($user,$senha);
        if($dados == False){ 
            header("location: index.php");  
        }else{ 
            HomeController::index();
        }
    }
}