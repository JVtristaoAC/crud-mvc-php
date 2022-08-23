<?php
namespace App\Controller;
use App\Model\ProdutoModel;

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
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();
        
        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']);

        //var_dump($model);
        
        include 'View/Produto/frmProduto.php';
    }

    public static function save()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model->id = $_POST['id'];
        $model->produto = $_POST['Produto'];
        $model->estoque = $_POST['Estoque'];
        $model->preco = $_POST['Preco'];
        $model->id_categoria = $_POST['Categoria'];

        $model->save();

        header("Location: /produto");
    }

    public static function delete()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();

         if(isset($_GET['id'])) 
        $model->delete( (int) $_GET['id']);

        header("Location: /produto");
    }
}
?>