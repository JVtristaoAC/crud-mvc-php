<?php

class CategoriaController
{
    public static function index()
    {
        include 'Model/CategoriaModel.php';
        $model = new CategoriaModel();
        $model->getAllRows();


        include 'View/Categoria/ListagemCategoria.php';
    }

    public static function form(){

            include 'Model/CategoriaModel.php';
            $model = new CategoriaModel();
            
            if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']);
            
            include 'View/Categoria/frmCategoria.php';
       
    }

    public static function save()
    {
        include 'Model/CategoriaModel.php';

        $model = new CategoriaModel();
        $model->categoria = $_POST['Categoria'];
        $model->descricao = $_POST['Descricao'];

        $model->save();

        header("Location: /categoria");
    }

    public static function delete()
    {
        include 'Model/CategoriaModel.php';

        $model = new CategoriaModel();

         if(isset($_GET['id'])) 
        $model->delete( (int) $_GET['id']);

        header("Location: /categoria");
    }
}
?>