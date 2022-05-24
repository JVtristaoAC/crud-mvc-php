<?php

class ProdutoModel
{

    public $id, $produto, $estoque, $preco, $id_categoria;

    public function save()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

    if($this->id == null){

        $dao->insert($this);

    }
    else{
        echo "update";
    }
    
    }

    public function getAllRows()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        $this->rows = $dao->select();

    }
}

?>