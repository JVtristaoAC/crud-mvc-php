<?php

class ProdutoController
{
    public static function index()
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();
        $model->getAllRows();

        include 'View/Produto/ListagemProduto.php';
    }

    public static function form()
    {
        include 'View/Produto/frmProduto.php';
    }

    public static function save()
    {



        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model->Produto = $_POST['Produto'];
        $model->Estoque = $_POST['Estoque'];
        $model->Preco = $_POST['Preco'];
        $model->ID_categoria = $_POST['Categoria'];

        $model->save();

        header("Location: /produto");
    }
}
?>