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

    public static function form()
    {
        include 'View/Categoria/frmCategoria.php';
    }

    public static function save()
    {
        var_dump($_POST);
    }
}
?>