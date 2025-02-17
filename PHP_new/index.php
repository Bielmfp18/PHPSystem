<?php
require 'conecta.php'; //Para chamar a página com os dados do login.


$sql = "SELECT * FROM usuarios";
//Utiliza-se a variável $cmd para que na cosulta do foreach o código reconheça que o valor recebido na variável é um objeto do tipo bool (Verdadeiro ou falso).
$cmd = $pdo->prepare($sql);
$cmd->execute();



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cadastro de Pessoas</title>
	<link rel="stylesheet" href="style.css">

</head>

<body>
	<section id="esquerda">
		<form action="insert.php" method = "POST">
			<h2>Cadastrar Pessoas</h2>
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome">
			<label for="telefone">Telefone</label>
			<input type="text" name="telefone" id="telefone">
			<label for="email">Email</label>
			<input type="text" name="email" id="email">
			<input type="submit" value="Cadastrar">

		</form>

	</section>
	<section id="direita">
		<table>
			<thead>
				<tr id="titulo">

					<td>Nome</td>
					<td>Telefone</td>
					<td colspan="2">Email</td>
				</tr>
			</thead>
			<tbody>
				<?php $usuarios = $cmd->fetchALL(PDO::FETCH_DEFAULT);
				foreach ($usuarios as $usuario) { ?>
					<td><?= $usuario['nome'] ?></td>
					<td><?= $usuario['telefone'] ?></td>
					<td><?= $usuario['email'] ?></td>
					<td><a href="update_form.php?id=<?= $usuario['id'] ?>">Editar</a> <a href="delete.php?id=<?= $usuario['id'] ?>" onclick="return confirm('Tem certeza que deseja deletar este usuário?')">Deletar</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

	</section>
</body>

</html>




<!-- <?php
		//O fetchALL(PDO::FETCH_DEFAULT) serve para chamar mais de uma linha do Banco de Dados para o registro.
		$usuarios = $cmd->fetchALL(PDO::FETCH_DEFAULT);
		foreach ($usuarios as $usuario) { ?>
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
</html> -->