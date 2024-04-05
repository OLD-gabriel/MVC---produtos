<?php 

require_once __DIR__."/database.php";

class Produto{

    public static function register($nome,$preco,$quantidade){
        $sql = "INSERT INTO produtos(nome_produto,quantidade,preco) VALUES(:nome,:quantidade,:preco)";
        $query = Database::GetInstance()->prepare($sql);
        $query->bindValue(":nome",$nome);
        $query->bindValue(":quantidade",$quantidade);
        $query->bindValue(":preco",$preco);
        $query->execute();
    }

    public static function GetProducts(){
        $sql = "SELECT * FROM produtos";
        $query = Database::GetInstance()->prepare($sql);
        $query->execute();
        $dados = $query->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public static function register_edit_product($nome, $preco, $quantidade, $id){
        $sql = "UPDATE produtos SET nome_produto = :nome, preco = :preco, quantidade = :quantidade WHERE id = :id";
        $query = Database::GetInstance()->prepare($sql);
        $query->bindValue(":nome", $nome);
        $query->bindValue(":preco", $preco);
        $query->bindValue(":quantidade", $quantidade);
        $query->bindValue(":id", $id);
        $query->execute();
        header("location: index.php?action=list_edit");
    }

    public static function excluir_produto($id){
        $sql = "DELETE FROM produtos WHERE id = :id ";
        $query = Database::GetInstance()->prepare($sql);
        $query->bindValue(":id",$id);
        $query->execute();
        header("location: index.php?action=list_edit");
    }

}