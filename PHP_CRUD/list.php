<?php 
 require 'config.php';//Para chamar a página com os dados do login.

 $sql = "SELECT * FROM usuarios";
$cmd = $pdo->prepare($sql);
$cmd->execute();




?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        
            <?php 
            $usuarios = $cmd->fetchALL(PDO::FETCH_DEFAULT);
            foreach ($usuarios as $usuario){ ?>
            <tr>
                <td><?= $usuario['id'] ?></td>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['email'] ?></td>
                <td><?= $usuario['cpf'] ?></td>
                <td><?= $usuario['data_nascimento'] ?></td>
                <td>
                    <a href="update_form.php?id=<?= $usuario['id'] ?>">Editar</a>
                    <a href="delete.php?id=<?= $usuario['id'] ?>" onclick="return confirm('Tem certeza que deseja deletar este usuário?')">Deletar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>