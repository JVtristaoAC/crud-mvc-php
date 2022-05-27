<?php

class PessoaDAO
{

    private $conexao;

    public function __construct()
    {
        // $dsn = "mysql:host=localhost:3307;dbname=banco_mvc";
        // $this->conexao = new PDO($dsn, 'root', 'etecjau');
        $dsn = "mysql:host=localhost:3306;dbname=banco_mvc";
        $this->conexao = new PDO($dsn, 'root', 'nasciEM1606');
    }
    public function insert(PessoaModel $model)
    {
        
        $sql = "INSERT INTO Pessoa (Nome, CPF, Data_Nascimento, email, telefone, Endereco) VALUES (?, ?, ?, ?, ?, ?)";
         
         $stmt = $this->conexao->prepare($sql);
         
         $stmt->bindValue(1, $model->nome); 
         $stmt->bindValue(2, $model->cpf);
         $stmt->bindValue(3, $model->dataNascimento);
         $stmt->bindValue(4, $model->email);
         $stmt->bindValue(5, $model->telefone);
         $stmt->bindValue(6, $model->endereco);
         $stmt->execute();

    }

    public function update(PessoaModel $model)
    {
        $sql = "UPDATE pessoa SET Nome=?, CPF=?, Data_Nascimento=?, email=?, telefone=?, Endereco=? WHERE id=?";
         
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->nome); 
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->dataNascimento);
        $stmt->bindValue(4, $model->email);
        $stmt->bindValue(5, $model->telefone);
        $stmt->bindValue(6, $model->endereco);
        $stmt->bindValue(7, $model->id);
        $stmt->execute();

    }

    public function select()
    {
        $sql ="SELECT * FROM Pessoa";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/PessoaModel.php';

        $sql = "SELECT * FROM pessoa WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("PessoaModel");
    }

    public function delete(int $id)
    {
        $sql ="DELETE FROM Pessoa WHERE id = ? ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    
        
    }
}
?>