<?php

class ProdutoDAO{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=banco_mvc";

        $this->conexao = new PDO($dsn, 'root', 'nasciEM1606');
    }


    public function insert(ProdutoModel $model)
    {
        $sql = "INSERT INTO Pessoa (Produto, Estoque, Preco, ID_categoria) VALUES (?, ?, ?, ?)";
         
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->Produto); 
        $stmt->bindValue(2, $model->Estoque);
        $stmt->bindValue(3, $model->Preco);
        $stmt->bindValue(4, $model->ID_categoria);
    }

    public function update()
    {


    }

    public function select()
    {
        $sql ="SELECT * FROM Produto";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
?>