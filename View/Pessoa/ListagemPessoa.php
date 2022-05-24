<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pessoas</title>
</head>
<body>
    

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Data Nascimento</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
    </tr>
        <?php foreach($model->rows as $item): ?>
<tr>
 <td><?= $item->id ?></td>
 <td><?= $item->Nome ?></td>
 <td><?= $item->CPF ?></td>
 <td><?= $item->Data_Nascimento ?></td>
 <td><?= $item->email ?></td>
 <td><?= $item->telefone ?></td>
 <td><?= $item->Endereco ?></td>
</tr>
    <?php endforeach ?>
</table>
</body>
</html>