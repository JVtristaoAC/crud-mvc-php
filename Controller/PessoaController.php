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
        $model = $model->getByid((int) $_GET['id']);
        var_dump($model);
        include 'View/Pessoa/frmPessoa.php';
    }

    public static function save()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->nome = $_POST['Nome'];
        $model->cpf = $_POST['CPF'];
        $model->dataNascimento = $_POST['Nascimento'];
        $model->email = $_POST['Email'];
        $model->telefone = $_POST['Telefone'];
        $model->endereco = $_POST['Endereco'];


        $model->save();

        header("Location: /pessoa");
    }
}
?>