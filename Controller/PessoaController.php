<?php

 class PessoaController
{
    public static function index()
    {
        include 'Model/PessoaModel.php';
        $model = new PessoaModel();
        $model->getAllRows();


        include 'View/Pessoa/ListagemPessoa.php';
    }

    public static function form()
    {
        include 'Model/PessoaModel.php';
        $model = new PessoaModel();
        
        if(isset($_GET['id'])) 
        $model = $model->getById( (int) $_GET['id']);
        
        include 'View/Pessoa/frmPessoa.php';
    }

    public static function save()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->id = $_POST['id'];
        $model->nome = $_POST['Nome'];
        $model->cpf = $_POST['CPF'];
        $model->dataNascimento = $_POST['Nascimento'];
        $model->email = $_POST['Email'];
        $model->telefone = $_POST['Telefone'];
        $model->endereco = $_POST['Endereco'];


        $model->save();

        header("Location: /pessoa");
    }

    public static function delete()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

         if(isset($_GET['id'])) 
        $model->delete( (int) $_GET['id']);

        header("Location: /pessoa");
    }
}
?>