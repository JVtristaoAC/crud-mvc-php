<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produtos</title>
</head>
<body>
    

<table>
    <tr>
        <th>Id</th>
        <th>Produto</th>
        <th>Estoque</th>
        <th>Preço</th>
        <th>Categoria</th>
    </tr>
        <?php foreach($model->rows as $item): ?>
<tr>
 <td><?= $item->id ?></td>
 <td><?= $item->Produto ?></td>
 <td><?= $item->Estoque ?></td>
 <td><?= $item->Preco ?></td>
 <td><?= $item->ID_categoria ?></td>
</tr>
    <?php endforeach ?>
</table>
</body>
</html>