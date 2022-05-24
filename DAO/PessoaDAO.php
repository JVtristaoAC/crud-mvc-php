<?php

class PessoaDAO
{

    private $conexao;

    public function __construct()
    {
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


    }

    public function select()
    {

        $sql ="SELECT * FROM Pessoa";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
?>