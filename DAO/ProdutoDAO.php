<?php

class ProdutoDAO{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=banco_mvc";

        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }


    public function insert(ProdutoModel $model)
    {
        $sql = "INSERT INTO Produto (Produto, Estoque, Preco, ID_categoria) VALUES (?, ?, ?, ?)";
         
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
        $sql ="SELECT * FROM Produto";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
?>