<?php

class PessoaModel
{

    public $id, $nome, $cpf, $dataNascimento, $email, $telefone, $endereco, $rows;
    

    public function save()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

     if($this->id == null)
     {

        $dao->insert($this);

    }else
    {
        echo "update";
    }
    }

    public function getAllRows()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        $this->rows = $dao->select();

    }

    public function getById(int $id)
    {
       include 'DAO/PessoaDAO.php';
       $dao = new PessoaDAO();
    
       return $dao->selectById($id);
    }
}

?>