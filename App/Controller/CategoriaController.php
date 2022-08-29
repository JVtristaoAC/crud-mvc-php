<?php

namespace App\Controller;
use App\Model\CategoriaModel;

class CategoriaController
{
    public static function index()
    {
        
        $model = new CategoriaModel();
        $model->getAllRows();


        include VIEWS . 'Categoria/ListagemCategoria.php';
    }

    public static function form(){

            $model = new CategoriaModel();
            
            if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']);
            
            include VIEWS . 'Categoria/frmCategoria.php';

            var_dump($model);
       
    }

    public static function save()
    {

        $model = new CategoriaModel();
        $model->id = $_POST['id'];
        $model->categoria = $_POST['Categoria'];
        $model->descricao = $_POST['Descricao'];

        $model->save();

        header("Location: /categoria");
    }

    public static function delete()
    {

        $model = new CategoriaModel();

         if(isset($_GET['id'])) 
        $model->delete( (int) $_GET['id']);

        header("Location: /categoria");
    }
}
?>