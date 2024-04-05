<?php 

require_once __DIR__."/../model/ProductModel.php";
require_once __DIR__."/../model/LoginModel.php";

Class HomeController{

    public static function index(){  
        $produtos = Produto::GetProducts();
        require_once  __DIR__."/../view/head.php";
        require_once  __DIR__."/../view/header.php";
        require_once  __DIR__."/../view/product_list.php";
        require_once  __DIR__."/../view/footer.php";
    }

    public static function new_product(){  
        require_once  __DIR__."/../view/head.php";
        require_once  __DIR__."/../view/header.php";
        require_once  __DIR__."/../view/product_add.php";
        require_once  __DIR__."/../view/footer.php"; 
    }

    public static function register_product($nome,$quantidade,$preco){
        Produto::register($nome,$preco,$quantidade);
        header("location: index.php?action=home");
    }

    public static function edit(){
        $produtos = Produto::GetProducts();
        require_once  __DIR__."/../view/head.php";
        require_once  __DIR__."/../view/header.php";
        require_once  __DIR__."/../view/product_list_edit.php";
        require_once  __DIR__."/../view/footer.php";
    }

    public static function edit_product($id){
        $id = $id - 1;
        $produtos = Produto::GetProducts();
        require_once  __DIR__."/../view/head.php";
        require_once  __DIR__."/../view/header.php";
        require_once  __DIR__."/../view/product_edit.php";
        require_once  __DIR__."/../view/footer.php";
    }

    public static function register_edit_product($nome,$preco,$quantidade,$id){
        Produto::register_edit_product($nome,$preco,$quantidade,$id);
    }

    public static function excluir_produto($id){
        Produto::excluir_produto($id);
    }
}