<?php

class CategoriaModel
{

    public $id, $categoria, $descricao, $rows;

    public function save()
    {
        include 'DAO/CategoriaDAO.php';

        $dao = new CategoriaDAO();


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
        include 'DAO/CategoriaDAO.php';

        $dao = new CategoriaDAO();

        $this->rows = $dao->select();

    }

    
}

?>