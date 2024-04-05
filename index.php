<?php 

session_start();

require_once __DIR__."/controller/ProductController.php";
require_once __DIR__."/controller/LoginController.php";


if(isset($_GET["action"])){
    $action = $_GET["action"];

        switch($action){
            case "add":
                HomeController::new_product();
                break;
            
            case "home":
                HomeController::index();
                break;

            case "register":
                LoginController::register();
                break;

            case "register-account":
                LoginController::register_account($_POST["fullname"],$_POST["username"],$_POST["email"],$_POST["password"]);
                break;

            case "login":
                LoginController::login($_POST["user"],$_POST["password"]);
                break;

            case "register_product":
                HomeController::register_product($_POST["nome"],$_POST["quantidade"],$_POST["preco"]);
                break;
            
            case "close":
                LoginController::index();
                break;
            
            case "list_edit":
                HomeController::edit();
                break;

            case "edit_product":
                 HomeController::edit_product($_POST["ID"]);
                break;

            case "register_edit_product":
                $id = $_GET["id"] + 1;
                HomeController::register_edit_product($_POST["nome"],$_POST["preco"],$_POST["quantidade"],$id);
                break;

            case "excluir_product":
                HomeController::excluir_produto($_POST["id"]);
                break;

        }
    }
    else{
   LoginController::index();
}