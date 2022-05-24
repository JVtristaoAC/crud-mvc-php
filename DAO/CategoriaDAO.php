<?php

class CategoriaDAO
{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=banco_mvc";

        $this->conexao = new PDO($dsn, 'root', 'nasciEM1606');
    }
    public function insert(CategoriaModel $model)
    {
        
        $sql = "INSERT INTO Categoria (Categoria, Descricao) VALUES (?, ?)";
         
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->categoria); 
        $stmt->bindValue(2, $model->descricao);

    }

    public function update()
    {


    }

    public function select()
    {
        $sql ="SELECT * FROM Categoria";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
?>