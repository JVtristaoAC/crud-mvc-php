<?php

class ProdutoDAO{

    private $conexao;

    public function __construct()
    {
        // $dsn = "mysql:host=localhost:3307;dbname=banco_mvc";
        // $this->conexao = new PDO($dsn, 'root', 'etecjau');
        $dsn = "mysql:host=localhost:3306;dbname=banco_mvc";
        $this->conexao = new PDO($dsn, 'root', 'nasciEM1606');

    }


    public function insert(ProdutoModel $model)
    {
        $sql = "INSERT INTO produto (Produto, Estoque, Preco, ID_categoria) VALUES (?, ?, ?, ?)";
         
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->produto); 
        $stmt->bindValue(2, $model->estoque);
        $stmt->bindValue(3, $model->preco);
        $stmt->bindValue(4, $model->id_categoria);
        $stmt->execute();

    }

    public function update()
    {


    }

    public function select()
    {
        $sql ="SELECT * FROM produto";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/ProdutoModel.php';

        $sql = "SELECT * FROM Produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel");
    }

    public function delete(int $id)
    {
        $sql ="DELETE FROM Produto WHERE id = ? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    
        
    }
}
?>