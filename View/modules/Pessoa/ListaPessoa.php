<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pessoas</title>
</head>
<body>

    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>cpf</th>
            <th>Data de nascimento</th>
            <th>Ações</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            
            <td><?= $item->id?></td>

            <td>
                <a href="/pessoa/form?id=<?= $item->id?>"> <?= $item->nome?> </a>
            </td>

            <td><?= $item->cpf?></td>
            <td><?= $item->data_nascimento?></td>

            <td>
                <a href="/pessoa/delete?id=<?= $item->id?>"> Excluir </a>
            </td>
        </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum Registro encontrado.</td>
            </tr>

        <?php endif  ?>

    </table>
    <br><br>
    <a href="/pessoa/form"><button>Cadastrar</button></a>

    
</body>
</html>