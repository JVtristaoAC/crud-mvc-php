<?php

namespace App\DAO;
use \PDO;
use App\Model\CategoriaModel;

class CategoriaDAO extends DAO
{

    private $conexao;

    public function __construct()
    {
        parent::__construct();
    }
    public function insert(CategoriaModel $model)
    {
        
        $sql = "INSERT INTO categoria (categoria, descricao) VALUES (?, ?)";
         
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->categoria); 
        $stmt->bindValue(2, $model->descricao);
        $stmt->execute();

    }

    public function update(CategoriaModel $model)
    {
        $sql = "UPDATE categoria SET categoria=?, descricao=? WHERE id=?";
         
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->categoria); 
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->id);
        $stmt->execute();

    }

    public function select()
    {
        $sql ="SELECT * FROM categoria";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/CategoriaModel.php';

        $sql = "SELECT * FROM categoria WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CategoriaModel");
    }

    public function delete(int $id)
    {
        $sql ="DELETE FROM Categoria WHERE id = ? ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    
        
    }
}
?>