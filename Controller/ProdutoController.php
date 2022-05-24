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
        $model->produto = $_POST['Produto'];
        $model->estoque = $_POST['Estoque'];
        $model->preco = $_POST['Preco'];
        $model->id_categoria = $_POST['Categoria'];

        $model->save();

        header("Location: /produto");
    }
}
?>